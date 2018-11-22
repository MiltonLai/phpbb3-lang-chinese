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

/**
 *	EXTENSION-DEVELOPERS PLEASE NOTE
 *
 *	You are able to put your permission sets into your extension.
 *	The permissions logic should be added via the 'core.permissions' event.
 *	You can easily add new permission categories, types and permissions, by
 *	simply merging them into the respective arrays.
 *	The respective language strings should be added into a language file, that
 *	start with 'permissions_', so they are automatically loaded within the ACP.
 */

$lang = array_merge($lang, array(
    'ACL_CAT_ACTIONS'		=> '操作',
    'ACL_CAT_CONTENT'		=> '内容',
    'ACL_CAT_FORUMS'		=> '版面',
    'ACL_CAT_MISC'			=> '杂项',
    'ACL_CAT_PERMISSIONS'	=> '权限',
    'ACL_CAT_PM'			=> '消息',
    'ACL_CAT_POLLS'			=> '投票',
    'ACL_CAT_POST'			=> '帖子',
    'ACL_CAT_POST_ACTIONS'	=> '帖子操作',
    'ACL_CAT_POSTING'		=> '发帖',
    'ACL_CAT_PROFILE'		=> '资料',
    'ACL_CAT_SETTINGS'		=> '设置',
    'ACL_CAT_TOPIC_ACTIONS'	=> '主题操作',
    'ACL_CAT_USER_GROUP'	=> '用户&amp;组',
));

// User Permissions
$lang = array_merge($lang, array(
    'ACL_U_VIEWPROFILE'	=> '可以查看用户资料、成员列表及在线名单',
    'ACL_U_CHGNAME'		=> '可以更改用户名称',
    'ACL_U_CHGPASSWD'	=> '可以更改密码',
    'ACL_U_CHGEMAIL'	=> '可以更改email地址',
    'ACL_U_CHGAVATAR'	=> '可以更改头像',
    'ACL_U_CHGGRP'		=> '可以更改默认用户组',
    'ACL_U_CHGPROFILEINFO'	=> 'Can change profile field information',

    'ACL_U_ATTACH'		=> '可以发表附件',
    'ACL_U_DOWNLOAD'	=> '可以下载附件',
    'ACL_U_SAVEDRAFTS'	=> '可以保存草稿',
    'ACL_U_CHGCENSORS'	=> '可以禁用敏感词过滤',
    'ACL_U_SIG'			=> '可以使用签名档',

    'ACL_U_SENDPM'		=> '可以发送站内消息',
    'ACL_U_MASSPM'		=> '可以群发消息给用户',
    'ACL_U_MASSPM_GROUP'=> '可以群发消息给用户组',
    'ACL_U_READPM'		=> '可以阅读站内消息',
    'ACL_U_PM_EDIT'		=> '可以编辑自己的站内消息',
    'ACL_U_PM_DELETE'	=> '可以删除自己的站内消息',
    'ACL_U_PM_FORWARD'	=> '可以转发站内消息',
    'ACL_U_PM_EMAILPM'	=> '可以email站内消息',
    'ACL_U_PM_PRINTPM'	=> '可以打印站内消息',
    'ACL_U_PM_ATTACH'	=> '可以在消息中添加附件',
    'ACL_U_PM_DOWNLOAD'	=> '可以在消息中下载附件',
    'ACL_U_PM_BBCODE'	=> '可以在消息中使用BBCode',
    'ACL_U_PM_SMILIES'	=> '可以在消息中使用表情图标',
    'ACL_U_PM_IMG'		=> '可以在消息中使用 [img] 标签',
    'ACL_U_PM_FLASH'	=> '可以在消息中使用 [flash] 标签',

    'ACL_U_SENDEMAIL'	=> '可以发送email',
    'ACL_U_SENDIM'		=> '可以发送即时消息',
    'ACL_U_IGNOREFLOOD'	=> '可以不受灌水间隔限制',
    'ACL_U_HIDEONLINE'	=> '可以隐藏在线状态',
    'ACL_U_VIEWONLINE'	=> '可以查看隐藏的在线用户',
    'ACL_U_SEARCH'		=> '可以搜索论坛',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => '可以看见版面', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => '可以浏览版面', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => '可以发表新主题', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => '可以回复主题', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => '可以使用主题图标', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => '可以发布公告', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => '可以发布置顶帖子', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => '可以创建投票', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => '可以参与投票', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => '可以更改存在的投票', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => '可以发表附件', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => '可以下载文件', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => '可以使用签名档', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => '可以使用BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => '可以使用表情图标', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => '可以发表图片', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => '可以发表Flash', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => '可以编辑自己的帖子', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => '可以删除自己的帖子', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => '可以锁定自己的主题', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => '可以顶主题', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => '可以举报帖子', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => '可以订阅版面', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => '可以打印主题', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => '可以email主题', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => '可以搜索版面', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => '可以不受灌水间隔限制', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => '增加帖子数<br /><em>请注意这个设定只对新帖子有效.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => '可以不经审阅发表主题', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => '可以编辑帖子', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => '可以删除帖子', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => '可以审阅帖子', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => '可以关闭和删除举报', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => '可以更改帖子作者', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => '可以移动主题', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => '可以锁定主题', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => '可以分割主题', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => '可以合并主题', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => '可以查看主题细节', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => '可以签发警告<br /><em>这是全局设置，与版面无关。</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => '可以管理封禁<br /><em>这是全局设置，与版面无关。</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => '可以修改论坛设置/检查更新', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => '可以修改服务器/通讯设置', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => '可以修改Jabber设定', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => '可以查看php设定', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => '可以管理版面', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => '可以添加新版面', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => '可以删除版面', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => '可以裁减版面', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => '可以修改主题图标和表情图标', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => '可以修改敏感词设定', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => '可以设定BBCode标签', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => '可以修改附件相关设定', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => '可以管理用户<br /><em>这包括在在线用户列表中查看用户浏览器版本.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => '可以删除/修剪用户', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => '可以管理用户组', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => '可以添加新用户组', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => '可以删除用户组', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => '可以管理等级', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => '可以管理自定义用户资料', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => '可以管理禁用用户名', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => '可以管理封禁', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => '可以查看权限掩码', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => '可以修改单独的组权限', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => '可以修改单独的用户权限', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => '可以修改版面权限类', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => '可以修改版主权限类', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => '可以修改管理员权限类', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => '可以修改用户权限类', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => '可以管理角色', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => '可以使用其他权限', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => '可以管理风格', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => '可以查看日志', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => '可以清空日志', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => '可以管理模块', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => '可以管理语言包', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => '可以群发email', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => '可以管理机器人用户', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => '可以管理举报/否决原因', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => '可以备份/恢复数据库', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => '可以管理搜索后端和设定', 'cat' => 'misc'),
));

?>