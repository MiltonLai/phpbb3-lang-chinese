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
    'CONFIG_NOT_EXIST'					=> '配置项"%s"不存在.',

    'GROUP_NOT_EXIST'					=> '组"%s"不存在.',

    'MIGRATION_APPLY_DEPENDENCIES'		=> '应用 %s 的依赖。',
    'MIGRATION_DATA_DONE'				=> '已安装数据: %1$s; 时间: %2$.2f 秒',
    'MIGRATION_DATA_IN_PROGRESS'		=> '数据安装中: %1$s; 时间: %2$.2f 秒',
    'MIGRATION_DATA_RUNNING'			=> '数据安装中: %s。',
    'MIGRATION_EFFECTIVELY_INSTALLED'	=> '迁移已安装(跳过): %s',
    'MIGRATION_EXCEPTION_ERROR'			=> '请求时出错, 抛出异常. 程序将尽可能恢复出错前的修改, 但您仍应该检查一下论坛是否存在错误.',
    'MIGRATION_NOT_FULFILLABLE'			=> '迁移 "%1$s" 无法完成, 丢失迁移 "%2$s".',
    'MIGRATION_NOT_INSTALLED'			=> '迁移 "%s" 未安装.',
    'MIGRATION_NOT_VALID'				=> '%s 不是一个有效的迁移.',
    'MIGRATION_SCHEMA_DONE'				=> '已安装的数据表： %1$s; 时间: %2$.2f 秒',
    'MIGRATION_SCHEMA_IN_PROGRESS'		=> '正在安装数据表： %1$s; 时间: %2$.2f 秒',
    'MIGRATION_SCHEMA_RUNNING'			=> '正在安装数据表： %s.',

    'MIGRATION_REVERT_DATA_DONE'		=> '已恢复数据： %1$s; 时间: %2$.2f 秒',
    'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> '数据恢复中： %1$s; 时间: %2$.2f 秒',
    'MIGRATION_REVERT_DATA_RUNNING'		=> '数据恢复中： %s.',
    'MIGRATION_REVERT_SCHEMA_DONE'		=> '已恢复数据表： %1$s; 时间: %2$.2f 秒',
    'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> '数据表恢复中： %1$s; 时间: %2$.2f 秒',
    'MIGRATION_REVERT_SCHEMA_RUNNING'	=> '数据表恢复中： %s.',

    'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> '无效的迁移. IF处理缺少条件.',
    'MIGRATION_INVALID_DATA_MISSING_STEP'			=> '无效的迁移. IF处理缺少对一个迁移步骤的有效调用.',
    'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> '无效的迁移. 一个自定义的函数无法调用',
    'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> '无效的迁移. 未知的迁移工具类型.',
    'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> '无效的迁移. 未定义的迁移工具.',
    'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> '无效的迁移. 未定义的工具方法.',

    'MODULE_ERROR'						=> '创建组件 %s 时发生错误',
    'MODULE_EXISTS'						=> '组件 %s 已存在',
    'MODULE_EXIST_MULTIPLE'				=> '多个使用给定父组件的组件已经存在： %s. 请尝试使用 before/after 键来清理组件位置.',
    'MODULE_INFO_FILE_NOT_EXIST'		=> '缺少必须的组件信息文件: %2$s',
    'MODULE_NOT_EXIST'					=> '缺少必须组件: %s',

    'PARENT_MODULE_FIND_ERROR'			=> '无法确认父组件: %s',
    'PERMISSION_NOT_EXIST'				=> '权限设置 "%s" 不存在.',

    'ROLE_NOT_EXIST'					=> '权限角色 "%s" 不存在.',
));
