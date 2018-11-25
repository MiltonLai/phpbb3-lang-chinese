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

// Common installer pages
$lang = array_merge($lang, array(
    'INSTALL_PANEL'	=> '安装面板',
    'SELECT_LANG'	=> '选择语言',

    'STAGE_INSTALL'	=> '安装phpBB',

    // Introduction page
    'INTRODUCTION_TITLE'	=> '简介',
    'INTRODUCTION_BODY'		=> '欢迎安装 phpBB3!<br /><br />phpBB® 是世界上使用最为广泛的开源论坛软件. phpBB3 是自2000年以来这一系列的最新产品. 与之前的版本相比, phpBB3 具有更丰富的功能, 更友好的操作界面, 并拥有phpBB团队的完整技术支持. phpBB3大幅提升了phpBB2受人欢迎的功能, 并且添加了众多用户迫切需要的新特性. 我们希望phpBB3能满足您的期待.<br /><br />安装模块将引导您安装的全过程, 并且指导您升级或转换不同的论坛(包括phpBB2)到phpBB3. 要获取更多的信息, 我们推荐您阅读 <a href="../docs/INSTALL.html">安装指南</a>.<br /><br />从侧面的菜单中选取不同的内容, 阅读phpBB3授权协议以了解支持和我们对此的要求. 继续下一步操作, 请从上方选择相应的页面.',

    // Support page
    'SUPPORT_TITLE'		=> '支持',
    'SUPPORT_BODY'		=> '当前的稳定发行版将得到免费的技术支持. 包括:</p><ul><li>安装</li><li>配置</li><li>技术问题</li><li>与潜在bug相关问题</li><li>从RC版本升级到最新版本</li><li>从phpBB 2.0.x转换到phpBB3</li><li>从其他论坛软件转换到phpBB3 (请查看 <a href="https://www.phpbb.com/community/viewforum.php?f=486">转换论坛</a>)</li></ul><p>我们强烈建议运行beta版本phpBB3的用户升级至最新的版本.</p><h2>扩展 / 风格</h2><p>与扩展相关的问题, 请提交到对应的 <a href="https://www.phpbb.com/community/viewforum.php?f=451">扩展版面</a>.<br />与风格, 式样和模板相关的问题, 请提交到对应的 <a href="https://www.phpbb.com/community/viewforum.php?f=471">风格版面</a>.<br /><br />与包文件相关的问题请直接在相关的主题下发帖.</p><h2>获得支持</h2><p><a href="https://www.phpbb.com/support/">技术支持</a><br /><a href="https://www.phpbb.com/support/docs/en/3.2/ug/quickstart/">快速上手指南</a><br /><br />为确保您得到最新的版本, 请关注我们的 <a href="https://www.twitter.com/phpbb/">Twitter</a> 和 <a href="https://www.facebook.com/phpbb/">Facebook</a><br /><br />',

    // License
    'LICENSE_TITLE'		=> 'General Public License',

    // Install page
    'INSTALL_INTRO'			=> '欢迎安装！',
    'INSTALL_INTRO_BODY'	=> '使用这个选项, 应该可以在您的服务器上安装 phpBB.</p><p>为了继续安装, 您需要知道您的数据库设置. 如果您不清楚这些, 请联系您的web空间提供者. 没有这些信息安装将不能继续. 您需要:</p>

	<ul>
		<li>数据库类型 - 您将使用的数据库.</li>
		<li>数据库服务器主机名或 DSN - 数据库服务器地址.</li>
		<li>数据库服务器端口 - 数据库服务器端口 (一般情况下不需要输入).</li>
		<li>数据库名称 - 数据库服务器上的数据库名称.</li>
		<li>用户名和密码 - 用于登录并访问上述数据库的用户资料.</li>
	</ul>

	<p><strong>注意:</strong> 如果您使用 SQLite, 您应该在DSN框中输入数据库的完整路径并保持用户名和密码空白. 为了安全的原因, 您应该确保数据库文件不会存放在一个可以被公众访问的文件夹下.</p>

	<p>phpBB3 支持如下的数据库:</p>
	<ul>
		<li>MySQL 3.23 或更高 (支持MySQLi)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 或更高 (直接访问或通过 ODBC)</li>
		<li>MS SQL Server 2005 或更高 (原生)</li>
		<li>Oracle</li>
	</ul>
	
	<p>只有您的服务器支持的数据库才会被显示.',

    'ACP_LINK'	=> '跳转到 <a href="%1$s">管理控制面板(ACP)</a>',

    'INSTALL_PHPBB_INSTALLED'		=> 'phpBB已经安装完成.',
    'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB尚未安装完成.',
));

