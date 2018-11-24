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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
    'ACP_VIGLINK_SETTINGS'			=> 'VigLink 设置',
    'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink 是一个第三方服务，可以在不影响用户体验的前提下将论坛中用户发表的链接转化为收益。当有人点击这些链接去访问一些页面并购买商品时，商店将付给 VigLink 一部分佣金，当中将有一部分被捐赠给 phpBB 项目。为了维护开源项目的财务安全和正常发展，请开启 VigLink 支持 phpBB 项目。',
    'ACP_VIGLINK_SETTINGS_CHANGE'	=> '您可以在任何时候在“<a href="%1$s">VigLink 设置</a>”面板中修改配置.',
    'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> '点击下面的按钮提交选项后，您将不会再跳转到这个页面。',
    'ACP_VIGLINK_ENABLE'			=> '启用 VigLink',
    'ACP_VIGLINK_ENABLE_EXPLAIN'	=> '开启使用 VigLink 服务。',
    'ACP_VIGLINK_EARNINGS'			=> '获取您的佣金(可选)',
    'ACP_VIGLINK_EARNINGS_EXPLAIN'	=> '注册 VigLink Convert 帐号后，您可以获取自己的佣金。',
    'ACP_VIGLINK_DISABLED_PHPBB'	=> 'VigLink 服务已经被 phpBB 禁用。',
    'ACP_VIGLINK_CLAIM'				=> '获取您的佣金',
    'ACP_VIGLINK_CLAIM_EXPLAIN'		=> '您可以从 VigLink 的推广链接中获取您的论坛的那部分收益而不捐赠给 phpBB 项目. 要管理自己的账户设置，请点击“Convert account”注册一个“VigLink Convert”帐号。',
    'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Convert 帐号',
    'ACP_VIGLINK_NO_CONVERT_LINK'	=> '无法读取 VigLink convert 帐号。',
));
