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
    'ACL_U_CHGEMAIL'	=> '可以更改Email地址',
    'ACL_U_CHGAVATAR'	=> '可以更改头像',
    'ACL_U_CHGGRP'		=> '可以更改默认群组',
    'ACL_U_CHGPROFILEINFO'	=> '可以修改自定义资料',

    'ACL_U_ATTACH'		=> '可以发表附件',
    'ACL_U_DOWNLOAD'	=> '可以下载附件',
    'ACL_U_SAVEDRAFTS'	=> '可以保存草稿',
    'ACL_U_CHGCENSORS'	=> '可以禁用敏感词过滤',
    'ACL_U_SIG'			=> '可以使用签名档',

    'ACL_U_SENDPM'		=> '可以发送站内消息',
    'ACL_U_MASSPM'		=> '可以群发消息给用户',
    'ACL_U_MASSPM_GROUP'=> '可以群发消息给群组',
    'ACL_U_READPM'		=> '可以阅读站内消息',
    'ACL_U_PM_EDIT'		=> '可以编辑自己的站内消息',
    'ACL_U_PM_DELETE'	=> '可以删除自己的站内消息',
    'ACL_U_PM_FORWARD'	=> '可以转发站内消息',
    'ACL_U_PM_EMAILPM'	=> '可以Email站内消息',
    'ACL_U_PM_PRINTPM'	=> '可以打印站内消息',
    'ACL_U_PM_ATTACH'	=> '可以在消息中添加附件',
    'ACL_U_PM_DOWNLOAD'	=> '可以在消息中下载附件',
    'ACL_U_PM_BBCODE'	=> '可以在消息中使用BBCode',
    'ACL_U_PM_SMILIES'	=> '可以在消息中使用表情图标',
    'ACL_U_PM_IMG'		=> '可以在消息中使用 [img] 标签',
    'ACL_U_PM_FLASH'	=> '可以在消息中使用 [flash] 标签',

    'ACL_U_SENDEMAIL'	=> '可以发送Email',
    'ACL_U_SENDIM'		=> '可以发送即时消息',
    'ACL_U_IGNOREFLOOD'	=> '可以不受灌水间隔限制',
    'ACL_U_HIDEONLINE'	=> '可以隐藏在线状态',
    'ACL_U_VIEWONLINE'	=> '可以查看隐藏的在线用户',
    'ACL_U_SEARCH'		=> '可以搜索论坛',
));

// Forum Permissions
$lang = array_merge($lang, array(
    'ACL_F_LIST'		=> '可以看见版面',
    'ACL_F_LIST_TOPICS' => '可以看见主题',
    'ACL_F_READ'		=> '可以浏览版面',
    'ACL_F_SEARCH'		=> '可以搜索版面',
    'ACL_F_SUBSCRIBE'	=> '可以订阅版面',
    'ACL_F_PRINT'		=> '可以打印主题',
    'ACL_F_EMAIL'		=> '可以Email主题',
    'ACL_F_BUMP'		=> '可以顶主题',
    'ACL_F_USER_LOCK'	=> '可以锁定自己的主题',
    'ACL_F_DOWNLOAD'	=> '可以下载文件',
    'ACL_F_REPORT'		=> '可以举报帖子',

    'ACL_F_POST'		=> '可以发表新主题',
    'ACL_F_STICKY'		=> '可以发布置顶帖子',
    'ACL_F_ANNOUNCE'	=> '可以发布公告',
    'ACL_F_ANNOUNCE_GLOBAL'	=> '可以发布全站公告',
    'ACL_F_REPLY'		=> '可以回复主题',
    'ACL_F_EDIT'		=> '可以编辑自己的帖子',
    'ACL_F_DELETE'		=> '可以删除自己的帖子',
    'ACL_F_SOFTDELETE'	=> '可以软删除自己的帖子<br /><em>有帖子审核权限的版主可以恢复软删除的帖子。</em>',
    'ACL_F_IGNOREFLOOD' => '可以不受灌水间隔限制',
    'ACL_F_POSTCOUNT'	=> '增加帖子数<br /><em>请注意这个设定只对新帖子有效。</em>',
    'ACL_F_NOAPPROVE'	=> '可以不经审核发表主题',

    'ACL_F_ATTACH'		=> '可以发表附件',
    'ACL_F_ICONS'		=> '可以使用主题图标',
    'ACL_F_BBCODE'		=> '可以使用BBCode',
    'ACL_F_FLASH'		=> '可以使用[flash]标签',
    'ACL_F_IMG'			=> '可以使用[img]标签',
    'ACL_F_SIGS'		=> '可以使用签名档',
    'ACL_F_SMILIES'		=> '可以使用表情图标',

    'ACL_F_POLL'		=> '可以创建投票',
    'ACL_F_VOTE'		=> '可以参与投票',
    'ACL_F_VOTECHG'		=> '可以更改存在的投票',
));