// Requirements translation
$lang = array_merge($lang, array(
    // Filesystem requirements
    'FILE_NOT_EXISTS'						=> '文件不存在',
    'FILE_NOT_EXISTS_EXPLAIN'				=> '文件 %1$s 必须存在才能安装phpBB.',
    'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> '为了更好的用户体验, 建议保留 %1$s 文件.',
    'FILE_NOT_WRITABLE'						=> '文件不可写',
    'FILE_NOT_WRITABLE_EXPLAIN'				=> '文件 %1$s 必须可写才能安装phpBB.',
    'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> '为了更好的用户体验, 建议将文件 %1$s 设置为可写.',

    'DIRECTORY_NOT_EXISTS'						=> '目录不存在',
    'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> '目录 %1$s 必须存在才能安装phpBB.',
    'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> '为了更好的用户体验, 建议保留目录 %1$s .',
    'DIRECTORY_NOT_WRITABLE'					=> '目录不可写',
    'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> '目录 %1$s 必须可写才能安装phpBB.',
    'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> '为了更好的用户体验, 建议将目录 %1$s 设置为可写.',

    // Server requirements
    'PHP_VERSION_REQD'					=> 'PHP版本',
    'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB 要求 PHP 版本 5.4.0 或高.',
    'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP 方法 getimagesize() 是必须的',
    'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '为保证 phpBB 正常工作, 需要 getimagesize 方法可用.',
    'PCRE_UTF_SUPPORT'					=> 'PCRE UTF-8 支持',
    'PCRE_UTF_SUPPORT_EXPLAIN'			=> '如果您的PHP为通过PCRE扩展编译支持UTF-8, phpBB 将不能正常工作.',
    'PHP_JSON_SUPPORT'					=> 'PHP JSON 支持',
    'PHP_JSON_SUPPORT_EXPLAIN'			=> '为保证 phpBB 正常工作, 需要安装 PHP JSON 扩展.',
    'PHP_XML_SUPPORT'					=> 'PHP XML/DOM 支持',
    'PHP_XML_SUPPORT_EXPLAIN'			=> '为保证 phpBB 正常工作, 需要安装 PHP XML/DOM 扩展.',
    'PHP_SUPPORTED_DB'					=> '支持的数据库',
    'PHP_SUPPORTED_DB_EXPLAIN'			=> 'PHP至少需要一种兼容的数据库支持. 如果无可用的数据库扩展, 请联系您的主机服务商或查阅相关PHP安装文档.',

    'RETEST_REQUIREMENTS'	=> '重置需求',

    'STAGE_REQUIREMENTS'	=> '检查需求',
));

