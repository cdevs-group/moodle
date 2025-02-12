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
 * Strings for component 'repository_flickr', language 'ru', version '3.9'.
 *
 * @package     repository_flickr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'Ключ API';
$string['callbackurl'] = 'Callback URL';
$string['callbackurltext'] = '<ol>
<li>Еще раз посетите <a href="http://www.flickr.com/services/api/keys/">ключи API Flickr</a>.</li>
<li>Убедитесь, что для данного ключа API Flickr установлен Callback URL <strong>{$a}</strong></li></ol>';
$string['callbackwarning'] = '<ol>
<li>Получите для вашего сайта Moodle <a href="http://www.flickr.com/services/api/keys/">ключ API Flickr и секретный ключ</a>.</li> <li>Введите их здесь, затем нажмите «Сохранить» и «Настройки», чтобы вернуться на эту страницу. Вы увидете, что для Вас сгенерирован Callback URL</li>
<li>Снова измените информацию о вашем ключе <a href="http://www.flickr.com/services/api/keys/">Flickr</a>, указав полученный Callback URL.</li></ol>';
$string['configplugin'] = 'Конфигурация Flickr';
$string['emailaddress'] = 'Адрес электронной почты';
$string['flickr:view'] = 'Посматривать хранилище файлов «Flickr»';
$string['invalidemail'] = 'Неправильный адрес электронной почты Flickr';
$string['notitle'] = 'без названия';
$string['nullphotolist'] = 'У этой учетной записи нет фотографий';
$string['pluginname'] = 'Flickr';
$string['pluginname_help'] = 'Хранилище Flickr.com';
$string['privacy:metadata:repository_flickr'] = 'Плагин хранилища Flickr сохраняет настройки пользователя и передает данные пользователя из Moodle в отдаленную систему.';
$string['privacy:metadata:repository_flickr:preference:repository_flickr_access_token'] = 'Настройка токена OAuth хранилища Flickr.';
$string['privacy:metadata:repository_flickr:preference:repository_flickr_access_token_secret'] = 'Настройка токена OAuth хранилища Flickr - исключено из экспорта конфиденциальных данных.';
$string['privacy:metadata:repository_flickr:text'] = 'Текстовый поисковый запрос пользователя хранилища Flickr.';
$string['remember'] = 'Запомнить меня';
$string['secret'] = 'Секретный ключ';
$string['username'] = 'Электронная почта учетной записи Flickr';