// Moderator Permissions
$lang = array_merge($lang, array(
    'ACL_M_EDIT'		=> '可以编辑帖子',
    'ACL_M_DELETE'		=> '可以删除帖子',
    'ACL_M_SOFTDELETE'	=> '可以软删除帖子<br /><em>有帖子审核权限的版主，可以恢复软删除的帖子。</em>',
    'ACL_M_APPROVE'		=> '可以审核和恢复帖子',
    'ACL_M_REPORT'		=> '可以关闭和删除举报',
    'ACL_M_CHGPOSTER'	=> '可以更改帖子作者',

    'ACL_M_MOVE'	=> '可以移动主题',
    'ACL_M_LOCK'	=> '可以锁定主题',
    'ACL_M_SPLIT'	=> '可以分割主题',
    'ACL_M_MERGE'	=> '可以合并主题',

    'ACL_M_INFO'		=> '可以查看帖子明细',
    'ACL_M_WARN'		=> '可以发送警告<br /><em>T这是全局设置，与版面无关。</em>', // This moderator setting is only global (and not local)
    'ACL_M_PM_REPORT'	=> '可以关闭和删除站内消息举报<br /><em>这是全局设置，与版面无关。</em>', // This moderator setting is only global (and not local)
    'ACL_M_BAN'			=> 'Can manage bans<br /><em>这是全局设置，与版面无关。</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
    'ACL_A_BOARD'		=> '可以修改论坛设置/检查更新',
    'ACL_A_SERVER'		=> '可以修改服务器/通讯设置',
    'ACL_A_JABBER'		=> '可以修改Jabber设置',
    'ACL_A_PHPINFO'		=> '可以查看php设置',

    'ACL_A_FORUM'		=> '可以管理版面',
    'ACL_A_FORUMADD'	=> '可以添加新版面',
    'ACL_A_FORUMDEL'	=> '可以删除版面',
    'ACL_A_PRUNE'		=> '可以清理版面',

    'ACL_A_ICONS'		=> '可以修改主题图标和表情图标',
    'ACL_A_WORDS'		=> '可以修改敏感词设定',
    'ACL_A_BBCODE'		=> '可以设定BBCode标签',
    'ACL_A_ATTACH'		=> '可以修改附件相关设置',

    'ACL_A_USER'		=> '可以管理用户<br><em>这包括在在线用户列表中查看用户浏览器版本。</em>',
    'ACL_A_USERDEL'		=> '可以删除/清理用户',
    'ACL_A_GROUP'		=> '可以管理群组',
    'ACL_A_GROUPADD'	=> '可以添加新群组',
    'ACL_A_GROUPDEL'	=> '可以删除群组',
    'ACL_A_RANKS'		=> '可以管理等级',
    'ACL_A_PROFILE'		=> '可以管理自定义用户资料',
    'ACL_A_NAMES'		=> '可以管理禁用用户名',
    'ACL_A_BAN'			=> '可以管理封禁',

    'ACL_A_VIEWAUTH'	=> '可以查看权限掩码',
    'ACL_A_AUTHGROUPS'	=> '可以修改单独的组权限',
    'ACL_A_AUTHUSERS'	=> '可以修改单独的用户权限',
    'ACL_A_FAUTH'		=> '可以修改版面权限类',
    'ACL_A_MAUTH'		=> '可以修改版主权限类',
    'ACL_A_AAUTH'		=> '可以修改管理员权限类',
    'ACL_A_UAUTH'		=> '可以修改用户权限类',
    'ACL_A_ROLES'		=> '可以管理角色',
    'ACL_A_SWITCHPERM'	=> '可以使用其他权限',

    'ACL_A_STYLES'		=> '可以管理风格',
    'ACL_A_EXTENSIONS'	=> '可以管理扩展',
    'ACL_A_VIEWLOGS'	=> '可以查看日志',
    'ACL_A_CLEARLOGS'	=> '可以清空日志',
    'ACL_A_MODULES'		=> '可以管理模块',
    'ACL_A_LANGUAGE'	=> '可以管理语言包',
    'ACL_A_EMAIL'		=> '可以群发Email',
    'ACL_A_BOTS'		=> '可以管理机器人用户',
    'ACL_A_REASONS'		=> '可以管理举报/否决原因',
    'ACL_A_BACKUP'		=> '可以备份/恢复数据库',
    'ACL_A_SEARCH'		=> '可以管理搜索后端和设定',
));