// General error messages
$lang = array_merge($lang, array(
    'INST_ERR_MISSING_DATA'		=> '您必须填完此表格的全部单元.',

    'TIMEOUT_DETECTED_TITLE'	=> '安装过程检测到超时',
    'TIMEOUT_DETECTED_MESSAGE'	=> '安装检测到超时错误, 您可以尝试刷新页面, 但是可能会存在数据损坏. 建议您增加超时时间, 或通过CLI完成操作.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
    'STAGE_OBTAIN_DATA'	=> '设置安装数据',

    //
    // Admin data
    //
    'STAGE_ADMINISTRATOR'	=> '管理员信息',

    // Form labels
    'ADMIN_CONFIG'				=> '管理员设置',
    'ADMIN_PASSWORD'			=> '管理员密码',
    'ADMIN_PASSWORD_CONFIRM'	=> '确认管理员密码',
    'ADMIN_PASSWORD_EXPLAIN'	=> '请输入一个6到30位的密码。',
    'ADMIN_USERNAME'			=> '管理员用户名',
    'ADMIN_USERNAME_EXPLAIN'	=> '请输入一个3到20位的用户名。',

    // Errors
    'INST_ERR_EMAIL_INVALID'		=> '您输入的Email地址无效。',
    'INST_ERR_PASSWORD_MISMATCH'	=> '您输入的两个密码互相不匹配。',
    'INST_ERR_PASSWORD_TOO_LONG'	=> '您输入的密码过长，请输入最多30个字符。',
    'INST_ERR_PASSWORD_TOO_SHORT'	=> '您输入的密码太短，请输入最少6个字符。',
    'INST_ERR_USER_TOO_LONG'	    => '您输入的用户名过长，请输入最多20个字符。',
    'INST_ERR_USER_TOO_SHORT'	    => '您输入的用户名太短，请输入最少3个字符。',

    //
    // Board data
    //
    // Form labels
    'BOARD_CONFIG'		=> '论坛设置',
    'DEFAULT_LANGUAGE'	=> '默认语言',
    'BOARD_NAME'		=> '论坛名称',
    'BOARD_DESCRIPTION'	=> '论坛简短介绍',

    //
    // Database data
    //
    'STAGE_DATABASE'	=> '数据库设置',

    // Form labels
    'DB_CONFIG'				=> '数据库配置',
    'DBMS'					=> '数据库类型',
    'DB_HOST'				=> '数据库服务器主机名或DSN',
    'DB_HOST_EXPLAIN'		=> 'DSN 代表 数据源名称，它只与 ODBC 有关。对于PostgreSQL, 需要通过UNIX domain socket使用localhost或通过TCP使用127.0.0.1连接本地服务器. 对于SQLite, 请输入数据文件的完整路径',
    'DB_PORT'				=> '数据库服务器端口',
    'DB_PORT_EXPLAIN'		=> '不用填写，除非服务器使用的是非标准端口。',
    'DB_PASSWORD'			=> '数据库口令',
    'DB_NAME'				=> '数据库名称',
    'DB_USERNAME'			=> '数据库用户名',
    'DATABASE_VERSION'		=> '数据库版本',
    'TABLE_PREFIX'			=> '为数据库中的表格名称添加前缀',
    'TABLE_PREFIX_EXPLAIN'	=> '数据库表前缀必须以英文字符开头, 并且只能包含英文字符, 数字及下划线.',

    // Database options
    'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
    'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
    'DB_OPTION_MYSQL'		=> 'MySQL',
    'DB_OPTION_MYSQLI'		=> 'MySQL with MySQLi Extension',
    'DB_OPTION_ORACLE'		=> 'Oracle',
    'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
    'DB_OPTION_SQLITE3'		=> 'SQLite 3',

    // Errors
    'INST_ERR_DB'					=> '数据库安装错误',
    'INST_ERR_NO_DB'				=> '无法找到指定数据库类型的 PHP 模块。',
    'INST_ERR_DB_INVALID_PREFIX'	=> '您输入的数据表前缀不正确, 前缀只能以英文字符开头, 并且只能包含英文字符, 数字及下划线。',
    'INST_ERR_PREFIX_TOO_LONG'		=> '您指定的表格前缀过长，上限为 %d 个字符。',
    'INST_ERR_DB_NO_NAME'			=> '没有指定数据库名称。',
    'INST_ERR_DB_FORUM_PATH'		=> '指定的数据库文件位于论坛目录内，您应该把它放在一个无法通过网络访问的位置。',
    'INST_ERR_DB_CONNECT'			=> '连接数据库失败，错误信息如下。',
    'INST_ERR_DB_NO_WRITABLE'		=> '包含数据库的文件和目录都必须可写。',
    'INST_ERR_DB_NO_ERROR'			=> '没有得到相应的错误信息.',
    'INST_ERR_PREFIX'				=> '已经存在使用指定前缀的表格，请指定另一个。',
    'INST_ERR_DB_NO_MYSQLI'			=> '服务器内安装的 MySQL 版本与您选择的 “MySQL (使用 MySQLi 扩展)” 选项不兼容，请尝试 “MySQL” 选项。',
    'INST_ERR_DB_NO_SQLITE3'		=> '您安装的SQLite扩展版本太旧, 请升级到 3.6.15 或更高.',
    'INST_ERR_DB_NO_ORACLE'			=> '服务器内安装的 Oracle 版本需要您将参数 <var>NLS_CHARACTERSET</var> 设置为 <var>UTF8</var>。请设置此参数，或将 Oracle 升级至最低 9.2 版。',
    'INST_ERR_DB_NO_POSTGRES'		=> '您选择的数据库不是 <var>UNICODE</var> 或 <var>UTF8</var> 编码，请使用 <var>UNICODE</var> 或 <var>UTF8</var> 编码的数据库。',
    'INST_SCHEMA_FILE_NOT_WRITABLE'	=> '数据库定义文件不可写',

    //
    // Email data
    //
    'EMAIL_CONFIG'	=> 'Email配置',

    // Package info
    'PACKAGE_VERSION'				=> '安装的包版本',
    'UPDATE_INCOMPLETE'				=> '您的 phpBB 安装未正确升级.',
    'UPDATE_INCOMPLETE_MORE'		=> '请阅读下面的信息并修复这个错误.',
    'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>检测到未完成的升级</h1>

		<p>检测到您的phpBB上次升级未正常完成. 请访问<a href="%1$s" title="%1$s">数据库升级工具</a>, 确保选中 <em>仅进行数据库升级</em> 并点击 <strong>提交</strong>. 在完成升级后不要忘记删除 "install" 目录.</p>',

    //
    // Server data
    //
    // Form labels
    'UPGRADE_INSTRUCTIONS'		=> '新的版本 <strong>%1$s</strong> 已经发布. 请阅读 <a href="%2$s" title="%2$s"><strong>发布公告</strong></a> 获取更多信息以及升级途径.',
    'SERVER_CONFIG'				=> '服务器配置',
    'SCRIPT_PATH'				=> '脚本路径',
    'SCRIPT_PATH_EXPLAIN'		=> 'phpBB 根目录与域名指向目录的相对路径，例如：<samp>/phpBB3</samp>',
));

