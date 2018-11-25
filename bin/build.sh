#!/bin/bash

#
# in phpbb/ folder, switch to release-3.x.x tag before run this script
# e.g. git checkout -b release-3.2.4
#
TAG=release-3.2.4
BASE_DIR=$(cd $(dirname $0); cd ../; pwd)
TARGET=${BASE_DIR}/phpbb/phpBB
echo 'BASE_DIR: '${BASE_DIR}

#
# git clean
echo '|| Git Init:'
cd ${BASE_DIR}/phpbb
# Do fetch before checkout tags, to avoid ambiguous
# --all will fetch all the remotes, --tags will fetch all tags as well
git fetch --all --tags --prune
# check out specific tag
# git checkout tags/${TAG} -b ${TAG}
git checkout ${TAG}
# Restore the removed files
git reset --hard
# Remove the local changes & untracked files&folders
git clean -f -x -d
echo '   Git Init: Done'


#
# check folder existence
if [ ! -d ${TARGET} ]; then
    echo 'Error: folder ${BASE_DIR}/phpbb/phpBB not found.'
    exit 1
fi
if [ ! -d ${BASE_DIR}/ext/phpbb/viglink/language/zh_cmn_hans/ ]; then
    echo 'Error: folder ${BASE_DIR}/ext/phpbb/viglink/language/zh_cmn_hans/ not found.'
    exit 1
fi
if [ ! -d ${BASE_DIR}/language/zh_cmn_hans/ ]; then
    echo 'Error: folder ${BASE_DIR}/language/zh_cmn_hans/ not found.'
    exit 1
fi
if [ ! -d ${BASE_DIR}/styles/prosilver/theme/ ]; then
    echo 'Error: folder ${BASE_DIR}/styles/prosilver/theme/ not found.'
    exit 1
fi


#
# generate Chinese Traditional language package
echo '|| Convert:'
rm -rf ${BASE_DIR}/ext/phpbb/viglink/language/zh_cmn_hant/
rm -rf ${BASE_DIR}/language/zh_cmn_hant/

${BASE_DIR}/bin/convert.sh ${BASE_DIR}/utils/opencc_dictionary/s2twp.json \
    ${BASE_DIR}/ext/phpbb/viglink/language/zh_cmn_hans/ \
    ${BASE_DIR}/ext/phpbb/viglink/language/zh_cmn_hant/

${BASE_DIR}/bin/convert.sh ${BASE_DIR}/utils/opencc_dictionary/s2twp.json \
    ${BASE_DIR}/language/zh_cmn_hans/ \
    ${BASE_DIR}/language/zh_cmn_hant/
echo '   Convert: Done'


#
# copy the language files to phpbb
echo '|| Integrate:'
rm -rf ${TARGET}/language/zh_cmn_hans/
rm -rf ${TARGET}/language/zh_cmn_hant/
cp -r ${BASE_DIR}/language/zh_cmn_hans/ ${TARGET}/language/
cp -r ${BASE_DIR}/language/zh_cmn_hant/ ${TARGET}/language/
echo '  ...'
# These will be added laterly because no viglink in ext folder
#rm -rf ${TARGET}/ext/phpbb/viglink/language/zh_cmn_hans/
#cp -r ${BASE_DIR}/ext/phpbb/viglink/language/zh_cmn_hans/ ${TARGET}/ext/phpbb/viglink/language/
#rm -rf ${TARGET}/ext/phpbb/viglink/language/zh_cmn_hant/
#cp -r ${BASE_DIR}/ext/phpbb/viglink/language/zh_cmn_hant/ ${TARGET}/ext/phpbb/viglink/language/
#echo '...'
rm -rf ${TARGET}/styles/prosilver/theme/zh_cmn_hans/
rm -rf ${TARGET}/styles/prosilver/theme/zh_cmn_hant/
cp -r ${BASE_DIR}/styles/prosilver/theme/zh_cmn_hans/ ${TARGET}/styles/prosilver/theme/
cp -r ${BASE_DIR}/styles/prosilver/theme/zh_cmn_hant/ ${TARGET}/styles/prosilver/theme/
echo '  ...'
echo '   Integrate: Done'


