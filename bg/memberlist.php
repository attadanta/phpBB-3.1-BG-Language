<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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
	'ABOUT_USER'			=> 'Профил',
	'ACTIVE_IN_FORUM'		=> 'Най-активен във форум',
	'ACTIVE_IN_TOPIC'		=> 'Най-активен в тема',
	'ADD_FOE'				=> 'Добави в списъка с врагове',
	'ADD_FRIEND'			=> 'Добави в списъка с приятели',
	'AFTER'					=> 'След',

	'ALL'					=> 'Всички',

	'BEFORE'				=> 'Преди',

	'CC_SENDER'				=> 'Изпрати копие на емейла до мен.',
	'CONTACT_ADMIN'			=> 'Свържи се с администратора на форума',

	'DEST_LANG'				=> 'Език',
	'DEST_LANG_EXPLAIN'		=> 'Изберете съответния език (ако е включен) според получателя на това съобщение.',

	'EDIT_PROFILE'			=> 'Промени профила',

	'EMAIL_BODY_EXPLAIN'	=> 'Това съобщение ще бъде изпратено като чист текст, не включвайте HTML или BBCode. Обратният адрес на това съобщение ще бъде Вашият мейл адрес.',
	'EMAIL_DISABLED'		=> 'Съжаляваме, но всички мейл функции са изключени.',
        'EMAIL_SENT'			=> 'Мейлът беше изпратен.',
        'EMAIL_TOPIC_EXPLAIN'	=> 'Това съобщение ще бъде изпратено като чист текст, не включвайте HTML или BBCode. Обратна връзка към темата ще бъде включена в съобщението. В полето на подателя ще бъде посочен Вашият мейл адрес.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Трябва да въведете валиден мейл адрес на получателя.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Трябва да въведете съобщение.',
	'EMPTY_MESSAGE_IM'		=> 'Трябва да въведете съобщение.',
	'EMPTY_NAME_EMAIL'		=> 'Трябва да въведете името на получателя.',
	'EMPTY_SENDER_EMAIL'	=> 'Трябва да въведете валиден мейл адрес.',
	'EMPTY_SENDER_NAME'		=> 'Трябва да въведете име.',
        'EMPTY_SUBJECT_EMAIL'	=> 'Трябва да въведете тема на мейла.',
        'EQUAL_TO'				=> 'Равно на',

        'FIND_USERNAME_EXPLAIN'	=> 'Използвайте тази форма, за да търсите потребители. Не е нужно да попълвате всички полета. За да търсите само по част от данните, може да въведете * (звезда) в свободните полета. За въвеждане на дати използвайте формата <kbd>ГГГГ-ММ-ДД</kbd>, например <samp>2017-10-29</samp>. В кутийките може да маркирате едно или повече потребителски имена (в зависимост от формуляра). С натискането на бутона „Избери“ ще се върнете обратно.',
        'FLOOD_EMAIL_LIMIT'		=> 'В момента не можете да изпращате мейли. Моля, опитайте по-късно.',

        'GROUP_LEADER'			=> 'Лидер на групата',

        'HIDE_MEMBER_SEARCH'	=> 'Скрий търсенето на потребители',

        'IM_ADD_CONTACT'		=> 'Добави контакт',
        'IM_DOWNLOAD_APP'		=> 'Свали приложението',
        'IM_JABBER'				=> 'Имайте предвид, че потребителите може да са изключили получаването на непоискани съобщения.',
	'IM_JABBER_SUBJECT'		=> 'Това е автоматично съобщение, моля не отговаряйте! Съобщение от потребител %1$s в %2$s.',
        'IM_MESSAGE'			=> 'Вашето съобщение',
        'IM_NAME'				=> 'Вашето име',
        'IM_NO_DATA'			=> 'Няма контактна информация за този потребител.',
        'IM_NO_JABBER'			=> 'Съжаляваме, директното изпращане на съобщения по Jabber не се поддържа от този форум. Инсталирайте Jabber на вашата система, за да се свържете с потребителя директно.',
        'IM_RECIPIENT'			=> 'Получател',
	'IM_SEND'				=> 'Изпрати',
        'IM_SEND_MESSAGE'		=> 'Изпрати моментално съобщение',
	'IM_SENT_JABBER'		=> 'Вашето съобщение до %1$s беше изпратено успешно.',
        'IM_USER'				=> 'Изпрати съобщение',

	'LAST_ACTIVE'				=> 'Последно активен',
	'LESS_THAN'					=> 'По-малко от',
	'LIST_USERS'				=> array(
		1	=> '%d потребител',
		2	=> '%d потребители',
	),
        'LOGIN_EXPLAIN_TEAM'		=> 'Трябва да влезете в профила си, за да видите потребителите от екипа.',
        'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Трябва да влезете в профила си, за да видите списъка с потребители.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Трябва да влезете в профила си, за да търсите потребители.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Трябва да влезете в профила си, за да разглеждате профили.',

        'MANAGE_GROUP'			=> 'Управление на групата',
	'MORE_THAN'				=> 'Повече от',

        'NO_CONTACT_FORM'		=> 'Формулярът за контакт с администратора, е изключен.',
        'NO_CONTACT_PAGE'		=> 'Формулярът за контакт с администратора е изключен.',
        'NO_EMAIL'				=> 'Нямате право да изпратите мейл към този потребител.',
        'NO_VIEW_USERS'			=> 'Нямате право да разглеждате списъка с потребители или техните профили.',

        'ORDER'					=> 'Подреждане',
	'OTHER'					=> 'Други',

        'POST_IP'				=> 'Публикувано от IP/домейн',

        'REAL_NAME'				=> 'Име на получателя',
	'RECIPIENT'				=> 'Получател',
	'REMOVE_FOE'			=> 'Премахни от враговете',
	'REMOVE_FRIEND'			=> 'Премахни от приятелите',

        'SELECT_MARKED'			=> 'Избери маркираните',
	'SELECT_SORT_METHOD'	=> 'Изберете подредба',
        'SENDER_EMAIL_ADDRESS'	=> 'Вашият мейл адрес',
	'SENDER_NAME'			=> 'Вашето име',
        'SEND_ICQ_MESSAGE'		=> 'Изпрати съобщение по ICQ',
	'SEND_IM'				=> 'Моментално съобщение',
        'SEND_JABBER_MESSAGE'	=> 'Изпрати съобщение по Jabber',
	'SEND_MESSAGE'			=> 'Изпрати съобщение',
        'SEND_YIM_MESSAGE'		=> 'Изпрати съобщение по YIM',
	'SORT_EMAIL'			=> 'Мейл',
	'SORT_LAST_ACTIVE'		=> 'Последна активност',
        'SORT_POST_COUNT'		=> 'Брой мнения',

        'USERNAME_BEGINS_WITH'	=> 'Потребителското име започва с',
	'USER_ADMIN'			=> 'Администрирай потребителя',
	'USER_BAN'				=> 'Изгонване',
	'USER_FORUM'			=> 'Потребителски статистики',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Няма изпратени напомняния до момента',
		1		=> '%1$d напомняне изпратено<br />» %2$s',
                2		=> '%1$d напомняния изпратени <br />» %2$s',
	),
        'USER_ONLINE'			=> 'На линия',
        'USER_PRESENCE'			=> 'Присъствие във форума',
        'USERS_PER_PAGE'		=> 'Потребители на страница',

        'VIEWING_PROFILE'		=> 'Преглеждане на профила - %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Вижте профила във Facebook',
	'VIEW_SKYPE_PROFILE'	=> 'Вижте профила в Skype',
	'VIEW_TWITTER_PROFILE'	=> 'Вижте профила в Twitter',
        'VIEW_YOUTUBE_CHANNEL'	=> 'Вижте профила в YouTube',
        'VIEW_GOOGLEPLUS_PROFILE' => 'Вижте профила в Google+',
));