// Default database schema entries...
$lang = array_merge($lang, array(
    'CONFIG_BOARD_EMAIL_SIG'		=> '非常感谢, 论坛管理团队',
    'CONFIG_SITE_DESC'				=> '用于描述您的论坛的一小段文字',
    'CONFIG_SITENAME'				=> 'phpBB论坛',

    'DEFAULT_INSTALL_POST'			=> '这是新安装好的phpBB3论坛中的一个样本帖子。您可以删除这个帖子、这个主题甚至这个版面， 因为一切看起来都运转正常！',

    'FORUMS_FIRST_CATEGORY'			=> '我的第一个分区',
    'FORUMS_TEST_FORUM_DESC'		=> '这只是一个测试版面.',
    'FORUMS_TEST_FORUM_TITLE'		=> '测试版面一',

    'RANKS_SITE_ADMIN_TITLE'		=> '网站管理员',
    'REPORT_WAREZ'					=> '帖子包含非法或盗版的软件.',
    'REPORT_SPAM'					=> '被举报的帖子唯一的目的就是为网站或某些产品做广告.',
    'REPORT_OFF_TOPIC'				=> '被举报的是跑题帖子.',
    'REPORT_OTHER'					=> '举报的原因不符合列举的条目, 请输入进一步描述.',

    'SMILIES_ARROW'					=> '箭头',
    'SMILIES_CONFUSED'				=> '疑惑',
    'SMILIES_COOL'					=> '酷！',
    'SMILIES_CRYING'				=> '哭泣或非常伤心',
    'SMILIES_EMARRASSED'			=> '困窘',
    'SMILIES_EVIL'					=> '邪恶或疯狂',
    'SMILIES_EXCLAMATION'			=> '感叹',
    'SMILIES_GEEK'					=> '滑稽',
    'SMILIES_IDEA'					=> '想法',
    'SMILIES_LAUGHING'				=> '大笑',
    'SMILIES_MAD'					=> '抓狂',
    'SMILIES_MR_GREEN'				=> '绿先生',
    'SMILIES_NEUTRAL'				=> '中立',
    'SMILIES_QUESTION'				=> '疑问',
    'SMILIES_RAZZ'					=> '冷笑',
    'SMILIES_ROLLING_EYES'			=> '滴溜的眼睛',
    'SMILIES_SAD'					=> '忧郁',
    'SMILIES_SHOCKED'				=> '震撼',
    'SMILIES_SMILE'					=> '微笑',
    'SMILIES_SURPRISED'				=> '惊讶',
    'SMILIES_TWISTED_EVIL'			=> '扭曲的恶魔',
    'SMILIES_UBER_GEEK'				=> '搞笑',
    'SMILIES_VERY_HAPPY'			=> '特开心',
    'SMILIES_WINK'					=> '眨眼',

    'TOPICS_TOPIC_TITLE'			=> '欢迎来到phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
    'MENU_OVERVIEW'		=> '总览',
    'MENU_INTRO'		=> '简介',
    'MENU_LICENSE'		=> '协议',
    'MENU_SUPPORT'		=> '支持',
));

// Task names
$lang = array_merge($lang, array(
    // Install filesystem
    'TASK_CREATE_CONFIG_FILE'	=> '创建配置文件',

    // Install database
    'TASK_ADD_CONFIG_SETTINGS'			=> '添加配置信息',
    'TASK_ADD_DEFAULT_DATA'				=> '在数据库中增加默认设置',
    'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> '创建数据库定义文件',
    'TASK_SETUP_DATABASE'				=> '配置数据库',
    'TASK_CREATE_TABLES'				=> '创建数据表',

    // Install data
    'TASK_ADD_BOTS'				=> '注册机器爬虫',
    'TASK_ADD_LANGUAGES'		=> '安装可用的语言包',
    'TASK_ADD_MODULES'			=> '安装组件',
    'TASK_CREATE_SEARCH_INDEX'	=> '创建搜索索引',

    // Install finish tasks
    'TASK_INSTALL_EXTENSIONS'	=> '安装扩展',
    'TASK_NOTIFY_USER'			=> '发送通知Email',
    'TASK_POPULATE_MIGRATIONS'	=> '填充迁移数据',

    // Installer general progress messages
    'INSTALLER_FINISHED'	    => '安装已经完成',
));

// Installer's general messages
$lang = array_merge($lang, array(
    'MODULE_NOT_FOUND'				=> '无法找到组件',
    'MODULE_NOT_FOUND_DESCRIPTION'	=> '组件无法找到, 因为服务 %s 未定义.',

    'TASK_NOT_FOUND'				=> '无法找到任务',
    'TASK_NOT_FOUND_DESCRIPTION'	=> '任务无法找到, 因为服务 %s 未定义.',

    'SKIP_MODULE'	=> '跳过 “%s” 组件',
    'SKIP_TASK'		=> '跳过 “%s” 任务',

    'TASK_SERVICE_INSTALLER_MISSING'	=> '所有的安装任务服务都应当以“installer”开始',
    'TASK_CLASS_NOT_FOUND'				=> '安装任务服务定义无效. 给定的服务名称“%1$s” 其类命名空间为 “%2$s”. 请查阅task_interface文档获得更多信息.',

    'INSTALLER_CONFIG_NOT_WRITABLE'	=> '安装配置文件不可写.',
));

// CLI messages
$lang = array_merge($lang, array(
    'CLI_INSTALL_BOARD'				=> '安装 phpBB',
    'CLI_UPDATE_BOARD'				=> '升级 phpBB',
    'CLI_INSTALL_SHOW_CONFIG'		=> '显示将被使用的配置信息',
    'CLI_INSTALL_VALIDATE_CONFIG'	=> '校验配置文件',
    'CLI_CONFIG_FILE'				=> '使用的配置文件',
    'MISSING_FILE'					=> '无法访问文件 %1$s',
    'MISSING_DATA'					=> '配置文件缺少数据或包含无效配置.',
    'INVALID_YAML_FILE'				=> '无法解析 YAML 文件 %1$s',
    'CONFIGURATION_VALID'			=> '配置文件有效',
));

