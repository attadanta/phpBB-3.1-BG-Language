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
	'CONFIG_NOT_EXIST'					=> 'Конфигурационният параметър "%s" липсва неочаквано.',

	'GROUP_NOT_EXIST'					=> 'Групата "%s" липсва неочаквано.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Приложи модулите, изисквани от %s.',
	'MIGRATION_DATA_DONE'				=> 'Инсталирани данни: %1$s; Време: %2$.2f секунди',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Инсталиране на данни: %1$s; Време: %2$.2f секунди',
	'MIGRATION_DATA_RUNNING'			=> 'Инсталиране на данни: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Миграцията е вече била приложена ефективно (пропускане): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Нещо се обърка при последната заявка. Промените, приложени дотук, бяха отменени, доколкото това беше възможно, но е необходима проверка на форума за последвали грешки.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Миграцията "%1$s" е неизпълнима, липсва миграция "%2$s".',
        'MIGRATION_NOT_INSTALLED'			=> 'Миграцията "%s" не е инсталирана.',
	'MIGRATION_NOT_VALID'				=> '%s не е валидна миграция.',
	'MIGRATION_SCHEMA_DONE'				=> 'Инсталирана схема: %1$s; Време: %2$.2f секунди',
        'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Инсталиране на схема: %1$s; Време: %2$.2f секунди',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Инсталиране на схема: %s.',

        'MIGRATION_REVERT_DATA_DONE'		=> 'Възстановени данни: %1$s; Време: %2$.2f секунди',
        'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Възстановяване на данни: %1$s; Време: %2$.2f секунди',
	'MIGRATION_REVERT_DATA_RUNNING'		=> 'Възстановяване на данни: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'Възстановена схема: %1$s; Време: %2$.2f секунди',
        'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'Възстановяване на схема: %1$s; Време: %2$.2f секунди',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'Възстановяване на схема: %s.',

        'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'Едно от миграциите е невалидна. Липсва условие в някоя от помощните функции.',
        'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'Едно от миграциите е невалидна. В някоя от помощните функции липсва валидно извикване на стъпка от миграционния процес.',
        'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'Една от миграциите е невалидна. Една от специално-дефинираните функции не може да бъде извикана.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'Една от миграциите е невалидна поради наличие на непознат тип инструмент за мигриране.',
        'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'Една от миграциите е невалидна поради наличие на непознат инструмент за мигриране.',
        'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'Една от миграциите е невалидна поради наличие на непознат метод за мигриране.',

	'MODULE_ERROR'						=> 'Възникна грешка при създаването на модул: %s',
        'MODULE_EXISTS'						=> 'Модулът вече съществува: %s',
        'MODULE_EXIST_MULTIPLE'				=> 'Няколко модула с посочения основен модул вече съществуват: %s. Опитайте да прецизирате конфигурацията на модулите, изпозлвайки before/after.',
        'MODULE_INFO_FILE_NOT_EXIST'		=> 'Лиспсва информационният файл за изискан модул: %2$s',
	'MODULE_NOT_EXIST'					=> 'Възникна грешка при създаването на модул: %s',

        'PARENT_MODULE_FIND_ERROR'			=> 'Идентификаторът на основния модул не може да бъде намерен: %s',
	'PERMISSION_NOT_EXIST'				=> 'Конфигурацията за правомощия "%s" липсва неочаквано.',

	'ROLE_NOT_EXIST'					=> 'Ролята "%s" липсва неочаквано.',
));