#
# composer install 3rd party libraries
echo '|| Composer install 3rd party libs'
echo '  Clean vender folder'
rm -rf $BASE_DIR/phpbb/phpBB/vendor
rm -rf $BASE_DIR/phpbb/phpBB/vendor-ext
echo '  composer install'
cd $BASE_DIR/phpbb/phpBB
php ../composer.phar install --no-dev --prefer-dist --optimize-autoloader
echo '   Composer: Done'


#
# Clean up: tests,examples,builds,...
echo '|| Clean '
rm -rf ${TARGET}/develop
rm -rf ${TARGET}/config/development
rm -rf ${TARGET}/config/test
rm -rf ${TARGET}/install/data

cd ${TARGET}/vendor/bantu/ini-get-wrapper && rm -rf tests *.dist *.md
cd ${TARGET}/vendor/google/recaptcha && rm -rf examples tests *.dist *.md
cd ${TARGET}/vendor/guzzlehttp/guzzle && rm -rf build docs examples tests *.dist *.md *.rst
cd ${TARGET}/vendor/guzzlehttp/ringphp && rm -rf build docs examples tests Makefile *.dist *.md *.rst
cd ${TARGET}/vendor/guzzlehttp/streams && rm -rf build docs examples tests Makefile *.dist *.md *.rst
# cd ${TARGET}/vendor/ircmaxell/password-compat && rm -rf examples tests *.dist *.md
cd ${TARGET}/vendor/lusitanian/oauth && rm -rf examples tests *.dist *.md
# cd ${TARGET}/vendor/marc1706/fast-image-size && rm -rf examples tests *.dist *.md
cd ${TARGET}/vendor/ocramius/proxy-manager && rm -rf docs examples html-docs tests *.dist *.md *.html *.png *.svg
cd ${TARGET}/vendor/paragonie/random_compat && rm -rf dist other *.sh *.dist *.md
cd ${TARGET}/vendor/patchwork/utf8 && rm -rf *.dist *.md
cd ${TARGET}/vendor/psr/log && rm -rf *.md Psr/Log/Test
cd ${TARGET}/vendor/react/promise && rm -rf tests *.dist *.md
cd ${TARGET}/vendor/twig/twig && rm -rf doc ext test CHANGELOG *.dist *.rst

for element in `ls ${TARGET}/vendor/symfony`
do
    dir_or_file=${TARGET}/vendor/symfony'/'$element
    if [ -d $dir_or_file ]
    then
        cd $dir_or_file && rm -rf Tests *.dist *.md
    fi
done

for element in `ls ${TARGET}/vendor/zendframework`
do
    dir_or_file=${TARGET}/vendor/zendframework'/'$element
    if [ -d $dir_or_file ]
    then
        cd $dir_or_file && rm -rf *.md
    fi
done
echo '   Clean: Done'


#
# Decorations
echo '|| Decorations'
# Create an empty config.php
touch ${TARGET}/config.php
# Adjust the font size of admin panel
sed -i '/font-size: x-small;/d' ${TARGET}/adm/style/admin.css
sed -i '/font-size: small;/d' ${TARGET}/adm/style/admin.css
sed -i 's/font-size: 62.5%;/font-size: 90%;/' ${TARGET}/adm/style/admin.css
echo '   Decorations: Done'


#
# Compress to bz2
echo '|| Package'
if [ ! -d ${BASE_DIR}/build ]; then
    mkdir -p ${BASE_DIR}/build
else
    rm -rf ${BASE_DIR}/build/*
fi
# Language package
tar cjf ${BASE_DIR}/build/phpbb_lang_zh_${TAG}.tar.bz2 -C ${BASE_DIR} \
    --exclude=ext/phpbb/viglink/language/en \
    --exclude=language/en \
    --exclude=styles/prosilver/theme/en \
    ext language styles
# Full package
tar cjf ${BASE_DIR}/build/phpbb_zh_${TAG}.tar.bz2 -C ${BASE_DIR}/phpbb phpBB
echo '   Package: Done'
