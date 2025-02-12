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
 * Strings for component 'diary', language 'ru', version '3.9'.
 *
 * @package     diary
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Доступ запрещен';
$string['addtofeedback'] = 'Добавить в отзыв';
$string['alias'] = 'Ключевое слово';
$string['aliases'] = 'Ключевое(ые) слово(а)';
$string['aliases_help'] = 'Каждая запись в дневнике связана со списком ключевых слов (тэгов).

Введите каждое ключевое слово с новой строки (не через запятую).';
$string['alwaysopen'] = 'Всегда открыт';
$string['alwaysshowdescription'] = 'Всегда показывать описание';
$string['alwaysshowdescription_help'] = 'При отключенном параметре приведенное выше описание дневника будет видно студентам только в дату «Время открытия».';
$string['and'] = 'и';
$string['attachment'] = 'Вложение';
$string['attachment_help'] = 'Можно добавить один или несколько файлов к записи дневника';
$string['autorating'] = 'Авторейтинг';
$string['autorating_descr'] = 'Если этот параметр включен, рейтинг записи будет автоматически введен на основе других настроек авторейтинга.';
$string['autorating_help'] = 'Эти настройки определяют значения по умолчанию для авторейтинга во всех новых дневниках.';
$string['autorating_title'] = 'Включить авторейтинг';
$string['autoratingitempenaltymath'] = 'Расчет автоматического штрафа за элемент: (max({$a->one} - {$a->two}, 0)) * {$a->three} = {$a->four}.<br> Примечание: max предотвращает появление отрицательных чисел, вызванных избыточным числом записей.';
$string['autoratingitempercentset'] = 'Параметр автоматической оценки элемента в процентах {$a}%';
$string['availabilityhdr'] = 'Доступность';
$string['avgsylperword'] = 'Среднее количество слогов в слове {$a}';
$string['avgwordlenchar'] = 'Средняя длина слова {$a} символов';
$string['avgwordpara'] = 'Среднее количество слов в абзаце {$a}';
$string['blankentry'] = 'Пустая запись';
$string['calendarend'] = '{$a} закрывается';
$string['calendarstart'] = '{$a} открывается';
$string['configdateformat'] = 'Это определяет, как даты отображаются в дневниковых отчетах. Значение по умолчанию «M d, Y G:i» - это месяц, день, год и время в 24-часовом формате. Дополнительные примеры и предопределенные константы даты см. в разделе «Дата» в руководстве по PHP.';
$string['created'] = 'Создана {$a->one} дн. и {$a->two} час. назад.';
$string['csvexport'] = 'Экспорт в .csv';
$string['currententry'] = 'Текущие записи дневника:';
$string['dateformat'] = 'Формат даты по умолчанию';
$string['daysavailable'] = 'Доступен дней:';
$string['daysavailable_help'] = 'При использовании еженедельного формата вы можете указать, сколько дней дневник открыт для использования.';
$string['deadline'] = 'Открыт дней:';
$string['details'] = 'Подробности:';
$string['diary:addentries'] = 'Добавлять записи в дневник';
$string['diary:addinstance'] = 'Добавлять экземпляры дневника';
$string['diary:manageentries'] = 'Управлять записями дневника';
$string['diary:rate'] = 'Оценивать записи дневника';
$string['diaryclosetime'] = 'Дневник закрывается';
$string['diaryclosetime_help'] = 'Если установлено, вы можете установить дату, когда дневник будет закрыт и больше не будет доступен для использования.';
$string['diarydescription'] = 'Описание дневника';
$string['diaryentrydate'] = 'Установить дату для этой записи';
$string['diarymail'] = 'Приветствия, {$a->user}, {$a->teacher} оставил отзыв к вашей дневниковой записи \'{$a->diary}\'. Вы можете просмотреть его в своем дневнике: {$a->url}';
$string['diarymailhtml'] = 'Приветствия, {$a->user}, {$a->teacher} оставил отзыв к вашей дневниковой записи \'<i>{$a->diary}</i>\'.<br /><br /> Вы можете просмотреть его<a href="{$a->url}">в своем дневнике</a>.';
$string['diaryname'] = 'Название дневника';
$string['diaryopentime'] = 'Дневник открывается';
$string['diaryopentime_help'] = 'Если установлено, можно задать дату, когда дневник станет доступным для ведения';
$string['editall'] = 'Разрешить редактировать все записи';
$string['editall_help'] = 'Если установлено, пользователи могут редактировать все записи дневника';
$string['editdates'] = 'Разрешить редактировать даты записей';
$string['editdates_help'] = 'Если установлено, пользователи могут редактировать дату/время любой записи';
$string['editingended'] = 'Период редактирования истек';
$string['editingends'] = 'Период редактирования истекает';
$string['editthisentry'] = 'Редактировать эту запись';
$string['edittopoflist'] = 'Редактировать верх списка';
$string['entries'] = 'Записи';
$string['entry'] = 'Запись';
$string['entrybgc_descr'] = 'Устанавливает цвет фона дневниковой записи / отзыва.';
$string['entrybgc_title'] = 'Цвет фона записи / отзыва в дневнике';
$string['entrycomment'] = 'Комментарий к записи';
$string['entrytextbgc_descr'] = 'Устанавливает цвет фона текста в дневниковой записи.';
$string['entrytextbgc_title'] = 'Цвет фона текста дневника';
$string['eventdiarycreated'] = 'Дневник создан';
$string['eventdiarydeleted'] = 'Дневник удален';
$string['eventdiaryviewed'] = 'Дневник просмотрен';
$string['eventdownloadentriess'] = 'Скачать записи';
$string['evententriesviewed'] = 'Записи дневника просмотрены';
$string['evententrycreated'] = 'Запись дневника создана';
$string['evententryupdated'] = 'Запись дневника обновлена';
$string['eventfeedbackupdated'] = 'Отзыв по дневнику обновлен';
$string['eventinvalidentryattempt'] = 'Попытка неверного входа в дневник';
$string['feedbackupdated'] = 'Обновлен отзыв к записям ({$a})';
$string['firstentry'] = 'Первые дневниковые записи:';
$string['format'] = 'Формат';
$string['generalerror'] = 'Произошла ошибка.';
$string['generalerrorinsert'] = 'Не удалось добавить новую запись в дневник';
$string['generalerrorupdate'] = 'Не удалось обновить ваш дневник';
$string['gradeingradebook'] = 'Текущий рейтинг в журнале оценок';
$string['highestgradeentry'] = 'Записи с наивысшим рейтингом:';
$string['incorrectcourseid'] = 'Идентификатор курса неверен';
$string['incorrectmodule'] = 'Идентификатор модуля курса неверен';
$string['invalidaccess'] = 'Недействительный доступ';
$string['invalidaccessexp'] = 'У вас нет разрешения на просмотр страницы, к которой вы пытались получить доступ! Попытка просмотра записана в журнал!';
$string['invalidtimechange'] = 'Обнаружена недопустимая попытка изменить время создания этой записи.';
$string['invalidtimechangenewtime'] = 'Новое (измененное) время: {$a->one}.';
$string['invalidtimechangeoriginal'] = 'Исходное время: {$a->one}.';
$string['invalidtimeresettime'] = 'Значение времени было сброшено в исходное: {$a->one}.';
$string['lastnameasc'] = 'Фамилия (по возрастанию):';
$string['lastnamedesc'] = 'Фамилия (по убыванию):';
$string['latestmodifiedentry'] = 'Последние измененные записи:';
$string['lowestgradeentry'] = 'Записи с самым низким рейтингом:';
$string['mailed'] = 'Отправлено по почте';
$string['mailsubject'] = 'Отзыв по дневнику';
$string['mediumwords'] = 'Уникальные средние слова';
$string['mediumwords_help'] = 'Средние слова – это слова, состоящие из двух слогов. Обратите внимание, что алгоритм определения количества слогов дает только приблизительные результаты.';
$string['mincharacterlimit'] = 'Минимальное количество символов';
$string['modulename'] = 'Дневник';
$string['modulename_help'] = 'Дневник позволяет учителям получать обратную связь от учеников в течение определенного периода времени.';
$string['modulenameplural'] = 'Дневники';
$string['needsgrading'] = 'Эта запись еще не получила отзывов и оценок.';
$string['needsregrade'] = 'Эта запись была изменена с момента получения отзыва или оценки.';
$string['newdiaryentries'] = 'Новые записи дневника';
$string['nextentry'] = 'Следующая запись';
$string['nodeadline'] = 'Всегда открыт';
$string['noentriesmanagers'] = 'Нет учителей';
$string['noentry'] = 'Нет записей';
$string['noratinggiven'] = 'Нет рейтинга';
$string['notopenuntil'] = 'Этот дневник станет доступен с';
$string['notstarted'] = 'Вы еще не начали ведение этого дневника';
$string['numwordscln'] = '{$a->one} чисто текстовых слов с использованием {$a->two} символов, НЕ включая {$a->three} пробелов.';
$string['numwordsnew'] = 'Новый расчет: {$a->one} сырых текстовых слов с использованием {$a->two} символов в {$a->three} предложениях в {$a->four} абзацах.';
$string['numwordsraw'] = '{$a->one} сырых текстовых слов с использованием {$a->two} символов, включая {$a->three} пробелов.';
$string['numwordsstd'] = '{$a->one} стандартизированных слов с использованием {$a->two} символов , включая {$a->three} пробелов.';
$string['outof'] = 'из {$a} записей';
$string['overallrating'] = 'Общий рейтинг';
$string['pagesize'] = 'Записей на страницу';
$string['pluginadministration'] = 'Администрирование модуля дневника';
$string['pluginname'] = 'Дневник';
$string['previousentry'] = 'Предыдущая запись';
$string['rate'] = 'Оценить';
$string['rating'] = 'Оценить данную запись';
$string['reload'] = 'Обновить и показать от текущей до самой старой записи дневника';
$string['removeentries'] = 'Удалить все записи';
$string['removemessages'] = 'Удалить все записи дневника';
$string['reportsingle'] = 'Получить все записи данного пользователя дневника';
$string['reportsingleallentries'] = 'Все записи данного пользователя дневника';
$string['returnto'] = 'Вернуться к {$a}';
$string['returntoreport'] = 'Вернуться на страницу отчета по {$a}';
$string['saveallfeedback'] = 'Сохранить все мои отзывы';
$string['savesettings'] = 'Сохранить настройки';
$string['search'] = 'Найти';
$string['search:activity'] = 'Дневник - информация о модуле';
$string['search:entry'] = 'Дневник - записи';
$string['search:entrycomment'] = 'Дневник - комментарий к записи';
$string['selectentry'] = 'Выберите запись для оценивания';
$string['showoverview'] = 'Показать обзор дневников в личном кабинете';
$string['showrecentactivity'] = 'Показать недавнюю активность';
$string['sortcurrententry'] = 'От текущей записи в дневнике к первой записи.';
$string['sortfirstentry'] = 'От первой записи в дневнике к последней записи.';
$string['sorthighestentry'] = 'От записи дневника с самым высоким рейтингом к записи с самым низким рейтингом.';
$string['sortlastentry'] = 'От последней измененной записи дневника к самой старой измененной записи.';
$string['sortlowestentry'] = 'От записи дневника с самым низким рейтингом к записи с наивысшим рейтингом.';
$string['sortoptions'] = 'Настройки сортировки:';
$string['sortorder'] = 'Порядок сортировки:';
$string['startnewentry'] = 'Создать новую запись';
$string['startoredit'] = 'Создать новую или отредактировать сегодняшнюю запись';
$string['teacher'] = 'Учитель';
$string['text'] = 'Текст';
$string['timecreated'] = 'Время создания';
$string['timemarked'] = 'Время оценивания';
$string['timemodified'] = 'Время изменения';
$string['toolbar'] = 'Панель управления';
$string['userid'] = 'ID пользователя';
$string['usertoolbar'] = 'Панель управления:';
$string['viewalldiaries'] = 'Просмотреть все дневники курса';
$string['viewallentries'] = 'Просмотр записей дневника ({$a})';
$string['viewentries'] = 'Просмотр записей';
