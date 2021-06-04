<?php
/*
Copyright © 2009-2013 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/
*/

if (!defined('IN_COMMENTICS')) { die('Access Denied.'); }

define('CMTX_DESC_LAYOUT_ORDER_1', 'Перетащите мышкой элементы  чтобы определить порядок очередности основных частей.');
define('CMTX_DESC_LAYOUT_ORDER_2', 'Размещение комментариев и формы добавления рядом по горизонтали, при условии что ширина монитора это позволяет.');              
define('CMTX_DESC_LAYOUT_COMMENTS_ENABLED', 'Эти параметры настройки определяют какие части комментария и его внешней области возможны.'); 
define('CMTX_DESC_LAYOUT_COMMENTS_GENERAL', 'Эта секция содержит общие параметры настройки комментариев.');               
define('CMTX_DESC_LAYOUT_COMMENTS_PAGINATION', 'Параметры настройки расположения нумерации страниц.');               
define('CMTX_DESC_LAYOUT_COMMENTS_SORT_BY_1', 'Параметры, определяющие вид сортировки.');              
define('CMTX_DESC_LAYOUT_COMMENTS_SORT_BY_2', 'Параметры, определяющие какие пункты возможны.');              
define('CMTX_DESC_LAYOUT_COMMENTS_REPLIES', 'Параметры настройки опции "Ответ".');               
define('CMTX_DESC_LAYOUT_COMMENTS_SOCIAL_1', 'Параметры настройки социальных ссылок.');               
define('CMTX_DESC_LAYOUT_COMMENTS_SOCIAL_2', 'Параметры, определяющие какие ссылки возможны.');              
define('CMTX_DESC_LAYOUT_COMMENTS_GRAVATAR', '<b> Gravatar </b> - личное изображение пользователя зарегистрированное в онлайн сервисе gravatar.com и вставленное согласно адресу электронной почты пользователя. <p></p>Если такого изображения нет - будет вставлено изображение по умолчанию. См. <a href="http://en.gravatar.com/site/implement/images/" target="_blank"> здесь</a>');define('CMTX_DESC_LAYOUT_COMMENTS_READ_MORE', 'Параметры настройки ссылки "Читать далее".');
define('CMTX_DESC_LAYOUT_FORM_ENABLED', 'Эти настройки определяют, какие элементы формы возможны.');              
define('CMTX_DESC_LAYOUT_FORM_REQUIRED', 'Эти настройки определяют, какие элементы формы обязательны.');              
define('CMTX_DESC_LAYOUT_FORM_DEFAULTS', 'Настройки, определяющие значения по умолчанию.');               
define('CMTX_DESC_LAYOUT_FORM_GENERAL', 'Эта секция содержит Основные параметры настройки формы комментариев.');               
define('CMTX_DESC_LAYOUT_FORM_MAXIMUMS', 'Настройка размера и максимальной длины полей формы.');               
define('CMTX_DESC_LAYOUT_FORM_SORT_ORDER_FIELDS', 'Перетащите мышкой, чтобы определить порядок сортировки элементов формы.');              
define('CMTX_DESC_LAYOUT_FORM_SORT_ORDER_BUTTONS', 'Перетащите мышкой, чтобы определить порядок сортировки кнопок формы.');              
define('CMTX_DESC_LAYOUT_FORM_BB_CODE', 'Параметры настройки для тегов BB Сode.');               
define('CMTX_DESC_LAYOUT_FORM_SMILIES', 'Параметры настройки смайликов.');
define('CMTX_DESC_LAYOUT_FORM_SECURIMAGE', 'Securimage является встроенным изображением капчи. Вы можете настроить внешний вид ниже.');
define('CMTX_DESC_LAYOUT_FORM_RECAPTCHA', 'ReCaptcha, бесплатный сервис изображений captcha для предотвращения спама.<p/>Широко используется для защиты и оцифровки книг. Для использования необходимо получить API ключ <a href="http://www.google.com/recaptcha" target="_blank">здесь</a>.');
define('CMTX_DESC_LAYOUT_FORM_STATES', 'Настройки автоматического заполнения полей формы.');
define('CMTX_DESC_LAYOUT_POWERED', 'Параметры настройки касаются \'Все права принадлежат\'');               
define('CMTX_DESC_SETTINGS_ADMIN', 'Параметры настройки для панели администрирования.');               
define('CMTX_DESC_SETTINGS_ADMIN_DETECTION', 'Настройки способа идентификации администратора.');               
define('CMTX_DESC_SETTINGS_AKISMET', 'Akismet - бесплатный онлайн сервис используемый для фильтрации спама. Получите свой ключ API <a href="http://akismet.com/" target="_blank"> здесь</a>.<p /> Идентифицированные комментарии требуют одобрения. Слово \Akismet\ появится в заметках.');              
define('CMTX_DESC_SETTINGS_APPROVAL', 'Выберите этот пункт, если Вы хотите одобрять данные <i> вручную </i>.</ p> <b>Примечание:</b> Подробнее в параметрах настройки. Настройки -> Процессор.');
define('CMTX_DESC_SETTINGS_EMAIL_SETUP', 'Настройка параметров и свойств e-mail.');
define('CMTX_DESC_SETTINGS_EMAIL_METHOD', 'Выберите используемый метод почтовой пересылки.');
define('CMTX_DESC_SETTINGS_EMAIL_SENDER', 'Настройка данных отправителя для <b>всех</b> отправляемых писем.<p />Или настройте письма в \'Настройки -> E-mail -> Редактор\' индивидуально.');
define('CMTX_DESC_SETTINGS_EMAIL_SENDER', 'Настройка данных отправителя для <b>всех</b> отправляемых писем.<p />Или настройте письма в \'Настройки -> E-mail -> Редактор\' индивидуально.');
define('CMTX_DESC_SETTINGS_EMAIL_SIGNATURE', 'Ваша подпись для писем.');
define('CMTX_DESC_SETTINGS_EMAIL_TEST', 'Отправка тестового письма для проверки работоспособности почтового сервиса на сервере.<p />Письмо будет отправлено по адресу: <b>%s</b>.');
define('CMTX_DESC_SETTINGS_EMAIL_SUB_CONFIRMATION', 'Подтверждение, которое получают пользователи  при подписке на страницу.');             
define('CMTX_DESC_SETTINGS_EMAIL_SUB_NOTIFICATION', 'Письмо-уведомление, которое получают пользователи при появлении нового комментария.');
define('CMTX_DESC_SETTINGS_EMAIL_EMAIL_TEST', 'Письмо посланное со страницы \'Настройки -> E-mail -> Настройка\' .');  
define('CMTX_DESC_SETTINGS_EMAIL_NEW_BAN', 'Письмо, которое получает администратор  когда есть новый бан.');             
define('CMTX_DESC_SETTINGS_EMAIL_NEW_FLAG', 'Письмо, которое получает администратор когда новый комментарий помещается под флаг.');
define('CMTX_DESC_SETTINGS_EMAIL_NEW_COMMENT_APPROVE', 'Письмо, которое получает администратор, когда есть новый комментарий требующий одобрения.');             
define('CMTX_DESC_SETTINGS_EMAIL_NEW_COMMENT_OKAY', 'Письмо, которое получает администратор, когда есть новый комментарий  не требующий одобрения.');             
define('CMTX_DESC_SETTINGS_EMAIL_RESET_PASSWORD', 'Письмо, которое администратор получает при перезагрузке пароля.');              
define('CMTX_DESC_SETTINGS_ERROR_REPORTING', 'Параметры настройки позволяющие фиксировать всевозможные ошибки, при работе в режиме отладки скрипта.');               
define('CMTX_DESC_SETTINGS_FLAGGING', 'Параметры настройки обжалования.');               
define('CMTX_DESC_SETTINGS_FLOODING', 'Параметры настройки, касающиеся публикации большого количества комментариев за короткий период времени одним и тем же посетителем или роботом.');define('CMTX_DESC_SETTINGS_LANGUAGE', 'Выберите желаемый язык для страниц.');               
define('CMTX_DESC_SETTINGS_MAINTENANCE', 'Включение режима обслуживания. Применяется во время модернизации или отладки скрипта. <p></p> <b> Примечание </b>: Отключает отображение системы комментариев и размещает на странице объявление о том, что система находится на обслуживании. <b>Администратор исключен из режима обслуживания</b>.');               
define('CMTX_DESC_SETTINGS_PROCESSING_NAME', 'Настройка поля "Имя".');               
define('CMTX_DESC_SETTINGS_PROCESSING_EMAIL', 'Настройка поля "e-mail".');               
define('CMTX_DESC_SETTINGS_PROCESSING_TOWN', 'Настройка поля "Город".');               
define('CMTX_DESC_SETTINGS_PROCESSING_WEBSITE', 'Настройка поля "Ваш сайт".');               
define('CMTX_DESC_SETTINGS_PROCESSING_COMMENT', 'Настройка поля "Текст комментария".');               
define('CMTX_DESC_WILDCARDS', 'Подстановочные символы <b></b> поддерживается. Поиск ведется без учета регистра.');
define('CMTX_DESC_WILDCARDS_1', 'Используя знак подстановки (*) можно подобрать любые символы. Например, пользователь вводит слово "<b>Newcastle</b>". В результате получится:');
define('CMTX_DESC_WILDCARDS_2', 'Поиск ведется без учета регистра так, например, слово "<b>Newcastle</b>" может выглядеть как NEWcastle, newcastle или даже nEWcAsTle.');
define('CMTX_DESC_WILDCARDS_3', 'Каждое слово должно быть на новой строке. Пустые строки игнорируются.');
define('CMTX_DESC_WILDCARDS_A', 'Хотя знак подстановки (*) поддерживается, в нем нет необходимости. Например, пользователь вводит адрес электронной почты "<b>test@somesite.com</b> " . В результате получится:');
define('CMTX_DESC_WILDCARDS_B', 'Поиск ведется без учета регистра так, например, адреса электронной почты "<b>test@somesite.com</b> "может выглядеть как somesite, SOMESITE или даже SoMeSiTe.');
define('CMTX_DESC_WILDCARDS_C', 'Каждое слово должно быть на новой строке. Пустые строки игнорируются.');
define('CMTX_DESC_WILDCARDS_I', 'Хотя знак подстановки (*) поддерживается, в нем нет необходимости. Например, пользователь вводит адрес сайта "<b>http://www.somesite.com</b>". В результате получится:');
define('CMTX_DESC_WILDCARDS_II', 'Поиск ведется без учета регистра так, например, адрес веб-сайта "<b>http://www.somesite.com</b>" может выглядеть как somesite, SOMESITE или даже SoMeSiTe.');
define('CMTX_DESC_WILDCARDS_III', 'Каждое слово должно быть на новой строке. Пустые строки игнорируются.');
define('CMTX_DESC_WILDCARD_FOUND', '(Найдено)');
define('CMTX_DESC_WILDCARD_NOT_FOUND', '(Не найдено)');
define('CMTX_DESC_SETTINGS_RICH_SNIPPETS_1', '<b>Rich Snippets</b> или Улучшеный сниппет - позволяет выделить данные определенного типа таким образом,  чтобы информация отображалась в специальном формате на страницах результатов поиска поисковых систем,  привлекая посетителей к Вашему сайту. <p></p> В Commentics - это тип данных  которые отмечены как <b>осредненный рейтинг</b>.<p></p> Осредненный рейтинг может быть выделен в любом из трех форматов: микроданные, микроформат или RDFa. Commentics использует <b>микроформат</b> потому что он соответствует xHTML. <p></p> Это пример того, как это выглядит на странице поиска:'); 
define('CMTX_DESC_SETTINGS_RICH_SNIPPETS_2', 'Для использования этой функции, необходимо активировать: <b>Осредненный Рейтинг</b> (Внешний вид -> Комментарии -> Включен) и <b>Тема</b> (Внешний вид -> Комментарии -> Включен) .<p />После того, как Вы включили эти функции, Вы можете проверить их работу <a href="http://www.google.com/webmasters/tools/richsnippets" target="_blank">здесь</a>. Вы должны иметь по крайней мере один рейтинг для того чтобы эта функция работала.');              
define('CMTX_DESC_SETTINGS_RSS', 'Настройки для RSS-канала.');               
define('CMTX_DESC_SETTINGS_SECURITY', 'Эти настройки относятся к безопасности скрипта.');               
define('CMTX_DESC_SETTINGS_SYSTEM', 'Эти настройки относятся к системе. Будьте осторожны при изменении данных.');               
define('CMTX_DESC_SETTINGS_VIEWERS', 'Эти настройки относятся к отчетам: Отчеты - > Посетители.');               
define('CMTX_DESC_TASK_DELETE_BANS', 'Автоматическое удаление устаревших забаненых комментариев.');               
define('CMTX_DESC_TASK_DELETE_REPORTERS', 'Автоматическое удаление устаревших комментариев.');
define('CMTX_DESC_TASK_DELETE_SUBSCRIBERS', 'Автоматическое удаление подписчиков, которые не подтвердили подписку вовремя.');               
define('CMTX_DESC_TASK_DELETE_VOTERS', 'Автоматическое удаление устаревших голосований.');               
define('CMTX_DESC_REPORT_ACCESS', 'Этот отчет показывает список последних 100 страниц, просмотреных администратором.');
define('CMTX_DESC_REPORT_PERMISSIONS', 'Этот отчет проверяет  правильность установки разрешений для файлов и папок:');              
define('CMTX_DESC_REPORT_VERSION_1', 'Установленная версия Commentics -');               
define('CMTX_DESC_REPORT_VERSION_2', 'История вашего обновления.');               
define('CMTX_DESC_REPORT_VIEWERS', 'Следующие посетители или боты просматривают Ваши страницы в данный момент.');
define('CMTX_DESC_TOOL_DATABASE_BACKUP', 'Создание резервной копии базы данных.<p/><b>Примечание:</b> настоятельно рекомендуется загружать резервные копии на Ваш компьютер.');
define('CMTX_DESC_TOOL_OPTIMIZE_TABLES', 'Этот инструмент позволит оптимизировать все таблицы базы данных. Это ускоряет работу базы данных и помогает избежать повреждения данных.<p/><b>Примечание: </b>Для стандартного сайта достаточно проводить оптимизацию раз в две недели.');
define('CMTX_DESC_TOOL_TEXT_FINDER', 'Поиск языкового файла для специфических слов или фраз с целью их изменения.');


?>