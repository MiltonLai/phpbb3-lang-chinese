<?php
/**
 *
 * This file is part of the phpBB Chinese language package.
 *
 * @author Milton Lai
 * @copyright (c) phpBB China <https://www.phpbbchina.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_STYLES_EXPLAIN'	=> '这里您可以管理论坛上可用的风格. 风格包含模板、主题和图片组. 您可以更改存在的界面, 删除、冻结、激活、创建或者导入新的风格. 您也可以对风格进行预览. 当前的默认界面使用星号 (*) 标记. 这里还列出了使用各种界面的用户数, 此数不考虑用户界面被覆盖的情况.',

    'CANNOT_BE_INSTALLED'			=> '无法安装',
    'CONFIRM_UNINSTALL_STYLES'		=> '您确定要卸载选中的风格吗？',
    'COPYRIGHT'						=> '版权',

    'DEACTIVATE_DEFAULT'		=> '您不能停用默认风格',
    'DELETE_FROM_FS'			=> '从文件系统中删除',
    'DELETE_STYLE_FILES_FAILED'	=> '删除风格"%s"文件时发生错误。',
    'DELETE_STYLE_FILES_SUCCESS'	=> '风格"%s"的文件已经删除。',
    'DETAILS'					=> '明细',

    'INHERITING_FROM'			=> '继承自',
    'INSTALL_STYLE'				=> '安装风格',
    'INSTALL_STYLES'			=> '安装风格',
    'INSTALL_STYLES_EXPLAIN'	=> '这里您可以安装新风格。<br>如果您在下面的列表中无法找到您要的风格，请检查此风格是否已经安装。如果未安装，请检查是否已经正确上传。',
    'INVALID_STYLE_ID'			=> '无效的风格 ID.',

    'NO_MATCHING_STYLES_FOUND'	=> '没有符合查询条件的风格',
    'NO_UNINSTALLED_STYLE'		=> '没有检测到未安装的风格。',

    'PURGED_CACHE'				=> '缓存已清除',

    'REQUIRES_STYLE'			=> '这个风格需要先安装风格 "%s"。',

    'STYLE_ACTIVATE'			=> '启用',
    'STYLE_ACTIVE'				=> '活动',
    'STYLE_DEACTIVATE'			=> '停用',
    'STYLE_DEFAULT'				=> '设为默认风格',
    'STYLE_DEFAULT_CHANGE_INACTIVE'	=> '您必须先启用它，然后才能设为默认风格。',
    'STYLE_ERR_INVALID_PARENT'	=> '无效的父风格。',
    'STYLE_ERR_NAME_EXIST'		=> '使用同样名称的风格已经存在。',
    'STYLE_ERR_STYLE_NAME'		=> '您必须给这个风格设置一个名称。',
    'STYLE_INSTALLED'			=> '风格 "%s" 已经安装。',
    'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> '回到已安装风格的列表',
    'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> '安装更多风格',
    'STYLE_NAME'				=> '风格名称',
    'STYLE_NAME_RESERVED'		=> '无法安装风格 "%s"，因为名称被限制了。',
    'STYLE_NOT_INSTALLED'		=> '风格 "%s" 未被安装。',
    'STYLE_PATH'				=> '风格路径',
    'STYLE_UNINSTALL'			=> '卸载',
    'STYLE_UNINSTALL_DEPENDENT'	=> '不能卸载风格 "%s"，因为它有一个或多个子风格。',
    'STYLE_UNINSTALLED'			=> '风格 "%s" 已被成功卸载',
    'STYLE_PHPBB_VERSION'		=> 'phpBB 版本',
    'STYLE_USED_BY'				=> '被用于(包含机器人)',
    'STYLE_VERSION'				=> '风格版本',

    'UNINSTALL_DEFAULT'		=> '您不能卸载默认风格',

    'BROWSE_STYLES_DATABASE'	=> '浏览风格数据库',
));
