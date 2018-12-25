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
    'APPROVE'							=> '通过',
	'ATTACHMENT'						=> '附件',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> '附件功能已经停用',

	'BOOKMARK_ADDED'		=> '主题收藏完成。',
	'BOOKMARK_ERR'         => '主题收藏未完成, 请再试一次.',
	'BOOKMARK_REMOVED'		=> '主题取消收藏完成。',
	'BOOKMARK_TOPIC'		=> '收藏主题',
	'BOOKMARK_TOPIC_REMOVE'	=> '取消收藏',
	'BUMPED_BY'				=> '最后由 %1$s 于 %2$s 顶起',
	'BUMP_TOPIC'			=> '顶起主题',

	'CODE'					=> '代码',

	'DELETE_TOPIC'			=> '删除主题',
    'DELETED_INFORMATION'	=> '于 %2$s 被 %1$s 删除',
    'DISAPPROVE'			=> '拒绝',
	'DOWNLOAD_NOTICE'		=> '您没有权限查看这个主题的附件。',

    'EDITED_TIMES_TOTAL'	=> array(
        1	=> '最后由 %2$s 编辑于 %3$s, 总共编辑了 %1$d 次.',
        2	=> '最后由 %2$s 编辑于 %3$s, 总共编辑了 %1$d 次.',
    ),
	'EMAIL_TOPIC'			=> 'Email发送主题',
	'ERROR_NO_ATTACHMENT'	=> '选择的附件已经不存在',

	'FILE_NOT_FOUND_404'	=> '文件 <strong>%s</strong> 不存在。',
	'FORK_TOPIC'			=> '复制主题',
	'FULL_EDITOR'			=> '完整编辑和预览',

	'LINKAGE_FORBIDDEN'		=> '您未被授权查看、下载或链接这个网站。',
	'LOGIN_NOTIFY_TOPIC'	=> '您有关于这个主题的通知，请登录查看。',
	'LOGIN_VIEWTOPIC'		=> '请注册并登录后查看这个主题。',

	'MAKE_ANNOUNCE'				=> '变更为 “公告”',
	'MAKE_GLOBAL'				=> '变更为 “全局公告”',
	'MAKE_NORMAL'				=> '变更为 “普通主题”',
	'MAKE_STICKY'				=> '变更为 “置顶”',
    'MAX_OPTIONS_SELECT'		=> array(
        1	=> '您可以选择 <strong>%d</strong> 个选项',
        2	=> '您最多可以选择 <strong>%d</strong> 个选项',
    ),
	'MISSING_INLINE_ATTACHMENT'	=> '附件 <strong>%s</strong> 已经无效',
	'MOVE_TOPIC'				=> '移动主题',

	'NO_ATTACHMENT_SELECTED'=> '您没有选择下载或查看的附件。',
	'NO_NEWER_TOPICS'		=> '这个版面没有更新的主题了',
	'NO_OLDER_TOPICS'		=> '这个版面没有更旧的主题了',
	'NO_UNREAD_POSTS'		=> '这个主题没有未读的新帖子。',
	'NO_VOTE_OPTION'		=> '您必须选择一个选项才能投票。',
	'NO_VOTES'				=> '没有投票',
    'NO_AUTH_PRINT_TOPIC'	=> '您没有权限打印主题。',

	'POLL_ENDED_AT'			=> '投票结束于 %s',
	'POLL_RUN_TILL'			=> '投票将结束于 %s',
	'POLL_VOTED_OPTION'		=> '您投了这个选项',
    'POST_DELETED_RESTORE'	=> '这个帖子已删除，可以恢复。',
	'PRINT_TOPIC'			=> '打印预览',

	'QUICK_MOD'				=> '快速管理工具',
	'QUICKREPLY'			=> '快速回复',
	'QUOTE'					=> '引用',

	'REPLY_TO_TOPIC'		=> '回复这个主题',
    'RESTORE'				=> '恢复',
    'RESTORE_TOPIC'			=> '恢复主题',
	'RETURN_POST'			=> '%s回到帖子%s',

	'SUBMIT_VOTE'			=> '提交投票',

    'TOPIC_TOOLS'			=> '主题工具',
	'TOTAL_VOTES'			=> '总计票数',

	'UNLOCK_TOPIC'			=> '主题解锁',

	'VIEW_INFO'				=> '帖子信息',
	'VIEW_NEXT_TOPIC'		=> '下一个主题',
	'VIEW_PREVIOUS_TOPIC'	=> '上一个主题',
	'VIEW_RESULTS'			=> '查看结果',
    'VIEW_TOPIC_POSTS'		=> array(
        1	=> '%d 篇帖子',
        2	=> '%d 篇帖子',
    ),
	'VIEW_UNREAD_POST'		=> '第一个未读帖子',
	'VOTE_SUBMITTED'		=> '您已投票',
	'VOTE_CONVERTED'		=> '转换的投票不能被修改.',

));

?>