// Common updater messages
$lang = array_merge($lang, array(
    'UPDATE_INSTALLATION'			=> '升级安装',
    'UPDATE_INSTALLATION_EXPLAIN'	=> '本选项将升级您的phpBB到最新版本。<br />在升级处理期间所有的文件都将被检查是否完整。您可以查看文件和升级前的变化。<br /><br />文件自动升级的途径有两条。</p><h2>手动升级</h2><p>这个选项, 您只需要下载有改动的文件以确保不会丢失你对其他文件的修改。下载后将文件上载到phpBB目录的相应位置。之后，您可以再次进行文件检查，检查是否将文件放到了正确的位置。</p><h2>通过FTP自动升级</h2><p>这个方法和第一个类似，但是不需要下载有变动的文件和手动上传它们。系统将为你自动做这个工作。用这个方法进行升级您需要知道您的FTP登录的详细信息。 一旦完成设置，系统将重新定向到文件检查功能完成系统升级。.<br /><br />',
    'UPDATE_INSTRUCTIONS'			=> '

		<h1>发行公告</h1>

		<p>在升级程序前，请阅读最新版本的发行公告，它包含很多有用的信息。它也包含完整的下载链接和代码变动日志。</p>

		<br />

		<h1>如何使用自动升级程序升级您的论坛</h1>

		<p>推荐的升级安装是使用完整的按照文件. 如果您的phpBB安装已经修改了核心文件, 您可能会希望使用自动升级包以避免丢失这些更改. 您还可以采用 INSTALL.html 文档中列出的方式升级。使用完整安装包升级 phpBB3 的步骤是：</p>
		
		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><strong class="error">备份所有论文件和数据库.</strong></li>
			<li>到 <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com 下载页面</a> 下载最新的完整安装包.</li>
			<li>解压文件.</li>
			<li>从解压文件夹中删除 <code class="inline">config.php</code> 文件, 和 <code class="inline">/images</code>, <code class="inline">/store</code> 和 <code class="inline">/files</code> 目录.</li>
			<li>前往 ACP, 论坛设置, 确认设置的默认风格是prosilver. 如果不是, 将它设为 prosilver.</li>
			<li>从论坛目录下删除 <code class="inline">/vendor</code> 和 <code class="inline">/cache</code> 目录.</li>
			<li>通过 FTP 或 SSH 将解压缩文件上传至论坛根目录, 覆盖存在的文件. (注意: 上传过程中不要删除 <code class="inline">/ext</code> 目录下的任何扩展)</li>
			<li><strong><a href="%1$s" title="%1$s">现在访问install目录开始升级</a>.</strong></li>
			<li>跟随升级提示完成升级.</li>
			<li>通过 FTP 或 SSH 删除服务器上的 <code class="inline">/install</code> 目录.<br><br></li>
		</ol>
		
		<p>这时候您已经将论坛升级到最新版本. 继续进行以下工作:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>升级语言包</li>
			<li>升级风格<br><br></li>
		</ul>

		<h1>如何使用自动升级包进行升级</h1>

		<p>只有当您的phpBB论坛的核心文件被修改时才推荐使用自动升级包进行升级. Y您还可以采用 INSTALL.html 文档中列出的方式升级. 使用自动升级包升级 phpBB3 的步骤是:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li>到 <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com 下载页面</a> 下载最新的完整安装包.</li>
			<li>解压文件</li>
			<li>上传完整的 "install" 和 "vendor" 目录到论坛的根目录(与config.php在同一目录).<br><br></li>
		</ol>

		<p>上传完成后论坛将自动下线因为论坛中出现了install目录.<br /><br />
		<strong><a href="%1$s" title="%1$s">现在访问install目录开始升级</a>.</strong><br />
		<br />
		然后根据提示完成升级步骤. 完成后将收到通知.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
    // Updater types
    'UPDATE_TYPE'			=> '执行的升级类型',

    'UPDATE_TYPE_ALL'		=> '升级文件系统和数据库',
    'UPDATE_TYPE_DB_ONLY'	=> '仅升级数据库',

    // File updater methods
    'UPDATE_FILE_METHOD_TITLE'		=> '文件升级方法',

    'UPDATE_FILE_METHOD'			=> '文件升级方法',
    'UPDATE_FILE_METHOD_DOWNLOAD'	=> '压缩下载修改后的文件',
    'UPDATE_FILE_METHOD_FTP'		=> '通过FTP升级文件 (自动)',
    'UPDATE_FILE_METHOD_FILESYSTEM'	=> '通过直接访问升级文件 (自动)',

    // File updater archives
    'SELECT_DOWNLOAD_FORMAT'	=> '选择下载文件格式',

    // FTP settings
    'FTP_SETTINGS'			=> 'FTP 设置',
));

