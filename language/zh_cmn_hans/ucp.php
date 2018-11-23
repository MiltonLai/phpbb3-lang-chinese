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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> '对 “%1$s” (下文中指代 “我们”，“我们的”，“%1$s”，“%2$s”)的访问，表明您同意并遵守以下具有法律效力之条款。如果您不同意以下条款，请停止访问和使用 “%1$s”。我们可能在我们认为合适的时候，在并未通知您的情况下改变这些条款，您在条款改变后继续使用 “%1$s” 将被认为认同并遵守这些条款.<br />
	<br />
	我们的论坛运行使用 phpBB (下文中指代 “他们”，“他们的”，“phpBB 软件”，“www.phpbb.com”，“phpBB Limited”，“phpBB 团队”)系统，这是一个使用 “<a href="http://opensource.org/licenses/gpl-2.0.php">GNU General Public License v2</a>” (下文指代 “GPL”) 软件协议的公告栏系统解决方案，可以从 <a href="https://www.phpbb.com/">www.phpbb.com</a> 免费获得。phpBB 软件仅用于推动基于 Internet 的讨论， phpBB团队对于允许或禁止内容及由此产生的后果不承担任何责任。如果希望得到更多关于phpBB的信息，请访问: <a href="https://www.phpbb.com/">https://www.phpbb.com/</a>.<br />
	<br />
	您同意不张贴任何带有辱骂，淫秽，粗俗，诽谤，仇恨，威胁，色情的内容，不张贴任何带有侵犯您所在国家的法律， “%1$s” 所在国家的法律，国际公法的内容。以上的行为可能会使您在未得到通知的情况下被永远禁止访问这个论坛。所有帖子发表所使用的 IP 地址将被记录，以协助调查违反条款的事件。您同意 “%1$s” 具有在任何我们认为合适的时候删除，修改，移动，或关闭任何主题的权力。作为一个用户，您同意您所输入的任何信息将被记录至数据库。在没有得到您同意的前提下我们不会向任何第三方发布这些信息，但是 “%1$s” 和 phpBB 不能为任何因为黑客行为导致的数据泄漏承担法律责任.
	',

	'PRIVACY_POLICY'		=> '这个策略用于细节化地解释 “%1$s” 和其附属的组织机构 (下文中指代 “我们”, “我方”, “我们的”, “%1$s”, “%2$s”) 和 phpBB (下文指代 “他们”, “他方”, “他们的”, “phpBB software”, “www.phpbb.com”, “phpBB Limited”, “phpBB 开发团队”) 如何使用在与您的对话中得到的与您有关的信息 (下文中指代 “您的信息”).<br />
	<br />
	您的信息通过两种方式产生. 首先, 通过浏览 “%1$s” 将使 phpBB 软件在您的电脑中生成一定数量的 cookie 文件, 这些 cookie 是浏览器用于缓存信息的临时文件. 其中有两个 cookie 包含用户的ID信息 (下文指代 “用户ID”) 和一个匿名的用户对话ID (下文中指代 “对话ID”), 将被 phpBB 软件指派自动生成. 第三个cookie 将在您浏览 “%1$s” 中的主题后自动产生, 用于存储您的浏览历史信息, 用于提高用户体验.<br />
	<br />
	您在浏览 “%1$s” 时会产生 phpBB 软件之外的 cookie, 这不属于本策略的声明范围, 本策略仅覆盖 phpBB 软件所创建的页面。第二种是我们通过您在软件中提交的内容收集到的您的信息. 这些情况包含但不限于: 以匿名用户发帖 (下文中指代 “匿名帖子”), 在 “%1$s” 上注册帐号 (下文中指代 “您的帐号”) 登录动作和您在注册后发表的帖子 (下文中指代 “您的帖子”).<br />
	<br />
	您的帐号将至少包含一个唯一的用户名 (下文中指代 “您的用户名”), 一个用于登录您的帐号的个人密码 (下文中指代 “您的密码”) 和一个私人的有效 email 地址 (下文中指代 “您的 email”). 您在 “%1$s” 上的帐号所包含的信息将受到我们的主机所在国家的数字保护法律的保护. 除了您的用户名和您的密码以及在注册过程中 “%1$s” 要求的email地址以外, 您的其他任何信息都是可选的(除了软件使用者的特殊要求). 在任何情况下, 您可以选择您的信息是否被公开. 此外, 在您的帐号中, 您可以选择定向收发 phpBB 软件自动生成的email.<br />
	<br />
	您的密码在软件中以加密形式存在 (不可逆算法)，所以它是安全的。但是，我们希望您不要在不同的网站上使用相同的用户名和密码。您的密码是你在 “%1$s” 上访问您的帐号的唯一途径, 所以请谨慎保管您的密码。在任何情况下不会有任何与 “%1$s” 相关的个人或组织，或者 phpBB，或者第三方机构需要您提供密码。如果您不慎遗失密码，您可以使用 phpBB 软件提供的 “我忘记了我的密码” 功能。在找回密码的过程中您将需要提供用户名和email, 而后 phpBB 软件将会提供一个新的密码让您取回帐号。<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> '您的帐号已经激活，感谢您的注册。',
	'ACCOUNT_ACTIVE_ADMIN'			=> '这个帐号现在被激活了',
	'ACCOUNT_ACTIVE_PROFILE'		=> '您的帐号已经重新激活.',
	'ACCOUNT_ADDED'					=> '感谢注册，您的帐号已经建立，请使用您的用户名和密码登录。',
	'ACCOUNT_COPPA'					=> '您的帐号已经建立但是需要批准。更多信息请查收您的 Email。',
	'ACCOUNT_EMAIL_CHANGED'			=> '您的帐号已经更新. 但是, 论坛需要您重新验证email的更改. 包含激活代码的email已经发送到您的新邮箱, 请检查邮箱以激活帐号.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> '您的帐号已经更新. 但是, 论坛需要由管理员验证您的email更改. 您会收到一封包含此信息的email, 在帐号激活后, 我们会再次email通知您.',
	'ACCOUNT_INACTIVE'				=> '您的帐号已经建立，激活码已经发往您的 Email，请查收以获得更多信息。如果没有收到邮件，请查看一下垃圾邮件箱，另外不同邮件服务商也可能造成邮件延迟。',
	'ACCOUNT_INACTIVE_ADMIN'		=> '您的帐号已经建立，但是您必须等待管理员批准帐号后才能登录。您将收到一封 Email，在帐号获得批准后我们将再次通知您。',
	'ACTIVATION_EMAIL_SENT'			=> '激活 Email 已经发往您的邮箱',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> '激活 Email 已经发往论坛管理员的邮箱.',
	'ADD'							=> '添加',
	'ADD_BCC'						=> '添加[BCC]',
	'ADD_FOES'						=> '添加损友',
	'ADD_FOES_EXPLAIN'				=> '您可以在不同的行上分别输入几个用户名',
	'ADD_FOLDER'					=> '添加文件夹',
	'ADD_FRIENDS'					=> '添加好友',
	'ADD_FRIENDS_EXPLAIN'			=> '您可以在不同的行上分别输入几个用户名',
	'ADD_NEW_RULE'					=> '添加新规则',
	'ADD_RULE'						=> '添加规则',
	'ADD_TO'						=> '添加【收件人】',
	'ADD_USERS_UCP_EXPLAIN'			=> '你可以在这里添加新组员. 您可以选择是否让这个组成为新组员的默认组. 多个会员请分行输入.',
	'ADMIN_EMAIL'					=> '管理员可以给我发送 Email',
	'AGREE'							=> '我同意这些条款',
	'ALLOW_PM'						=> '允许用户给我发站内消息',
	'ALLOW_PM_EXPLAIN'				=> '注意：管理员和版主有给您发站内消息的特权。',
	'ALREADY_ACTIVATED'				=> '您已经激活了您的帐号',
	'ATTACHMENTS_EXPLAIN'			=> '这是您在论坛中发表的附件列表。',
	'ATTACHMENTS_DELETED'			=> '成功删除数个附件。',
	'ATTACHMENT_DELETED'			=> '成功删除附件。',
    'AUTOLOGIN_SESSION_KEYS_DELETED'=> '选中的"自动登录"键已经成功删除。',
	'AVATAR_CATEGORY'				=> '分类',
    'AVATAR_DRIVER_GRAVATAR_TITLE'	=> 'Gravatar',
    'AVATAR_DRIVER_GRAVATAR_EXPLAIN'=> 'Gravatar服务使您在多个网站上使用相同的头像. 访问 <a href="http://www.gravatar.com/">Gravatar</a> 查看更多信息.',
    'AVATAR_DRIVER_LOCAL_TITLE'		=> 'Gallery 头像',
    'AVATAR_DRIVER_LOCAL_EXPLAIN'	=> '您可以在本地头像中选择。',
    'AVATAR_DRIVER_REMOTE_TITLE'	=> '远程头像',
    'AVATAR_DRIVER_REMOTE_EXPLAIN'	=> '链接到其它网站的头像。',
    'AVATAR_DRIVER_UPLOAD_TITLE'	=> '上传头像',
    'AVATAR_DRIVER_UPLOAD_EXPLAIN'	=> '上传您的自定义头像。',
	'AVATAR_EXPLAIN'				=> '最大尺寸：宽 %1$d 象素, 高 %2$d 象素, 文件大小 %3$.2f KiB.',
    'AVATAR_EXPLAIN_NO_FILESIZE'	=> '最大尺寸; 宽: %1$s, 高: %2$s.',
	'AVATAR_FEATURES_DISABLED'		=> '头像功能暂时关闭.',
	'AVATAR_GALLERY'				=> '本地图库',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> '无法上传头像到 %s',
	'AVATAR_NOT_ALLOWED'			=> '无法显示头像, 因为头像功能已经停用.',
	'AVATAR_PAGE'					=> '页',
    'AVATAR_SELECT'					=> '选择您的头像',
    'AVATAR_TYPE'					=> '头像类型',
	'AVATAR_TYPE_NOT_ALLOWED'		=> '当前头像无法显示, 因为该头像类型已经停用.',

	'BACK_TO_DRAFTS'			=> '回到已经保存的草稿',
	'BACK_TO_LOGIN'				=> '回到登录窗口',
	'BIRTHDAY'					=> '生日',
	'BIRTHDAY_EXPLAIN'			=> '如果设置年份，在您生日时，生日列表中将显示您的年龄。',
	'BOARD_DATE_FORMAT'			=> '我的时间格式',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> '时间格式设置使用 PHP <a href="http://www.php.net/date">date()</a> 函数',
	'BOARD_LANGUAGE'			=> '我的语言',
	'BOARD_STYLE'				=> '我的论坛风格',
	'BOARD_TIMEZONE'			=> '我的时区',
	'BOOKMARKS'					=> '收藏夹',
	'BOOKMARKS_EXPLAIN'			=> '您可以收藏主题以方便将来查找。如果需要删除其中的条目请选中勾选框，然后点击 <em>删除选中条目</em> 按钮。',
	'BOOKMARKS_DISABLED'		=> '论坛已经禁用收藏夹',
	'BOOKMARKS_REMOVED'			=> '成功移除了条目',

	'CANNOT_EDIT_MESSAGE_TIME'	=> '您将不能再编辑或删除这个消息',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> '您不能将消息移往将被删除的文件夹。',
	'CANNOT_MOVE_FROM_SPECIAL'	=> '消息不能从发件箱中移出。',
	'CANNOT_RENAME_FOLDER'		=> '这个文件夹不能被重命名。',
	'CANNOT_REMOVE_FOLDER'		=> '这个文件夹不能删除。',
	'CHANGE_DEFAULT_GROUP'		=> '更改默认组',
	'CHANGE_PASSWORD'			=> '更改密码',
	'CLICK_GOTO_FOLDER'			=> '%1$s前往您的 “%3$s” 文件夹%2$s',
	'CLICK_RETURN_FOLDER'		=> '%1$s回到您的 “%3$s” 文件夹%2$s',
	'CONFIRMATION'				=> '注册确认',
	'CONFIRM_CHANGES'			=> '确认修改',
	'CONFIRM_EXPLAIN'			=> '为了防止机器自动注册行为，请输入一组确认码，确认码显示在下面的图片中。如果您对阅读这组确认码存在困难，请联络 %s论坛管理员%s。',
	'VC_REFRESH'                => '刷新确认码',
	'VC_REFRESH_EXPLAIN'        => '如果您无法辨认当前的确认码, 您可以点击按钮更换新的确认码.',

	'CONFIRM_PASSWORD'			=> '确认新密码',
	'CONFIRM_PASSWORD_EXPLAIN'	=> '只有在改变密码时您才需要再重复输入一次',
	'COPPA_BIRTHDAY'			=> '为了继续注册进程，请输入您的生日。',
	'COPPA_COMPLIANCE'			=> 'COPPA 守则',
	'COPPA_EXPLAIN'				=> '请注意点击提交将创建您的帐号，但是帐号将需要父母或监护人的批复才能激活。您将收到一份包含表单拷贝的 email 指导您后续的操作。',
	'CREATE_FOLDER'				=> '添加文件夹',
	'CURRENT_IMAGE'				=> '当前图片',
	'CURRENT_PASSWORD'			=> '当前密码',
	'CURRENT_PASSWORD_EXPLAIN'	=> '如果您要修改email地址或者用户名，您必须输入您当前的密码。',
	'CURRENT_CHANGE_PASSWORD_EXPLAIN' => '如果您要修改密码，email地址或者用户名，您必须输入您当前的密码。',
	'CUR_PASSWORD_EMPTY'		=> '未输入当前密码.',
	'CUR_PASSWORD_ERROR'		=> '您输入的当前密码不正确。',
	'CUSTOM_DATEFORMAT'			=> '自定义',

	'DEFAULT_ACTION'			=> '默认操作',
	'DEFAULT_ACTION_EXPLAIN'	=> '如果以上都不可用，这个操作将被触发',
	'DEFAULT_ADD_SIG'			=> '默认添加我的签名',
	'DEFAULT_BBCODE'			=> '默认允许 BBCode',
	'DEFAULT_NOTIFY'			=> '默认在有回复时通知',
	'DEFAULT_SMILIES'			=> '默认允许表情',
	'DEFINED_RULES'				=> '已设定的规则',
	'DELETED_TOPIC'				=> '已经删除的主题',
	'DELETE_ATTACHMENT'			=> '删除附件',
	'DELETE_ATTACHMENTS'		=> '删除附件',
	'DELETE_ATTACHMENT_CONFIRM'	=> '您确认删除这个附件吗？',
	'DELETE_ATTACHMENTS_CONFIRM'=> '您确认删除这些附件吗？',
	'DELETE_AVATAR'				=> '删除图片',
	'DELETE_COOKIES_CONFIRM'	=> '您确认删除本论坛的所有cookie吗？',
	'DELETE_MARKED_PM'			=> '删除选中的消息',
	'DELETE_MARKED_PM_CONFIRM'	=> '您确认删除所有选中的消息吗？',
	'DELETE_OLDEST_MESSAGES'	=> '删除最早的消息',
	'DELETE_MESSAGE'			=> '删除消息',
	'DELETE_MESSAGE_CONFIRM'	=> '您确认删除这些消息吗？',
	'DELETE_MESSAGES_IN_FOLDER'	=> '清空回收站中的消息',
	'DELETE_RULE'				=> '删除规则',
	'DELETE_RULE_CONFIRM'		=> '您确认删除这条规则吗？',
	'DEMOTE_SELECTED'			=> '降级所选',
	'DISABLE_CENSORS'			=> '开启用词过滤',
	'DISPLAY_GALLERY'			=> '显示类别',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> '输入的 email 域名没有有效的 MX 记录。',
	'DOWNLOADS'					=> '下载',
	'DRAFTS_DELETED'			=> '所有选中的草稿已经被删除。',
	'DRAFTS_EXPLAIN'			=> '这里可以查看，编辑和删除您保存的草稿。',
	'DRAFT_UPDATED'				=> '草稿已经更新。',

	'EDIT_DRAFT_EXPLAIN'		=> '这里您可以编辑你的草稿。草稿不能包含附件和投票。',
	'EMAIL_BANNED_EMAIL'		=> '您输入的 email 地址不允许使用。',
	'EMAIL_REMIND'				=> '这必须是与您的帐户关联的 e-mail 地址。如果您没有通过管理界面改变过您的 e-mail 地址，它就是您在注册时使用的地址。',
	'EMAIL_TAKEN_EMAIL'			=> '您输入的 email 地址已经被使用',
	'EMPTY_DRAFT'				=> '您必须填入适当的内容才能提交更改',
	'EMPTY_DRAFT_TITLE'			=> '您必须输入一个草稿标题',
	'EXPORT_AS_XML'				=> '导出为 XML',
	'EXPORT_AS_CSV'				=> '导出为 CSV',
	'EXPORT_AS_CSV_EXCEL'		=> '导出为 CSV (Excel)',
	'EXPORT_AS_TXT'				=> '导出为 TXT',
	'EXPORT_AS_MSG'				=> '导出为 MSG',
	'EXPORT_FOLDER'				=> '导出目录',

	'FIELD_REQUIRED'					=> '表格 “%s” 没有完成。',
    'FIELD_TOO_SHORT'					=> array(
        1	=> '字段 “%2$s” 内容太短，至少需要 %1$d 个字符。',
        2	=> '字段 “%2$s” 内容太短，至少需要 %1$d 个字符。',
    ),
    'FIELD_TOO_LONG'					=> array(
        1	=> '字段 “%2$s” 内容太长，最多允许 %1$d 个字符。',
        2	=> '字段 “%2$s” 内容太长，最多允许 %1$d 个字符。',
    ),
    'FIELD_TOO_SMALL'					=> '“%2$s”的值太小，至少需要 %1$d 。',
    'FIELD_TOO_LARGE'					=> '“%2$s”的值太大，最多允许 %1$d 。',
    'FIELD_INVALID_CHARS_INVALID'		=> '字段 “%s” 包含无效字符。',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> '字段 “%s” 包含无效字符，只允许填入数字。',
    'FIELD_INVALID_CHARS_ALPHA_DOTS'	=> '字段 “%s” 包含无效字符，只允许填入英文字符和“.”。',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> '字段 “%s” 包含无效字符，只允许填入英文字符。',
    'FIELD_INVALID_CHARS_ALPHA_PUNCTUATION'	=> '字段 “%s” 包含无效字符，只允许填入英文字符和“_”,“-”，第一个字符必须是英文字符。',
    'FIELD_INVALID_CHARS_ALPHA_SPACERS'	=> '字段 “%s” 包含无效字符，只允许填入英文字符，空格和 -+_[] 这些符号。',
    'FIELD_INVALID_CHARS_ALPHA_UNDERSCORE'	=> '字段 “%s” 包含无效字符，只允许填入英文字符和下划线"_“。',
    'FIELD_INVALID_CHARS_LETTER_NUM_DOTS'	=> '字段 “%s” 包含无效字符，只允许填入字符，数字和”.“。',
    'FIELD_INVALID_CHARS_LETTER_NUM_ONLY'	=> '字段 “%s” 包含无效字符，只允许填入字符和数字。',
    'FIELD_INVALID_CHARS_LETTER_NUM_PUNCTUATION'	=> '字段 “%s” 包含无效字符，只允许填入字符，数字和”_“,”-“。第一个必须是英文字符。',
    'FIELD_INVALID_CHARS_LETTER_NUM_SPACERS'		=> '字段 “%s” 包含无效字符，只允许填入字符，数字，空格和 -+_[] 。',
    'FIELD_INVALID_CHARS_LETTER_NUM_UNDERSCORE'		=> '字段 “%s” 包含无效字符，只允许填入字符，数字和下划线”_”。',
	'FIELD_INVALID_DATE'				=> '字段 “%s” 包含无效日期。',
    'FIELD_INVALID_URL'					=> '字段 “%s” 包含的url无效。',
	'FIELD_INVALID_VALUE'				=> '字段 “%s” 的值无效。',

	'FOE_MESSAGE'				=> '拉黑用户发来的消息',
	'FOES_EXPLAIN'				=> '拉黑名单上的用户默认被忽略。这些用户的帖子将不会全部显示并且不允许对您发送站内消息。请注意这不能阻止版主和管理员的消息。',
	'FOES_UPDATED'				=> '您的拉黑名单已经更新',
	'FOLDER_ADDED'				=> '文件夹已经添加',
    'FOLDER_MESSAGE_STATUS'		=> array(
        1	=> '%2$d / %1$s 已存储的消息',
        2	=> '%2$d / %1$s 已存储的消息',
    ),
	'FOLDER_NAME_EMPTY'			=> '您需要指定一个文件夹名称.',
	'FOLDER_NAME_EXIST'			=> '文件夹 <strong>%s</strong> 已经存在',
	'FOLDER_OPTIONS'			=> '文件夹选项',
	'FOLDER_RENAMED'			=> '文件夹已经重命名',
	'FOLDER_REMOVED'			=> '文件夹已经删除',
    'FOLDER_STATUS_MSG'			=> array(
        1	=> '文件夹空间使用率 %3$d%% (%2$d / %1$s 占用)',
        2	=> '文件夹空间使用率 %3$d%% (%2$d / %1$s 占用)',
    ),
	'FORWARD_PM'				=> '转发消息',
	'FORCE_PASSWORD_EXPLAIN'	=> '为了继续浏览论坛，您需要更改您的密码',
	'FRIEND_MESSAGE'			=> '好友的消息',
	'FRIENDS'					=> '好友',
	'FRIENDS_EXPLAIN'			=> '好友名单能让您迅速找到您经常联络的其他用户。如果模板支持，好友发表的帖子将被高亮显示。',
	'FRIENDS_OFFLINE'			=> '离线好友',
	'FRIENDS_ONLINE'			=> '线上好友',
	'FRIENDS_UPDATED'			=> '您的好友名单已经更新',
	'FULL_FOLDER_OPTION_CHANGED'=> '在文件夹满时的操作已经更改',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- 原消息 --------',
	'FWD_SUBJECT'				=> '标题: %s',
	'FWD_DATE'					=> '日期: %s',
	'FWD_FROM'					=> '发信人: %s',
	'FWD_TO'					=> '收信人: %s',

	'GLOBAL_ANNOUNCEMENT'		=> '全站公告',

    'GRAVATAR_AVATAR_EMAIL'			=> 'Gravatar email',
    'GRAVATAR_AVATAR_EMAIL_EXPLAIN'	=> '输入您在<a href="http://www.gravatar.com/">Gravatar</a>注册帐号时使用的Email。',
    'GRAVATAR_AVATAR_SIZE'			=> '头像尺寸',
    'GRAVATAR_AVATAR_SIZE_EXPLAIN'	=> '请设置头像的高度和宽度，若留空则自动检测。',

	'HIDE_ONLINE'				=> '隐藏您的线上状态',
	'HIDE_ONLINE_EXPLAIN'		=> '若您更改这个设置，它将在您下次访问论坛时生效。',
	'HOLD_NEW_MESSAGES'			=> '不接收新消息 (新消息将被挂起直到有足够的可用空间)',
	'HOLD_NEW_MESSAGES_SHORT'	=> '新消息将被挂起',

	'IF_FOLDER_FULL'			=> '如果文件夹已经装满',
	'IMPORTANT_NEWS'			=> '重要公告',
	'INVALID_USER_BIRTHDAY'			=> '输入的生日日期无效.',
	'INVALID_CHARS_USERNAME'	=> '用户名包含禁用字符。',
	'INVALID_CHARS_NEW_PASSWORD'=> '密码没有包含要求的字符。',
	'ITEMS_REQUIRED'			=> '标记 * 号的表格是必填项目',

	'JOIN_SELECTED'				=> '加入选中',

	'LANGUAGE'					=> '语系',
	'LINK_REMOTE_AVATAR'		=> '远程头像链接',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> '输入包含您的头像的远程链接地址。',
	'LINK_REMOTE_SIZE'			=> '头像尺寸',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> '指定头像的长和宽，如果留空将自动检测。',
	'LOGIN_EXPLAIN_UCP'			=> '请登录后使用用户控制面板',
    'LOGIN_LINK'					=> '用您的论坛账号关联或注册外部服务',
    'LOGIN_LINK_EXPLAIN'			=> '您正尝试登录使用的外部服务尚未关联到论坛账号，您必须将其关联到一个已有的账号或者注册一个新的。',
    'LOGIN_LINK_MISSING_DATA'		=> '用于关联您账号与外部服务所需的数据不可用，请重新登录。',
    'LOGIN_LINK_NO_DATA_PROVIDED'	=> '连接外部账号到论坛账号所需的数据尚未被被提供到此页面，如果还一直遇到这个问题，请联系论坛管理员。',
    'LOGIN_KEY'					=> '登录密钥',
    'LOGIN_TIME'				=> '登录时间',
	'LOGIN_REDIRECT'			=> '您已经成功登录',
	'LOGOUT_FAILED'				=> '您没有退出登录, 因为请求并不符合您这次对话信息. 请联络论坛管理员反映这个问题.',
	'LOGOUT_REDIRECT'			=> '您已经顺利退出',

	'MARK_IMPORTANT'				=> '标记为重要',
	'MARKED_MESSAGE'				=> '已标记的消息',
	'MAX_FOLDER_REACHED'			=> '达到最大用户允许自定义文件夹数目',
	'MESSAGE_BY_AUTHOR'				=> '由',
	'MESSAGE_COLOURS'				=> '消息颜色',
	'MESSAGE_DELETED'				=> '消息已经删除',
    'MESSAGE_EDITED'				=> '消息已编辑',
	'MESSAGE_HISTORY'				=> '消息历史',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> '这条消息已被发送者删除',
	'MESSAGE_SENT_ON'				=> '时间',
	'MESSAGE_STORED'				=> '消息发送成功',
	'MESSAGE_TO'					=> '收件人',
	'MESSAGES_DELETED'				=> '消息已经删除',
	'MOVE_DELETED_MESSAGES_TO'		=> '移动已删除的消息到',
	'MOVE_DOWN'						=> '下移',
	'MOVE_MARKED_TO_FOLDER'			=> '移动标记的到 %s',
    'MOVE_PM_ERROR'					=> array(
        1	=> '当移动消息到新文件夹时发生错误，只有 %2$d / %1$s 的消息被移动。',
        2	=> '当移动消息到新文件夹时发生错误，只有 %2$d / %1$s 的消息被移动。',
    ),
	'MOVE_TO_FOLDER'				=> '移动到文件夹',
	'MOVE_UP'						=> '上移',

	'NEW_FOLDER_NAME'				=> '新文件夹名',
	'NEW_PASSWORD'					=> '新密码', 
	'NEW_PASSWORD_CONFIRM_EMPTY'	=> '您需要再次输入密码.',
	'NEW_PASSWORD_ERROR'			=> '您输入的密码不匹配',

    'NOTIFICATIONS_MARK_ALL_READ'						=> '将所有通知标记为已读',
    'NOTIFICATIONS_MARK_ALL_READ_CONFIRM'				=> '您确定要标记所有通知为已读吗？',
    'NOTIFICATIONS_MARK_ALL_READ_SUCCESS'				=> '所用通知已被标记为已读。',
    'NOTIFICATION_GROUP_MISCELLANEOUS'					=> '其他通知',
    'NOTIFICATION_GROUP_MODERATION'						=> '版主通知',
    'NOTIFICATION_GROUP_ADMINISTRATION'					=> '管理员通知',
    'NOTIFICATION_GROUP_POSTING'						=> '发布通知',
    'NOTIFICATION_METHOD_BOARD'							=> '通知',
    'NOTIFICATION_METHOD_EMAIL'							=> 'Email',
    'NOTIFICATION_METHOD_JABBER'						=> 'Jabber',
    'NOTIFICATION_TYPE'									=> '通知类型',
    'NOTIFICATION_TYPE_BOOKMARK'						=> '有人回复了您收藏的主题',
    'NOTIFICATION_TYPE_GROUP_REQUEST'					=> '有人请求加入您的组',
    'NOTIFICATION_TYPE_IN_MODERATION_QUEUE'				=> '一个贴子或主题需要批准',
    'NOTIFICATION_TYPE_MODERATION_QUEUE'				=> '您的主题/帖子被版主审批通过或驳回',
    'NOTIFICATION_TYPE_PM'								=> '有人给您发送站内消息',
    'NOTIFICATION_TYPE_POST'							=> '有人回复了您订阅的主题',
    'NOTIFICATION_TYPE_QUOTE'							=> '您被他人的贴子引用',
    'NOTIFICATION_TYPE_REPORT'							=> '有人举报了帖子',
    'NOTIFICATION_TYPE_TOPIC'							=> '有人在您订阅的版面发布了主题',
    'NOTIFICATION_TYPE_ADMIN_ACTIVATE_USER'				=> '用户需要激活',

	'NOTIFY_METHOD'					=> '通知方式',
	'NOTIFY_METHOD_BOTH'			=> '全部',
	'NOTIFY_METHOD_EMAIL'			=> '只用 email',
	'NOTIFY_METHOD_EXPLAIN'			=> '通过这个论坛发送消息的方法',
	'NOTIFY_METHOD_IM'				=> '只用 Jabber',
	'NOTIFY_ON_PM'					=> '当有新消息时通知我',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> '您不能添加匿名用户到您的好友列表',
	'NOT_ADDED_FRIENDS_BOTS'		=> '您不能添加搜索爬虫到您的好友列表',
	'NOT_ADDED_FRIENDS_FOES'		=> '您不能添加损友列表上的用户到您的好友列表',
	'NOT_ADDED_FRIENDS_SELF'		=> '您不能将自己添加为好友',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> '您不能将管理员和版主拉黑',
	'NOT_ADDED_FOES_ANONYMOUS'		=> '您不能将匿名用户拉黑',
	'NOT_ADDED_FOES_BOTS'			=> '您不能将搜索爬虫拉黑',
	'NOT_ADDED_FOES_FRIENDS'		=> '您不能将好友列表中的用户拉黑',
	'NOT_ADDED_FOES_SELF'			=> '您不能将自己拉黑',
	'NOT_AGREE'						=> '我不同意这些条款',
	'NOT_ENOUGH_SPACE_FOLDER'		=> '目标文件夹 “%s” 已经装满。请求的操作没有完成',
    'NOT_MOVED_MESSAGES'			=> array(
        1	=> '您有 %d 条等待的消息，因为您的收件夹已满。',
        2	=> '您有 %d 条等待的消息，因为您的收件夹已满。',
    ),
	'NO_ACTION_MODE'				=> '没有指定操作。',
	'NO_AUTHOR'						=> '这条消息没有设定作者',
    'NO_AVATAR'						=> '未选择头像',
	'NO_AVATAR_CATEGORY'			=> '无',

	'NO_AUTH_DELETE_MESSAGE'		=> '您不能删除站内消息',
	'NO_AUTH_EDIT_MESSAGE'			=> '您不能编辑站内消息',
	'NO_AUTH_FORWARD_MESSAGE'		=> '您不能转发站内消息',
	'NO_AUTH_GROUP_MESSAGE'			=> '您不能群发站内消息',
    'NO_AUTH_PROFILEINFO'			=> '您不能修改资料信息',
	'NO_AUTH_READ_HOLD_MESSAGE'     => '您不能阅读等待中的消息',
	'NO_AUTH_READ_MESSAGE'			=> '您不能阅读站内消息',
    'NO_AUTH_PRINT_MESSAGE'			=> '您不能打印站内消息。',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> '您不能阅读这条消息，因为已经被作者删除',
	'NO_AUTH_SEND_MESSAGE'			=> '您不能发送站内消息',
	'NO_AUTH_SIGNATURE'				=> '您不能设定个人签名',

	'NO_BCC_RECIPIENT'			=> '无',
	'NO_BOOKMARKS'				=> '您没有收藏',
	'NO_BOOKMARKS_SELECTED'		=> '您没有选中收藏',
	'NO_EDIT_READ_MESSAGE'		=> '这条消息无法被编辑，因为它已经被阅读了',
	'NO_EMAIL_USER'				=> '提交的 Email/用户名信息无法找到',
    'EMAIL_NOT_UNIQUE'			=> '您指定的Email被多个用户使用，请具体指定用户名。',
	'NO_FOES'					=> '没有定义损友',
	'NO_FRIENDS'				=> '没有定义好友',
	'NO_FRIENDS_OFFLINE'		=> '没有离线好友',
	'NO_FRIENDS_ONLINE'			=> '没有线上好友',
	'NO_GROUP_SELECTED'			=> '没有指定用户组',
	'NO_IMPORTANT_NEWS'			=> '没有重要公告',
	'NO_MESSAGE'				=> '无法找到站内消息',
	'NO_NEW_FOLDER_NAME'		=> '您必须指定一个新文件夹名',
	'NO_NEWER_PM'				=> '没有更新的消息',
	'NO_OLDER_PM'				=> '没有更早的消息',
	'NO_PASSWORD_SUPPLIED'		=> '您不能使用空白密码登录.',
	'NO_RECIPIENT'				=> '没有定义收信人',
	'NO_RULES_DEFINED'			=> '没有定义的规则',
	'NO_SAVED_DRAFTS'			=> '没有保存的草稿',
	'NO_TO_RECIPIENT'			=> '无',
	'NO_WATCHED_FORUMS'			=> '您没有订阅任何版面。',
	'NO_WATCHED_SELECTED'       => '您没有选中任何已订阅的主题或版面.',
	'NO_WATCHED_TOPICS'			=> '您没有订阅任何主题。',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> '密码长度必须介于 %1$s 和 %2$s 之间并且包含大小写混合的英文字符和数字',
	'PASS_TYPE_ANY_EXPLAIN'		=> '密码长度必须介于 %1$s 和 %2$s 之间',
	'PASS_TYPE_CASE_EXPLAIN'	=> '密码长度必须介于 %1$s 和 %2$s 之间并且包含大小写混合的英文字符',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> '密码长度必须介于 %1$s 和 %2$s 之间并且包含大小写混合的英文字符，数字和符号',
	'PASSWORD'					=> '密码',
	'PASSWORD_ACTIVATED'		=> '您的新密码已经启用',
    'PASSWORD_UPDATED_IF_EXISTED'	=> '如果您的用户存在，新的密码将会被发送到您注册的邮箱。如果您没有收到邮件，请检查垃圾邮件箱，也有可能是您的帐号已经被封禁，或您不能修改密码。如果是这些情况请联系论坛管理员。',
	'PERMISSIONS_RESTORED'		=> '成功恢复原权限。',
	'PERMISSIONS_TRANSFERRED'	=> '成功切换到 <strong>%s</strong>的权限, 您现在可以使用这个用户的权限浏览版面.<br />请注意管理员权限不会被切换. 您可以在任何时候恢复回原权限。',
	'PM_DISABLED'				=> '这个论坛的站内消息功能已经关闭',
	'PM_FROM'					=> '发件人',
	'PM_FROM_REMOVED_AUTHOR'	=> '这条消息的发送者已经不再是注册用户。',
	'PM_ICON'					=> '消息图标',
	'PM_INBOX'					=> '收件箱',
    'PM_MARK_ALL_READ'			=> '将所有消息标记为已读',
    'PM_MARK_ALL_READ_SUCCESS'	=> '所有此文件夹的站内消息已经被标记为已读',
	'PM_NO_USERS'				=> '请求添加的用户不存在.',
	'PM_OUTBOX'					=> '发件箱',
	'PM_SENTBOX'				=> '已发送',
	'PM_SUBJECT'				=> '消息标题',
	'PM_TO'						=> '发送给',
    'PM_TOOLS'					=> '消息工具',
    'PM_USERS_REMOVED_NO_PERMISSION'	=> '一些用户无法添加，因为他们没有权限阅读站内消息。',
	'PM_USERS_REMOVED_NO_PM'	=> '一些用户无法添加，因为他们禁用了站内消息接收。',
	'POST_EDIT_PM'				=> '编辑消息',
	'POST_FORWARD_PM'			=> '转发消息',
	'POST_NEW_PM'				=> '发送消息',
	'POST_PM_LOCKED'			=> '站内消息已锁定',
	'POST_PM_POST'				=> '引用帖子',
	'POST_QUOTE_PM'				=> '引用消息',
	'POST_REPLY_PM'				=> '回复消息',
	'PRINT_PM'					=> '打印预览',
	'PREFERENCES_UPDATED'		=> '您的参数已经更新。',
	'PROFILE_INFO_NOTICE'		=> '请注意这些信息将对其他成员可见。请谨慎包含个人资料。标记 * 的表格是必填栏目。',
	'PROFILE_UPDATED'			=> '您的资料已经更新。',
    'PROFILE_AUTOLOGIN_KEYS'	=> '"记住登录"键能在关闭浏览器后保持登录状态。如果您退出登录，仅当前登录的浏览器中键会被删除。这里可以看到您从不同浏览器登录论坛时创建的键。',
    'PROFILE_NO_AUTOLOGIN_KEYS'	=> '没有已保存的"记住登录"键。',

	'RECIPIENT'							=> '收件人',
	'RECIPIENTS'						=> '收件人',
	'REGISTRATION'						=> '注册',
	'RELEASE_MESSAGES'					=> '%s释放所有挂起的消息%s… 如果有足够的可用空间它们将被派送到合适的文件夹。',
	'REMOVE_ADDRESS'					=> '删除地址',
	'REMOVE_SELECTED_BOOKMARKS'			=> '删除选中的书签',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> '您确信要删除所有选中的书签吗？',
	'REMOVE_BOOKMARK_MARKED'			=> '删除书签',
	'REMOVE_FOLDER'						=> '删除文件夹',
	'REMOVE_FOLDER_CONFIRM'				=> '您确定要删除这个文件夹吗？',
	'RENAME'							=> '重命名',
	'RENAME_FOLDER'						=> '重命名文件夹',
	'REPLIED_MESSAGE'					=> '回复消息',
	'REPLY_TO_ALL'						=> '回复至发信者和所有收件人.',
	'REPORT_PM'							=> '举报消息',
	'RESIGN_SELECTED'					=> '辞去选中',
	'RETURN_FOLDER'						=> '%1$s回到前一个文件夹%2$s',
	'RETURN_UCP'						=> '%s回到用户控制面板%s',
	'RULE_ADDED'						=> '规则已经添加',
	'RULE_ALREADY_DEFINED'				=> '这个规则已经存在',
	'RULE_DELETED'						=> '规则已经移除',
	'RULE_LIMIT_REACHED'				=> '已经达到规则数量上限, 不能再增加规则.',
	'RULE_NOT_DEFINED'					=> '没有正确指定规则',
    'RULE_REMOVED_MESSAGES'				=> array(
        1	=> '%d 条站内消息被过滤删除。',
        2	=> '%d 条站内消息被过滤删除。',
    ),

	'SAME_PASSWORD_ERROR'		=> '您输入的新密码和现在使用的密码相同',
	'SEARCH_YOUR_POSTS'			=> '显示您的帖子',
	'SEND_PASSWORD'				=> '发送密码',
	'SENT_AT'					=> '发送于',
	'SHOW_EMAIL'				=> '用户可以通过email联络我',
	'SIGNATURE_EXPLAIN'			=> '这是一个可以显示在您的帖子中的文字方块。字数限制为 %d ',
	'SIGNATURE_PREVIEW'			=> '您的签名将会这样出现在帖子中',
	'SIGNATURE_TOO_LONG'		=> '您的签名太长了。',
    'SELECT_CURRENT_TIME'		=> '选择当前时间',
    'SELECT_TIMEZONE'			=> '选择时区',
	'SORT'						=> '排列',
	'SORT_COMMENT'				=> '文件注释',
	'SORT_DOWNLOADS'			=> '下载次数',
	'SORT_EXTENSION'			=> '扩展名',
	'SORT_FILENAME'				=> '文件名',
	'SORT_POST_TIME'			=> '发布时间',
	'SORT_SIZE'					=> '文件大小',

	'TIMEZONE'					=> '时区',
    'TIMEZONE_DATE_SUGGESTION'	=> '建议: %s',
    'TIMEZONE_INVALID'			=> '选择的时区无效。',
    'TO'						=> '收件人',
    'TO_MASS'					=> '收件人',
    'TO_ADD'					=> '添加收件人',
    'TO_ADD_MASS'				=> '添加收件人',
    'TO_ADD_GROUPS'				=> '添加用户组',
	'TOO_MANY_RECIPIENTS'		=> '收件人过多',
	'TOO_MANY_REGISTERS'		=> '在这次对话中您已经超过注册的最大尝试次数。请稍后再尝试。',

	'UCP'						=> '用户控制面板',
	'UCP_ACTIVATE'				=> '激活帐号',
	'UCP_ADMIN_ACTIVATE'		=> '请注意在帐号激活前您必须输入一个有效的 Email 地址，管理员将审核您的帐号，如果审核通过将会发送通知邮件到您提供的 Email 地址。',
	'UCP_ATTACHMENTS'			=> '附件',
    'UCP_AUTH_LINK'				=> '外部帐号',
    'UCP_AUTH_LINK_ASK'			=> '您当前没有关联外部服务的帐号。点击下面的按钮将您的帐号关联至外部服务。',
    'UCP_AUTH_LINK_ID'			=> '唯一识别',
    'UCP_AUTH_LINK_LINK'		=> '关联',
    'UCP_AUTH_LINK_MANAGE'		=> '管理外部账户关联',
    'UCP_AUTH_LINK_NOT_SUPPORTED'	=> '论坛当前的登录验证方式不支持关联外部帐号。',
    'UCP_AUTH_LINK_TITLE'		=> '管理您的外部帐号关联',
    'UCP_AUTH_LINK_UNLINK'		=> '解除关联',
	'UCP_COPPA_BEFORE'			=> '早于 %s',
	'UCP_COPPA_ON_AFTER'		=> '晚于 %s',
	'UCP_EMAIL_ACTIVATE'		=> '请注意在帐号激活前您必须输入一个有效的 Email 地址。通过这个 Email 地址您将收到包含帐号激活链接的邮件。',
	'UCP_JABBER'				=> 'Jabber 地址',
    'UCP_LOGIN_LINK'			=> '设置关联外部帐号',

	'UCP_MAIN'					=> '主要信息',
	'UCP_MAIN_ATTACHMENTS'		=> '管理附件',
	'UCP_MAIN_BOOKMARKS'		=> '管理收藏夹',
	'UCP_MAIN_DRAFTS'			=> '管理草稿',
	'UCP_MAIN_FRONT'			=> '首页',
	'UCP_MAIN_SUBSCRIBED'		=> '管理订阅',

	'UCP_NO_ATTACHMENTS'		=> '您没有发表的附件',

    'UCP_NOTIFICATION_LIST'				=> '通知管理',
    'UCP_NOTIFICATION_LIST_EXPLAIN'		=> '这里可以查看历史通知。',
    'UCP_NOTIFICATION_OPTIONS'			=> '修改通知设置',
    'UCP_NOTIFICATION_OPTIONS_EXPLAIN'	=> '在这里修改论坛通知偏好设置。',

	'UCP_PREFS'					=> '论坛相关参数',
	'UCP_PREFS_PERSONAL'		=> '编辑全局设置',
	'UCP_PREFS_POST'			=> '编辑发帖设置',
	'UCP_PREFS_VIEW'			=> '编辑显示设置',
	
	'UCP_PM'					=> '管理站内消息',
	'UCP_PM_COMPOSE'			=> '编写消息',
	'UCP_PM_DRAFTS'				=> '管理消息草稿',
	'UCP_PM_OPTIONS'			=> '编辑选项',
	'UCP_PM_UNREAD'				=> '未读消息',
	'UCP_PM_VIEW'				=> '查看消息',

	'UCP_PROFILE'				=> '个人资料',
	'UCP_PROFILE_AVATAR'		=> '编辑个人头像',
	'UCP_PROFILE_PROFILE_INFO'	=> '编辑个人信息',
	'UCP_PROFILE_REG_DETAILS'	=> '编辑帐号设置',
	'UCP_PROFILE_SIGNATURE'		=> '编辑发文签名',
    'UCP_PROFILE_AUTOLOGIN_KEYS'=> '管理“自动登录”键',

	'UCP_USERGROUPS'			=> '用户组',
	'UCP_USERGROUPS_MEMBER'		=> '管理成员',
	'UCP_USERGROUPS_MANAGE'		=> '管理用户组',

    'UCP_PASSWORD_RESET_DISABLED'	=> '密码重置功能已停用。如果您需要访问帐号，请联系 %s论坛管理员%s',
	'UCP_REGISTER_DISABLE'			=> '暂时停止注册新用户。',
	'UCP_REMIND'					=> '发送密码',
	'UCP_RESEND'					=> '发送激活Email',
	'UCP_WELCOME'					=> '欢迎来到用户控制面板。这里您可以监视，查看和更新您的资料，参数，订阅版面和主题。您还可以给其他用户发送消息 (如果允许)。在继续下一步操作前请确认您已经仔细阅读了所有的公告。',
	'UCP_ZEBRA'						=> '好友与黑名单',
	'UCP_ZEBRA_FOES'				=> '管理损友列表',
	'UCP_ZEBRA_FRIENDS'				=> '管理好友列表',
	'UNDISCLOSED_RECIPIENT'			=> '未知收件人',
	'UNKNOWN_FOLDER'				=> '未知文件夹',
	'UNWATCH_MARKED'				=> '退订选中',
	'UPLOAD_AVATAR_FILE'			=> '从您的机器上传',
	'UPLOAD_AVATAR_URL'				=> '从链接上传',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> '填入包含图片的链接，目标图片将被拷贝到这个论坛。',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> '用户名长度必须介于 %1$s 和 %2$s 之间，并且只能使用英文字符',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> '用户名长度必须介于 %1$s 和 %2$s 之间，并且只能使用英文字符，空格和 -+_[] 这些字符。',
	'USERNAME_ASCII_EXPLAIN'		=> '用户名长度必须介于 %1$s 和 %2$s 之间，并且只能使用 ASCII 字符，不能使用特殊字符',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> '用户名长度必须介于 %1$s 和 %2$s 之间，并且只能使用英文和数字',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> '用户名必须介于 %1$s 和 %2$s 之间，并且只能使用英文，数字，空格和 -+_[] 这些字符。',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> '长度必须介于 %1$s 和 %2$s 之间。',
	'USERNAME_TAKEN_USERNAME'		=> '您输入的用户名已经被使用，请选择另一个用户名。',
	'USERNAME_DISALLOWED_USERNAME'	=> '您输入的用户名是禁止的。',
	'USER_NOT_FOUND_OR_INACTIVE'	=> '您指定的用户名无法找到或者未被激活。',

	'VIEW_AVATARS'				=> '显示头像',
	'VIEW_EDIT'					=> '查看/编辑',
	'VIEW_FLASH'				=> '显示 Flash 动画',
	'VIEW_IMAGES'				=> '显示主题中的图片',
	'VIEW_NEXT_HISTORY'			=> '历史中的下一条消息',
	'VIEW_NEXT_PM'				=> '下一条消息',
	'VIEW_PM'					=> '查看消息',
	'VIEW_PM_INFO'				=> '消息信息',
    'VIEW_PM_MESSAGES'			=> array(
        1	=> '%d 条消息',
        2	=> '%d 条消息',
    ),
	'VIEW_PREVIOUS_HISTORY'		=> '历史中的前一条消息',
	'VIEW_PREVIOUS_PM'			=> '前一条消息',
    'VIEW_PROFILE'				=> '查看资料',
	'VIEW_SIGS'					=> '显示签名',
	'VIEW_SMILIES'				=> '显示笑脸',
	'VIEW_TOPICS_DAYS'			=> '显示几天前的主题',
	'VIEW_TOPICS_DIR'			=> '显示主题排列方向',
	'VIEW_TOPICS_KEY'			=> '显示主题排列依据',
	'VIEW_POSTS_DAYS'			=> '显示几天前的帖子',
	'VIEW_POSTS_DIR'			=> '显示帖子排列方向',
	'VIEW_POSTS_KEY'			=> '显示帖子排列依据',

	'WATCHED_EXPLAIN'			=> '以下是您订阅的版面和主题列表。您将收到它们的更新信息。退订: 选中版面或主题后点击 <em>退订选中</em> 按钮。',
	'WATCHED_FORUMS'			=> '观察的版面',
	'WATCHED_TOPICS'			=> '观察的主题',
	'WRONG_ACTIVATION'			=> '您提供的激活码在数据库中找不到匹配的记录',

	'YOUR_DETAILS'				=> '您的信息',
	'YOUR_FOES'					=> '您的损友列表',
	'YOUR_FOES_EXPLAIN'			=> '删除用户名: 选中并点击提交',
	'YOUR_FRIENDS'				=> '您的好友',
	'YOUR_FRIENDS_EXPLAIN'		=> '删除用户名: 选中并点击提交',
	'YOUR_WARNINGS'				=> '您的警告级别',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> '放入文件夹',
		'MARK_AS_READ'		=> '标记成已读',
		'MARK_AS_IMPORTANT'	=> '标记消息',
		'DELETE_MESSAGE'	=> '删除消息',
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> '标题',
		'SENDER'	=> '发送人',
		'MESSAGE'	=> '消息',
		'STATUS'	=> '消息状态',
		'TO'		=> '发送往',
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> '匹配',
		'IS_NOT_LIKE'	=> '不匹配',
		'IS'			=> '是',
		'IS_NOT'		=> '不是',
		'BEGINS_WITH'	=> '以...开头',
		'ENDS_WITH'		=> '以...结束',
		'IS_FRIEND'		=> '是好友',
		'IS_FOE'		=> '是损友',
		'IS_USER'		=> '是用户',
		'IS_GROUP'		=> '在用户组中',
		'ANSWERED'		=> '已回复的',
		'FORWARDED'		=> '已转发的',
		'TO_GROUP'		=> '发往我的默认用户组',
		'TO_ME'			=> '发给我',
	),

	'GROUPS_EXPLAIN'	=> '用户组设置使管理员更好的管理用户。您会处于一个默认的组中。组定义将决定您对于其他用户的显示信息，例如您的用户名颜色，头像，级别等等。你可以改变您的默认组，但是这取决于管理员的设置。您也可以被放入或加入其他组。一些用户组将会具有额外的权限访问更多的区域。',
	'GROUP_LEADER'		=> '组长',
	'GROUP_MEMBER'		=> '组成员',
	'GROUP_PENDING'		=> '待批准的成员',
	'GROUP_NONMEMBER'	=> '非组成员',
	'GROUP_DETAILS'		=> '组信息',

	'NO_LEADER'		=> '没有组长',
	'NO_MEMBER'		=> '没有组成员',
	'NO_PENDING'	=> '没有待批准的成员',
	'NO_NONMEMBER'	=> '没有非组成员',
));
