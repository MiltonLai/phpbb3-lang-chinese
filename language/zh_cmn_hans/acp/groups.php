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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> '在这个面板您可以管理所有的群组。您可以删除、创建和编辑现有的群组。此外，您还可以选择版主，设定群组状态为开放、隐藏或关闭，以及设置群组的名称与描述。',
    'ADD_GROUP_CATEGORY'			=> '添加群组',
	'ADD_USERS'						=> '添加用户',
	'ADD_USERS_EXPLAIN'				=> '这里您可以添加新用户到群组. 您可以选择是否使用这个群组作为用户的默认群组. 并且您可以设置群组组长. 如果有多个用户请在每一行输入用户名.',

	'COPY_PERMISSIONS'				=> '复制权限自',
	'COPY_PERMISSIONS_EXPLAIN'		=> '一旦创建, 群组将拥有与您选择的群组同样的权限.',
	'CREATE_GROUP'					=> '创建新群组',

	'GROUPS_NO_MEMBERS'				=> '这个群组没有成员',
	'GROUPS_NO_MODS'				=> '没有设置组长',

	'GROUP_APPROVE'					=> '批准成员',
	'GROUP_APPROVED'				=> '已批准的成员',
	'GROUP_AVATAR'					=> '群组头像',
	'GROUP_AVATAR_EXPLAIN'			=> '这个图片将显示在群组的控制面板.',
    'GROUP_CATEGORY_NAME'			=> '组名',
	'GROUP_CLOSED'					=> '关闭',
	'GROUP_COLOR'					=> '群组颜色',
	'GROUP_COLOR_EXPLAIN'			=> '设置群组成员名字显示的颜色, 如果使用用户默认请留空.',
    'GROUP_CONFIRM_ADD_USERS'		=> array(
        1	=> '您确认添加用户 %2$s 为组成员吗？',
        2	=> '您确认添加用户 %2$s 为组成员吗？',
    ),
	'GROUP_CREATED'					=> '群组创建完成.',
	'GROUP_DEFAULT'					=> '设置为成员的默认群组',
	'GROUP_DEFS_UPDATED'			=> '设置为选中成员的默认群组.',
	'GROUP_DELETE'					=> '从群组中删除成员',
	'GROUP_DELETED'					=> '群组已经删除并且完成用户默认群组设置。',
	'GROUP_DEMOTE'					=> '组长降级',
	'GROUP_DESC'					=> '群组描述',
	'GROUP_DETAILS'					=> '群组细节',
	'GROUP_EDIT_EXPLAIN'			=> '这里您可以编辑存在的群组. 更改群组名称, 描述和类型 (开放, 关闭等). 您还可以设置一些群组范围的选项例如颜色, 等级. 更改将覆盖用户的当前设置. 请注意群组成员可以更改他们的头像, 除非您设置了相关的权限.',
	'GROUP_ERR_USERS_EXIST'			=> '指定的用户已经是这个群组的成员',
	'GROUP_FOUNDER_MANAGE'			=> '仅由创始人管理',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> '只允许创始人管理此群组。拥有组权限的用户与此群组的成员一样可以看到这个组。',
	'GROUP_HIDDEN'					=> '隐藏',
	'GROUP_LANG'					=> '群组语言',
	'GROUP_LEAD'					=> '组长',
	'GROUP_LEADERS_ADDED'			=> '新组长添加成功.',
	'GROUP_LEGEND'					=> '显示在在团队展示中',
	'GROUP_LIST'					=> '当前成员',
	'GROUP_LIST_EXPLAIN'			=> '群组的成员完整列表. 您可以删除成员 (除了一些特殊群组) 或添加合适的新成员.',
	'GROUP_MEMBERS'					=> '群组成员',
	'GROUP_MEMBERS_EXPLAIN'			=> '群组的所有成员完整列表. 包含了组长, 等待批准的成员和正式成员. 您可以管理这个组中的成员. 如果需要删除组长身份但是保留在组中, 请使用组长降级而不是删除, 同样的可以选择一个正式成员提升为组长.',
	'GROUP_MESSAGE_LIMIT'			=> '群组站内消息数量限制',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> '这个设置会覆盖用户的消息限制。用户的实际消息上限为所属各组限制的最大值。<br>如果设成0将使本组成员使用论坛的默认设置。',
	'GROUP_MODS_ADDED'				=> '新组长添加完成.',
	'GROUP_MODS_DEMOTED'			=> '组长降级完成.',
	'GROUP_MODS_PROMOTED'			=> '组成员提升完成.',
	'GROUP_NAME'					=> '群组名称',
	'GROUP_NAME_TAKEN'				=> '您输入的群组名称已经被使用, 请使用其他的群组名称.',
	'GROUP_OPEN'					=> '打开',
	'GROUP_PENDING'					=> '待批准的成员',
	'GROUP_MAX_RECIPIENTS'         => '站内消息收件人数量上限',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'   => '单个站内消息允许发送的收件人数量上限. 设置为0则使用全局设置.',
	'GROUP_OPTIONS_SAVE'			=> '组范围选项',
	'GROUP_PROMOTE'					=> '升级为组长',
	'GROUP_RANK'					=> '组级别',
	'GROUP_RECEIVE_PM'				=> '群组可以接收站内消息',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> '请注意隐藏的群组不可以接收消息, 这里的设置不起作用.',
	'GROUP_REQUEST'					=> '申请',
	'GROUP_SETTINGS_SAVE'			=> '群组范围设置',
	'GROUP_SKIP_AUTH'				=> '权限中略过组长',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> '启用后组长不再继承当前组的权限.',
    'GROUP_SPECIAL'					=> '预设',
    'GROUP_TEAMPAGE'				=> '在团队页面显示本组',
	'GROUP_TYPE'					=> '群组类型',
	'GROUP_TYPE_EXPLAIN'			=> '这决定了哪些用户可以加入或查看这个群组.',
	'GROUP_UPDATED'					=> '群组参数更新完成.',

	'GROUP_USERS_ADDED'				=> '新成员添加完成.',
	'GROUP_USERS_EXIST'				=> '选中的用户已经是成员了。',
	'GROUP_USERS_REMOVE'			=> '用户已经删除并设置了新的默认群组。',

    'LEGEND_EXPLAIN'				=> '这些是在团队展示中显示的群组：',
    'LEGEND_SETTINGS'				=> '团队展示设置',
    'LEGEND_SORT_GROUPNAME'			=> '根据组名排序',
    'LEGEND_SORT_GROUPNAME_EXPLAIN'	=> '启用此选项后下方的排序将被忽略。',

    'MANAGE_LEGEND'			=> '团队展示',
    'MANAGE_TEAMPAGE'		=> '团队列表页',
	'MAKE_DEFAULT_FOR_ALL'	=> '为所有成员设置默认群组',
	'MEMBERS'				=> '成员',

	'NO_GROUP'					=> '没有指定群组。',
    'NO_GROUPS_ADDED'			=> '还没有添加群组。',
	'NO_GROUPS_CREATED'			=> '还没有创建群组。',
	'NO_PERMISSIONS'			=> '不要复制权限',
	'NO_USERS'					=> '您没有输入任何用户.',
	'NO_USERS_ADDED'			=> '这个组还未添加成员.',
	'NO_VALID_USERS'			=> '您还没有输入符合此操作条件的用户.',

    'PENDING_MEMBERS'			=> '等待',

    'SELECT_GROUP'				=> '选择一个组',
	'SPECIAL_GROUPS'			=> '预设的群组',
	'SPECIAL_GROUPS_EXPLAIN'	=> '预设的群组是特殊群组, 它们不能删除和直接更改. 但是可以增删用户和更改基本设置. 点击 “默认” 您可以设置它为其成员的默认群组.',

    'TEAMPAGE'					=> '团队列表页',
    'TEAMPAGE_DISP_ALL'			=> '所有组成员关系',
    'TEAMPAGE_DISP_DEFAULT'		=> '仅显示默认群组',
    'TEAMPAGE_DISP_FIRST'		=> '仅显示第一个群组',
    'TEAMPAGE_EXPLAIN'			=> '这些是显示于团队列表页的群组：',
    'TEAMPAGE_FORUMS'			=> '显示管理的版面',
    'TEAMPAGE_FORUMS_EXPLAIN'	=> '如果设为是，将会显示所有当前版主有管理权限的版面。对于大论坛这将会带来数据库的查询压力。',
    'TEAMPAGE_MEMBERSHIPS'		=> '显示用户的群组成员关系',
    'TEAMPAGE_SETTINGS'			=> '团队列表页设置',
	'TOTAL_MEMBERS'				=> '成员',

	'USERS_APPROVED'				=> '用户已经批准.',
	'USER_DEFAULT'					=> '用户默认',
	'USER_DEF_GROUPS'				=> '用户设定的群组',
	'USER_DEF_GROUPS_EXPLAIN'		=> '这些群组由您或者其他管理员创建. 您可以管理成员和编辑其属性或者删除它. 点击 “默认” 可以设置这个组为其成员的默认群组.',
	'USER_GROUP_DEFAULT'			=> '设置为默认群组',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> '选择是, 将设置为添加的用户的默认群组',
	'USER_GROUP_LEADER'				=> '设置为组长',
));