// Requirements messages
$lang = array_merge($lang, array(
    'UPDATE_FILES_NOT_FOUND'	=> '无法找到有效的升级目录, 请检查是否已经上传了相关文件.',

    'NO_UPDATE_FILES_UP_TO_DATE'	=> '您的版本已经是最新版本。没有必要进行升级。如果您希望做一个完全的文件检查, 请确信您上传了正确的更新文件。',
    'OLD_UPDATE_FILES'		        => '升级文件已经过期. 找到的升级文件是用于 phpBB %1$s 到 phpBB %2$s 的升级, 但是最新的 phpBB 版本是 %3$s.',
    'INCOMPATIBLE_UPDATE_FILES'		=> '找到的升级文件不适用于您当前的版本. 您的安装版本是 %1$s 而升级文件是用于升级 phpBB %2$s 到 %3$s.',
));

// Update files
$lang = array_merge($lang, array(
    'STAGE_UPDATE_FILES'		=> '升级文件',

    // Check files
    'UPDATE_CHECK_FILES'	=> '检查升级文件',

    // Update file differ
    'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> '文件对比无法打开 %s.',

    'UPDATE_FILE_DIFF'		=> '对比修改的文件',
    'ALL_FILES_DIFFED'		=> '所有被修改的文件已经完成对比.',

    // File status
    'UPDATE_CONTINUE_FILE_UPDATE'	=> '升级文件',

    'DOWNLOAD'							=> '下载',
    'DOWNLOAD_CONFLICTS'				=> '下载合并冲突文档',
    'DOWNLOAD_CONFLICTS_EXPLAIN'		=> '搜索 &lt;&lt;&lt; 检查冲突',
    'DOWNLOAD_UPDATE_METHOD'			=> '下载修改的压缩文档',
    'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> '下载完成后解开压缩文档, 能找到修改后的文件, 将其上传到论坛所在目录的对应目录下. 上传完成后, 就可以继续完成升级.',

    'FILE_ALREADY_UP_TO_DATE'		=> '已经是最新文件.',
    'FILE_DIFF_NOT_ALLOWED'			=> '文件不允许做对比.',
    'FILE_USED'						=> '信息来自于',			// Single file
    'FILES_CONFLICT'				=> '冲突文件',
    'FILES_CONFLICT_EXPLAIN'		=> '下面的文件已经修改过, 不是旧版本的原始文件。phpBB 认为合并这些文件会产生冲突。请检查冲突并尝试手工的解决, 或者选择一种合并的方式继续更新。如果您手工修改消除了冲突，请再次运行文件检查。您也可以选择为每个文件自动首选合并。这将抛弃旧版本文件的冲突代码而丢失您于这个文件上的修改。',
    'FILES_DELETED'					=> '删除的文件',
    'FILES_DELETED_EXPLAIN'			=> '下列文件在新版本中不存在, 这些文件将会被删除.',
    'FILES_MODIFIED'				=> '修改的文件',
    'FILES_MODIFIED_EXPLAIN'		=> '下面的文件已经修改, 不是旧版本的原始文件。更新文件将合并你修改过的文件。',
    'FILES_NEW'						=> '新文件',
    'FILES_NEW_EXPLAIN'				=> '以下的文件在安装中不存在, 这些文件会被添加.',
    'FILES_NEW_CONFLICT'			=> '新的冲突文件',
    'FILES_NEW_CONFLICT_EXPLAIN'	=> '下面的文件在新版本中已更新，但是再对应目录已经存在同名文件，这个文件将被新文件覆盖。',
    'FILES_NOT_MODIFIED'			=> '未修改的文件',
    'FILES_NOT_MODIFIED_EXPLAIN'	=> '下面的文件在老版本的phpBB文件再新版本中没有修改。',
    'FILES_UP_TO_DATE'				=> '已经升级的文件',
    'FILES_UP_TO_DATE_EXPLAIN'		=> '以下的文件已经是最新的, 不需要升级.',
    'FILES_VERSION'					=> '文件版本',
    'TOGGLE_DISPLAY'				=> '查看/隐藏文件列表',


    // File updater
    'UPDATE_UPDATING_FILES'	=> '文件升级中',

    'UPDATE_FILE_UPDATER_HAS_FAILED'	=> '文件升级 “%1$s“ 失败. 安装将尝试回退至 “%2$s“.',
    'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> '文件升级失败. 无可用的回退方法.',

    'UPDATE_CONTINUE_UPDATE_PROCESS'	=> '继续升级',
    'UPDATE_RECHECK_UPDATE_FILES'		=> '再次检查文件',
));

// Update database
$lang = array_merge($lang, array(
    'STAGE_UPDATE_DATABASE'		=> '升级数据库',

    'INLINE_UPDATE_SUCCESSFUL'		=> '数据库升级已完成.',

    'TASK_UPDATE_EXTENSIONS'	=> '升级扩展',
));

