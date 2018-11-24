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
	'CLI_CONFIG_CANNOT_CACHED'			=> '如果配置项变更频繁无法有效使用缓存, 请启用此选项.',
	'CLI_CONFIG_CURRENT'				=> '配置项当前值, 使用0和1来设置布尔值',
	'CLI_CONFIG_DELETE_SUCCESS'			=> '成功删除配置项 %s.',
	'CLI_CONFIG_NEW'					=> '新的配置项, 使用0和1来设置布尔值',
	'CLI_CONFIG_NOT_EXISTS'				=> '配置项 %s 不存在',
	'CLI_CONFIG_OPTION_NAME'			=> '配置选项的名称',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> '如果显示值结尾不需换行, 请启用此选项.',
	'CLI_CONFIG_INCREMENT_BY'			=> '增长的数值',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> '配置项 %s 数值增加成功',
	'CLI_CONFIG_SET_FAILURE'			=> '配置项 %s 无法设置',
	'CLI_CONFIG_SET_SUCCESS'			=> '配置项 %s 设置成功',

	'CLI_DESCRIPTION_CRON_LIST'					=> '显示已准备好和未准备好的定时任务列表.',
	'CLI_DESCRIPTION_CRON_RUN'					=> '执行所有已准备好的定时任务.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> '将执行的任务的名称',
	'CLI_DESCRIPTION_DB_LIST'					=> '列出所有已安装且可用的迁移.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> '执行迁移更新数据库.',
	'CLI_DESCRIPTION_DB_REVERT'					=> '撤销更新.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> '删除配置选项',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> '禁用指定的扩展.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> '启用指定的扩展.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> '查找不依赖于此的迁移.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> '修复版面和模块的树形结构.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> '读取配置选项的值',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> '增加一个配置项的整数值',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> '列出数据库和文件系统中的所有扩展.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> '环境变量名.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> '安全模式中执行(关闭扩展).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> '启动shell.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> '清除指定的扩展.',

	'CLI_DESCRIPTION_REPARSER_LIST'						=> '列出能被解析的文本类型.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> '可用的解析器:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> '使用当前的文本解析器解析存储的文本.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> '输入需要解析的内容. 留空则解析所有内容.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> '不保存任何改动, 仅显示变动内容',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> '处理的记录ID最小值',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> '处理的记录ID最大值',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> '估算的单次处理记录数量',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> '从上次执行停止的地方继续解析',

	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'			=> '重新计算 users 表中的 user_email_hash 字段值.',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> '仅当旧的选项值匹配当前值时进行设置',
	'CLI_DESCRIPTION_SET_CONFIG'						=> '设置配置项的值',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> '删除所有的缩略图.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> '生成丢失的缩略图.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> '重新生成所有缩略图.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> '检查论坛是否是最新版本.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> '需要检查的扩展名称(选择所有则检查所有扩展)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> '带缓存执行检查.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> '仅检查稳定或非稳定版本的扩展.',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> '使用bcrypt更新过期密码的hash值.',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" 需要被设置为 "stable" 或 "unstable".',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> '启用(或禁用)用户帐号.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> '启用用户的用户名.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> '禁用用户的用户名',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> '这个用户帐号已经被启用.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> '这个用户帐号已经被禁用.',
	'CLI_DESCRIPTION_USER_ADD'					=> '新增用户.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> '新用户名称',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> '新用户密码',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> '新用户E-mail',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> '发生新用户激活邮件(默认不发送)',
	'CLI_DESCRIPTION_USER_DELETE'				=> '删除用户帐号.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> '要删除的帐号的用户名',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> '删除用户的所有帖子. 不使用这个选项将保留用户帖子.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> '清理用户名.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> '无法禁用扩展 %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> '成功禁用扩展 %s',
	'CLI_EXTENSION_DISABLED'			=> '扩展 %s 未启用',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> '无法启用扩展 %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> '成功启用扩展 %s',
	'CLI_EXTENSION_ENABLED'				=> '扩展 %s 已经被启用',
	'CLI_EXTENSION_NOT_EXIST'			=> '扩展 %s 不存在',
	'CLI_EXTENSION_NAME'				=> '扩展名称',
	'CLI_EXTENSION_PURGE_FAILURE'		=> '无法清理扩展 %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> '成功清理扩展 %s',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> '无法更新扩展 %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> '成功更新扩展 %s',
	'CLI_EXTENSION_NOT_FOUND'			=> '未找到扩展.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> '扩展 %s 不可启用.',
	'CLI_EXTENSIONS_AVAILABLE'			=> '可用',
	'CLI_EXTENSIONS_DISABLED'			=> '已禁用',
	'CLI_EXTENSIONS_ENABLED'			=> '已启用',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> '成功修复论坛和模块树形结构.',
	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> '成功对所有邮件重新计算hash值.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> '成功使用bcrypt更新所有过期密码的hash值.',

	'CLI_MIGRATION_NAME'					=> '数据迁移名称, 包含命名空间路径(使用前斜杠避免错误).',
	'CLI_MIGRATIONS_AVAILABLE'				=> '可用的数据迁移',
	'CLI_MIGRATIONS_INSTALLED'				=> '已安装的数据迁移',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => '仅显示可用的数据迁移',
	'CLI_MIGRATIONS_EMPTY'                  => '无数据迁移.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> '解析 %1$s (范围 %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> '解析 %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> '解析已完成',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) 已删除.',
	'CLI_THUMBNAIL_DELETING'	=> '删除缩略图',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) 已跳过.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) 已生成.',
	'CLI_THUMBNAIL_GENERATING'	=> '生成缩略图',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> '所有缩略图已经重新生成.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> '所有缩略图已经被删除.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> '无可生成的缩略图.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> '无可删除的缩略图.',

	'CLI_USER_ADD_SUCCESS'		=> '成功添加用户 %s.',
	'CLI_USER_DELETE_CONFIRM'	=> '确认要删除 ‘%s’? [y/N]',
	'CLI_USER_RECLEAN_START'	=> '清理用户名',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> '清理完成. 无用户名被清理.',
		1	=> '清理完成. %d 用户名被清理.',
		2	=> '清理完成. %d 用户名被清理.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' 您可以指定一个定时任务名, 仅执行指定的定时任务.',
	'CLI_HELP_USER_ACTIVATE'	=> '启用用户帐号, 或者使用 <info>--deactivate</info> 禁用用户帐号.
如果需要发送激活邮件, 使用 <info>--send-email</info> 选项.',
	'CLI_HELP_USER_ADD'			=> '命令 <info>%command.name%</info> 添加用户:
如果未指定选项, 会弹出提示. 
如果需要发送激活邮件, 使用 <info>--send-email</info> 选项.',
	'CLI_HELP_USER_RECLEAN'		=> '清理用户名将检查所有用户确保用户名符合要求. 符合要求的用户名区分大小写, 基于NFC标准和ASCII编码.',
));
