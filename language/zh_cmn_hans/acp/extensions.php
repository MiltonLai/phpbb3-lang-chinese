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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'EXTENSION'					=> '扩展',
	'EXTENSIONS'				=> '扩展',
	'EXTENSIONS_ADMIN'			=> '扩展管理',
	'EXTENSIONS_EXPLAIN'		=> '扩展管理是 phpBB 论坛的一个内部工具，用于管理扩展的状态和查看扩展的信息。',
	'EXTENSION_INVALID_LIST'	=> '扩展 “%s” 不可用。<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> '选中的扩展在这个论坛不可用，请检查您的 phpBB 和 PHP 版本是否支持 (查看明细页).',
	'EXTENSION_DIR_INVALID'		=> '选中的扩展使用了无效的目录结构，无法开启。',
	'EXTENSION_NOT_ENABLEABLE'	=> '选中的扩展无法启用，请检查扩展的安装要求。',
	'EXTENSION_NOT_INSTALLED'	=> '扩展 %s 不可用。请检查是否正确安装。',

	'DETAILS'				=> '明细',

	'EXTENSIONS_DISABLED'	=> '禁用的扩展',
	'EXTENSIONS_ENABLED'	=> '启用的扩展',

	'EXTENSION_DELETE_DATA'	=> '删除数据',
	'EXTENSION_DISABLE'		=> '禁用',
	'EXTENSION_ENABLE'		=> '启用',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> '删除扩展数据将删除它的所有数据以及配置信息，但是保留扩展文件，将来可以再次启用。',
	'EXTENSION_DISABLE_EXPLAIN'		=> '禁用扩展将保留它的文件，数据和配置，但是和扩展相关的功能将不再可用。',
	'EXTENSION_ENABLE_EXPLAIN'		=> '启用扩展后将在论坛上可用。',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> '正在删除扩展数据。请不要关闭或刷新这个页面直到操作完成。',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> '正在禁用扩展。请不要关闭或刷新这个页面直到操作完成。',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> '正在启用扩展，请不要关闭或刷新这个页面直到操作完成。',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> '扩展数据已经成功删除',
	'EXTENSION_DISABLE_SUCCESS'		=> '扩展已经禁用',
	'EXTENSION_ENABLE_SUCCESS'		=> '扩展已经启用',

	'EXTENSION_NAME'			=> '扩展名称',
	'EXTENSION_ACTIONS'			=> '操作',
	'EXTENSION_OPTIONS'			=> '选项',
	'EXTENSION_INSTALL_HEADLINE'=> '安装扩展',
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
			<li>从phpBB的扩展库中下载扩展</li>
			<li>解压后上传至 <samp>ext/</samp> 目录</li>
			<li>在扩展管理中启用扩展</li>
		</ol>',
	'EXTENSION_UPDATE_HEADLINE'	=> '更新扩展',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>禁用扩展</li>
			<li>从目录中删除扩展文件</li>
			<li>上传新文件</li>
			<li>启用扩展</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> '从论坛中完全删除一个扩展',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>禁用扩展</li>
			<li>删除扩展数据</li>
			<li>从目录中删除扩展文件</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> '您确定要删除扩展 “%s” 相关的数据及其配置信息？<br /><br />这将删除它的所有数据和配置，不能回退！',
	'EXTENSION_DISABLE_CONFIRM'		=> '您确定要禁用扩展 “%s”？',
	'EXTENSION_ENABLE_CONFIRM'		=> '您确定要启用扩展 “%s”？',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> '您确定一定要使用非稳定版本？',

	'RETURN_TO_EXTENSION_LIST'	=> '返回扩展列表',

	'EXT_DETAILS'			=> '扩展明细',
	'DISPLAY_NAME'			=> '显示名称',
	'CLEAN_NAME'			=> '名称',
	'TYPE'					=> '类型',
	'DESCRIPTION'			=> '描述',
	'VERSION'				=> '版本',
	'HOMEPAGE'				=> '网站',
	'PATH'					=> '文件路径',
	'TIME'					=> '发布时间',
	'LICENSE'				=> '许可',

	'REQUIREMENTS'			=> '要求',
	'PHPBB_VERSION'			=> 'phpBB版本',
	'PHP_VERSION'			=> 'PHP版本',
	'AUTHOR_INFORMATION'	=> '作者信息',
	'AUTHOR_NAME'			=> '姓名',
	'AUTHOR_EMAIL'			=> 'Email',
	'AUTHOR_HOMEPAGE'		=> '网站',
	'AUTHOR_ROLE'			=> '角色',

	'NOT_UP_TO_DATE'		=> '%s 不是最新版本',
	'UP_TO_DATE'			=> '%s 是最新版本',
	'ANNOUNCEMENT_TOPIC'	=> '发行公告',
	'DOWNLOAD_LATEST'		=> '下载版本',
	'NO_VERSIONCHECK'		=> '未提供版本检查信息。',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> '重新检查所有版本',
	'FORCE_UNSTABLE'					=> '总是检查非稳定版',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> '版本检查设置',

	'BROWSE_EXTENSIONS_DATABASE'		=> '查看扩展库',

	'META_FIELD_NOT_SET'	=> '需要的元数据字段 %s 还未设置。',
	'META_FIELD_INVALID'	=> '元数据字段 %s 无效',
));