// Converter
$lang = array_merge($lang, array(
    // Common converter messages
    'CONVERT_NOT_EXIST'			=> '指定的转换程序不存在.',
    'DEV_NO_TEST_FILE'			=> '在转换器中没有指定test_file变量的值. 如果您是转换器的使用者, 您不应该看到这个错误, 请联系转换器的作者并报告这个错误. 如果您是转换器的作者, 您必须指定一个源论坛中存在的文件名称, 使得路径校验能正常进行.',
    'COULD_NOT_FIND_PATH'		=> '无法找到旧论坛的路径. 请检查您的设定并再试一次.<br />» 指定的路径是 %s',
    'CONFIG_PHPBB_EMPTY'		=> '缺少 phpBB3 的配置信息“%s”。',

    'MAKE_FOLDER_WRITABLE'		=> '请首先确保此文件夹存在并且可以被网络服务器写入，然后重试：<br />»<strong>%s</strong>',
    'MAKE_FOLDERS_WRITABLE'		=> '请首先确保这些文件夹存在并且可以被网络服务器写入，然后重试：<br />»<strong>%s</strong>',

    'INSTALL_TEST'				=> '再次测试',

    'NO_TABLES_FOUND'			=> '没有找到任何表格',
    'TABLES_MISSING'			=> '无法找到这些表格<br />» <strong>%s</strong>',
    'CHECK_TABLE_PREFIX'		=> '请检查您的数据表前缀后重试',

    // Conversion in progress
    'CONTINUE_CONVERT'			=> '继续转换',
    'CONTINUE_CONVERT_BODY'		=> '检测到曾经进行过转换，您可以选择进行重新转换还是继续上一次的转换。',
    'CONVERT_NEW_CONVERSION'	=> '新的转换',
    'CONTINUE_OLD_CONVERSION'	=> '继续前一次的转换',

    // Start conversion
    'SUB_INTRO'					=> '简介',
    'CONVERT_INTRO'				=> '欢迎使用 phpBB 统一转换框架',
    'CONVERT_INTRO_BODY'		=> '这里您可以从其它（已安装）的论坛导入数据，下表列出的是所有可用的转换模块。如果其中没有您想要的转换模块，请访问我们的网站，那里可能会提供更多的转换模块下载。',
    'AVAILABLE_CONVERTORS'		=> '可用的转换器',
    'NO_CONVERTORS'				=> '无可用的转换器.',
    'CONVERT_OPTIONS'			=> '选项',
    'SOFTWARE'					=> '论坛软件',
    'VERSION'					=> '版本',
    'CONVERT'					=> '转换',

    // Settings
    'STAGE_SETTINGS'			=> '设置',
    'TABLE_PREFIX_SAME'			=> '表格前缀需要与转换之前所使用的相同。<br />»  之前所使用的表格前缀是 %s',
    'DEFAULT_PREFIX_IS'			=> '根据提供的前缀, 转换器无法找到可用的表单. 请确认您在同一数据库中存在旧的表单. %1$s 默认的表单前缀是 <strong>%2$s</strong>',
    'SPECIFY_OPTIONS'			=> '设定转换选项',
    'FORUM_PATH'				=> '论坛路径',
    'FORUM_PATH_EXPLAIN'		=> '这是在磁盘上对应于您<strong>现在的phpBB3根目录</strong>的原论坛 <strong>相对</strong> 路径',
    'REFRESH_PAGE'				=> '刷新页面继续转换',
    'REFRESH_PAGE_EXPLAIN'		=> '如果设置为“是”，转换程序将会在完成每一步之后刷新页面，然后继续。如果这是您为了测试目的而进行的第一次转换，我们建议您将此设置为“No”。',

    // Conversion
    'STAGE_IN_PROGRESS'			=> '转换进行中',

    'AUTHOR_NOTES'				=> '作者提示<br />» %s',
    'STARTING_CONVERT'			=> '开始转换操作',
    'CONFIG_CONVERT'			=> '正在转换配置信息',
    'DONE'						=> '完成',
    'PREPROCESS_STEP'			=> '正在执行转换准备工作',
    'FILLING_TABLE'				=> '正在填充表格：<strong>%s</strong>',
    'FILLING_TABLES'			=> '正在填充表格',
    'DB_ERR_INSERT'				=> '执行 <code>INSERT</code> 语句时发生错误。',
    'DB_ERR_LAST'				=> '执行 <var>query_last</var> 时发生错误。',
    'DB_ERR_QUERY_FIRST'		=> '执行 <var>query_first</var> 时发生错误。',
    'DB_ERR_QUERY_FIRST_TABLE'	=> '执行 <var>query_first</var> 时发生错误：%s (“%s”)。',
    'DB_ERR_SELECT'				=> '执行 <code>SELECT</code> 语句时发生错误。',
    'STEP_PERCENT_COMPLETED'	=> '第 <strong>%d</strong> 步 / 共 <strong>%d</strong> 步',
    'FINAL_STEP'				=> '正在执行最后一步',
    'SYNC_FORUMS'				=> '开始同步版面',
    'SYNC_POST_COUNT'			=> '正在同步帖子',
    'SYNC_POST_COUNT_ID'		=> '正在同步<var>序号</var>为 %1$s 到 %2$s 的帖子.',
    'SYNC_TOPICS'				=> '开始同步主题',
    'SYNC_TOPIC_ID'				=> '正在同步主题：<var>topic_id</var> %1$s 至 %2$s',
    'PROCESS_LAST'				=> '正在执行最后一步操作',
    'UPDATE_TOPICS_POSTED'		=> '正在生成主题发布信息',
    'UPDATE_TOPICS_POSTED_ERR'	=> '在生成主题信息时发生错误. 您可以在转换结束后在管理员控制面板中重试这个操作.',
    'CONTINUE_LAST'				=> '继续进行上一步操作',
    'CLEAN_VERIFY'				=> '正在清理并校验最终结构',
    'NOT_UNDERSTAND'			=> '无法理解 %s #%d，表格 %s (“%s”)',
    'NAMING_CONFLICT'			=> '命名冲突：%s 与 %s 都是别名<br /><br />%s',

    // Finish conversion
    'CONVERT_COMPLETE'			=> '转换完成',
    'CONVERT_COMPLETE_EXPLAIN'	=> '您已经将您的论坛成功转换为 phpBB 3.2，您现在可以 <a href="../">访问您的论坛</a>。请在启用新论坛前确认参数都已经正确设置. phpBB 的线上使用帮助位于 <a href="https://www.phpbb.com/support/docs/en/3.2/ug/">用户指南</a> 和 <a href="https://www.phpbb.com/community/viewforum.php?f=466">技术支持版面</a>',

    'CONV_ERROR_ATTACH_FTP_DIR'			=> '原论坛允许附件使用FTP上载，请禁用FTP上载并确认设定了有效的上载目录，所有附件将被拷贝到这个新的web可访问的目录。这些完成后，请重新开始转换程序。',
    'CONV_ERROR_CONFIG_EMPTY'			=> '转换程序没有可用的配置信息。',
    'CONV_ERROR_FORUM_ACCESS'			=> '无法得到版面的访问信息.',
    'CONV_ERROR_GET_CATEGORIES'			=> '无法得到分区信息.',
    'CONV_ERROR_GET_CONFIG'				=> '无法找到您的版面设置信息.',
    'CONV_ERROR_COULD_NOT_READ'			=> '无法读写 “%s”.',
    'CONV_ERROR_GROUP_ACCESS'			=> '无法得到群组权限信息.',
    'CONV_ERROR_INCONSISTENT_GROUPS'	=> '在add_bots()中检测到群组表单中的矛盾数据 - 如果手工设置过您需要添加所有特殊群组.',
    'CONV_ERROR_INSERT_BOT'				=> '无法在群组中添加bot.',
    'CONV_ERROR_INSERT_BOTGROUP'		=> '无法在bots数据表中添加bot.',
    'CONV_ERROR_INSERT_USER_GROUP'		=> '无法在群组数据表中添加用户.',
    'CONV_ERROR_MESSAGE_PARSER'			=> '内容解析错误',
    'CONV_ERROR_NO_AVATAR_PATH'			=> '开发者注意: 您必须指定 $convertor[\'avatar_path\'] 以使用 %s.',
    'CONV_ERROR_NO_FORUM_PATH'			=> '指向源论坛的相对路径未指定.',
    'CONV_ERROR_NO_GALLERY_PATH'		=> '开发者注意: 您必须指定 $convertor[\'avatar_gallery_path\'] 以使用 %s.',
    'CONV_ERROR_NO_GROUP'				=> '群组 "%1$s" 在 %2$s 中无法找到.',
    'CONV_ERROR_NO_RANKS_PATH'			=> '开发者注意: 您必须指定 $convertor[\'ranks_path\'] 以使用 %s.',
    'CONV_ERROR_NO_SMILIES_PATH'		=> '开发者注意: 您必须指定 $convertor[\'smilies_path\'] 以使用 %s.',
    'CONV_ERROR_NO_UPLOAD_DIR'			=> '开发者注意: 您必须指定 $convertor[\'upload_path\'] 以使用 %s.',
    'CONV_ERROR_PERM_SETTING'			=> '无法添加/更改权限设置.',
    'CONV_ERROR_PM_COUNT'				=> '无法选择站内消息数量.',
    'CONV_ERROR_REPLACE_CATEGORY'		=> '无法在新论坛中替换旧分区.',
    'CONV_ERROR_REPLACE_FORUM'			=> '无法在新论坛中替换旧版面.',
    'CONV_ERROR_USER_ACCESS'			=> '无法得到用户权限信息.',
    'CONV_ERROR_WRONG_GROUP'			=> '错误的群组 "%1$s" 定义于 %2$s.',
    'CONV_OPTIONS_BODY'					=> '这个页面用于收集访问原论坛所需要的数据. 输入原论坛数据库参数, 转换程序不会对原数据库作任何更改. 原论坛必须暂时停用以确保转换能正确完成.',
    'CONV_SAVED_MESSAGES'				=> '保存消息',

    'PRE_CONVERT_COMPLETE'			=> '全部的转换准备步骤都已被成功完成，您现在可以开始进行实际的转换操作。请注意您可能需要手工完成一些工作, 在转换完成后, 需要检查一下权限分配, 重新建立索引, 并检查头像和图标文件路径是否正确.',
));