<?php
/** 
*
* common [Chinese Simplified]
*
* @package language
* @version $Id: common.php 9046 2008-11-02 16:19:11Z acydburn $
* @copyright (c) 2007 phpbbchina.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
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
	'TRANSLATION_INFO'	=> '简体中文语系由 <a href="http://www.phpbbchina.com">PHPBB中文翻译小组</a> 维护制作',
	'DIRECTION'			=> 'ltr',
	'DATE_FORMAT'		=> '|d M Y|', // 01 Jan 2007 (with Relative days enabled)
	'USER_LANG'			=> 'zh-cn',

	'1_DAY'			=> '1天',
	'1_MONTH'		=> '1个月',
	'1_YEAR'		=> '1年',
	'2_WEEKS'		=> '2周',
	'3_MONTHS'		=> '3个月',
	'6_MONTHS'		=> '6个月',
	'7_DAYS'		=> '7天',

	'ACCOUNT_ALREADY_ACTIVATED'		=> '您的帐号已经被激活',
	'ACCOUNT_DEACTIVATED'			=> '您的帐号已经被冻结, 并且只有管理员才能重新激活.',
	'ACCOUNT_NOT_ACTIVATED'			=> '您的帐号尚未被激活',
	'ACP'							=> '管理员控制面板',
	'ACTIVE'						=> '激活',
	'ACTIVE_ERROR'					=> '您指定了一个未被激活的用户名，请激活您的帐号后再试一次。如果还是有问题请联络论坛管理员。',
	'ADMINISTRATOR'					=> '管理员',
	'ADMINISTRATORS'				=> '管理员',
	'AGE'							=> '年龄',
	'AIM'							=> 'AIM',
	'ALLOWED'						=> '允许',
	'ALL_FILES'						=> '全部文件',
	'ALL_FORUMS'					=> '全部版面',
	'ALL_MESSAGES'					=> '全部短信',
	'ALL_POSTS'						=> '全部帖子',
	'ALL_TIMES'						=> '当前时区为 %1$s%2$s',
	'ALL_TOPICS'					=> '全部主题',
	'AND'							=> '和',
	'ARE_WATCHING_FORUM'			=> '您订阅了这个版面，版面更新时将向您发送消息。',
	'ARE_WATCHING_TOPIC'			=> '您订阅了这个主题，主题更新时将向您发送消息。',
	'ASCENDING'						=> '升序',
	'ATTACHMENTS'					=> '附件',
	'ATTACHED_IMAGE_NOT_IMAGE'		=> '您附加的图片文件是无效的.',
	'AUTHOR'						=> '作者',
	'AUTH_NO_PROFILE_CREATED'		=> '创建用户资料失败',
	'AVATAR_DISALLOWED_CONTENT'		=> '上传失败, 因为上传的文件中可能包含安全隐患.',
	'AVATAR_DISALLOWED_EXTENSION'	=> '扩展名 %s 已经被禁用',
	'AVATAR_EMPTY_REMOTE_DATA'		=> '头像无法上传，远程的数据无效或损坏。',
	'AVATAR_EMPTY_FILEUPLOAD'		=> '上传的头像文件是空的.',
	'AVATAR_INVALID_FILENAME'		=> '%s 是无效的文件名',
	'AVATAR_NOT_UPLOADED'			=> '头像无法上传。',
	'AVATAR_NO_SIZE'				=> '无法获得头像的长和宽，请手动输入合适的数值。',
	'AVATAR_PARTIAL_UPLOAD'			=> '上传的文件只上传了一部分',
	'AVATAR_PHP_SIZE_NA'			=> '头像文件太大。<br />无法判断服务器PHP允许的最大文件大小。',
	'AVATAR_PHP_SIZE_OVERRUN'		=> '头像文件太大，服务器允许的最大文件大小是 %1$d %2$s。<br />请注意这个由php.ini设置所以无法更改。',
    'AVATAR_REMOTE_UPLOAD_TIMEOUT'		=> '请求超时，头像文件无法上传。',
	'AVATAR_URL_INVALID'			=> '指定的链接无效。',
	'AVATAR_URL_NOT_FOUND'			=> '无法找到指定的文件。',
	'AVATAR_WRONG_FILESIZE'			=> '头像文件大小必须在 0 和 %1$d %2$s 之间。',
	'AVATAR_WRONG_SIZE'				=> '头像的宽度要大于 %1$d 象素，高度要大于 %2$d 象素 并且宽度不能超过 %3$d 象素，高度不能超过 %4$d 象素。您提交的头像宽为 %5$d 象素，高为 %6$d 象素。',

	'BACK_TO_TOP'			=> '页首',
	'BACK_TO_PREV'			=> '回到前一页',
	'BAN_TRIGGERED_BY_EMAIL'=> '被封禁的原因是您的email地址。',
	'BAN_TRIGGERED_BY_IP'	=> '被封禁的原因是您的IP地址。',
	'BAN_TRIGGERED_BY_USER'	=> '被封禁原因是您的用户名。',
	'BBCODE_GUIDE'			=> 'BBCode使用指南',
	'BCC'					=> 'BCC',
	'BIRTHDAYS'				=> '生日',
	'BOARD_BAN_PERM'		=> '您被这个论坛<strong>永远</strong>封禁。<br /><br />请联络 %2$s论坛管理员3$s 以得到更多的信息。',
	'BOARD_BAN_REASON'		=> '被封禁的原因: <strong>%s</strong>',
	'BOARD_BAN_TIME'		=> '您在 <strong>%1$s</strong> 之前将被禁止浏览论坛。<br /><br />请联络 %2$s论坛管理员 %3$s 以得到更多信息。',
	'BOARD_DISABLE'			=> '很抱歉本论坛暂时关闭',
	'BOARD_DISABLED'		=> '本论坛暂时关闭',
	'BOARD_UNAVAILABLE'		=> '很抱歉本论坛暂时无法使用，请过几分钟再登录',
	'BROWSING_FORUM'		=> '正在浏览此版面的用户：%1$s',
	'BROWSING_FORUM_GUEST'	=> '正在浏览此版面的用户：%1$s 和 %2$d 位游客',
	'BROWSING_FORUM_GUESTS'	=> '正在浏览此版面的用户：%1$s 和 %2$d 位游客',
	'BYTES'					=> 'Bytes',

	'CANCEL'				=> '取消',
	'CHANGE'				=> '修改',
	'CHANGE_FONT_SIZE'		=> '修改字体大小',
	'CHANGING_PREFERENCES'	=> '修改版面引用',
	'CHANGING_PROFILE'		=> '修改版面资料设置',
	'CLICK_VIEW_PRIVMSG'	=> '%s 前往您的收件夹 %s',
	'COLLAPSE_VIEW'			=> '收缩浏览',
	'CLOSE_WINDOW'			=> '关闭窗口',
	'COLOUR_SWATCH'			=> '颜色取样',
	'COMMA_SEPARATOR'		=> ', ',	// Used in pagination and secret yet-to-be-release style, use localised comma if appropiate, eg: Ideographic or Arabic
	'CONFIRM'				=> '确认',
	'CONFIRM_CODE'			=> '确认码',
	'CONFIRM_CODE_EXPLAIN'	=> '输入您在图片中看到的字符，不需要区分大小写。',
	'CONFIRM_CODE_WRONG'	=> '您输入的确认码有误。',
	'CONFIRM_OPERATION'		=> '您确认要执行这个操作吗？',
	'CONGRATULATIONS'		=> '恭喜',
	'CONNECTION_FAILED'		=> '连接失败',
	'CONNECTION_SUCCESS'	=> '连接成功!',
	'COOKIES_DELETED'		=> '所有的cookie都已经被清除。',
	'CURRENT_TIME'			=> '现在的时间是 %s',

	'DAY'					=> '天',
	'DAYS'					=> '天',
	'DELETE'				=> '删除',
	'DELETE_ALL'			=> '删除全部',
	'DELETE_COOKIES'		=> '删除全部论坛cookie',
	'DELETE_MARKED'			=> '删除选中',
	'DELETE_POST'			=> '删除帖子',
	'DELIMITER'				=> '分隔符',
	'DESCENDING'			=> '降序',
	'DISABLED'				=> '停用',
	'DISPLAY'				=> '显示',
	'DISPLAY_GUESTS'		=> '显示游客 ',
	'DISPLAY_MESSAGES'		=> '显示短信 ',
	'DISPLAY_POSTS'			=> '显示帖子 ',
	'DISPLAY_TOPICS'		=> '显示主题 ',
	'DOWNLOADED'			=> '已下载',
	'DOWNLOADING_FILE'		=> '正在下载文件',
	'DOWNLOAD_COUNT'		=> '被下载 %d 次',
	'DOWNLOAD_COUNTS'		=> '被下载 %d 次',
	'DOWNLOAD_COUNT_NONE'	=> '还未被下载',
	'VIEWED_COUNT'			=> '被浏览 %d 次',
	'VIEWED_COUNTS'			=> '被浏览 %d 次',
	'VIEWED_COUNT_NONE'		=> '还未被浏览',

	'EDIT_POST'							=> '编辑此帖',
	'EMAIL'								=> 'Email',
	'EMAIL_ADDRESS'						=> 'Email 地址',
    'EMAIL_INVALID_EMAIL'				=> '您输入了无效的Email地址。',
	'EMAIL_SMTP_ERROR_RESPONSE'			=> '发送Email遇到问题 <strong>Line %1$s</strong>。Response: %2$s',
	'EMPTY_SUBJECT'						=> '您必须为新主题指定一个标题。',
	'EMPTY_MESSAGE_SUBJECT'				=> '您没有输入标题.',
	'ENABLED'							=> '启用',
	'ENCLOSURE'							=> '包围',
	'ENTER_USERNAME'					=> '输入用户名',
	'ERR_CHANGING_DIRECTORY'			=> '无法改变目录',
	'ERR_CONNECTING_SERVER'				=> '连接服务器错误',
	'ERR_JAB_AUTH'						=> '无法通过Jabber服务器验证.',
	'ERR_JAB_CONNECT'					=> '无法连接到Jabber服务器.',
	'ERR_UNABLE_TO_LOGIN'				=> '登录错误。提供的用户名或密码错误。',
	'ERR_UNWATCHING'					=> '在取消订阅的过程中发生错误.',
	'ERR_WATCHING'						=> '在订阅的过程中发生错误.',
	'ERR_WRONG_PATH_TO_PHPBB'			=> '输入的 phpBB 路径无效。',
	'EXPAND_VIEW'						=> '展开视图',
	'EXTENSION'							=> '扩展名',
	'EXTENSION_DISABLED_AFTER_POSTING'	=> '扩展名 <strong>%s</strong> 已经被禁用并不再显示',

	'FAQ'					=> 'FAQ',
	'FAQ_EXPLAIN'			=> '常见问题',
	'FILENAME'				=> '文件名',
	'FILESIZE'				=> '文件大小',
	'FILEDATE'				=> '文件日期',
	'FILE_COMMENT'			=> '文件注释',
	'FILE_NOT_FOUND'		=> '无法找到请求的文件',
	'FIND_USERNAME'			=> '查找用户',
	'FOLDER'				=> '文件夹',
	'FORGOT_PASS'			=> '我忘记了自己的密码', 
	'FORM_INVALID'			=> '提交的表单无效, 请再尝试一次.',
	'FORUM'					=> '版面',
	'FORUMS'				=> '版面',
	'FORUMS_MARKED'			=> '所有版面已经被标记为已读',
	'FORUM_CAT'				=> '版面类别',
	'FORUM_INDEX'			=> '论坛首页',
	'FORUM_LINK'			=> '版面链接',
	'FORUM_LOCATION'		=> '版面地址',
	'FORUM_LOCKED'			=> '版面锁定',
	'FORUM_RULES'			=> '版面规则',
	'FORUM_RULES_LINK'		=> '请点击阅读论坛规则',
	'FROM'					=> '自',
	'FSOCK_DISABLED'		=> '操作无法完成，因为fsockopen函数被禁用或者无法找到目标服务器。',
	'FSOCK_TIMEOUT'			=> 'fsockopen读取数据超时.',

	'FTP_FSOCK_HOST'				=> 'FTP 主机',
	'FTP_FSOCK_HOST_EXPLAIN'		=> '用于连接您的网站的FTP 服务器',
	'FTP_FSOCK_PASSWORD'			=> 'FTP 密码',
	'FTP_FSOCK_PASSWORD_EXPLAIN'	=> '对应您的FTP用户名的密码',
	'FTP_FSOCK_PORT'				=> 'FTP 端口',
	'FTP_FSOCK_PORT_EXPLAIN'		=> '您的FTP服务器的端口',
	'FTP_FSOCK_ROOT_PATH'			=> '到 phpBB 的路径',
	'FTP_FSOCK_ROOT_PATH_EXPLAIN'	=> '从根目录到您的 phpBB 论坛的路径',
	'FTP_FSOCK_TIMEOUT'				=> 'FTP 超时',
	'FTP_FSOCK_TIMEOUT_EXPLAIN'		=> '以秒为单位表示的时间。系统将在这个时间内等待服务器的响应',
	'FTP_FSOCK_USERNAME'			=> 'FTP 用户名',
	'FTP_FSOCK_USERNAME_EXPLAIN'	=> '连接您的FTP服务器所用的用户名',

	'FTP_HOST'					=> 'FTP 主机',
	'FTP_HOST_EXPLAIN'			=> '用于连接您的网站的FTP 服务器',
	'FTP_PASSWORD'				=> 'FTP 密码',
	'FTP_PASSWORD_EXPLAIN'		=> '对应您的FTP用户名的密码',
	'FTP_PORT'					=> 'FTP 端口',
	'FTP_PORT_EXPLAIN'			=> '您的FTP服务器的端口',
	'FTP_ROOT_PATH'				=> '到 phpBB 的路径',
	'FTP_ROOT_PATH_EXPLAIN'		=> '从根目录到您的 phpBB 论坛的路径',
	'FTP_TIMEOUT'				=> 'FTP 超时',
	'FTP_TIMEOUT_EXPLAIN'		=> '以秒为单位表示的时间。系统将在这个时间内等待服务器的响应',
	'FTP_USERNAME'				=> 'FTP 用户名',
	'FTP_USERNAME_EXPLAIN'		=> '连接您的FTP服务器所用的用户名',

	'GENERAL_ERROR'				=> '一般错误',
	'GB'                  => 'GB',
    'GIB'                  => 'GiB',
	'GO'						=> 'GO',
	'GOTO_PAGE'					=> '前往页数',
	'GROUP'						=> '用户组',
	'GROUPS'					=> '用户组',
	'GROUP_ERR_TYPE'			=> '指定了不恰当的用户组类型。',
	'GROUP_ERR_USERNAME'		=> '没有指定用户组名称。',
	'GROUP_ERR_USER_LONG'		=> '用户组名称过长。',
	'GUEST'						=> '游客',
	'GUEST_USERS_ONLINE'		=> '共有 %d 位游客在线',
	'GUEST_USERS_TOTAL'			=> '%d 位游客',
	'GUEST_USERS_ZERO_ONLINE'	=> '共有 0 位游客在线',
	'GUEST_USERS_ZERO_TOTAL'	=> '0 位游客',
	'GUEST_USER_ONLINE'			=> '共有 %d 位游客在线',
	'GUEST_USER_TOTAL'			=> '%d 位游客',
	'G_ADMINISTRATORS'			=> '管理员',
	'G_BOTS'					=> '机器人',
	'G_GUESTS'					=> '游客',
	'G_REGISTERED'				=> '注册用户',
	'G_REGISTERED_COPPA'		=> '注册COPPA用户',
	'G_GLOBAL_MODERATORS'		=> '论坛版主',
	'G_NEWLY_REGISTERED'		=> '新注册用户',

	'HIDDEN_USERS_ONLINE'			=> '%d 位隐身用户在线',
	'HIDDEN_USERS_TOTAL'			=> '%d 位隐身用户和 ',
	'HIDDEN_USERS_TOTAL_AND'		=> '%d 位隐身用户和 ',
	'HIDDEN_USERS_ZERO_ONLINE'		=> '0 位隐身用户在线',
	'HIDDEN_USERS_ZERO_TOTAL'		=> '0 位隐身用户和 ',
	'HIDDEN_USERS_ZERO_TOTAL_AND'	=> '0 位隐身用户和 ',
	'HIDDEN_USER_ONLINE'			=> '%d 位隐身用户在线',
	'HIDDEN_USER_TOTAL'				=> '%d 位隐身用户和 ',
	'HIDDEN_USER_TOTAL_AND'			=> '%d 位隐身用户和 ',
	'HIDE_GUESTS'				=> '隐藏游客',
	'HIDE_ME'					=> '在这次登录中隐藏我的在线状态',
	'HOURS'						=> '小时',
	'HOME'						=> '首页',

	'ICQ'						=> 'ICQ',
	'ICQ_STATUS'				=> 'ICQ 状态',	
	'IF'						=> '如果',
	'IMAGE'						=> '图片',
	'IMAGE_FILETYPE_INVALID'	=> '不支持图片文件类型 %d for mimetype %s 。',
	'IMAGE_FILETYPE_MISMATCH'	=> '图片文件类型不匹配: 需要的扩展名是 %1$s 但是给的是 %2$s。',
	'IN'						=> '位于',
	'INDEX'						=> '首页',
	'INFORMATION'				=> '信息',
	'INTERESTS'					=> '兴趣',
	'INVALID_DIGEST_CHALLENGE'	=> '无效的 digest challenge',
	'INVALID_EMAIL_LOG'			=> '<strong>%s</strong> 是无效的email地址?',
	'IP'						=> 'IP',
	'IP_BLACKLISTED'			=> '您的 IP %1$s 已经被封锁。要得到更多的信息请查阅 <a href="%2$s">%2$s</a>。',

	'JABBER'				=> 'Jabber',
	'JOINED'				=> '注册',
	'JUMP_PAGE'				=> '填入您想前往的页数',
	'JUMP_TO'				=> '前往 ',
	'JUMP_TO_PAGE'			=> '点击前往页面…',

	'KB'					=> 'KB',
	'KIB'					=> 'KiB',

	'LAST_POST'							=> '最新文章',
	'LAST_UPDATED'						=> '最近更新',
	'LAST_VISIT'						=> '最后浏览',
	'LDAP_NO_LDAP_EXTENSION'			=> 'LDAP 扩展不可用',
	'LDAP_NO_SERVER_CONNECTION'			=> '无法连接 LDAP 服务器',
	'LDAP_SEARCH_FAILED'                => '搜索LDAP目录时遇到错误.',
	'LEGEND'							=> '团队',
	'LOCATION'							=> '地址',
	'LOCK_POST'							=> '锁定帖子',
	'LOCK_POST_EXPLAIN'					=> '阻止编辑',
	'LOCK_TOPIC'						=> '锁定主题',
	'LOGIN'								=> '登录',
	'LOGIN_CHECK_PM'					=> '登录并检查私人信件',
	'LOGIN_CONFIRMATION'				=> '登录确认',
	'LOGIN_CONFIRM_EXPLAIN'				=> '为了防止暴力破解用户密码，论坛管理员要求您在超过最大尝试次数后输入一组确认码。确认码显示在如下所示的图片中。如果您存在视力缺陷无法阅读请联络 %s论坛管理员%s。',
	'LOGIN_ERROR_ATTEMPTS'				=> '您超出了论坛规定的最大尝试次数。除了您的用户名和密码外您还需要输入下图所示的确认码。',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE'	=> '您的浏览未被Apache服务器授权。',
	'LOGIN_ERROR_PASSWORD'				=> '您输入了一个无效的密码。请查证后重新输入。如果一直存在问题请联络 %s论坛管理员%s。',
	'LOGIN_ERROR_PASSWORD_CONVERT'		=> '在论坛升级中无法转换您的密码. 请 %s申请一个新密码%s. 如果您还遇到其他的问题, 请联络 %s论坛管理员%s.',
	'LOGIN_ERROR_USERNAME'				=> '您输入了一个无效的用户名。请查证后重新输入。如果一直存在问题请联络 %s论坛管理员%s。',
	'LOGIN_FORUM'						=> '您需要输入相应密码才能浏览这个版面。',
	'LOGIN_INFO'						=> '您必须注册后才能登录。注册仅需要很短的时间但是会给您更多的权限。在注册前请确认您已经明白我们的使用条款和政策。当浏览论坛时请确认您已经阅读过版面规则。',
	'LOGIN_VIEWFORUM'					=> '您必须注册并登录才能浏览这个版面。',
	'LOGIN_EXPLAIN_EDIT'				=> '您必须注册并登录才能编辑版面文章。',
	'LOGIN_EXPLAIN_VIEWONLINE'			=> '要查看在线用户列表，您必须注册并登录。',
	'LOGOUT'							=> '退出',
	'LOGOUT_USER'						=> '退出 [ %s ]',
	'LOG_ME_IN'							=> '每次浏览时自动登录',

	'MARK'					=> '标记',
	'MARK_ALL'				=> '标记全部',
	'MARK_FORUMS_READ'		=> '将论坛标记为已读',
	'MARK_SUBFORUMS_READ'	=> '将子版面标记为已读',
	'MB'					=> 'MB',
	'MIB'					=> 'MiB',
	'MCP'					=> '版主控制面板',
	'MEMBERLIST'			=> '用户列表',
	'MEMBERLIST_EXPLAIN'	=> '查看本站用户的完整列表',
	'MERGE'					=> '合并',
	'MERGE_POSTS'			=> '移动帖子',
	'MERGE_TOPIC'			=> '合并主题',
	'MESSAGE'				=> '内容',
	'MESSAGES'				=> '内容',
	'MESSAGE_BODY'			=> '帖子内容',
	'MINUTES'				=> '分钟',
	'MODERATE'				=> '管理',
	'MODERATOR'				=> '版主',
	'MODERATORS'			=> '版主',
    'MODULE_NOT_ACCESS'		=> '无法访问模块',
    'MODULE_NOT_FIND'		=> '无法找到模块 %s',
    'MODULE_FILE_INCORRECT_CLASS'	=> '模块文件 %s 未包含正确的类 [%s]',
	'MONTH'					=> '月',
	'MOVE'					=> '移动',
	'MSNM'					=> 'MSNM/WLM',	

	'NA'						=> 'N/A',
	'NEWEST_USER'				=> '最新注册的用户：<strong>%s</strong>',
	'NEW_MESSAGE'				=> '新短信',
	'NEW_MESSAGES'				=> '新短信',
	'NEW_PM'					=> '<strong>%d</strong> 条新短信',
	'NEW_PMS'					=> '<strong>%d</strong> 条新短信',
	'NEW_POST'					=> '有新帖',
	'NEW_POSTS'					=> '有新帖',
	'NEXT'						=> '下一页',
	'NEXT_STEP'					=> '下一步',
	'NEVER'						=> '从未',
	'NO'						=> '否',
	'NOT_ALLOWED_MANAGE_GROUP'	=> '您不能从管理员控制面板管理这个用户组。',
	'NOT_AUTHORISED'			=> '您没有权限浏览这块区域.',
	'NOT_WATCHING_FORUM'		=> '您已经取消这个版面的订阅，版面更新信息停止发送。',
	'NOT_WATCHING_TOPIC'		=> '您已经取消这个主题的订阅。',
	'NOTIFY_ADMIN'				=> '请通知论坛管理员或网站管理者.',
	'NOTIFY_ADMIN_EMAIL'		=> '请通知论坛管理员或网站管理者: <a href="mailto:%1$s">%1$s</a>',
	'NO_ACCESS_ATTACHMENT'		=> '您不能浏览这个文件。',
	'NO_ACTION'					=> '没有指定操作。',
	'NO_ADMINISTRATORS'			=> '这个论坛没有设置管理员。',
	'NO_AUTH_ADMIN'				=> '您没有管理权限，因此不能浏览管理员控制面板。',
	'NO_AUTH_ADMIN_USER_DIFFER'	=> '您不能被重新授权为另一个用户。',
	'NO_AUTH_OPERATION'			=> '您没有完成这个操作所需要的权限。',
	'NO_CONNECT_TO_SMTP_HOST'	=> '无法连接 smtp 服务器 : %s : %s',
	'NO_BIRTHDAYS'				=> '今天没人过生日',
	'NO_EMAIL_MESSAGE'			=> 'Email 内容为空',
	'NO_EMAIL_RESPONSE_CODE'	=> '无法得到mail服务器回应码',
	'NO_EMAIL_SUBJECT'			=> 'Email 标题为空',
	'NO_FORUM'					=> '您选择的版面不存在。',
	'NO_FORUMS'					=> '这个论坛还没有版面',
	'NO_GROUP'					=> '请求的用户组不存在。',
	'NO_GROUP_MEMBERS'			=> '这个用户组还没有成员',
	'NO_IPS_DEFINED'			=> '没有设定 IP 地址或主机名',
	'NO_MEMBERS'				=> '这个搜索规则下没有找到匹配的用户',
	'NO_MESSAGES'				=> '没有短信',
	'NO_MODE'					=> '没有指定模式。',
	'NO_MODERATORS'				=> '这个版面没有设置版主。',
	'NO_NEW_MESSAGES'			=> '没有新的短信',
	'NO_NEW_PM'					=> '<strong>0</strong> 条新短信',
	'NO_NEW_POSTS'				=> '无新帖',
	'NO_ONLINE_USERS'			=> '没有注册用户',
	'NO_POSTS'					=> '没有帖子',
	'NO_POSTS_TIME_FRAME'		=> '在选定的时间段中没有这个主题的帖子。',
	'NO_FEED_ENABLED'			=> 'ATOM输出尚未启用.',
	'NO_FEED'					=> '请求的ATOM输出无效.',
    'NO_STYLE_DATA'				=> '无法获取风格数据',
	'NO_SUBJECT'				=> '没有输入标题',								// Used for posts having no subject defined but displayed within management pages.
	'NO_SUCH_SEARCH_MODULE'		=> '指定的搜索模块不存在',
	'NO_SUPPORTED_AUTH_METHODS'	=> '没有可支持的认证方法',
	'NO_TOPIC'					=> '请求的主题不存在。', 
	'NO_TOPIC_FORUM'			=> '这个主题或版面已经不再存在.',
	'NO_TOPICS'					=> '这个版面还没有主题或帖子。',
	'NO_TOPICS_TIME_FRAME'		=> '在选定的时间段中这个版面没有主题发表。',
	'NO_UNREAD_PM'				=> '<strong>0</strong> 未读短信',
	'NO_UNREAD_POSTS'           => '没有未读文章',
	'NO_UPLOAD_FORM_FOUND'		=> '上传初始化结束但是没有有效的文件上传表单。',
	'NO_USER'					=> '请求的用户不存在。',
	'NO_USERS'					=> '请求的用户不存在。',
	'NO_USER_SPECIFIED'			=> '没有指定用户名',

	// Nullar/Singular/Plural language entry. The key numbers define the number range in which a certain grammatical expression is valid.
	'NUM_POSTS_IN_QUEUE'		=> array(
		0			=> '队列中没有文章',		// 0
		1			=> '1 篇文章在队列中',		// 1
		2			=> '%d 篇文章在队列中',		// 2+		
	), 

	'OCCUPATION'				=> '职业',
	'OFFLINE'					=> '离线',
	'ONLINE'					=> '线上',
	'ONLINE_BUDDIES'			=> '线上好友',
	'ONLINE_USERS_TOTAL'		=> '线上共有 <strong>%d</strong> 位用户：',
	'ONLINE_USERS_ZERO_TOTAL'	=> '线上共有 <strong>0</strong> 位用户：',
	'ONLINE_USER_TOTAL'			=> '线上共有 <strong>%d</strong> 位用户：',
	'OPTIONS'					=> '选项',

	'PAGE_OF'				=> '分页： <strong>%1$d</strong> / <strong>%2$d</strong>',
	'PASSWORD'				=> '密码',
	'PIXEL'					=> '像素',
	'PLAY_QUICKTIME_FILE'	=> '播放 Quicktime 文件',
	'PM'					=> 'PM',
	'PM_REPORTED'           => '点击查看报告',
	'POSTING_MESSAGE'		=> '发表文章于 %s',
	'POSTING_PRIVATE_MESSAGE'	=> '编写私人短信',
	'POST'					=> '帖子',
	'POST_ANNOUNCEMENT'		=> '公告',
	'POST_STICKY'			=> '置顶',
	'POSTED'				=> '发表于 ',
	'POSTED_IN_FORUM'		=> '于',
	'POSTED_ON_DATE'		=> '于',
	'POSTS'					=> '帖子',
	'POSTS_UNAPPROVED'		=> '这个主题里至少有一篇帖子未被批准',
	'POST_BY_AUTHOR'		=> '由',
	'POST_BY_FOE'			=> '这篇帖子由 <strong>%1$s</strong> 发表，他/她正在您的忽略列表中。%2$s显示这篇帖子%3$s。',
	'POST_DAY'				=> '每天 %.2f 篇帖子',
	'POST_DETAILS'			=> '帖子细节',
	'POST_NEW_TOPIC'		=> '发表新帖',
	'POST_PCT'				=> '所有帖子的 %.2f%%',
	'POST_PCT_ACTIVE'		=> '用户帖子的 %.2f%%',
	'POST_PCT_ACTIVE_OWN'	=> '您的帖子的 %.2f%%',
	'POST_REPLY'			=> '发表回复',
	'POST_REPORTED'			=> '点击查看举报内容',
	'POST_SUBJECT'			=> '文章标题 ',
	'POST_TIME'				=> '发表时间',
	'POST_TOPIC'			=> '发表主题',
	'POST_UNAPPROVED'		=> '这篇帖子正在等待批阅',
	'POWERED_BY'			=> '由 %s 提供支持',
	'PREVIEW'				=> '预览',
	'PREVIOUS'				=> '上一页', 		// Used in pagination
	'PREVIOUS_STEP'			=> '上一步',
	'PRIVACY'				=> '隐私政策',
	'PRIVATE_MESSAGE'		=> '私人短信',
	'PRIVATE_MESSAGES'		=> '私人短信',
	'PRIVATE_MESSAGING'		=> '私人短信',
	'PROFILE'				=> '用户控制面板',

	'RANK'						=> '等级',
	'READING_FORUM'				=> '查看 %s 版面的主题',
	'READING_GLOBAL_ANNOUNCE'	=> '查看全站公告',
	'READING_LINK'				=> '转向版面链接 %s',
	'READING_TOPIC'				=> '查看主题于 %s',
	'READ_PROFILE'				=> '用户资料',
	'REASON'					=> '原因',
	'RECORD_ONLINE_USERS'		=> '最高在线记录：<strong>%1$s</strong>，发生于 %2$s',
	'REDIRECT'					=> '重定向',
	'REDIRECTS'					=> '总共转向',
	'REGISTER'					=> '注册',
	'REGISTERED_USERS'			=> '注册用户：',
	'REG_USERS_ONLINE'			=> '共有 %d 位注册用户和 ',
	'REG_USERS_TOTAL'			=> '%d 位注册用户，',
	'REG_USERS_TOTAL_AND'		=> '%d 位注册用户和 ',
	'REG_USERS_ZERO_ONLINE'		=> '共有 0 位注册用户和 ',
	'REG_USERS_ZERO_TOTAL'		=> '0 位注册用户，',
	'REG_USERS_ZERO_TOTAL_AND'	=> '0 位注册用户和 ',
	'REG_USER_ONLINE'			=> '共有 %d 位注册用户和 ',
	'REG_USER_TOTAL'			=> '%d 位注册用户，',
	'REG_USER_TOTAL_AND'		=> '%d 位注册用户和 ',
	'REMOVE'					=> '删除',
	'REMOVE_INSTALL'			=> '在开始使用论坛前请删除、移除或重命名 install 文件夹。如果这个文件夹存在，您只能浏览管理员控制面板(ACP)。',
	'REPLIES'					=> '回复总数',
	'REPLY_WITH_QUOTE'			=> '引用回复',
	'REPLYING_GLOBAL_ANNOUNCE'	=> '回复全站公告',
	'REPLYING_MESSAGE'			=> '回复文章于 %s',
	'REPORT_BY'					=> '举报人',
	'REPORT_POST'				=> '举报此文章',
	'REPORTING_POST'			=> '举报文章',
	'RESEND_ACTIVATION'			=> '重新发送激活邮件',
	'RESET'						=> '重置',
	'RESTORE_PERMISSIONS'		=> '恢复权限',
	'RETURN_INDEX'				=> '%s回到首页%s',
	'RETURN_FORUM'				=> '%s回到最近浏览的版面%s',
	'RETURN_PAGE'				=> '%s回到先前的页面%s',
	'RETURN_TOPIC'				=> '%s回到最近浏览的主题%s',
	'RETURN_TO'					=> '回到',
	'FEED'						=> 'ATOM',
	'FEED_NEWS'					=> '新文章',
	'FEED_TOPICS_ACTIVE'		=> '活跃主题',
	'FEED_TOPICS_NEW'			=> '新主题',
	'RULES_ATTACH_CAN'			=> '您 <strong>可以</strong> 在这个版面提交附件',
	'RULES_ATTACH_CANNOT'		=> '您 <strong>不能</strong> 在这个版面提交附件',
	'RULES_DELETE_CAN'			=> '您 <strong>可以</strong> 在这个版面删除帖子',
	'RULES_DELETE_CANNOT'		=> '您 <strong>不能</strong> 在这个版面删除帖子',
	'RULES_DOWNLOAD_CAN'		=> '您 <strong>可以</strong> 在这个版面下载附件',
	'RULES_DOWNLOAD_CANNOT'		=> '您 <strong>不能</strong> 在这个版面下载附件',
	'RULES_EDIT_CAN'			=> '您 <strong>可以</strong> 在这个版面编辑帖子',
	'RULES_EDIT_CANNOT'			=> '您 <strong>不能</strong> 在这个版面编辑帖子',
	'RULES_LOCK_CAN'			=> '您 <strong>可以</strong> 在这个版面锁定帖子',
	'RULES_LOCK_CANNOT'			=> '您 <strong>不能</strong> 在这个版面锁定帖子',
	'RULES_POST_CAN'			=> '您 <strong>可以</strong> 在这个版面发表主题',
	'RULES_POST_CANNOT'			=> '您 <strong>不能</strong> 在这个版面发表主题',
	'RULES_REPLY_CAN'			=> '您 <strong>可以</strong> 在这个版面回复主题',
	'RULES_REPLY_CANNOT'		=> '您 <strong>不能</strong> 在这个版面回复主题',
	'RULES_VOTE_CAN'			=> '您 <strong>可以</strong> 在这个版面发起投票',
	'RULES_VOTE_CANNOT'			=> '您 <strong>不能</strong> 在这个版面发起投票',

	'SEARCH'					=> '搜索',
	'SEARCH_MINI'				=> '搜索……',
	'SEARCH_ADV'				=> '高级搜索',
	'SEARCH_ADV_EXPLAIN'		=> '查看高级搜索选项',
	'SEARCH_KEYWORDS'			=> '按关键词搜索',
	'SEARCHING_FORUMS'			=> '查找版面',
	'SEARCH_ACTIVE_TOPICS'		=> '查看活跃的主题',
	'SEARCH_FOR'				=> '查找',
	'SEARCH_FORUM'				=> '查找这个版面……',	
	'SEARCH_NEW'				=> '查看新帖',
	'SEARCH_POSTS_BY'			=> '查找帖子，按',
	'SEARCH_SELF'				=> '查看您的帖子',
	'SEARCH_TOPIC'				=> '查找这个主题……',
	'SEARCH_UNANSWERED'			=> '查看没有回复的主题',
	'SEARCH_UNREAD'				=> '查看未读文章',
	'SEARCH_USER_POSTS'			=> '搜索用户帖子',
	'SECONDS'					=> '秒',
	'SELECT'					=> '选择',
	'SELECT_ALL_CODE'			=> '全选',
	'SELECT_DESTINATION_FORUM'	=> '请选择一个目的版面',
	'SELECT_FORUM'				=> '选择一个版面',
	'SEND_EMAIL'				=> '发送Email',
	'SEND_EMAIL_USER'			=> 'E-mail',				// Used as: {L_SEND_EMAIL_USER} {USERNAME} -> E-mail UserX
	'SEND_PRIVATE_MESSAGE'		=> '发送私人短信',
	'SETTINGS'					=> '设置',
	'SIGNATURE'					=> '签名',
	'SKIP'						=> '跳到内容',
	'SMTP_NO_AUTH_SUPPORT'		=> 'SMTP服务器不支持验证',
	'SORRY_AUTH_READ'			=> '您没有阅读这个版面的权限',
	'SORRY_AUTH_VIEW_ATTACH'	=> '您没有下载这个附件的权限',
	'SORT_BY'					=> '排序',
	'SORT_JOINED'				=> '加入时间',
	'SORT_LOCATION'				=> '地址',
	'SORT_RANK'					=> '级别',
	'SORT_POSTS'				=> '文章',
	'SORT_TOPIC_TITLE'			=> '主题',
	'SORT_USERNAME'				=> '用户名',
	'SPLIT_TOPIC'				=> '分割主题',
	'SQL_ERROR_OCCURRED'		=> '当读取页面的时候发生SQL错误。如果错误一直存在，请联络 %s论坛管理员%s 。',
	'STATISTICS'				=> '统计信息',
	'START_WATCHING_FORUM'		=> '订阅版面',
	'START_WATCHING_TOPIC'		=> '订阅主题',
	'STOP_WATCHING_FORUM'		=> '退订版面',
	'STOP_WATCHING_TOPIC'		=> '退订主题',
	'SUBFORUM'					=> '子版面',
	'SUBFORUMS'					=> '子版面',
	'SUBJECT'					=> '文章标题',
	'SUBMIT'					=> '提交',

    'TB'				=> 'TB',
	'TERMS_USE'			=> '使用条款',
	'TEST_CONNECTION'	=> '连接测试',
	'THE_TEAM'			=> '团队',
    'TIB'				=> 'TiB',
	'TIME'				=> '时间',
	
	'TOO_LARGE'                     => '您输入的值太大了.',
	'TOO_LARGE_MAX_RECIPIENTS'      => '您输入的<strong>每个私人短信的最大收件人数目</strong> 太大.',
	'TOO_LONG'						=> '您输入的值太长了.',

	'TOO_LONG_AIM'					=> '您输入的AIM名字太长了。',
	'TOO_LONG_CONFIRM_CODE'			=> '您输入的确认码太长了。',
	'TOO_LONG_DATEFORMAT'			=> '您输入的日期格式太长了。',
	'TOO_LONG_ICQ'					=> '您输入的ICQ号码太长了。',
	'TOO_LONG_INTERESTS'			=> '您输入的兴趣内容太长了。',
	'TOO_LONG_JABBER'				=> '您输入的 Jabber 帐号名称太长了。',
	'TOO_LONG_LOCATION'				=> '您输入的地址太长了。',
	'TOO_LONG_MSN'					=> '您输入的 MSNM/WLM 名称太长了。',
	'TOO_LONG_NEW_PASSWORD'			=> '您输入的密码太长了。',
	'TOO_LONG_OCCUPATION'			=> '您输入的职业太长了。',
	'TOO_LONG_PASSWORD_CONFIRM'		=> '您输入的验证密码太长了。',
	'TOO_LONG_USER_PASSWORD'		=> '您输入的密码太长了。',
	'TOO_LONG_USERNAME'				=> '您输入的用户名太长了。',
	'TOO_LONG_EMAIL'				=> '您输入的 email 地址太长了。',
	'TOO_LONG_EMAIL_CONFIRM'		=> '您输入的 email 验证地址太长了。',
	'TOO_LONG_WEBSITE'				=> '您输入的网站地址太长了。',
	'TOO_LONG_YIM'					=> '您输入的 Yahoo! Messenger 用户名太长了。',

	'TOO_MANY_VOTE_OPTIONS'			=> '您在投票中选择了过多的选项。', 

	'TOO_SHORT'						=> '您输入的值太短了.',

	'TOO_SHORT_AIM'					=> '您输入的AIM名字太短了。',
	'TOO_SHORT_CONFIRM_CODE'		=> '您输入的确认码太短了。',
	'TOO_SHORT_DATEFORMAT'			=> '您输入的日期格式太短了。',
	'TOO_SHORT_ICQ'					=> '您输入的ICQ号码太短了。',
	'TOO_SHORT_INTERESTS'			=> '您输入的兴趣内容太短了。',
	'TOO_SHORT_JABBER'				=> '您输入的 Jabber 帐号名称太短了。',
	'TOO_SHORT_LOCATION'			=> '您输入的地址太短了。',
	'TOO_SHORT_MSN'					=> '您输入的 MSNM/WLM 名称太短了。',
	'TOO_SHORT_NEW_PASSWORD'		=> '您输入的密码太短了。',
	'TOO_SHORT_OCCUPATION'			=> '您输入的职业太短了。',
	'TOO_SHORT_PASSWORD_CONFIRM'	=> '您输入的验证密码太短了。',
	'TOO_SHORT_USER_PASSWORD'		=> '您输入的密码太短了。',
	'TOO_SHORT_USERNAME'			=> '您输入的用户名太短了。',
	'TOO_SHORT_EMAIL'				=> '您输入的 email 地址太短了。',
	'TOO_SHORT_EMAIL_CONFIRM'		=> '您输入的 email 验证地址太短了。',
	'TOO_SHORT_WEBSITE'				=> '您输入的网站地址太短了。',
	'TOO_SHORT_YIM'					=> '您输入的 Yahoo! Messenger 用户名太短了。',
	
	'TOO_SMALL'                     => '您输入的值太小了.',
	'TOO_SMALL_MAX_RECIPIENTS'      => '您输入的<strong>每个站内短信允许的最大收件人数目</strong>太小.',

	'TOPIC'				=> '主题',
	'TOPICS'			=> '主题',
	'TOPICS_UNAPPROVED'	=> '论坛中有未审核的文章.',
	'TOPIC_ICON'		=> '主题图标',
	'TOPIC_LOCKED'		=> '这个主题已被锁定，您不能编辑或回复这个主题',
	'TOPIC_LOCKED_SHORT'=> '主题锁定',
	'TOPIC_MOVED'		=> '移动主题',
	'TOPIC_REVIEW'		=> '主题浏览',
	'TOPIC_TITLE'		=> '标题',
	'TOPIC_UNAPPROVED'	=> '这个主题尚未被批准',
	'TOTAL_ATTACHMENTS'	=> '附件',
	'TOTAL_LOG'			=> '1 个记录',
	'TOTAL_LOGS'		=> '%d 个记录',
	'TOTAL_NO_PM'		=> '总计 0 个私人短信',
	'TOTAL_PM'			=> '总计 1 个私人短信',
	'TOTAL_PMS'			=> '总计 %d 个私人短信',
	'TOTAL_POSTS'		=> '发贴总数',
	'TOTAL_POSTS_OTHER'	=> '帖子总数：<strong>%d</strong>',
	'TOTAL_POSTS_ZERO'	=> '帖子总数：<strong>0</strong>',
	'TOPIC_REPORTED'	=> '这篇主题已经被举报了',
	'TOTAL_TOPICS_OTHER'=> '主题总数：<strong>%d</strong>',
	'TOTAL_TOPICS_ZERO'	=> '主题总数：<strong>0</strong>',
	'TOTAL_USERS_OTHER'	=> '注册用户总数：<strong>%d</strong>',
	'TOTAL_USERS_ZERO'	=> '注册用户总数：<strong>0</strong>',
	'TRACKED_PHP_ERROR'	=> '记载的 PHP 错误: %s',

	'UNABLE_GET_IMAGE_SIZE'	=> '无法浏览图片，或者此文件不是一个有效的图片文件。请检查输入的URL是否正确。',
	'UNABLE_TO_DELIVER_FILE'=> '无法传送文件。',
	'UNKNOWN_BROWSER'		=> '无法浏览',
	'UNMARK_ALL'			=> '取消全部',
	'UNREAD_MESSAGES'		=> '未读短信',
	'UNREAD_PM'				=> '<strong>%d</strong> 条未读短信',
	'UNREAD_PMS'			=> '<strong>%d</strong> 条未读短信',
	'UNREAD_POST'           => '未读文章',
	'UNREAD_POSTS'          => '未读文章',
	'UNWATCH_FORUM_CONFIRM'		=> '您确认要退订这个版面吗?',
	'UNWATCH_FORUM_DETAILED'	=> '您确认要退订“%s”版面吗?',
	'UNWATCH_TOPIC_CONFIRM'		=> '您确认要退订这个主题吗?',
	'UNWATCH_TOPIC_DETAILED'	=> '您确认要退订主题 “%s” 吗?',
	'UNWATCHED_FORUMS'			=> '您将不再关注这些选中的版面。',
	'UNWATCHED_TOPICS'			=> '您将不再关注这些选中的主题。',
	'UNWATCHED_FORUMS_TOPICS'	=> '您将不再关注这些选中的项目。',
	'UPDATE'				=> '更新',
	'UPLOAD_IN_PROGRESS'	=> '正在上传',
	'URL_REDIRECT'			=> '如果您的浏览器不支持 meta 重定向。请点击 %s这里%s 连接。',
	'USERGROUPS'			=> '用户组',
	'USERNAME'				=> '用户名',
	'USERNAMES'				=> '用户名',
	'USER_AVATAR'			=> '头像',
	'USER_CANNOT_READ'		=> '您不能阅读这个版面的帖子',
	'USER_POST'				=> '%d 篇帖子',
	'USER_POSTS'			=> '%d 篇帖子',
	'USERS'					=> '用户',
	'USE_PERMISSIONS'		=> '检查用户的权限',
	'USER_NEW_PERMISSION_DISALLOWED'	=> '很抱歉您还不能使用此功能. 作为新注册的用户您需要更多的参与后才能使用这些功能.',
	'USER_NEW_PERMISSION_DISALLOWED'	=> '很抱歉!您没有权限使用这个功能。您只是刚在本站注册，您需要有更多的参与，才可使用这个功能。',

	'VARIANT_DATE_SEPARATOR'	=> ' / ',	// Used in date format dropdown, eg: "Today, 13:37 / 01 Jan 2007, 13:37" ... to join a relative date with calendar date
	'VIEWED'					=> '已读',
	'VIEWING_FAQ'				=> '查看常见问题',
	'VIEWING_MEMBERS'			=> '查看成员细节',
	'VIEWING_ONLINE'			=> '查看有谁在线',
	'VIEWING_MCP'				=> '查看版主控制面板',
	'VIEWING_MEMBER_PROFILE'	=> '查看用户资料',
	'VIEWING_PRIVATE_MESSAGES'	=> '查看私人短信',
	'VIEWING_REGISTER'			=> '注册帐号',
	'VIEWING_UCP'				=> '查看用户控制面板',
	'VIEWS'						=> '阅读次数',
	'VIEW_BOOKMARKS'			=> '查看书签',
	'VIEW_FORUM_LOGS'			=> '查看日志',
	'VIEW_LATEST_POST'			=> '查看最新帖子',
	'VIEW_NEWEST_POST'			=> '查看最新未读帖子',
	'VIEW_NOTES'				=> '查看用户记录',
	'VIEW_ONLINE_TIME'			=> '基于过去 %d 分钟内的用户活动记录',
	'VIEW_ONLINE_TIMES'			=> '基于过去 %d 分钟内的用户活动记录',
	'VIEW_TOPIC'				=> '查看主题',
	'VIEW_TOPIC_ANNOUNCEMENT'	=> '公告：',
	'VIEW_TOPIC_GLOBAL'			=> '全站公告：',
	'VIEW_TOPIC_LOCKED'			=> '锁定：',
	'VIEW_TOPIC_LOGS'			=> '查看记录',
	'VIEW_TOPIC_MOVED'			=> '移除：',
	'VIEW_TOPIC_POLL'			=> '投票：',
	'VIEW_TOPIC_STICKY'			=> '置顶：',
	'VISIT_WEBSITE'				=> '浏览网站',

	'WARNINGS'			=> '警告次数',
	'WARN_USER'			=> '警告用户',
	'WATCH_FORUM_CONFIRM'	=> '您确认要订阅这个版面吗?',
	'WATCH_FORUM_DETAILED'	=> '您确认要订阅 “%s” 版面吗?',
	'WATCH_TOPIC_CONFIRM'	=> '您确认要订阅这个主题吗?',
	'WATCH_TOPIC_DETAILED'	=> '您确认要订阅主题 “%s” 吗?',
	'WELCOME_SUBJECT'	=> '欢迎来到 %s 论坛',
	'WEBSITE'			=> '网站',
	'WHOIS'				=> 'Whois',
	'WHO_IS_ONLINE'		=> '在线用户',
	'WRONG_PASSWORD'	=> '您输入了错误的密码。',

    'WRONG_DATA_COLOUR'			=> '您输入的不是有效的颜色值。',
	'WRONG_DATA_ICQ'			=> '您输入的数字不是一个有效的 ICQ 号码。',
	'WRONG_DATA_JABBER'			=> '您输入的名字不是一个有效的 Jabber 帐号。',
	'WRONG_DATA_LANG'			=> '您指定了一个无效的语言。',
	'WRONG_DATA_WEBSITE'		=> '网站的地址无效，请包含通信协议。例如 http://www.phpbbchina.com/。',
	'WROTE'						=> '写道',

	'YEAR'				=> '年',
	'YEAR_MONTH_DAY'	=> '(YYYY-MM-DD)',
	'YES'				=> '是',
	'YIM'				=> 'YIM',	
	'YOU_LAST_VISIT'	=> '您的上次浏览时间是 %s',
	'YOU_NEW_PM'		=> '您的收件夹中有一条新短信',
	'YOU_NEW_PMS'		=> '您的收件夹中有数条新短信',
	'YOU_NO_NEW_PM'		=> '您的收件夹中没有新短信',

	'datetime'			=> array(
		'TODAY'		=> '今天',
		'TOMORROW'	=> '明天',
		'YESTERDAY'	=> '昨天',
		'AGO'		=> array(
			0		=> '不到 1 分钟前',
			1		=> '%d 分钟前',
			2		=> '%d 分钟前',
			60		=> '1 小时前',
		),

		'Sunday'	=> '星期天',
		'Monday'	=> '星期一',
		'Tuesday'	=> '星期二',
		'Wednesday'	=> '星期三',
		'Thursday'	=> '星期四',
		'Friday'	=> '星期五',
		'Saturday'	=> '星期六',

		'Sun'		=> '周日',
		'Mon'		=> '周一',
		'Tue'		=> '周二',
		'Wed'		=> '周三',
		'Thu'		=> '周四',
		'Fri'		=> '周五',
		'Sat'		=> '周六',

		'January'	=> '1月',
		'February'	=> '2月',
		'March'		=> '3月',
		'April'		=> '4月',
		'May'		=> '5月',
		'June'		=> '6月',
		'July'		=> '7月',
		'August'	=> '8月',
		'September' => '9月',
		'October'	=> '10月',
		'November'	=> '11月',
		'December'	=> '12月',

		'Jan'		=> '1月',
		'Feb'		=> '2月',
		'Mar'		=> '3月',
		'Apr'		=> '4月',
		'May_short'	=> '5月',	// Short representation of "May". May_short used because in english the short and long date are the same for May.
		'Jun'		=> '6月',
		'Jul'		=> '7月',
		'Aug'		=> '8月',
		'Sep'		=> '9月',
		'Oct'		=> '10月',
		'Nov'		=> '11月',
		'Dec'		=> '12月',
	),

	'tz'				=> array(
		'-12'	=> 'UTC - 12 小时',
		'-11'	=> 'UTC - 11 小时',
		'-10'	=> 'UTC - 10 小时',
		'-9.5'	=> 'UTC - 9:30 小时',
		'-9'	=> 'UTC - 9 小时',
		'-8'	=> 'UTC - 8 小时',
		'-7'	=> 'UTC - 7 小时',
		'-6'	=> 'UTC - 6 小时',
		'-5'	=> 'UTC - 5 小时', 
		'-4.5'	=> 'UTC - 4:30 小时',
		'-4'	=> 'UTC - 4 小时',
		'-3.5'	=> 'UTC - 3:30 小时',
		'-3'	=> 'UTC - 3 小时',
		'-2'	=> 'UTC - 2 小时',
		'-1'	=> 'UTC - 1 小时',
		'0'		=> 'UTC',
		'1'		=> 'UTC + 1 小时',
		'2'		=> 'UTC + 2 小时',
		'3'		=> 'UTC + 3 小时',
		'3.5'	=> 'UTC + 3:30 小时',
		'4'		=> 'UTC + 4 小时',
		'4.5'	=> 'UTC + 4:30 小时',
		'5'		=> 'UTC + 5 小时',
		'5.5'	=> 'UTC + 5:30 小时',
		'5.75'	=> 'UTC + 5:45 小时',
		'6'		=> 'UTC + 6 小时',
		'6.5'	=> 'UTC + 6:30 小时',
		'7'		=> 'UTC + 7 小时',
		'8'		=> 'UTC + 8 小时',
		'8.75'	=> 'UTC + 8:45 小时',
		'9'		=> 'UTC + 9 小时',
		'9.5'	=> 'UTC + 9:30 小时',
		'10'	=> 'UTC + 10 小时',
		'10.5'	=> 'UTC + 10:30 小时',
		'11'	=> 'UTC + 11 小时',
		'11.5'	=> 'UTC + 11:30 小时',
		'12'	=> 'UTC + 12 小时',
		'12.75'	=> 'UTC + 12:45 小时',
		'13'	=> 'UTC + 13 小时',
		'14'	=> 'UTC + 14 小时',
		'dst'	=> '[ <abbr title="夏令时">DST</abbr> ]',
	),

	'tz_zones'	=> array(
		'-12'	=> '[UTC - 12] 贝克岛时间',
		'-11'	=> '[UTC - 11] 纽埃岛[南太平洋中部]时间, 萨摩亚群岛[南太平洋]标准时间',
		'-10'	=> '[UTC - 10] 夏威夷-阿留申标准时, 库克岛的时间',
		'-9.5'	=> '[UTC - 9:30] 马克萨斯群岛[南太平洋]时间',
		'-9'	=> '[UTC - 9] 阿拉斯加时间, 甘岛时间',
		'-8'	=> '[UTC - 8] 太平洋标准时间',
		'-7'	=> '[UTC - 7] 山区标准时间',
		'-6'	=> '[UTC - 6] 美国中部标准时间',
		'-5'	=> '[UTC - 5] 美国东部标准时间',
		'-4.5'	=> '[UTC - 4:30] 委内瑞拉标准时间',
		'-4'	=> '[UTC - 4] 大西洋标准时间',
		'-3.5'	=> '[UTC - 3:30] 纽芬兰标准时间',
		'-3'	=> '[UTC - 3] 亚马逊标准时间, 中部格陵兰时间',
		'-2'	=> '[UTC - 2] 费尔南多迪诺罗尼亚时间, 南乔治亚岛和南桑威奇岛的时间',
		'-1'	=> '[UTC - 1] 亚述尔群岛标准时间, 佛得角时间, 格陵兰东部时间',
		'0'	=> '[UTC] 欧洲西部时间, 格林威治标准时间',
		'1'	=> '[UTC + 1] 欧洲中部时间, 非洲西部时间',
		'2'	=> '[UTC + 2] 欧洲东部时间, 非洲中部时间',
		'3'	=> '[UTC + 3] 莫斯科标准时间, 非洲东部时间',
		'3.5'	=> '[UTC + 3:30] 伊朗标准时间',
		'4'	=> '[UTC + 4] 海湾标准时间, 波斯湾标准时间, 萨马拉标准时间',
		'4.5'	=> '[UTC + 4:30] 阿富汗时间',
		'5'	=> '[UTC + 5] 巴基斯坦标准时间, 叶卡捷琳堡标准时间',
		'5.5'	=> '[UTC + 5:30] 印度标准时间, 斯里兰卡时间',
		'5.75'=> '[UTC + 5:45] 尼泊尔时间',
		'6'	=> '[UTC + 6] 孟加拉时间, 不丹时间, 新西伯利亚(诺沃西比尔斯克)标准时间',
		'6.5'	=> '[UTC + 6:30] 可可斯群岛时间, 缅甸时间',
		'7'	=> '[UTC + 7] 印度支那时间, 克拉斯诺亚尔斯克标准时间',
		'8'	=> '[UTC + 8] 中国标准时间, 澳洲西部标准时间, 伊尔库次克标准时间',
		'8.75'=> '[UTC + 8:45] 澳洲西部东南标准时间',
		'9'	=> '[UTC + 9] 日本标准时间, 韩国标准时间, 赤塔[俄罗斯西伯利亚南部城市]标准时间',
		'9.5'	=> '[UTC + 9:30] 澳洲中部标准时间',
		'10'	=> '[UTC + 10] 澳洲东部标准时间, 海参崴标准时间',
		'10.5'=> '[UTC + 10:30] 贺维标准时间',
		'11'	=> '[UTC + 11] 所罗门群岛时间, 马加丹标准时间',
		'11.5'=> '[UTC + 11:30] 诺福克群岛时间',
		'12'	=> '[UTC + 12] 新西兰时间, 斐济时间, 堪察加半岛[俄罗斯东北部]标准时间',
		'12.75'=> '[UTC + 12:45] 查塔姆群岛[新西兰东部]时间',
		'13'	=> '[UTC + 13] 汤加时间, 菲尼克斯群岛时间',
		'14'	=> '[UTC + 14] 路线岛时间',
	),

	// The value is only an example and will get replaced by the current time on view
	'dateformats'	=> array(
		'Y-m-d  G:i'			=> '2007-01-01 13:37',
		'Y年 M j日 H:i'			=> '2007年 1月 1日 13:37',
		'Y年 M j日 g:i a'		=> '2007年 1月 1日 1:37 pm',
		'Y年 M j日 D g:i a'		=> '2007年 1月 1日 周一 1:37 pm',
		'Y年 M j日 l g:i a'		=> '2007年 1月 1日 星期一 1:37 pm',
		'Y年 M j日 H:i l'		=> '2007年 1月 1日 13:37 星期一',
		'|Y年 M j日| H:i'		=> '2007年 1月 1日 13:37 [今天、昨天]',
	),

	// The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
	'default_dateformat'	=> 'Y-m-d  G:i', // 2007-01-01 13:37

));

?>
