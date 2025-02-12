<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'repository_skydrive', language 'ru', version '3.9'.
 *
 * @package     repository_skydrive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_foldername'] = 'Название папки кэша';
$string['clientid'] = 'ID клиента';
$string['configplugin'] = 'Настройка Microsoft OneDrive (устарело)';
$string['deprecatedwarning'] = 'Предупреждение: API, используемый этим плагином хранилища, устарел и он в конечном итоге перестанет работать. Используйте новое хранилище Microsoft OneDrive.';
$string['oauthinfo'] = '<p> Для использования этого плагина необходимо зарегистрировать свой сайт <a href="https://account.live.com/developers/applications"> в Microsoft</a>.<p> В процессе регистрации Вам нужно будет ввести следующий URL-адрес в качестве «Домена перенаправления»:</p><p>{$a->callbackurl}</p> После регистрации Вам будет предоставлен идентификатор (ID) клиента и секретный ключ, который может быть введен здесь.</p>';
$string['pluginname'] = 'Microsoft OneDrive (устарело)';
$string['privacy:metadata'] = 'Плагин хранилище Microsoft OneDrive (устаревшее) не хранит никаких личных данных, но передает данные пользователя из Moodle в отдаленную систему.';
$string['secret'] = 'Секретный ключ';
$string['skydrive:view'] = 'Просматривать хранилище файлов «OneDrive»';
