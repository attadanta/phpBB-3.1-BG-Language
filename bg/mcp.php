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
	'ACTION'				=> 'Действие',
	'ACTION_NOTE'			=> 'Действие/Бележка',
	'ADD_FEEDBACK'			=> 'Добави обратна връзка',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Ако искате да добавите доклад, моля попълнете следната форма. Използвайте само чист текст; HTML, BBCode и т.н. не са разрешени.',
	'ADD_WARNING'			=> 'Добави предупреждение',
	'ADD_WARNING_EXPLAIN'	=> 'За да изпратите предупреждение на потребителя, моля попълнете следната форма. Използвайте само чист текст; HTML, BBCode и т.н. не са разрешени.',
	'ALL_ENTRIES'			=> 'Всички записи',
	'ALL_NOTES_DELETED'		=> 'Успешно са премахнати всички потребителски бележки.',
	'ALL_REPORTS'			=> 'Всички доклади',
	'ALREADY_REPORTED'		=> 'Това мнение вече е било докладвано.',
	'ALREADY_REPORTED_PM'	=> 'Това лично съобщение вече е било докладвано.',
	'ALREADY_WARNED'		=> 'Вече има сложено предупреждение на това мнение.',
	'APPROVE'				=> 'Одобри',
	'APPROVE_POST'			=> 'Одобри мнението',
	'APPROVE_POST_CONFIRM'	=> 'Сигурни ли сте, че искате да одобрите мнението?',
	'APPROVE_POSTS'			=> 'Одобри мненията',
	'APPROVE_POSTS_CONFIRM'	=> 'Сигурни ли сте, че искате да одобрите избраните мнения?',
	'APPROVE_TOPIC'			=> 'Одобри темата',
	'APPROVE_TOPIC_CONFIRM'	=> 'Сигурни ли сте, че искате да одобрите темата?',
	'APPROVE_TOPICS'		=> 'Одобри темите',
	'APPROVE_TOPICS_CONFIRM'=> 'Сигурни ли сте, че искате да одобрите избраните теми?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Не можете да преместите тема във форум, в който тя вече е.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Не можете да сложите предупреждение на нерегистриран потребител.',
	'CANNOT_WARN_SELF'		=> 'Не можете да предупредите себе си.',
	'CAN_LEAVE_BLANK'		=> 'Това поле може да бъде оставено празно.',
	'CHANGE_POSTER'			=> 'Смени автора на мнението',
	'CLOSE_PM_REPORT'		=> 'Затвори ЛС доклада',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'Сигурни ли сте, че искате да затворите избрания ЛС доклад?',
	'CLOSE_PM_REPORTS'		=> 'Затоври ЛС докладите',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'Сигурни ли сте, че искате да затворите избраните ЛС доклади?',
	'CLOSE_REPORT'			=> 'Затоври доклада',
	'CLOSE_REPORT_CONFIRM'	=> 'Сигурни ли сте, че искате да затворите избрания доклад?',
	'CLOSE_REPORTS'			=> 'Затвори докладите',
	'CLOSE_REPORTS_CONFIRM'	=> 'Сигурни ли сте, че искате да затворите избраните докалди?',

	'DELETE_PM_REPORT'			=> 'Изтрийте ЛС доклада',
	'DELETE_PM_REPORT_CONFIRM'	=> 'Сигурни ли сте, че искате да изтриете избрания ЛС доклад?',
	'DELETE_PM_REPORTS'			=> 'Изтрийте ЛС докладите',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'Сигурни ли сте, че искате да изтриете избраните ЛС доклади?',
	'DELETE_POSTS'				=> 'Изтрийте мненията',
	'DELETE_REPORT'				=> 'Изтрийте доклада',
	'DELETE_REPORT_CONFIRM'		=> 'Сигурни ли сте, че искате да изтриете избрания доклад?',
	'DELETE_REPORTS'			=> 'Изтрийте докладите',
	'DELETE_REPORTS_CONFIRM'	=> 'Сигурни ли сте, че искате да изтриете избраните доклади?',
	'DELETE_SHADOW_TOPIC'		=> 'Изтрийте темата в сянка',
	'DELETE_TOPICS'				=> 'Изтрийте избраните теми',
	'DISAPPROVE'				=> 'Не одбрявай',
	'DISAPPROVE_REASON'			=> 'Причина за неодобрение',
	'DISAPPROVE_POST'			=> 'Не одобрявай мнението',
	'DISAPPROVE_POST_CONFIRM'	=> 'Сигурни ли сте, че не искате да одобрите мнението?',
	'DISAPPROVE_POSTS'			=> 'Не одобрявай мненията',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Сигурни ли сте, че не искате да одобрите мненията?',
	'DISPLAY_LOG'				=> 'Покажи предишните записи',
	'DISPLAY_OPTIONS'			=> 'Настройки на показване',

	'EMPTY_REPORT'					=> 'Трябва да въведете описание, когато избирате тази причина.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Една или няколко теми бяха изтрити от базата данни защото са били или са станали празни.',

	'FEEDBACK'				=> 'Обратна връзка',
	'FORK'					=> 'Копирай',
	'FORK_TOPIC'			=> 'Копирай темата',
	'FORK_TOPIC_CONFIRM'	=> 'Сигурни ли сте, че искате да копирате избраната тема?',
	'FORK_TOPICS'			=> 'Копирай избраните теми',
	'FORK_TOPICS_CONFIRM'	=> 'Сигурни ли сте, че искате да копирате избраните теми??',
	'FORUM_DESC'			=> 'Описание',
	'FORUM_NAME'			=> 'Име на форума',
	'FORUM_NOT_EXIST'		=> 'Форумът, който избрахте не съществува.',
	'FORUM_NOT_POSTABLE'	=> 'Не можете да публикувате във форума, който избрахте.',
	'FORUM_STATUS'			=> 'Статус на форума',
	'FORUM_STYLE'			=> 'Стил на форума',

	'GLOBAL_ANNOUNCEMENT'	=> 'Глобално съобщение',

	'IP_INFO'				=> 'Информация за IP адреса',
	'IPS_POSTED_FROM'		=> 'IP адрес, от който е публикувал потребителя',

	'LATEST_LOGS'				=> 'Последни 5 действия',
	'LATEST_REPORTED'			=> 'Последни 5 доклада',
	'LATEST_REPORTED_PMS'		=> 'Последни 5 докладвани ЛС',
	'LATEST_UNAPPROVED'			=> 'Последни 5 мнения, изчакващи одобрение',
	'LATEST_WARNING_TIME'		=> 'Последно дадено предупреждение',
	'LATEST_WARNINGS'			=> 'Последни 5 предупреждения',
	'LEAVE_SHADOW'				=> 'Остави темите в сянка на място',
	'LIST_REPORTS'				=> array(
		1	=> '%d доклад',
		2	=> '%d доклади',
	),
	'LOCK'						=> 'Заключи',
	'LOCK_POST_POST'			=> 'Заключи мнението',
	'LOCK_POST_POST_CONFIRM'	=> 'Сигурни ли сте, че искате да забраните промяната на това мнение?',
	'LOCK_POST_POSTS'			=> 'Заключи избраните мнения',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Сигурни ли сте, че искате да забраните промяната на избраните мнения?',
	'LOCK_TOPIC_CONFIRM'		=> 'Сигурни ли сте, че искате да заключите тази тема?',
	'LOCK_TOPICS'				=> 'Заключи избраните теми',
	'LOCK_TOPICS_CONFIRM'		=> 'Сигурни ли сте, че искате да заключите избраните теми?',
	'LOGS_CURRENT_TOPIC'		=> 'Преглеждане логовете на:',
	'LOGIN_EXPLAIN_MCP'			=> 'За да модерирате този форум трябва да сте влезли в профила са.',
	'LOGVIEW_VIEWTOPIC'			=> 'Виж темата',
	'LOGVIEW_VIEWLOGS'			=> 'Виж логовете на темата',
	'LOGVIEW_VIEWFORUM'			=> 'Виж форума',
	'LOOKUP_ALL'				=> 'Провери всички IP адреси',
	'LOOKUP_IP'					=> 'Провери IP адреса',

	'MARKED_NOTES_DELETED'		=> 'Успешно изтрихте всички избрани потребителски бележки.',

	'MCP_ADD'						=> 'Добави предупреждение',

	'MCP_BAN'					=> 'Изгонвания',
	'MCP_BAN_EMAILS'			=> 'Изгонване по емейл адрес',
	'MCP_BAN_IPS'				=> 'Изгонване по IP адрес',
	'MCP_BAN_USERNAMES'			=> 'Изгонване по потребителско име',

	'MCP_LOGS'						=> 'Модераторски логове',
	'MCP_LOGS_FRONT'				=> 'Начална страница',
	'MCP_LOGS_FORUM_VIEW'			=> 'Логове по форуми',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Логове по теми',

	'MCP_MAIN'						=> 'Начало',
	'MCP_MAIN_FORUM_VIEW'			=> 'Виж форума',
	'MCP_MAIN_FRONT'				=> 'Начална страница',
	'MCP_MAIN_POST_DETAILS'			=> 'Детайли на мнението',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Виж темата',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Промени на “Важно съобщение”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Сигурни ли сте, че искате да смените типа на темата на “Съобщение”?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Промени на “Важни съобщения”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Сигурни ли сте, че искате да смените типа на избраните теми на “Съобщения”?',
	'MCP_MAKE_GLOBAL'				=> 'Промени на “Глобално съобщение”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Сигурни ли сте, че искате да смените типа на темата на “Глобално съобщение”?',
	'MCP_MAKE_GLOBALS'				=> 'Промени на “Глобални съобщения”',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Сигурни ли сте, че искате да смените типа на избраните теми на “Глобални съобщения”?',
	'MCP_MAKE_STICKY'				=> 'Промени на “Закачена”',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Сигурни ли сте, че искате да смените типа на темата на “Закачена”?',
	'MCP_MAKE_STICKIES'				=> 'Промени на “Закачени”',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Сигурни ли сте, че искате да смените типа на избраните теми на “Закачени”?',
	'MCP_MAKE_NORMAL'				=> 'Промени на “Стандартна тема”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Сигурни ли сте, че искате да смените типа на темата на “Стандартна тема”?',
	'MCP_MAKE_NORMALS'				=> 'Промени на “Стандартни теми”',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Сигурни ли сте, че искате да смените типа на избраните теми на “Стандартни теми”?',

	'MCP_NOTES'						=> 'Потребителски бележки',
	'MCP_NOTES_FRONT'				=> 'Начална страница',
	'MCP_NOTES_USER'				=> 'Детайли за потребителя',

	'MCP_POST_REPORTS'				=> 'Доклади за това мнение',

	'MCP_PM_REPORTS'				=> 'Докладвани ЛС',
	'MCP_PM_REPORT_DETAILS'			=> 'Детайли за ЛС доклада',
	'MCP_PM_REPORTS_CLOSED'			=> 'Затворени ЛС доклади',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'Това е списък на всички затворени доклади за ЛС.',
	'MCP_PM_REPORTS_OPEN'			=> 'Отворени ЛС доклади',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'Това е списък на всички отворени доклади за ЛС, които трябва да се обработят.',

	'MCP_REPORTS'					=> 'Докладвани мнения',
	'MCP_REPORT_DETAILS'			=> 'Детайли за доклада',
	'MCP_REPORTS_CLOSED'			=> 'Затворени доклади',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Това е списък на всички затворени доклади за мнения.',
	'MCP_REPORTS_OPEN'				=> 'Отворени доклади',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Това е списък на всички отворени доклади за мнения, които трябва да се обработят.',

	'MCP_QUEUE'								=> 'Модераторска опашка',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Детайли на одобрението',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Мнения чакащи одобрение',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Това е списък на всички мнения, които трябва да се одобрят преди да бъдат видими за другите потребители.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Теми чакащи одобрение',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Това е списък на всички теми, които трябва да се одобрят преди да бъдат видими за другите потребители.',
	'MCP_QUEUE_DELETED_POSTS'				=> 'Изтрити мнения',
	'MCP_QUEUE_DELETED_POSTS_EXPLAIN'		=> 'Това е списък на всички "меко" изтрити мнения. Можете да възстановите или да изтриете завинаги мненията от този списък.',
	'MCP_QUEUE_DELETED_TOPICS'				=> 'Изтрити теми',
	'MCP_QUEUE_DELETED_TOPICS_EXPLAIN'		=> 'Това е списък на всички "меко" изтрити теми. Можете да възстановите или да изтриете завинаги темите от този списък.',

	'MCP_VIEW_USER'			=> 'Виж предупрежденията на даден потребител',

	'MCP_WARN'				=> 'Предупреждения',
	'MCP_WARN_FRONT'		=> 'Начална страница',
	'MCP_WARN_LIST'			=> 'Списък с предупрежденията',
	'MCP_WARN_POST'			=> 'Предупреди за определено мнение',
	'MCP_WARN_USER'			=> 'Предупреди потребителя',

	'MERGE_POSTS_CONFIRM'	=> 'Сигурни ли сте, че искате да преместите избраните мнения?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Използвайки формата по-долу можете да преместите избрани мнения в друга тема. Мненията ще бъдат отделени от тази тема и преместени в другата. Мненията няма да бъдат пренаредени и ще изглежда, че потребителите са ги публикували в новата тема.<br />Моля, въведете ID-то на новата тема или натиснете “Избери тема” за да намерите темата, в която искате да преместите мненията.',
	'MERGE_TOPIC_ID'		=> 'ID на новата тема',
	'MERGE_TOPICS'			=> 'Съединете темите',
	'MERGE_TOPICS_CONFIRM'	=> 'Сигурни ли сте, че искате да съедините избраните теми?',
	'MODERATE_FORUM'		=> 'Модерирай форум',
	'MODERATE_TOPIC'		=> 'Модерирай темата',
	'MODERATE_POST'			=> 'Модерирай мнението',
	'MOD_OPTIONS'			=> 'Модераторски настройки',
	'MORE_INFO'				=> 'Повече информация',
	'MOST_WARNINGS'			=> 'Потребители с най-много предупреждения',
	'MOVE_TOPIC_CONFIRM'	=> 'Сигурни ли сте, че искате да преместите темата в нов форум?',
	'MOVE_TOPICS'			=> 'Премести избраните теми',
	'MOVE_TOPICS_CONFIRM'	=> 'Сигурни ли сте, че искате да преместите избраните теми в нов форум?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Да бъде ли уведомен автора за одобрението?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Да бъде ли уведомен автора за неодобрението?',
	'NOTIFY_USER_WARN'				=> 'Да бъде ли уведомен потребителя за предупреждението?',
	'NOT_MODERATOR'					=> 'Вие не сте модератор на този форум.',
	'NO_DESTINATION_FORUM'			=> 'Моля, изберете нов форум за крайна цел.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Не е намерен такъв форум за крайна цел.',
	'NO_ENTRIES'					=> 'Няма записи в лога за този период.',
	'NO_FEEDBACK'					=> 'Няма обратна връзка за този потребител.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Трябва да изберете нова тема, в която ще бъдат преместени мненията.',
	'NO_MATCHES_FOUND'				=> 'Няма намерени съвпадения.',
	'NO_POST'						=> 'Трябва да изберете мнение, заради което ще сложите предупреждение на потребителя.',
	'NO_POST_REPORT'				=> 'Мнението не е било докладвано.',
	'NO_POST_SELECTED'				=> 'Трябва да изберете поне едно мнение за да изпълните това действие.',
	'NO_POSTS_DELETED'				=> 'Няма изтрити мнения.',
	'NO_POSTS_QUEUE'				=> 'Няма мнения, изчакващи одобрение.',
	'NO_REASON_DISAPPROVAL'			=> 'Моля, напишете причина за неодобрението.',
	'NO_REPORT'						=> 'Няма намерен доклад',
	'NO_REPORTS'					=> 'Няма намерени доклади',
	'NO_REPORT_SELECTED'			=> 'Трябва да изберете поне един доклад за да изпълните това действие.',
	'NO_TOPIC_ICON'					=> 'Без',
	'NO_TOPIC_SELECTED'				=> 'Трябва да изберете поне една тема за да изпълните това действие.',
	'NO_TOPICS_DELETED'				=> 'Няма изтрити теми.',
	'NO_TOPICS_QUEUE'				=> 'Няма теми, изчакващи одобрение.',

	'ONLY_TOPIC'			=> 'Само тема “%s”',
	'OTHER_USERS'			=> 'Други потребители, пишещи от това IP',

	'QUICKMOD_ACTION_NOT_ALLOWED' => "%s не е позволено за бързо модериране",

	'PM_REPORT_CLOSED_SUCCESS'	=> 'Избраният ЛС доклад беше затворен успешно.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'Избраният ЛС доклад беше изтрит успешно.',
	'PM_REPORTED_SUCCESS'		=> 'Това лично съобщение беше докладвано успешно.',
	'PM_REPORTS_CLOSED_SUCCESS'	=> 'Избраните ЛС доклади бяха затворени успешно.',
	'PM_REPORTS_DELETED_SUCCESS'=> 'Избраните ЛС доклади бяха изтрити успешно.',
	'PM_REPORTS_TOTAL'			=> array(
		0	=> 'Няма ЛС доклади за преглеждане.',
		1	=> 'Има <strong>1</strong> ЛС доклад за преглеждане.',
		2	=> 'Има <strong>%d</strong> ЛС доклада за преглеждане.',
	),
	'PM_REPORT_DETAILS'			=> 'Детайли за доклада на личното съобщение',
	'POSTER'					=> 'Автор',
	'POSTS_APPROVED_SUCCESS'	=> 'Избраните мнения бяха одобрени.',
	'POSTS_DELETED_SUCCESS'		=> 'Избраните мнения бяха успешно изтрити от базата данни.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Избраните мнения не бяха одобрени.',
	'POSTS_LOCKED_SUCCESS'		=> 'Избраните мнения бяха заключени.',
	'POSTS_MERGED_SUCCESS'		=> 'Избраните мнения бяха сляти.',
	'POSTS_PER_PAGE'			=> 'Мнения на страница',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Сложете 0 за да видите всички мнения.)',
	'POSTS_RESTORED_SUCCESS'	=> 'Избраните мнения бяха възстановени.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Избраните мнения бяха отключени.',
	'POST_APPROVED_SUCCESS'		=> 'Избраното мнение беше одобрено.',
	'POST_DELETED_SUCCESS'		=> 'Избраното мнение беше успешно изтрито от базата данни.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Избраното мнение не беше одобрено.',
	'POST_LOCKED_SUCCESS'		=> 'Мнението беше заключено успешно.',
	'POST_NOT_EXIST'			=> 'Избраното мнение не съществува.',
	'POST_REPORTED_SUCCESS'		=> 'Мнението беше докладвано.',
	'POST_RESTORED_SUCCESS'		=> 'Мнението беше възстановено.',
	'POST_UNLOCKED_SUCCESS'		=> 'Мнението беше отключено.',

	'READ_USERNOTES'			=> 'Потребителски бележки',
	'READ_WARNINGS'				=> 'Предупреждения',
	'REPORTER'					=> 'Докладвано от',
	'REPORTED'					=> 'Докладван',
	'REPORTED_BY'				=> 'Докладван от',
	'REPORTED_ON_DATE'			=> 'на',
	'REPORTS_CLOSED_SUCCESS'	=> 'Избраните доклади бяха успешно затворени.',
	'REPORTS_DELETED_SUCCESS'	=> 'Избраните доклади бяха успешно изтрити.',
	'REPORTS_TOTAL'				=> array(
		0	=> 'Няма доклади за преглеждане.',
		1	=> 'Има <strong>1</strong> доклад за преглеждане.',
		2	=> 'Има <strong>%d</strong> доклада за преглеждане.',
	),
	'REPORT_CLOSED'				=> 'Този доклад вече е бил затворен.',
	'REPORT_CLOSED_SUCCESS'		=> 'Избраният доклад беше успешно затворен.',
	'REPORT_DELETED_SUCCESS'	=> 'Избраният доклад беше успешно изтрит.',
	'REPORT_DETAILS'			=> 'Детайли за доклада',
	'REPORT_MESSAGE'			=> 'Докладвай това съобщение',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Използвайте тази форма за да докладвате избраното лично съобщение. Обикновено докладването се използва, когато съобщението нарушава правилата на форума. <strong>Съдържанието на докладваното лично съобщение ще бъде видимо за всички модератори и администратори.</strong>',
	'REPORT_NOTIFY'				=> 'Уведоми ме',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Информира Ви, когато доклада е обработен.',
	'REPORT_POST_EXPLAIN'		=> 'Използвайте тази форма за да докладвате избраното мнение на модераторите и администраторите. Обикновено докладването се използва, когато мнението нарушава правилата на форума.',
	'REPORT_REASON'				=> 'Причина за докладването',
	'REPORT_TIME'				=> 'Време на докладване',
	'RESTORE'					=> 'Възстанови',
	'RESTORE_POST'				=> 'Възстанови мнението',
	'RESTORE_POST_CONFIRM'		=> 'Сигурни ли сте, че искате да възстановите това мнение?',
	'RESTORE_POSTS'				=> 'Възстанови мненията',
	'RESTORE_POSTS_CONFIRM'		=> 'Сигурни ли сте, че искате да възстановите избраните мнения?',
	'RESTORE_TOPIC'				=> 'Възстанови темата',
	'RESTORE_TOPIC_CONFIRM'		=> 'Сигурни ли сте, че искате да възстановите тази тема?',
	'RESTORE_TOPICS'			=> 'Възстанови темите',
	'RESTORE_TOPICS_CONFIRM'	=> 'Сигурни ли сте, че искате да възстановите избраните теми?',
	'RESYNC'					=> 'Синхронизирай',
	'RETURN_MESSAGE'			=> '%sВърнете се към съобщението%s',
	'RETURN_NEW_FORUM'			=> '%sОтидете в новия форум%s',
	'RETURN_NEW_TOPIC'			=> '%sОтидете в новата тема%s',
	'RETURN_PM'					=> '%sВърнете се в личното съобщение%s',
	'RETURN_POST'				=> '%sВърнете се в мнението%s',
	'RETURN_QUEUE'				=> '%sВърнете се в опашката%s',
	'RETURN_REPORTS'			=> '%sВърнете се при докладите%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sВърнете се в темата%s',

	'SEARCH_POSTS_BY_USER'				=> 'Търси мнения от',
	'SELECT_ACTION'						=> 'Изберете желаното действие',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Моля, изберете форума, в който желаете да се показва това глобално съобщение.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Една или повече от избраните теми са глобални съобщения. Моля, изберете форума, в който желаете те да се показват.',
	'SELECT_MERGE'						=> 'Избери за сливане',
	'SELECT_TOPICS_FROM'				=> 'Избери теми от',
	'SELECT_TOPIC'						=> 'Избери тема',
	'SELECT_USER'						=> 'Избери потребител',
	'SORT_ACTION'						=> 'Действие',
	'SORT_DATE'							=> 'Дата',
	'SORT_IP'							=> 'IP адрес',
	'SORT_WARNINGS'						=> 'Предупреждения',
	'SPLIT_AFTER'						=> 'Раздели темата от избраното мнение нататък',
	'SPLIT_FORUM'						=> 'Форум на новата тема',
	'SPLIT_POSTS'						=> 'Отдели избраните мнения',
	'SPLIT_SUBJECT'						=> 'Заглавие на новата тема',
	'SPLIT_TOPIC_ALL'					=> 'Отдели избраните мнения в нова тема',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Сигурни ли сте, че искате да разделите темата?',
	'SPLIT_TOPIC_BEYOND'				=> 'Раздели темата при избраното мнение',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Сигурни ли сте, че искате да разделите темата при избраното мнение?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Използвайки долната форма, можете да разделите тема на две, избирайки мненията едно по едно или разделяйки темата на две от дадено мнение.',

	'THIS_PM_IP'				=> 'IP за това лично съобщение',
	'THIS_POST_IP'				=> 'IP за това мнение',
	'TOPICS_APPROVED_SUCCESS'	=> 'Избраните теми бяха одобрени.',
	'TOPICS_DELETED_SUCCESS'	=> 'Избраните теми бяха успешно изтрити от базата данни.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Избраните теми не бяха одобрени.',
	'TOPICS_FORKED_SUCCESS'		=> 'Избраните теми бяха копирани успешно.',
	'TOPICS_LOCKED_SUCCESS'		=> 'Избраните теми бяха заключени.',
	'TOPICS_MOVED_SUCCESS'		=> 'Избраните теми бяха преместени успешно.',
	'TOPICS_RESTORED_SUCCESS'	=> 'Избраните теми бяха възстановени успешно.',
	'TOPICS_RESYNC_SUCCESS'		=> 'Избраните теми бяха синхронизирани.',
	'TOPICS_TYPE_CHANGED'		=> 'Типа на темите беше променен успешно.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Избраните теми бяха отключени.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Избраната тема беше одобрена.',
	'TOPIC_DELETED_SUCCESS'		=> 'Избраната тема беше успешно изтрита от базата данни.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Избраната тема не беше одобрена.',
	'TOPIC_FORKED_SUCCESS'		=> 'Избраната тема беше копирана успешно.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Избраната тема беше заключена.',
	'TOPIC_MOVED_SUCCESS'		=> 'Избраната тема беше преместена успешно.',
	'TOPIC_NOT_EXIST'			=> 'Темата, която избрахте не съществува.',
	'TOPIC_RESTORED_SUCCESS'	=> 'Избраната тема беше възстановена успешно.',
	'TOPIC_RESYNC_SUCCESS'		=> 'Избраната тема беше синхронизирана.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Избраната тема беше разделена успешно.',
	'TOPIC_TIME'				=> 'Време на темата',
	'TOPIC_TYPE_CHANGED'		=> 'Типа на темата беше променен успешно.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Избраната тема беше отключена.',
	'TOTAL_WARNINGS'			=> 'Общо предупреждения',

	'UNAPPROVED_POSTS_TOTAL'		=> array(
		0	=> 'Няма мнения, чакащи одобрение.',
		1	=> 'Има <strong>1</strong> мнение, чакащо одобрение.',
		2	=> 'Има <strong>%d</strong> мнения, чакащи одобрение.',
	),
	'UNLOCK'						=> 'Отключи',
	'UNLOCK_POST'					=> 'Отключи мнението',
	'UNLOCK_POST_EXPLAIN'			=> 'Позволи промяна',
	'UNLOCK_POST_POST'				=> 'Отключи мнението',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Сигурни ли сте, че искате да позволите промяната на това мнение?',
	'UNLOCK_POST_POSTS'				=> 'Отключи избраните мнения',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Сигурни ли сте, че искате да позволите промяната на избраните мнения?',
	'UNLOCK_TOPIC'					=> 'Отключи темата',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Сигурни ли сте, че искате да отключите тази тема?',
	'UNLOCK_TOPICS'					=> 'Отключи избраните теми',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Сигурни ли сте, че искате да отключите избраните теми?',
	'USER_CANNOT_POST'				=> 'Не можете да публикувате в този форум.',
	'USER_CANNOT_REPORT'			=> 'Не можете да докладвате мнения в този форум.',
	'USER_FEEDBACK_ADDED'			=> 'Успешно добавена обрана връзка за потребител.',
	'USER_WARNING_ADDED'			=> 'Потребителят е предупреден успешно.',

	'VIEW_DETAILS'			=> 'Виж детайли',
	'VIEW_PM'				=> 'Виж личното съобщение',
	'VIEW_POST'				=> 'Виж мнението',

	'WARNED_USERS'			=> 'Предупредени потребители',
	'WARNED_USERS_EXPLAIN'	=> 'Това е списък с потребители с неизтекли предупреждения.',
	'WARNING_PM_BODY'		=> 'Следното предупреждение Ви е било изпратено от администратор или модератор на форума.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Издадено предупреждение',
	'WARNING_POST_DEFAULT'	=> 'Това е предупреждение за следното Ваше мнение: %s.',
	'NO_WARNINGS'	=> 'Няма предупреждения.',

	'YOU_SELECTED_TOPIC'	=> 'Избрахте тема номер %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Пиратско съдържание',
			'SPAM'		=> 'Спам/Реклама',
			'OFF_TOPIC'	=> 'Извън темата',
			'OTHER'		=> 'Друго',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Докладваното мнение съдържа връзки към нелегален или пиратски софтуер.',
			'SPAM'		=> 'Докладваното мнение рекламира уебсайт или друг друг продукт.',
			'OFF_TOPIC'	=> 'Докладваното мнение няма връзка с темата.',
			'OTHER'		=> 'Докладваното мнение не попада в никоя от другите категории, моля използвайте полето за да опишете нарушението.',
		),
	),
));
