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
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'	=> '各个论坛的管理员可以允许或禁止某种附件类型。如果您不确定哪些可以被上载，请联系论坛管理员得到帮助。',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> '这个论坛允许什么样的附件？',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'	=> '如果您想查看您上传附件的列表, 打开用户控制面板, 点击附件页面链接即可看到.',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'	=> '我怎样才能找到所有我发布的附件?',

	'HELP_FAQ_BLOCK_ATTACHMENTS'	=> '附件',
	'HELP_FAQ_BLOCK_BOOKMARKS'	=> '订阅和收藏',
	'HELP_FAQ_BLOCK_FORMATTING'	=> '格式和主题类型',
	'HELP_FAQ_BLOCK_FRIENDS'	=> '好友和黑名单',
	'HELP_FAQ_BLOCK_GROUPS'	=> '用户等级和群组',
	'HELP_FAQ_BLOCK_ISSUES'	=> 'phpBB 问题',
	'HELP_FAQ_BLOCK_LOGIN'	=> '登录和注册问题',
	'HELP_FAQ_BLOCK_PMS'	=> '站内消息',
	'HELP_FAQ_BLOCK_POSTING'	=> '发帖相关',
	'HELP_FAQ_BLOCK_SEARCH'	=> '搜索论坛',
	'HELP_FAQ_BLOCK_USERSETTINGS'	=> '用户偏好设置',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'	=> '在 phpBB 3.0 中，收藏类似于浏览器中的收藏夹, 当有更新时您不会收到提示。在 phpBB 3.1 之后，收藏更类似于订阅主题，在收藏的主题有更新时您将收到通知。而订阅，在主题或版面内容有更新时将会通过您指定的方式通知您。收藏和订阅的通知选项可以在用户控制面板 UCP 的“偏好设置”中设置。',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> '收藏和订阅有什么区别？',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'	=> '当您进入一个版面时, 在页面的底部您会看到 “订阅这个版面” 的链接. 这个链接可以用于订阅版面。',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'	=> '我该如何订阅版面？',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'	=> '取消订阅, 您只需要打开用户控制面板，点击订阅链接后进行退订操作。',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'	=> '我怎样才能取消订阅?',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'	=> '您可以在主题讨论页的顶部或底部的“主题工具”栏里订阅或者收藏这个主题。<br />在回复时勾选“有回复时通知我”也可以订阅主题。',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'	=> '我该如何收藏或订阅主题？',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'	=> '公告一般包含当前版面的重要信息，用户需要及时阅读。公告会在其发布的版面的每一页顶端和全站公告一起显示，发表公告的权限由论坛管理员管理。',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> '什么是公告？',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'BBCode是一种特殊的HTML实现方式，在帖子中给特定文本和对象提供了更好的展现形式。能否使用BBCode由论坛管理员决定，也可能取决于发表的帖子类型。BBCode本身和HTML风格相似, 但是标签用方括号 [ 和 ] 而不是 &lt; 和 &gt; 。要了解更多信息请查看发帖页面中的BBCode帮助。',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> '什么是BBCode？',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> '全站公告包含重要的信息，您应该及时阅读。全站公告显示在每个版面的顶端和您的用户控制面板。发表全站公告的权限由论坛管理员管理。',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> '什么是全站公告？',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> '不可以，在这个论坛上不允许使用HTML发表帖子。大多数使用HTML生成的格式效果可以通过BBCode实现。',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> '我可以使用HTML吗？',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> '主题图标是发表主题时用户选择的和主题内容相关的一个小图片。是否可以使用主题图标取决于论坛管理员的设置。',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> '什么是主题图标？',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'	=> '是的，在帖子中可以显示图片。如果论坛管理员允许附件上传，您可以上传图片到论坛上。否则您必须在网上存储您的图片再将链接，例如 http://www.example.com/my-picture.gif 发布到帖子中，而不能直接链接图片到您的本地电脑 (除非您的电脑是一个公众可以访问的服务器)，也不能链接图片到需要访问权限的地址，例如您的hotmail或者雅虎邮箱。要显示链接的图片, 请使用BBCode [img] 标签。',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> '我可以发表图片吗？',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> '长期无回复的主题将会被自动锁定，但是还有其他的情形例如被论坛管理员或版主锁定。如果有相应的权限，您也可以锁定您自己发布的主题。',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> '什么是锁定的主题？',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=> '表情图标, 或者笑脸图标是用于表达表情的一种小图片，用一小段代码，例如 :) 表示快乐，:( 表示不高兴。表情的完整列表可以在发表帖子的界面中看到。请不要在帖子中滥用表情图标，这会让帖子无法阅读，版主或管理员可能会因此修改或删除您的帖子。论坛管理员可以设置表情图标在单个帖子中的个数限制。',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> '什么是表情图标？',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=> '置顶主题显示于每个版面的公告下方，仅显示于第一页。这些主题一般比较重要，所以您需要尽可能及时的阅读这些帖子。和公告一样, 是否可以设置置顶主题取决于您是否有足够的权限。',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> '什么是置顶主题？',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> '您可以使用这些名单来管理论坛中的用户。加入好友名单的用户会在您的用户控制面板中列出，方便您快速查看在线状态和发送站内消息。另外如果有模板支持，您的好友所发表的帖子也会高亮显示。如果您将某个用户拉黑，他的帖子将对您自动隐藏。',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> '什么是我的好友名单和黑名单？',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=> '您可以通过两种方式添加用户到您的名单。在浏览用户资料时，页面上有链接可以点击添加好友或拉黑。另外，在您的用户控制面板，您也可以直接输入用户名来添加。您还可以在这个页面删除名单中的用户。',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> '我该如何将用户添加为好友或拉黑以及如何取消？',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> '管理员是整个论坛中拥有最高权限的用户。管理员用户可以从各个方面管理论坛，包括设置权限，封禁用户，创建群组或版主等等。取决于论坛创建者赋予的权限，他们还可以拥有所有版面的版主权限。',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'	=> '什么是管理员？',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'	=> '论坛管理员可以为不同群组的成员设置不同的颜色。这样方便区分版面上的用户所处的群组。',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'	=> '为什么某些群组能显示出不同的颜色？',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'	=> '如果您属于多个群组，您可以设置默认群组来显示自己的群组颜色和群组级别。论坛管理员可以赋予您在用户控制面板中更改默认群组的权限。',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'	=> '什么是 “默认群组”？',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'	=> '版主可以是个人或群组，他们的工作是维护每个版面的日常运作。他们拥有在所辖版面内的编辑/删除/锁定/解锁/移动/分割主题和投票的权力。一般版主会阻止用户发表与版面无关的帖子，垃圾帖子或有冒犯内容的帖子。',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'	=> '什么是版主？',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'	=> '这个页面显示论坛的管理团队人员列表，包含论坛管理员，版主和其所管理的版面。',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'	=> '什么是 “论坛团队” 链接？',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'	=> '群组是论坛用于管理用户的一种方式。每个用户可以属于多个群组 (这与其他的论坛软件不太一样) 并且每个群组可以设置独立的权限。这使得管理员可以很方便的同时管理多个用户的权限，例如版主的权限, 使其可以访问私人版面等等。',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'	=> '要加入一个群组请点击用户控制面板中的群组链接，这样您可以看到所有的群组。并不是所有的群组都是 <em>开放</em> 的，一些需要申请，一些是关闭的，而另一些甚至是隐藏的。如果是开放的群组您可以直接点击加入。如果是需要申请的群组，您需要先申请加入，而后等待群组长批准后才能成为群组的成员，这个过程中他们可能会询问您加入的原因。如果申请没有被批准，请不要纠缠群组长，他们有拒绝您加入的理由。',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> '我该如何加入一个群组？',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'	=> '当群组被论坛管理员创建时, 会同时设置群组的组长。如果您有兴趣新建一个群组，请先通过站内消息联系论坛管理员。',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> '我该如何成为一个群组长',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'	=> '什么是群组？',

	'HELP_FAQ_ISSUES_ADMIN_ANSWER'	=> '如果论坛管理员开启了选项，所有用户都可以通过“联系我们”表单联系管理员。<br />论坛成员还可以通过“论坛团队”链接。',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'	=> '我应该如何联系论坛管理员？',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'	=> '此软件由 phpBB Limited 编写并授权。如果您觉得这个功能有必要添加，请访问<a href="https://www.phpbb.com/ideas/">phpBB Ideas Centre</a>，这里您可以给自己期望的功能投票，或提交新的功能需求.',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'	=> '为什么没有XXX功能？',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'	=> '您应该联系这个论坛的管理员。通过“论坛团队”名单您可以看到论坛的管理员名单。如果投诉没有收到回复，您应该联系这个域名的所有者 (使用 <a href="http://www.google.com/search?q=whois">whois lookup</a>)或者, 如果这个论坛运行于一个免费的服务器 (例如 yahoo, free.fr, f2s.com, 等等), 联系管理者或者服务商的违规管理部门。请注意 phpBB 团队<strong>绝对没有</strong>控制并且无论如何没有相关的责任和义务来管理使用这个论坛的用户行为。对 phpBB 开发组发布任何与 phpbb.com 网站<strong>没有直接关系</strong>的法律声明 (服务中断, 连带责任, 诽谤等等) 都是没有任何意义的。如果您给 phpBB 团队发送任何<strong>关于第三方</strong>使用此软件的信件，都有可能得到简短的声明或不予回复。',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'	=> '对于论坛上诽谤, 滥用以及其他涉及法律的事务, 我该联系谁？',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=> '这份软件 (官方发行的原始版本) 由 <a href="https://www.phpbb.com/">phpBB Limited</a> 制作，发布并持有版权。遵循 GNU General Public License, version 2 (GPL-2.0) 协议，可以自由使用和发布, 查看<a href="https://www.phpbb.com/about/">关于 phpBB</a>以了解更多信息。',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> '这个论坛程序是谁写的？',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'	=> '如果您未在登录时勾选<em>记住我</em>选项，论坛将只会在一小段时间内保留您的登录状态，这样可以避免您的帐号被其他人误用。如果需要保持登录状态，在登录时勾选<em>记住我</em>选项。在您通过一个公用电脑，例如图书馆，网吧，大学电脑实验室等，上网时不建议您使用此功能。如果登录时没有显示这个选项，说明此功能已经被管理员禁用。',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'	=> '为什么我会自动登入论坛？',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'	=> '这种情况有好几种原因。首先确认您的用户名和密码是否正确。如果是，请联系论坛的管理员确认是否封禁了您的帐号。也有可能是网站的管理员在后台进行了错误的设置，请联系他们修复错误。',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'	=> '最可能的原因是, 您输入了一个错误的用户名或密码(检查一下注册时发给您的Email)。也可能出于某些原因管理员封禁或删除了您的帐号。如果是后一种, 也许是您很长一段时间没有发表任何帖子? 某些论坛为了控制数据库大小会定期清理长期不活动的用户。如果是这种情况，请重新注册一个帐号并积极参与讨论吧。',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> '我注册过帐号但是现在却无法登录了？！',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'	=> '为什么我不能登录？',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'	=> '这可能是因为网站管理者禁止了新用户注册，也可能是因为网站管理者封禁了您所在的IP地址或禁止了您试图注册的用户名。需要更多的帮助请联系论坛管理员。',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'	=> '为什么我不能注册？',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'	=> 'COPPA, 是儿童在线隐私和保护条例的缩写, 此法律在美国于1998年生效。这项法律要求任何有可能收集年龄小于13周岁的未成年人信息的网站必须持有其监护人的同意书，或者其他形式的合法依据才能收集其身份信息。如果您不能确认此法律是否对您的行为有约束，请咨询律师以得到帮助。请注意phpBB团队和当前论坛的所有者并不会提供任何法律建议，也不为各种法律事件提供观点和帮助, 除非是“关于此论坛内容涉及法律相关的问题应该联系谁”相关的情形。',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'	=> '什么是 COPPA？',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'	=> '删除所有 phpBB 在您的电脑上为保持您的登录状态留下的cookie。如果论坛开启了相应的功能，这些cookie还会保存您在论坛上的阅读记录等信息。如果您遇到了登入登出相关的问题，可以尝试删除论坛cookie。',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'	=> '“清除论坛 cookie” 是什么意思？',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'	=> '不用紧张！虽然您的密码无法找回，但是可以重设。您到登录页面点击 <em>我忘了自己的密码</em>。按提示的步骤您就可以很快取回您的帐号。如果无法重设密码，请联系论坛管理员。',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'	=> '我忘了自己的密码！',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'	=> '您不一定必须注册，这取决于论坛管理员设置是否需要您注册后才能发表帖子。但是注册将给您更多的权限来使用其他的论坛功能，例如自定义头像, 站内消息, 给好友发送Email和加入群组等等。只需要一小会儿就能完成注册，所以建议您还是注册一个帐号吧。',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'	=> '首先确认您输入了正确的用户名和密码。如果都没错，可能会有两个原因。如果论坛支持 COPPA 并且您在注册时点击了 <em>我小于13岁</em> 链接，您必须先按照您收到的提示完成规定的步骤。如果不是这个原因, 是否因为您的帐号未被激活？一些论坛需要新用户在登录前由自己或由管理员激活。当您注册时论坛将告诉您是否需要激活。如果您收到了Email就按照其中的步骤完成激活，如果您没有收到Email，您需要检查一下您的Email地址是否有效。使用激活的原因之一是防止 <em>恶意</em> 用户滥用论坛。如果您确信Email地址没错请联系论坛管理员。',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'	=> '我注册了但是无法登录！',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'	=> '为什么我必须注册？',

	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=> '有三个可能的原因：您还未注册或还未登录，论坛管理员禁止了站内消息，或者论坛管理员取消了您的站内消息权限。请联系管理员询问其原因。',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> '我不能发送站内消息！',
	'HELP_FAQ_PMS_SPAM_ANSWER'	=> '我们对这种情况非常抱歉。这个论坛的Email系统带有用户发送跟踪系统，您应该给论坛管理员发送Email，随信附上您所收到的完整Email说明您遭遇到的情况。完整的Email非常重要，因为其中包含了Email头信息 (发送Email的用户的细节)。论坛管理员会对此进行相应的处理。',
	'HELP_FAQ_PMS_SPAM_QUESTION'	=> '我收到了这个论坛里的成员发给我的垃圾邮件/包含冒犯内容的邮件！',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'	=> '您可以在用户控制面板中通过设定站内消息接收规则来拒绝来自某个用户的消息。如果您收到类似的消息，请向管理员投诉，他们有权限禁止这些用户发送站内消息。',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'	=> '我怎么总是收到骚扰消息！',

	'HELP_FAQ_POSTING_BUMP_ANSWER'	=> '在主题页点击 “顶起主题” 链接。您可以 “顶起” 主题使其处于为版面顶部。如果您看不到这个链接，说明这个功能已经被停用了或者还没到顶帖间隔时间。您也可以通过回复主题来顶起它. 但是请注意遵守您所处版面的规定。',
	'HELP_FAQ_POSTING_BUMP_QUESTION'	=> '我该如何顶起自己的主题？',
	'HELP_FAQ_POSTING_CREATE_ANSWER'	=> '在版面上发表帖子, 请点击相应的按钮。您可能需要注册之后才能发表帖子，您所拥有的权限列表显示在版面和帖子页面的下方。例如：您可以发表新主题, 您可以添加附件, 等等。',
	'HELP_FAQ_POSTING_CREATE_QUESTION'	=> '我该如何在版面上发表主题或发表回复？',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'	    => '这允许您保存一个未完成帖子以备以后发表。请到用户控制面板查找重新加载帖子继续编辑。',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> '在发表主题的时候显示的 “保存” 按钮是做什么用的？',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'	=> '除非您是管理员或版主，您只能编辑您自己的帖子. 您可以点击编辑按钮编辑一个帖子(有时必须在发表后的一段时间内)。如果有人已经回复过这篇帖子, 您的修改会在帖子中留下一段修改的痕迹显示在帖子的下方，列出您修改的次数和时间。在没有回复的情况下不会显示，在管理员和版主修改的情况下也可能不会显示，即使他们可能会留下一段记录说明他们编辑帖子的原因。请注意对于普通用户，发表的帖子在已经有回复的情况下发帖者不能删除。',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'	=> '我该如何编辑或删除一个帖子？',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=> '一些版本是限制访问的. 要查看, 阅读, 发表等等您需要一定的权限. 只有版主和论坛管理员才能授予这些权限，您如果有这方面的问题请联系他们。',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> '为什么我不能访问这个版面？',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'	=> '发表附件的权限, 可以通过版面/用户/群组来设置。论坛管理员可能不允许在某些版面粘贴附件，或者只允许某些群组发表附件。如果您不清楚为什么不能发表附件，请联系论坛管理员。',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> '为什么我不能添加附件？',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'	=> '投票选项的限制由论坛管理员设置。如果您需要更多的选项，请联系论坛管理员。',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'	=> '为什么我不能添加更多投票选项？',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'	=> '当您发表新主题或者修改主题第一篇帖子的时候，您可以在页面下方看到一个添加投票的表单，您可以点击”创建投票“来创建投票。如果您无法看见这个表单，说明如果您没有相应的权限。您需要为投票输入一个标题和至少两个选项，确保每个选项在不同的行上。您还可以设置用户在投票时应当选择的选项数目和日期限制（如果是0, 则表示投票没有时间限制)。最后一个选项是是否允许用户修改投票结果。',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> '我该如何创建一个投票？',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'	=> '和帖子一样，投票只能由创建者或者版主，管理员修改。要编辑一个投票，点击编辑主题的第一篇帖子。如果还没有人参与投票, 用户可以删除投票或编辑投票选项。但是一旦已经有人参与投票，就只有版主和管理员有权限编辑或删除它。这用于防止投票的结果在中途被修改。',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'	=> '我该如何编辑或删除一个投票？',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'	=> '论坛管理员可能设置了这个版面的帖子必须通过审核才能发表。这也可能是因为您被管理员放入了需要审核帖子的群组。请联系论坛管理员以得到更多信息。',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'	=> '为什么我的帖子需要审核后才能发表？',
	'HELP_FAQ_POSTING_REPORT_ANSWER'	=> '如果论坛管理员允许举报，请在您想举报的帖子上点击举报按钮，而后按照提示的步骤完成举报。',
	'HELP_FAQ_POSTING_REPORT_QUESTION'	=> '我该如何向版主举报一个帖子？',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'	=> '您必须先创建一个签名后才能在帖子中添加，创建签名档在您的个人资料管理面板。当您创建签名档之后, 请在发表帖子的页面中勾选 <em>添加签名档</em> 来添加签名。您也可以在您的个人资料中选中默认添加签名档选项, 这样每次发帖时就会自动勾选相应选项。如果个别帖子不需要签名，您可以在发帖页面取消勾选。',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'	=> '我该如何在我的帖子后添加签名？',
	'HELP_FAQ_POSTING_WARNING_ANSWER'	=> '每个论坛管理员对自己的论坛都有一套规则. 如果他们觉得您在版面违反了规定, 他们可能会对您发出一个警告. 请注意这是论坛管理人员的决定, phpBB开发者和这些警告没有任何关系。如果您不能确定收到警告的原因，请联系论坛管理员。',
	'HELP_FAQ_POSTING_WARNING_QUESTION'	=> '为什么我收到了一个警告？',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'	=> '您的搜索返回的结果数量太多以至于服务器无法处理。请使用高级搜索指定更多的条件和关键字再次搜索。',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'	=> '为什么我的搜索返回空白？',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'	=> '在首页或版面帖子列表页, 帖子浏览页的搜索栏中输入关键字就可以查找. 点击每页页首的 “搜索” 链接将进入高级搜索。具体的位置因模板而异。',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'	=> '我该如何搜索版面？',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'	=> '到 “用户” 页面并点击 “查找一个用户” . 在打开的页面里, 输入您的查找条件。',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'	=> '我该如何查找某个用户？',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'	=> '您的搜索条件可能太模糊，包含了许多常用的字词，这些字词并未被 phpBB 索引。您可以输入更确切的关键字和更多的限制条件通过高级搜索进行查找。',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> '为什么我的搜索没有结果？',
	'HELP_FAQ_SEARCH_OWN_ANSWER'	=> '您自己的帖子可以通过点击用户控制面板或浏览自己的资料中 “查找用户的帖子” 链接得到。 或者通过论坛顶部的快速链接菜单。如果需要搜索自己的主题，可以使用高级搜索。',
	'HELP_FAQ_SEARCH_OWN_QUESTION'	=> '该如何查找我发表的帖子和主题？',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'	=> '在浏览帖子时, 用户名下可能会有两种图标. 第一个是和您的等级相关的图片, 一般以星星或方块的形式显示您在这个论坛的头衔. 第二个是一个更大的图片, 这是用户的头像, 一般是因人而异的。',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=> '在用户控制面板的”个人资料“栏下，可以通过以下的方式添加头像：Gravatar，相册，远程或上传。哪些方法可用取决于论坛管理员是否开启了相应选项。如果您无法使用头像，请联系论坛管理员。',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> '我该如何才能显示头像？',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'	=> '用户名旁边的图片是什么？',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=> '您的所有配置信息 (如果您是注册用户) 都存储在数据库中。要修改它们请点击页首您的用户名，前往用户控制面板。您可以在用户控制面板中修改您的各种偏好设置。',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> '我该如何更改设置？',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'	=> '只有注册用户才能通过论坛发送Email给其他用户 (如果管理员启用了Email功能)。这主要是为了防止匿名用户使用Email系统发送垃圾邮件。',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'	=> '当我点击用户的Email链接时为什么要让我登录？',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'	=> '在用户控制面板 “偏好设置” 中您可以找到选项 <em>隐藏您的在线状态</em>, 如果您启用这个选项, 将只有管理员, 版主和您自己才能看到您的在线状态. 您将会显示为隐藏用户。',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'	=> '我怎样才能使自己不出现在在线用户列表中？',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'	=> '可能是管理员没有安装您的语言, 也有可能是目前还没有人将这个论坛翻译成您的语言. 请向论坛管理员咨询是否可以为您安装您使用的语言. 如果这个语言的翻译并不存在, 您可以尝试创建这个语言的翻译. 更多的信息请访问<a href="https://www.phpbb.com/">phpBB</a>&reg;。',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'	=> '我的语言不在列表里！',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'	=> '等级一般显示在阅读主题页面中您的用户名下方，大多数论坛使用等级来区分用户的发帖数或某种特殊身份，例如版主和管理员。一般而言，您不能直接更改您的等级，因为这些是由管理员设置的。请不要为了提高等级滥用论坛的发帖功能发表没有意义的帖子。这种情况下版主和管理员反而会大量删除您的帖子而降低您的等级。',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'	=> '等级是什么？如何改变我的等级？',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'	=> '如果您确认您已经设置了正确的时区而时间依然错误, 这很有可能是因为服务器的时间是错误的，请通知论坛管理员修复这个问题。',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'	=> '我更改了时区但是时间还是显示错误！',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'	=> '一般很少出现服务器时间不准的情况，您看到的时间不准有可能是因为论坛和您处于不同的时区。如果是这种原因，您可以在个人资料中更改为符合您所处地区的时区。请注意大多数设置，包含更改时区等操作只有注册用户才可以进行。如果您还未注册，就请尽快注册吧。',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'	=> '显示的时间不正确！',
));
