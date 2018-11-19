<?php
/**
*
* recaptcha [Chinese Traditional]
*
* @package language
* @version $Id: captcha_recaptcha.php 9933 2009-08-06 09:12:21Z mikovchain $
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
	'RECAPTCHA_LANG'				=> '正體中文',
	'RECAPTCHA_NOT_AVAILABLE'		=> '使用 reCaptcha 前您需要前往 <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> 註冊成為會員.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> '您輸入的驗證碼不正確',

	'RECAPTCHA_PUBLIC'				=> 'reCaptcha 公鍵',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> '公鍵可以自<a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>獲取.',
	'RECAPTCHA_PRIVATE'				=> 'reCaptcha 私鍵',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> '私鍵可以自<a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>獲取.',

	'RECAPTCHA_EXPLAIN'				=> '爲了證明您不是Spam機器, 請輸入顯示的兩個詞.',
));

?>