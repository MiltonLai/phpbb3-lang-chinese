<?php
/**
*
* captcha_qa [Chinese Traditional]
*
* @package language
* @version $Id: captcha_qa.php 9966 2009-08-12 15:12:03Z mikovchain $
* @copyright (c) 2009 phpbbchina.com
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
	'CAPTCHA_QA'				=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> '請回答此問題以證明您不是Spam機器人.',
	'CONFIRM_QUESTION_WRONG'	=> '您的回答不正確.',

	'QUESTION_ANSWERS'			=> '回答',
	'ANSWERS_EXPLAIN'			=> '請輸入正確答案, 多個請分行.',
	'CONFIRM_QUESTION'			=> '問題',

	'ANSWER'					=> '答案',
	'EDIT_QUESTION'				=> '編輯問題',
	'QUESTIONS'					=> '問題',
	'QUESTIONS_EXPLAIN'			=> '對於每個提交表單, 您必須啟用Q&amp;A外掛，使用者會被問及您設定的問題. 要使用這個外掛, 您在論壇預設語系下要設置至少一個問題. 這個問題必須讓您的訪客易於理解和回答而機器人無法回答. 請注意, 機器人可能使用Google™搜尋這類工具來搜尋答案. 使用較多數目的問題並且經常變更題目可以有效的避免機器人註冊. 您可以設置嚴格校驗來檢查答案的空格和混合大小寫、標點符號是否一致.',
	'QUESTION_DELETED'			=> '問題已刪除',
	'QUESTION_LANG'				=> '語系',
	'QUESTION_LANG_EXPLAIN'		=> '這個問題和對應的答案使用的語系.',
	'QUESTION_STRICT'			=> '嚴格校驗',
	'QUESTION_STRICT_EXPLAIN'	=> '啟用後, 強制混合大小寫、標點符號和空格一致的答案才能通過檢查.',

	'QUESTION_TEXT'				=> '問題內容',
	'QUESTION_TEXT_EXPLAIN'		=> '呈現給使用者的問題.',

	'QA_ERROR_MSG'				=> '請填寫所有空格並輸入至少一個答案.',
	'QA_LAST_QUESTION'			=> '在外掛還處於啟用狀態時不能刪除所有問題.',
));

?>