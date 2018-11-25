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

$lang = array_merge($lang, array(
	'HELP_BBCODE_BLOCK_IMAGES'	=> '在帖子中显示图片',
	'HELP_BBCODE_BLOCK_INTRO'	=> '简介',
	'HELP_BBCODE_BLOCK_LINKS'	=> '创建链接',
	'HELP_BBCODE_BLOCK_LISTS'	=> '创建列表',
	'HELP_BBCODE_BLOCK_OTHERS'	=> '其他内容',
	'HELP_BBCODE_BLOCK_QUOTES'	=> '引用和输出等宽文字',
	'HELP_BBCODE_BLOCK_TEXT'	=> '文本格式',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'	=> '如果论坛管理员启用了附件功能并且您有发表附件的权限，新的<strong>[attachment=][/attachment]</strong> BBCode允许您在帖子中任何地方添加附件。在发布窗口可以通过附件下拉框和按钮将附件插入到帖子中。',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> '在帖子中添加附件',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'phpBB BBCode 包含了用于在帖子中包含图片的标签。使用此标签时需要注意的两件事是: 首先许多用户不喜欢在帖子中出现太多的图片，其次显示的图片已经在互联网上存在(不太可能只存在于您的电脑上， 除非你运行了一个web服务)。要显示一张图片，您需要使用 <strong>[img][/img]</strong> 标签包围指向图片的 URL。例如：<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br /> 如上面的URL提到的, 如果您愿意的话您也可以使用 <strong>[url][/url]</strong> 标签来包围一个图片链接。例如<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />将产生：<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'	=> '在帖子中添加图片',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'BBCode是一种特殊的HTML实现，是否能在帖子中使用 BBCode 取决于论坛管理员的设置。另外您也可以在发表帖子时禁用 BBCode。BBCode 和 HTML 很像，但标签是方括号 [ 和 ] 而不是 &lt; 和 &gt;，一样提供了很好的页面显示效果控制。根据使用的模板不同在界面上略有不同，您可以在帖子编辑界面通过点击按钮轻松上手，快速学会使用 BBCode。尽管如此，您还是可能会在这篇帮助中找到有用的信息。',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'	=> '什么是 BBCode？',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'phpBB BBCode 支持好几种创建URI(Uniform Resource Indicators，也成为URL)的方法。<ul><li>首先是使用 <strong>[url=][/url]</strong> 标签, 在等号后输入的将成为URL。例如要链接到 phpBB.com 您可以使用：<br /><br /><strong>[url=https://www.phpbb.com/]</strong>访问 phpBB!<strong>[/url]</strong><br /><br />这将生成这样的链接, <a href="https://www.phpbb.com/">访问 phpBB!</a> 请注意：链接在同一个窗口打开还是在新窗口中打开取决于用户的浏览设定。</li><li>如果您希望直接展示链接，您可以这样使用：<br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />这将产生一个这样的链接, <a href="https://www.phpbb.com/">https://www.phpbb.com/</a></li><li>另外，phpBB支持一种称为 <i>Magic Links</i> 的功能, 会自动将URL格式的字符串转换为可点击的链接，哪怕不是以 http:// 开头的字符串。例如在消息中输入 www.phpbb.com 将在查看内容时自动被转换成 <a href="http://www.phpbb.com/">www.phpbb.com</a>。</li><li>同样地，对Email地址也是这样，您可以这样标识一个Email地址：<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />这将会输出 <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> 或者您只需要在内容中输入 no.one@domain.adr，在查看内容时这个地址会被自动加上链接。</li></ul>和其它 BBCode 标签一样您可以用URL包在其它标签外面，例如 <strong>[img][/img]</strong> (看下一节), <strong>[b][/b]</strong>, 等等。对于这些式样标签您只需要确保标签前后匹配，例如：<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br />is <span style="text-decoration: underline">not</span> correct which may lead to your post being deleted so take care.',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'	=> '链接到其他网站',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> '第二种列表类型是有序的列表，可以对输出进行控制。要创建一个有序列表，您可以使用 <strong>[list=1][/list]</strong> 创建一个数字编号列表或者使用 <strong>[list=a][/list]</strong> 创建一个字母编号列表。对于无序列表，条目使用 <strong>[*]</strong>。例如<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Go to the shops<br /><strong>[*]</strong>Buy a new computer<br /><strong>[*]</strong>Swear at computer when it crashes<br /><strong>[/list]</strong><br /><br />将生成：<ol style="list-style-type: decimal;"><li>Go to the shops</li><li>Buy a new computer</li><li>Swear at computer when it crashes</li></ol>而对于字母列表您可以使用：<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>The first possible answer<br /><strong>[*]</strong>The second possible answer<br /><strong>[*]</strong>The third possible answer<br /><strong>[/list]</strong><br /><br />生成<ol style="list-style-type: lower-alpha"><li>The first possible answer</li><li>The second possible answer</li><li>The third possible answer</li></ol><br /><strong>[list=A]</strong><br /><strong>[*]</strong>The first possible answer<br /><strong>[*]</strong>The second possible answer<br /><strong>[*]</strong>The third possible answer<br /><strong>[/list]</strong><br /><br />生成<ol style="list-style-type: upper-alpha"><li>The first possible answer</li><li>The second possible answer</li><li>The third possible answer</li></ol><br /><strong>[list=i]</strong><br /><strong>[*]</strong>The first possible answer<br /><strong>[*]</strong>The second possible answer<br /><strong>[*]</strong>The third possible answer<br /><strong>[/list]</strong><br /><br />生成<ol style="list-style-type: lower-roman"><li>The first possible answer</li><li>The second possible answer</li><li>The third possible answer</li></ol><br /><strong>[list=I]</strong><br /><strong>[*]</strong>The first possible answer<br /><strong>[*]</strong>The second possible answer<br /><strong>[*]</strong>The third possible answer<br /><strong>[/list]</strong><br /><br />生成<ol style="list-style-type: upper-roman"><li>The first possible answer</li><li>The second possible answer</li><li>The third possible answer</li></ol>',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> '创建一个有序列表',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'BBCode 支持两种类型的列表，有序和无序。他们在 HTML 上实际上是等价的。一个无序的列表依次输出每个元素，使用圆点或其他符号缩进，创建一个无序的列表您可以使用 <strong>[list][/list]</strong> 并在列表中使用 <strong>[*]</strong> 定义每个元素。例如列出您最喜爱的颜色：<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Red<br /><strong>[*]</strong>Blue<br /><strong>[*]</strong>Yellow<br /><strong>[/list]</strong><br /><br />这将生成如下的列表：<ul><li>Red</li><li>Blue</li><li>Yellow</li></ul><br />另外您可以使用 <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong>, 或 <strong>[list=square][/list]</strong>设置前面符号的类型。',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> '创建一个无序列表',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> '当然可以。如果您是这个论坛的管理员并且拥有相应的权限，您可以通过自定义BBCode添加更多的BBCode。',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> '我可以添加自己的标签吗？',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> '如果您需要输出一段代码或其他任何需要等宽字符的文本，例如使用Courier字体，您必须将文字包含在 <strong>[code][/code]</strong> 标签中, 例如<br /><br /><strong>[code]</strong>echo &quot;This is some code&quot;;<strong>[/code]</strong><br /><br />所有使用 <strong>[code][/code]</strong> 标签包围的文字格式将会以原来的格式显示。',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> '输出代码或等宽数据',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> '引用文字有两种形式，带引用或者不带。<ul><li>当您使用引用功能回复一个帖子时，您会注意到添加到内容中的帖子文字被<strong>[quote=&quot;&quot;][/quote]</strong> 包围起来。这种方式可以带入引用的用户名. 例如要引用Mr. Blobby 写的一段文字，您可以输入：<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>Mr. Blobby 写的文字<strong>[/quote]</strong><br /><br />显示中会自动在引用的文字前添上 &quot;Mr. Blobby 写道:&quot;. 记住您 <strong>必须</strong> 在您引用的人名外加上双引号 "". </li><li>第二种方式可以进行随意的引用。在帖子中使用 <strong>[quote][/quote]</strong> 标签即可。当您查看帖子时，会将文字在引用框中。</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=> '在回复中引用',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'BBCode 包含了可以快速修改文字基础风格的标签。这由以下方法完成：<ul><li>用<strong>[b][/b]</strong>封装一段文字使其变粗, 例如 <br /><br /><strong>[b]</strong>Hello<strong>[/b]</strong><br /><br />将变成 <strong>Hello</strong></li><li>添加下划线则使用 <strong>[u][/u]</strong>, 例如:<br /><br /><strong>[u]</strong>Good Morning<strong>[/u]</strong><br /><br />变成 <span style="text-decoration: underline">Good Morning</span></li><li>变成斜体使用 <strong>[i][/i]</strong>, 例如<br /><br />This is <strong>[i]</strong>Great!<strong>[/i]</strong><br /><br />将得到 This is <i>Great!</i></li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> '如何创建粗体，斜体和下划线文字',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> '下列标签可以用于改变文字的颜色和大小。需要记住的是显示效果将取决于浏览者使用的浏览器和操作系统：<ul><li>改变文字的颜色使用标签 <strong>[color=][/color]</strong>。您可以指定一个可被识别的颜色名 (例如 red, blue, yellow等等) 或者是十六进制数组，例如 #FFFFFF，#000000。举个例子，要来一段红色的文字您可以使用：<br /><br /><strong>[color=red]</strong>Hello!<strong>[/color]</strong><br /><br />或者<br /><br /><strong>[color=#FF0000]</strong>Hello!<strong>[/color]</strong><br /><br />它们将会输出 <span style="color:red">Hello!</span></li><li>类似的，改变文字的大小使用标签 <strong>[size=][/size]</strong>. 这个标签取决于用户所选择的界面模板，不过建议的格式是体现文字百分比大小的数字值，从20 (非常小) 开始直到200 (非常大)。例如：<br /><br /><strong>[size=30]</strong>SMALL<strong>[/size]</strong><br /><br />将输出 <span style="font-size:30%;">SMALL</span><br /><br />以及：<br /><br /><strong>[size=200]</strong>HUGE!<strong>[/size]</strong><br /><br />将显示 <span style="font-size:200%;">HUGE!</span></li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> '如何修改文字的颜色和大小',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> '当然可以, 例如为了引起注意您可以这样写：<br /><br /><strong>[size=200][color=red][b]</strong>LOOK AT ME!<strong>[/b][/color][/size]</strong><br /><br />这将输出 <span style="color:red;font-size:200%;"><strong>LOOK AT ME!</strong></span><br /><br />我们不推荐您在帖子中大量使用这样形式的文字，因为这样会引起他人反感。在使用的过程中请注意每个标签都必须最后关闭，否则不能正常解析。下列的例子就是错误的：<br /><br /><strong>[b][u]</strong>This is wrong<strong>[/b][/u]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> '我可以嵌套使用格式标签吗？',
));
