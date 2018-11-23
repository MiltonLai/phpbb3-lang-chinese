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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> '这里您可以管理内容索引. 因为一般只使用一个后台, 您可以删除所有不用的索引. 在改变搜索设置(例如最小/最大字符串长度)后, 建议重新生成索引以体现修改.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> '这里您可以设置如何使用搜索和检索帖子. 您可以设置选项限制搜索动作的处理器负载. 一部分设定和和搜索引擎的设定是一样的.',

	'COMMON_WORD_THRESHOLD'					=> '词频阈值',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> '在所有的帖子中都频繁出现的单词将被识别为高频词. 高频词在搜索中将被忽略. 设置0则取消这项功能. 只有当帖子数大于100时这个设置才能生效. 调整过词频阈值后需要重新建立索引',
	'CONFIRM_SEARCH_BACKEND'				=> '您确认更换搜索后端吗? 更换后您需要重新创建索引. 如果您不打算再切换回旧的后端, 您可以删除原先的索引以释放空间.',
	'CONTINUE_DELETING_INDEX'				=> '继续前次的索引删除',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> '存在一个已经开始的索引删除. 要访问索引页面您必须先完成它.',
	'CONTINUE_INDEXING'						=> '继续前次的索引生成',
	'CONTINUE_INDEXING_EXPLAIN'				=> '存在一个已经开始的索引生成. 要访问索引页面您必须先完成它.',
	'CREATE_INDEX'							=> '创建索引',

	'DELETE_INDEX'							=> '删除索引',
	'DELETING_INDEX_IN_PROGRESS'			=> '删除索引进行中',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> '搜索后端正在清除索引, 这需要几分钟的时间.',

    'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'MySQL全文检索后端只能在MySQL4或更高的版本中使用。',
    'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'MySQL全文检索只能在MyISAM或InnoDB格式数据表中使用。对于InnoDB数据表，需要MySQL 5.6.8或以上版本才能支持。',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> '索引帖子总数',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'   => '至少需要达到这个长度的词才会被检索. 您必须更改mysql的设定才能修改此值.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'   => '不超过这个长度的词才会被检索. 您必须更改mysql的设定才能修改此值.',

    'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'PostgreSQL 全文检索只能与 PostgreSQL 配合使用。',
    'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> '已建立索引的帖子总数',
    'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'PostgreSQL版本',
    'FULLTEXT_POSTGRES_TS_NAME'				=> '文字搜索配置资料：',
    'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> '关键词最小长度',
    'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> '关键词最大长度',
    'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> '此搜索功能需要 PostgreSQL 版本 8.3 或更高。',
    'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> '用于设置解析器和词库的文本搜索配置资料。',
    'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> '至少需要达到这个字符长度的词才会被包含在数据库查询中。',
    'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> '长度最多为这个字符长度的词才会被包含在数据库查询中。',

    'FULLTEXT_SPHINX_CONFIGURE'				=> '配置以下信息来生成 sphinx 配置文件',
    'FULLTEXT_SPHINX_DATA_PATH'				=> '数据目录的路径',
    'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> '用于存储索引和日志文件的目录，以斜杆结尾。您应当在web可访问的目录之外创建此目录。',
    'FULLTEXT_SPHINX_DELTA_POSTS'			=> '在经常更新的delta索引中保留的帖子数量',
    'FULLTEXT_SPHINX_HOST'					=> 'Sphinx服务主机名',
    'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'sphinx后端搜索守护进程(searchd)运行的主机。留空则默认使用 localhost',
    'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> '索引内存使用限制',
    'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> '这个数字应当比您的机器可用的内存小。如果您经常遇到服务器卡顿，有可能是检索消耗了太多资源，您可以减少给索引使用的内存数量。',
    'FULLTEXT_SPHINX_MAIN_POSTS'			=> '主索引中的帖子数量',
    'FULLTEXT_SPHINX_PORT'					=> 'Sphinx服务端口',
    'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'sphinx后端搜索守护进程(searchd)在侦听的端口。留空则使用默认的Sphinx API 端口 9312',
    'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'sphinx 搜索仅支持 MySQL 和 PostgreSQL.',
    'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sphinx 配置文件',
    'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'sphinx生成的配置文件内容。这些内容需要粘贴到sphinx服务端的配置文件 sphinx.conf，使用您的数据库连接信息代替里面的 [dbuser] 和 [dbpassword] 参数。',
    'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'sphinx 数据目录路径未设置。请设置并提交生成配置文件。',

	'GENERAL_SEARCH_SETTINGS'				=> '综合搜索设定',
	'GO_TO_SEARCH_INDEX'					=> '前往索引页面',

	'INDEX_STATS'							=> '索引统计',
	'INDEXING_IN_PROGRESS'					=> '索引进行中',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> '搜索后端正在检索论坛的所有帖子. 取决于论坛数据量的大小, 这可能需要几分钟的时间.',

	'LIMIT_SEARCH_LOAD'						=> '搜索页面系统负载限制',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> '如果一分钟内系统负载超过这个值, 搜索页面将不可用, 1.0 约等于100% 的处理器负载. 这个功能只在基于UNIX/Linux系统的服务器上有效.',

	'MAX_SEARCH_CHARS'						=> '索引的最大字符长度',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> '大于这个长度的短语将不会被检索.',
	'MAX_NUM_SEARCH_KEYWORDS'            => '搜索关键词的数目上限',
    'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'      => '用于限制用户用于搜索的关键词的个数. 填写0则不作限制.',
	'MIN_SEARCH_CHARS'						=> '索引的最小字符长度',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> '小于这个长度的短语将不会被检索.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> '最小用户名长度',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> '用户在搜索作者姓名时必须输入的字符串长度. 如果作者用户名长度小于这个数字, 您仍然可以输入完整用户名搜索用户的帖子.',

	'PROGRESS_BAR'							=> '进度条',

	'SEARCH_GUEST_INTERVAL'					=> '游客搜索间隔',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> '在多次搜索中游客必须等待的间隔时间(秒).',
    'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
        2	=> '所有id不高于 %2$d 的帖子都已经建立索引，这一操作中处理了 %1$d 个帖子。<br>',
    ),
    'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
        2	=> '当前速度接近 %1$.1f 个帖子每秒.<br />索引正在进行中…',
    ),
    'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
        2	=> '所有id不高于 %2$d 的帖子都已经从索引中删除，这一操作中处理了 %1$d 个帖子。<br />',
    ),
    'SEARCH_INDEX_DELETE_REDIRECT_RATE'		=> array(
        2	=> '删除速度接近 %1$.1f 个帖子每秒。<br />删除正在进行中…',
    ),
	'SEARCH_INDEX_CREATED'					=> '已经对数据库中的所有帖子建立了索引.',
	'SEARCH_INDEX_REMOVED'					=> '成功清除了这个后端的索引数据.',
	'SEARCH_INTERVAL'						=> '用户搜索间隔',
	'SEARCH_INTERVAL_EXPLAIN'				=> '用户搜索的最短间隔时间(秒).',
	'SEARCH_STORE_RESULTS'					=> '搜索结果缓存时间',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> '缓存的结果在这个时间(秒)后将失效. 设置为0则禁用缓存.',
	'SEARCH_TYPE'							=> '搜索后端',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB允许您选择用于全文检索的后端类型. 默认后端是phpBB自带的全文检索.',
	'SWITCHED_SEARCH_BACKEND'				=> '您已经更换了检索后端. 要使用新的后端, 您必须确认新的后端包含建好的索引.',

	'TOTAL_WORDS'							=> '已检索关键词总数',
	'TOTAL_MATCHES'							=> '与帖子索引关联的关键词总数',

	'YES_SEARCH'							=> '启用检索功能',
	'YES_SEARCH_EXPLAIN'					=> '允许用户使用搜索功能, 包括用户搜索.',
	'YES_SEARCH_UPDATE'						=> '启用全文更新',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> '当帖子发表时更新全文索引, 如果禁用检索这个功能将停用.',
));
