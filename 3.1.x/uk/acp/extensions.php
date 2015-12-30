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
	'EXTENSION'					=> 'Розширення',
	'EXTENSIONS'				=> 'Розширення',
	'EXTENSIONS_ADMIN'			=> 'Менеджер розширень',
	'EXTENSIONS_EXPLAIN'		=> 'The Extensions Manager is a tool in your phpBB Board which allows you to manage all of your extensions statuses and view information about them.',
	'EXTENSION_INVALID_LIST'	=> 'The “%s” extension is not valid.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'The selected extension is not available for this board, please verify your phpBB and PHP versions are allowed (see the details page).',
	'EXTENSION_DIR_INVALID'		=> 'The selected extension has an invalid directory structure and cannot be enabled.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'The selected extension cannot be enabled, please verify the extension’s requirements.',

	'DETAILS'				=> 'Деталі',

	'EXTENSIONS_DISABLED'	=> 'Заблоковані розширення',
	'EXTENSIONS_ENABLED'	=> 'Активні розширення',

	'EXTENSION_DELETE_DATA'	=> 'Видалити дані',
	'EXTENSION_DISABLE'		=> 'Заблокувати',
	'EXTENSION_ENABLE'		=> 'Активувати',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Deleting an extension’s data removes all of its data and settings. The extension files are retained so it can be enabled again.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Disabling an extension retains its files, data and settings but removes any functionality added by the extension.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Enabling an extension allows you to use it on your board.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'The extension’s data is currently being deleted. Please do not leave or refresh this page until it is completed.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'The extension is currently being disabled. Please do not leave or refresh this page until it is completed.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'The extension is currently being enabled. Please do not leave or refresh this page until it is completed.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'The extension’s data was deleted successfully',
	'EXTENSION_DISABLE_SUCCESS'		=> 'The extension was disabled successfully',
	'EXTENSION_ENABLE_SUCCESS'		=> 'The extension was enabled successfully',

	'EXTENSION_NAME'			=> 'Назва',
	'EXTENSION_ACTIONS'			=> 'Дії',
	'EXTENSION_OPTIONS'			=> 'Параметри',
	'EXTENSION_INSTALL_HEADLINE'=> 'Встановлення розширення',
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
			<li>Завантажити розширення з бази розширень phpBB’s</li>
			<li>Unzip the extension and upload it to the <samp>ext/</samp> directory of your phpBB board</li>
			<li>Enable the extension, here in the Extensions manager</li>
		</ol>',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Оновлення розширення',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Заблоувати розширення</li>
			<li>Видалити фізично файли розширення</li>
			<li>Завантажити нові файли</li>
			<li>Активувати розширення</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Повне видалення розширення',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Заблоувати розширення</li>
			<li>Видалити повязану з ним інформацію</li>
			<li>Видалити фізично файли розширення</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Ви впевнені, що бажаєте видалити “%s” та все що з ним повязане?<br /><br />Це видалить всі дані та налаштування без можливості повернути, як було!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Ви впевнені, що бажаєте заблокувати “%s” розширення?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Ви впевнені, що бажаєте активувавти “%s” розширення?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Ви впевнені, що бажаєте примусово використовувати не стабльну версію розширення?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Повернутися до списку розширень',

	'EXT_DETAILS'			=> 'Деталі розширення',
	'DISPLAY_NAME'			=> 'Видима назва',
	'CLEAN_NAME'			=> 'Чиста назва',
	'TYPE'					=> 'Тип',
	'DESCRIPTION'			=> 'Опис',
	'VERSION'				=> 'Версія',
	'HOMEPAGE'				=> 'Сайт',
	'PATH'					=> 'Шлях до файлу',
	'TIME'					=> 'Дата Релізу',
	'LICENSE'				=> 'Ліцензія',

	'REQUIREMENTS'			=> 'Вимоги',
	'PHPBB_VERSION'			=> 'phpBB Версія',
	'PHP_VERSION'			=> 'PHP Версія',
	'AUTHOR_INFORMATION'	=> 'Автор',
	'AUTHOR_NAME'			=> 'Імя',
	'AUTHOR_EMAIL'			=> 'Email',
	'AUTHOR_HOMEPAGE'		=> 'Домашня сторінка',
	'AUTHOR_ROLE'			=> 'Роль',

	'NOT_UP_TO_DATE'		=> '%s є застаріле',
	'UP_TO_DATE'			=> '%s є найсвіжіше',
	'ANNOUNCEMENT_TOPIC'	=> 'Про реліз',
	'DOWNLOAD_LATEST'		=> 'Завантажити версію',
	'NO_VERSIONCHECK'		=> 'No version check information given.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Перевірте всі версії',
	'FORCE_UNSTABLE'					=> 'Завжди перевіряти не стабільні версії',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Параметри перевірки версій',

	'BROWSE_EXTENSIONS_DATABASE'		=> 'Відкрити базу розширень',

	'META_FIELD_NOT_SET'	=> 'Метаполе %s не було встановлене.',
	'META_FIELD_INVALID'	=> 'Метаполе %s не є валідне.',
));
