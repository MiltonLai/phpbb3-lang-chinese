<?php
/**
*
* acp_styles [Chinese Simplified]
*
* @package language
* @version $Id: styles.php 8479 2008-03-29 00:22:48Z naderman $
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

$lang = array_merge($lang, array(
	'ACP_IMAGESETS_EXPLAIN'	=> '图片组包含所有按钮、版面、文件夹等等无特定风格的图标. 这里您可以编辑、导出或者删除图片组, 也可以导入或激活新的图片组.',
	'ACP_STYLES_EXPLAIN'	=> '这里您可以管理论坛上可用的风格. 风格包含模板、主题和图片组. 您可以更改存在的界面, 删除、冻结、激活、创建或者导入新的风格. 您也可以对风格进行预览. 当前的默认界面使用星号 (*) 标记. 这里还列出了使用各种界面的用户数, 此数不考虑用户界面被覆盖的情况.',
	'ACP_TEMPLATES_EXPLAIN'	=> '模板, 包含所有用于生成页面布局的标记代码. 这里您可以编辑现有的模板组, 删除/导入/导出/预览模板组. 您也可以更改用于生成BBCode的模板.',
	'ACP_THEMES_EXPLAIN'	=> '这里您可以创建, 安装, 编辑, 删除和导出主题风格. 主题风格是色彩和图片的组合, 应用于模板上而产生基本的视觉感受. 选项的范围取决于您的服务器和phpBB安装的设置, 查看手册以得到更多细节. 以当前存在的主题风格为基础创建新主题是可选的.',
	'ADD_IMAGESET'			=> '创建图片包',
	'ADD_IMAGESET_EXPLAIN'	=> '这里您可以创建新图片包. 取决于您的服务器配置和文件权限可能有额外的选项. 例如您可以基于现有的图片包创建新的, 您也可以上传或导入(从store文件夹)新图片包. 如果您上传或导入文档, 图片包名称可以使用文档名(图片包名称留空).',
	'ADD_STYLE'				=> '创建风格',
	'ADD_STYLE_EXPLAIN'		=> '这里您可以创建新风格. 取决于服务器设置和文件权限可能有额外的选项. 例如您可以基于现有的风格创建新风格. 您也可以上传或导入(从store文件夹)风格文档. 如果您导入或上传文档, 风格名称会自动分配.',
	'ADD_TEMPLATE'			=> '创建模板',
	'ADD_TEMPLATE_EXPLAIN'	=> '这里您可以添加新模板. 取决于服务器的配置和文件权限, 可能会有额外的选项. 例如可以基于现有的模板创建新模板. 您也可以导入或上传(从store目录)新模板文档. 如果通过上传或导入文档, 模板名称可以有文档自动设置(将模板名留空).',
	'ADD_THEME'				=> '创建主题风格',
	'ADD_THEME_EXPLAIN'		=> '这里您可以添加新主题. 取决于服务器设置和文件权限可能会有额外的选项. 例如您可以基于现有的主题创建新主题. 您也可以上传或导入(从store目录)新主题文档. 如果您上传或导入文档, 主题名称可以由文档自动决定(将主题名称留空).',
	'ARCHIVE_FORMAT'		=> '文档类型',
	'AUTOMATIC_EXPLAIN'		=> '如果留空, 系统将尝试自动检测.',

	'BACKGROUND'			=> '背景',
	'BACKGROUND_COLOUR'		=> '背景颜色',
	'BACKGROUND_IMAGE'		=> '背景图片',
	'BACKGROUND_REPEAT'		=> '背景重复',
	'BOLD'					=> '粗体',

	'CACHE'							=> '缓存',
	'CACHE_CACHED'					=> '已缓存',
	'CACHE_FILENAME'				=> '模板文件',
	'CACHE_FILESIZE'				=> '文件尺寸',
	'CACHE_MODIFIED'				=> '已修改',
	'CONFIRM_IMAGESET_REFRESH'		=> '您确认要刷新所有的图片包数据吗? 图片包配置文件的数据将覆盖目前的修改.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> '您确认要清除模板的缓存吗?',
	'CONFIRM_TEMPLATE_REFRESH'		=> '您确认要刷新所有的模板数据吗? 模板文件的数据将覆盖数据库中的模板数据和做过的修改.',
	'CONFIRM_THEME_REFRESH'			=> '您确认要刷新主题风格数据吗? 主题风格文件的数据将覆盖数据库中的数据和做过的修改.',
	'COPYRIGHT'						=> '版权',
	'CREATE_IMAGESET'				=> '创建新图片包',
	'CREATE_STYLE'					=> '创建新风格',
	'CREATE_TEMPLATE'				=> '创建新模板组',
	'CREATE_THEME'					=> '创建新主题风格',
	'CURRENT_IMAGE'					=> '当前图片',

	'DEACTIVATE_DEFAULT'		=> '您不能冻结默认风格.',
	'DELETE_FROM_FS'			=> '从文件系统中删除',
	'DELETE_IMAGESET'			=> '删除图片包',
	'DELETE_IMAGESET_EXPLAIN'	=> '这里您可以从数据库中删除选中的图片包. 如果您有足够的权限, 也可以从文件系统中删除这个图片包. 请注意操作不可回复. 建议您在删除前导出图片包以备将来使用.',
	'DELETE_STYLE'				=> '删除风格',
	'DELETE_STYLE_EXPLAIN'		=> '这里您可以删除选中的风格. 您不能删除所有的风格元素. 这些只能被分别删除. 注意这个操作不可回复.',
	'DELETE_TEMPLATE'			=> '删除模板',
	'DELETE_TEMPLATE_EXPLAIN'	=> '这里您可以从数据库中删除选中的模板. 如果有足够的权限, 您也可以从文件系统中删除这个模板. 请注意操作不能回复. 建议您在删除前导出模板组以备将来使用.',
	'DELETE_THEME'				=> '删除主题风格',
	'DELETE_THEME_EXPLAIN'		=> '这里您可以从数据库中删除选中的主题. 如果有足够的权限您也可以从文件系统中删除它们. 请注意操作不可回复. 建议您在删除前导出模板组以备将来使用.',
	'DETAILS'					=> '细节',
	'DIMENSIONS_EXPLAIN'		=> '选中 是 将包含高度/宽度参数.',


	'EDIT_DETAILS_IMAGESET'				=> '编辑图片组细节',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> '这里您可以编辑图片组的细节, 例如名称.',
	'EDIT_DETAILS_STYLE'				=> '编辑风格',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> '使用下面的表格您可以修改现有的风格. 您也可以更改模板, 风格和图片的组合. 您也可以设置默认风格.',
	'EDIT_DETAILS_TEMPLATE'				=> '编辑模板细节',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> '这里您可以编辑模板细节例如名称. 您也可以使用选项修改风格表单的存储方式为数据库或文件系统. 这取决于您的PHP设置, 以及您的模板组是否可以被web服务器写入.',
	'EDIT_DETAILS_THEME'				=> '编辑主题风格细节',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> '这里您可以编辑主题细节例如名称. 您也可以设置存储方式为数据库或文件系统. 这个选项取决于您的PHP设置以及服务器是否可以进行文件写操作.',
	'EDIT_IMAGESET'						=> '编辑图片组',
	'EDIT_IMAGESET_EXPLAIN'				=> '这里您可以编辑单个图片. 您也可以设置图片尺寸. 尺寸是可选的, 指定它们可以克服某些浏览器的浏览错误. 不存储的话, 可以节省一点点数据库空间.',
	'EDIT_TEMPLATE'						=> '编辑模板',
	'EDIT_TEMPLATE_EXPLAIN'				=> '这里您可以直接编辑您的模板组. 请记住这些编辑是永久性的, 不可以回复. 如果PHP允许写操作, 这里的修改将直接写入文件. 如果PHP不允许写操作, 所有的更改只会影响数据库. 请注意当编辑模板时, 用{XXXX}的形式关闭所有替代值变量, 否则会引起浏览错误.',
	'EDIT_TEMPLATE_STORED_DB'			=> '模板文件不可写, 所以模板组现在开始被存储在数据库中.',
	'EDIT_THEME'						=> '编辑风格主题',
	'EDIT_THEME_EXPLAIN'				=> '这里您可以编辑选中的主题. 更改颜色, 图片等等. 您可以使用基本界面修改基本的颜色, 或使用高级界面CSS编辑模式, 这允许您添加额外的参数例如边界等等. 只需要设置您需要的参数, 其余的留空或不要定义.',
	'EDIT_THEME_STORED_DB'				=> '风格表单文件不可写, 所以修改后的表单今后存储在数据库中.',
	'EDIT_THEME_STORE_PARSED'			=> '风格表单需要能被解析. 这只针对存储于数据库时.',
	'EDITOR_DISABLED'               => '模板编辑器未启用.',
	'EXPORT'							=> '导出',

	'FOREGROUND'			=> '前景',
	'FONT_COLOUR'			=> '字体颜色',
	'FONT_FACE'				=> '字体',
	'FONT_FACE_EXPLAIN'		=> '您可以指定多个字体, 用逗号, 分割. 如果用户系统没有第一个字体, 会依次使用后面的字体替代.',
	'FONT_SIZE'				=> '字体大小',

	'GLOBAL_IMAGES'			=> '全局',

	'HIDE_CSS'				=> '隐藏CSS',

	'IMAGE_WIDTH'				=> '图片宽度',
	'IMAGE_HEIGHT'				=> '图片高度',
	'IMAGE'						=> '图片',
	'IMAGE_NAME'				=> '图片名称',
	'IMAGE_PARAMETER'			=> '参数',
	'IMAGE_VALUE'				=> '值',
	'IMAGESET_ADDED'			=> '新图片组已经添加到文件系统.',
	'IMAGESET_ADDED_DB'			=> '新图片组已经添加到数据库.',
	'IMAGESET_DELETED'			=> '图片组删除完成.',
	'IMAGESET_DELETED_FS'		=> '图片组已经从数据库中删除, 但是一些文件可能还存在于文件系统中.',
	'IMAGESET_DETAILS_UPDATED'	=> '图片组细节更新完成.',
	'IMAGESET_ERR_ARCHIVE'		=> '请选择文档方式.',
	'IMAGESET_ERR_COPY_LONG'	=> '版权信息不能长于60个字符.',
	'IMAGESET_ERR_NAME_CHARS'	=> '图片组名称只能包含字母, -, +, _ 和空格.',
	'IMAGESET_ERR_NAME_EXIST'	=> '图片组名称已经被使用过.',
	'IMAGESET_ERR_NAME_LONG'	=> '图片组名称不能长于30个字符.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> '您选择的文档中没有可用的图片组.',
	'IMAGESET_ERR_STYLE_NAME'	=> '您必须为图片组指定一个名称.',
	'IMAGESET_EXPORT'			=> '导出图片组',
	'IMAGESET_EXPORT_EXPLAIN'	=> '这里您可以从文档或表单中导出图片组. 文档包含所有用于安装图片组所需要的数据. 您可以选择是直接下载文件还是放置在store文件夹中等以后下载.',
	'IMAGESET_EXPORTED'			=> '图片组导出完成并储存到 %s.',
	'IMAGESET_NAME'				=> '图片组名称',
	'IMAGESET_REFRESHED'		=> '图片组刷新完成.',
	'IMAGESET_UPDATED'			=> '图片组更新完成.',
	'ITALIC'					=> '斜体',

	'IMG_CAT_BUTTONS'		=> '本地化按钮',
	'IMG_CAT_CUSTOM'		=> '自定义图片',
	'IMG_CAT_FOLDERS'		=> '主题图标',
	'IMG_CAT_FORUMS'		=> '版面图标',
	'IMG_CAT_ICONS'			=> '通用图标',
	'IMG_CAT_LOGOS'			=> 'Logo',
	'IMG_CAT_POLLS'			=> '投票图标',
	'IMG_CAT_UI'			=> '通用用户接口元素',
	'IMG_CAT_USER'			=> '额外的图片',

	'IMG_SITE_LOGO'			=> '主logo',
	'IMG_UPLOAD_BAR'		=> '上传进度条',
	'IMG_POLL_LEFT'			=> '投票左端',
	'IMG_POLL_CENTER'		=> '投票中部',
	'IMG_POLL_RIGHT'		=> '投票右端',
	'IMG_ICON_FRIEND'		=> '添加为好友',
	'IMG_ICON_FOE'			=> '添加到黑名单',

	'IMG_FORUM_LINK'			=> '版面链接',
	'IMG_FORUM_READ'			=> '版面',
	'IMG_FORUM_READ_LOCKED'		=> '版面锁定',
	'IMG_FORUM_READ_SUBFORUM'	=> '子版面',
	'IMG_FORUM_UNREAD'			=> '有新帖的版面',
	'IMG_FORUM_UNREAD_LOCKED'	=> '有新帖的锁定版面',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> '有新帖的子版面',
	'IMG_SUBFORUM_READ'			=> '子版面图标',
	'IMG_SUBFORUM_UNREAD'		=> '有新帖的子版面图标',
	
	'IMG_TOPIC_MOVED'			=> '移动的主题',

	'IMG_TOPIC_READ'				=> '主题',
	'IMG_TOPIC_READ_MINE'			=> '参与的主题',
	'IMG_TOPIC_READ_HOT'			=> '活跃的主题',
	'IMG_TOPIC_READ_HOT_MINE'		=> '参与的活跃主题',
	'IMG_TOPIC_READ_LOCKED'			=> '锁定的主题',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> '参与的锁定主题',

	'IMG_TOPIC_UNREAD'				=> '有新帖的主题',
	'IMG_TOPIC_UNREAD_MINE'			=> '参与的有新帖的主题',
	'IMG_TOPIC_UNREAD_HOT'			=> '有新帖的活跃主题',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> '参与的有新贴的活跃主题',
	'IMG_TOPIC_UNREAD_LOCKED'		=> '有新贴的锁定主题',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> '参与的有新贴的锁定主题',

	'IMG_STICKY_READ'				=> '置顶主题',
	'IMG_STICKY_READ_MINE'			=> '参与的置顶主题',
	'IMG_STICKY_READ_LOCKED'		=> '锁定的置顶主题',
	'IMG_STICKY_READ_LOCKED_MINE'	=> '参与的锁定的置顶主题',
	'IMG_STICKY_UNREAD'				=> '有新帖的置顶主题',
	'IMG_STICKY_UNREAD_MINE'		=> '参与的有新帖的置顶主题',
	'IMG_STICKY_UNREAD_LOCKED'		=> '有新帖的锁定的置顶主题',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> '参与的有新贴的锁定的置顶主题',

	'IMG_ANNOUNCE_READ'					=> '公告',
	'IMG_ANNOUNCE_READ_MINE'			=> '参与的公告',
	'IMG_ANNOUNCE_READ_LOCKED'			=> '锁定的公告',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> '参与的锁定公告',
	'IMG_ANNOUNCE_UNREAD'				=> '有新帖的公告',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> '参与的有新贴的公告',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> '有新贴的锁定的公告',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> '参与的有新贴的锁定的公告',

	'IMG_GLOBAL_READ'					=> '全局公告',
	'IMG_GLOBAL_READ_MINE'				=> '参与的全局公告',
	'IMG_GLOBAL_READ_LOCKED'			=> '锁定的全局公告',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> '参与的锁定的全局公告',
	'IMG_GLOBAL_UNREAD'					=> '有新帖的全局公告',
	'IMG_GLOBAL_UNREAD_MINE'			=> '参与的有新贴的全局公告',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> '有新帖的锁定的全局公告',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> '参与的有新贴的锁定的全局公告',

	'IMG_PM_READ'		=> '已读站内消息',
	'IMG_PM_UNREAD'		=> '未读站内消息',

	'IMG_ICON_BACK_TOP'		=> 'Top',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> '发送email',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSNM',
	'IMG_ICON_CONTACT_PM'		=> '发送消息',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> '主页',

	'IMG_ICON_POST_DELETE'			=> '删除帖子',
	'IMG_ICON_POST_EDIT'			=> '编辑帖子',
	'IMG_ICON_POST_INFO'			=> '显示帖子细节',
	'IMG_ICON_POST_QUOTE'			=> '引用帖子',
	'IMG_ICON_POST_REPORT'			=> '举报帖子',
	'IMG_ICON_POST_TARGET'			=> '迷你帖子',
	'IMG_ICON_POST_TARGET_UNREAD'	=> '未读迷你帖子',


	'IMG_ICON_TOPIC_ATTACH'			=> '附件',
	'IMG_ICON_TOPIC_LATEST'			=> '最后发表',
	'IMG_ICON_TOPIC_NEWEST'			=> '未读的最后发表',
	'IMG_ICON_TOPIC_REPORTED'		=> '举报过的帖子',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> '未批准的帖子',

	'IMG_ICON_USER_ONLINE'		=> '在线的用户',
	'IMG_ICON_USER_OFFLINE'		=> '离线的用户',
	'IMG_ICON_USER_PROFILE'		=> '显示个人资料',
	'IMG_ICON_USER_SEARCH'		=> '搜索帖子',
	'IMG_ICON_USER_WARN'		=> '警告用户',

	'IMG_BUTTON_PM_FORWARD'		=> '转发站内消息',
	'IMG_BUTTON_PM_NEW'			=> '新站内消息',
	'IMG_BUTTON_PM_REPLY'		=> '回复站内消息',
	'IMG_BUTTON_TOPIC_LOCKED'	=> '锁定的主题',
	'IMG_BUTTON_TOPIC_NEW'		=> '新主题',
	'IMG_BUTTON_TOPIC_REPLY'	=> '回复主题',

	'IMG_USER_ICON1'		=> '用户自定义图片 1',
	'IMG_USER_ICON2'		=> '用户自定义图片 2',
	'IMG_USER_ICON3'		=> '用户自定义图片 3',
	'IMG_USER_ICON4'		=> '用户自定义图片 4',
	'IMG_USER_ICON5'		=> '用户自定义图片 5',
	'IMG_USER_ICON6'		=> '用户自定义图片 6',
	'IMG_USER_ICON7'		=> '用户自定义图片 7',
	'IMG_USER_ICON8'		=> '用户自定义图片 8',
	'IMG_USER_ICON9'		=> '用户自定义图片 9',
	'IMG_USER_ICON10'		=> '用户自定义图片 10',

	'INACTIVE_STYLES'			=> '闲置的风格',
	'INCLUDE_DIMENSIONS'		=> '包含尺寸',
	'INCLUDE_IMAGESET'			=> '包含图片组',
	'INCLUDE_TEMPLATE'			=> '包含模板',
	'INCLUDE_THEME'				=> '包含风格主题',
	'INHERITING_FROM'           => '继承自',
	'INSTALL_IMAGESET'			=> '安装图片组',
	'INSTALL_IMAGESET_EXPLAIN'	=> '这里您可以安装选中的图片组. 您可以编辑需要修改的细节.',
	'INSTALL_STYLE'				=> '安装风格',
	'INSTALL_STYLE_EXPLAIN'		=> '这里您可以安装新的风格(如果这个风格适用于相应的风格元素). 已经有相应的风格主题将不会被覆盖. 一些风格需要预先安装风格元素, 如果没有的话安装时会有提示.',
	'INSTALL_TEMPLATE'			=> '安装模板',
	'INSTALL_TEMPLATE_EXPLAIN'	=> '这里您可以安装新的模板组. 取决于服务器设置, 您可以使用如下的选项.',
	'INSTALL_THEME'				=> '安装风格主题',
	'INSTALL_THEME_EXPLAIN'		=> '这里您可以安装选中的风格主题. 您可以编辑需要修改的细节.',
	'INSTALLED_IMAGESET'		=> '已安装的图片组',
	'INSTALLED_STYLE'			=> '已安装的风格',
	'INSTALLED_TEMPLATE'		=> '已安装的模板',
	'INSTALLED_THEME'			=> '已安装的风格主题',

	'KEEP_IMAGESET'				=> '保留%s图片组',
	'KEEP_TEMPLATE'				=> '保留%s模板',
	'KEEP_THEME'				=> '保留%s主题式样', 

	'LINE_SPACING'				=> '行间距',
	'LOCALISED_IMAGES'			=> '本地化',
	'LOCATION_DISABLED_EXPLAIN'   => '此设置被更高优先级的设置限制, 不能修改.', 

	'NO_CLASS'					=> '风格表单中无法找到类型.',
	'NO_IMAGESET'				=> '在文件系统中无法找到图片组.',
	'NO_IMAGE'					=> '没有图片',
	'NO_IMAGE_ERROR'			=> '无法在文件系统中找到图片.',
	'NO_STYLE'					=> '文件系统中无法找到风格.',
	'NO_TEMPLATE'				=> '文件系统中无法找到模板.',
	'NO_THEME'					=> '文件系统中无法找到风格主题.',
	'NO_UNINSTALLED_IMAGESET'	=> '没有检测到未安装的图片组',
	'NO_UNINSTALLED_STYLE'		=> '没有检测到未安装的风格',
	'NO_UNINSTALLED_TEMPLATE'	=> '没有检测到未安装的模板',
	'NO_UNINSTALLED_THEME'		=> '没有检测到未安装的风格主题',
	'NO_UNIT'					=> '无',

	'ONLY_IMAGESET'			=> '这是唯一的图片组, 您不能删除.',
	'ONLY_STYLE'			=> '这是唯一的风格, 您不能删除.',
	'ONLY_TEMPLATE'			=> '这是唯一的模板组, 您不能删除.',
	'ONLY_THEME'			=> '这是唯一的风格主题, 您不能删除.',
	'OPTIONAL_BASIS'		=> '可选的基础',

	'REFRESH'					=> '刷新',
	'REPEAT_NO'					=> '无',
	'REPEAT_X'					=> '仅水平',
	'REPEAT_Y'					=> '仅垂直',
	'REPEAT_ALL'				=> '两个方向都',
	'REPLACE_IMAGESET'			=> '替代图片组使用',
	'REPLACE_IMAGESET_EXPLAIN'	=> '这个图片组将在任何风格使用这个图片而图片已经被删除的情况下替代被删除的图片.',
	'REPLACE_STYLE'				=> '替代风格使用',
	'REPLACE_STYLE_EXPLAIN'		=> '这个风格将在用户使用的风格已经被删除的情况下替代被删除的风格.',
	'REPLACE_TEMPLATE'			=> '替代模板使用',
	'REPLACE_TEMPLATE_EXPLAIN'	=> '这个模板将在任何风格使用这个模板而模板已经被删除的情况下替代被删除的模板.',
	'REPLACE_THEME'				=> '替代风格主题使用',
	'REPLACE_THEME_EXPLAIN'		=> '这个风格主题将在任何风格使用这个主题而主题已经被删除的情况下替代被删除的主题.',
	'REPLACE_WITH_OPTION'		=> '使用 %s 替换',
	'REQUIRES_IMAGESET'			=> '这个风格需要先安装 %s 图片组.',
	'REQUIRES_TEMPLATE'			=> '这个风格需要先安装 %s 模板组.',
	'REQUIRES_THEME'			=> '这个风格需要先安装 %s 风格主题.',

	'SELECT_IMAGE'				=> '选择图片',
	'SELECT_TEMPLATE'			=> '选择模板文件',
	'SELECT_THEME'				=> '选择风格主题文件',
	'SELECTED_IMAGE'			=> '选中的图片',
	'SELECTED_IMAGESET'			=> '选中的图片组',
	'SELECTED_TEMPLATE'			=> '选中的模板',
	'SELECTED_TEMPLATE_FILE'	=> '选中的模板文件',
	'SELECTED_THEME'			=> '选中的风格主题',
	'SELECTED_THEME_FILE'		=> '选中的风格文件',
	'STORE_DATABASE'			=> '数据库',
	'STORE_FILESYSTEM'			=> '文件系统',
	'STYLE_ACTIVATE'			=> '激活',
	'STYLE_ACTIVE'				=> '启用',
	'STYLE_ADDED'				=> '风格添加完成.',
	'STYLE_DEACTIVATE'			=> '冻结',
	'STYLE_DEFAULT'				=> '设置为默认',
	'STYLE_DELETED'				=> '风格删除完成.',
	'STYLE_DETAILS_UPDATED'		=> '删除更新完成.',
	'STYLE_ERR_ARCHIVE'			=> '请选择一个文档方式.',
	'STYLE_ERR_COPY_LONG'		=> '版权信息不能超过60个字符.',
	'STYLE_ERR_MORE_ELEMENTS'	=> '您必须选择至少一个风格元素.',
	'STYLE_ERR_NAME_CHARS'		=> '风格名称只能包含字母, 数字, -, +, _ 和空格.',
	'STYLE_ERR_NAME_EXIST'		=> '已经存在同名的风格.',
	'STYLE_ERR_NAME_LONG'		=> '风格名称不能超过30个字符.',
	'STYLE_ERR_NO_IDS'			=> '您必须给这个风格选择一个模板, 风格主题和图片组.',
	'STYLE_ERR_NOT_STYLE'		=> '导入或上传的文件中没有可用的风格文档.',
	'STYLE_ERR_STYLE_NAME'		=> '您必须为这个风格提供一个名称.',
	'STYLE_EXPORT'				=> '导出风格',
	'STYLE_EXPORT_EXPLAIN'		=> '这里您可以导出风格为文档. 风格不需要包含所有元素但是必须包含至少一种. 例如如果您已经创建了一个通用的新风格主题和图片组, 你可以只导出风格主题和图片组. 您可以选择是下载文件还是存储到store文件夹以便将来下载.',
	'STYLE_EXPORTED'			=> '风格导出完成, 存储到 %s.',
	'STYLE_IMAGESET'			=> '图片组',
	'STYLE_NAME'				=> '风格名称',
	'STYLE_TEMPLATE'			=> '模板',
	'STYLE_THEME'				=> '风格主题',
	'STYLE_USED_BY'				=> '用于 (包括机器人)',

	'TEMPLATE_ADDED'			=> '模板组已经添加并存储到文件系统.',
	'TEMPLATE_ADDED_DB'			=> '模板组已经添加并存储到数据库.',
	'TEMPLATE_CACHE'			=> '模板缓存',
	'TEMPLATE_CACHE_EXPLAIN'	=> '默认情况下phpBB缓存编译过的模板. 这种方式可以减小服务器每次装载和生成页面的时间. 这里您可以查看缓存的状态, 也可以删除单个或所有的缓存.',
	'TEMPLATE_CACHE_CLEARED'	=> '模板缓存清空完成.',
	'TEMPLATE_CACHE_EMPTY'		=> '没有未缓存的模板.',
	'TEMPLATE_DELETED'			=> '模板组删除完成.',
	'TEMPLATE_DELETE_DEPENDENT'   => '不能删除此模板组, 因为有其他模板组正在使用这个模板组:',
	'TEMPLATE_DELETED_FS'		=> '模板组已经从数据库中删除, 但是一些文件可能还保留在文件系统中.',
	'TEMPLATE_DETAILS_UPDATED'	=> '模板细节更新完成.',
	'TEMPLATE_EDITOR'			=> 'HTML模板编辑器',
	'TEMPLATE_EDITOR_HEIGHT'	=> '模板编辑器高度',
	'TEMPLATE_ERR_ARCHIVE'		=> '请选择文档方式.',
	'TEMPLATE_ERR_CACHE_READ'	=> '缓存目录无法打开.',
	'TEMPLATE_ERR_COPY_LONG'	=> '版权信息不能大于60个字符.',
	'TEMPLATE_ERR_NAME_CHARS'	=> '模板名称只能包含字母, 数字, -, +, _ 和空格.',
	'TEMPLATE_ERR_NAME_EXIST'	=> '同名的模板组已经存在.',
	'TEMPLATE_ERR_NAME_LONG'	=> '模板名称不能大于30字符.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> '您指定的文档中没有可用的模板组.',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE' => '新模板组需要模板组 %s 已经安装并且不继承自自己. ',
	'TEMPLATE_ERR_STYLE_NAME'	=> '您必须为这个模板指定一个名称.',
	'TEMPLATE_EXPORT'			=> '导出模板',
	'TEMPLATE_EXPORT_EXPLAIN'	=> '这里您可以导出模板为文档. 这个文档将包含所有安装这个模板所需要的数据. 你您可以选择是直接下载文件还是保存到store文件夹以备将来下载.',
	'TEMPLATE_EXPORTED'			=> '模板导出完成并存储到 %s.',
	'TEMPLATE_FILE'				=> '模板文件',
	'TEMPLATE_FILE_UPDATED'		=> '模板文件上传完成.',
	'TEMPLATE_INHERITS'         => '此模板组继承自 %s 因此无法使用异于父模板组的存储方式.',
	'TEMPLATE_LOCATION'			=> '存储模板到',
	'TEMPLATE_LOCATION_EXPLAIN'	=> '图片总是存储在文件系统中.',
	'TEMPLATE_NAME'				=> '模板名称',
	'TEMPLATE_FILE_NOT_WRITABLE'=> '无法写入模板文件 %s. 请检查此文件夹和文件的属性.',
	'TEMPLATE_REFRESHED'		=> '模板刷新完成.',

	'THEME_ADDED'				=> '新风格主题已经添加到文件系统.',
	'THEME_ADDED_DB'			=> '新风格主题已经添加到数据库.',
	'THEME_CLASS_ADDED'			=> '自定义类型添加完成.',
	'THEME_DELETED'				=> '风格主题删除完成.',
	'THEME_DELETED_FS'			=> '风格主题已经从数据库中删除, 但是一些文件可能还留在文件系统中.',
	'THEME_DETAILS_UPDATED'		=> '风格主题细节更新完成.',
	'THEME_EDITOR'				=> 'CSS编辑器',
	'THEME_EDITOR_HEIGHT'		=> '风格主题编辑器高度',
	'THEME_ERR_ARCHIVE'			=> '请选择一个文档方式.',
	'THEME_ERR_CLASS_CHARS'		=> '只有字母和数字字符和 ., :, -, _ 和 # 可以用于类型名称.',
	'THEME_ERR_COPY_LONG'		=> '版权信息不能长于60字符.',
	'THEME_ERR_NAME_CHARS'		=> '风格主题名称只能包含字母, 数字, -, +, _ 和空格.',
	'THEME_ERR_NAME_EXIST'		=> '同名的风格主题已经存在.',
	'THEME_ERR_NAME_LONG'		=> '风格主题名称不能大于30字符.',
	'THEME_ERR_NOT_THEME'		=> '您指定的文档中没有可用的风格主题.',
	'THEME_ERR_REFRESH_FS'		=> '风格保存在文件系统中, 所以不需要刷新.',
	'THEME_ERR_STYLE_NAME'		=> '您必须为风格主题指定一个名称.',
	'THEME_FILE'				=> '风格主题文件',
	'THEME_EXPORT'				=> '导出风格主题',
	'THEME_EXPORT_EXPLAIN'		=> '这里您可以导出风格主题为文档. 这个文档将包含重新安装这个风格主题所需要的所有数据. 您可以选择是导出为文件下载或保存到store文件夹以备将来下载.',
	'THEME_EXPORTED'			=> '风格主题导出完成, 并储存到 %s.',
	'THEME_LOCATION'			=> '风格表单储存到',
	'THEME_LOCATION_EXPLAIN'	=> '图片将总是存储到文件系统中.',
	'THEME_NAME'				=> '风格主题名称',
	'THEME_REFRESHED'			=> '风格主题刷新完成.',
	'THEME_UPDATED'				=> '类型更新完成.',

	'UNDERLINE'				=> '下划线',
	'UNINSTALLED_IMAGESET'	=> '未安装的图片组',
	'UNINSTALLED_STYLE'		=> '未安装的风格',
	'UNINSTALLED_TEMPLATE'	=> '未安装的模板',
	'UNINSTALLED_THEME'		=> '未安装的风格主题',
	'UNSET'					=> '未定义',

));

?>