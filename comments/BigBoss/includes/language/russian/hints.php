<?php
/*
Copyright © 2009-2013 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/
*/

if (!defined('IN_COMMENTICS')) { die('Access Denied.'); }

define('CMTX_HINT_SEND', 'Отправить уведомление об этом комментарии подписчикам.');
define('CMTX_HINT_VERIFY', 'Подтвердить удаление и не создавать отчет. Обжалование будет отменено.');
define('CMTX_HINT_STICKY', 'Поместить этот комментарий в начале.');
define('CMTX_HINT_LOCKED', 'Запретить размещать ответы на этот комментарий.');
define('CMTX_HINT_COMMENTS_ORDER', 'Порядок отображения комментариев по умолчанию.');
define('CMTX_HINT_DISPLAY_COMMENT_COUNT', 'Поместить счетчик комментариев после заголовка.');
define('CMTX_HINT_DISPLAY_SAYS', 'Отображать слово <i>говорит:</i> после имени пользователя.');
define('CMTX_HINT_JS_VOTE_OK', 'Отображать JavaScript сообщение, если голосование типа "нравится"/"не нравится" используется.');
define('CMTX_HINT_PAGINATION_ENABLED', 'Распространить комментарий на несколько страниц?');
define('CMTX_HINT_PAGINATION_TOP', 'Показывать нумерацию страниц над комментариями.');
define('CMTX_HINT_PAGINATION_BOTTOM', 'Показывать нумерацию страниц под комментариями.');
define('CMTX_HINT_PAGINATION_PER_PAGE', 'Количество комментариев отображаемых на странице.');
define('CMTX_HINT_PAGINATION_RANGE', 'Количество ссылок отображенных в обе стороны от текущей страницы.');
define('CMTX_HINT_SORT_BY_ENABLED', 'Отображать раскрывающийся список сортировки.');
define('CMTX_HINT_SORT_BY_1', 'Для работы этой опции, функция "Дата" (Внешний вид-> Комментарии-> Включение полей) также должна быть включена.');
define('CMTX_HINT_SORT_BY_2', 'Для работы этой опции, функция "Дата"(Внешний вид-> Комментарии-> Включение полей)  также должна быть включена.');
define('CMTX_HINT_SORT_BY_3', 'Для работы этой опции, функция "Нравится" (Внешний вид-> Комментарии-> Включение полей) также должна быть включена.');
define('CMTX_HINT_SORT_BY_4', 'Для работы этой опции, функция "Не нравится" (Внешний вид-> Комментарии-> Включение полей) также должна быть включена.');
define('CMTX_HINT_SORT_BY_5', 'Для работы этой опции, функция "Рейтинг" (Внешний вид-> Комментарии-> Включение полей) также должна быть включена.');
define('CMTX_HINT_SORT_BY_6', 'Для работы этой опции, функция "Рейтинг" (Внешний вид-> Комментарии-> Включение полей) также должна быть включена.');
define('CMTX_HINT_SHOW_REPLY', 'Отображать кнопку "Ответить" в поле комментария.');
define('CMTX_HINT_REPLY_DEPTH', 'Количество ответов, прежде чем кнопка "Ответить" будет отключена. Введите число 1 или выше. Убедитесь, что ответы могут уместиться на вашей странице по ширине.');
define('CMTX_HINT_REPLY_ARROW', 'Отображать стрелку для ответов.');
define('CMTX_HINT_SCROLL_REPLY', 'Плавная прокрутка до формы, после нажатия кнопки "Ответить".');
define('CMTX_HINT_SOCIAL_ENABLED', 'Отображать систему обмена социальными ссылками.');
define('CMTX_HINT_GRAVATAR_DEFAULT', 'default - фирменное изображение сервиса Gravatar.<br/>custom - вставка изображения с любого другого сайта.<br/>mm - mystery man (изображение мистического человека).');
define('CMTX_HINT_GRAVATAR_CUSTOM', 'Введите URL изображения применяемого по умолчанию.');
define('CMTX_HINT_GRAVATAR_RATING', 'Тип зрителя. G подходит для всех типов зрителей.');
define('CMTX_HINT_DISPLAY_JS_MSG', 'Отображает предупреждающее сообщение, если JavaScript отключен в веб-браузере пользователя.');
define('CMTX_HINT_DISPLAY_AST_SYMBOL', 'Отображать символ (*) рядом с полем.');
define('CMTX_HINT_DISPLAY_AST_MSG', 'Отображать сообщение:<br/>* Обязательная информация');
define('CMTX_HINT_DISPLAY_EMAIL_NOTE', 'Отображать сообщения для поля e-mail:<br/> (не будет опубликовано)');
define('CMTX_HINT_HIDE_FORM', 'Спрятать форму и показать ссылку, для ее открытия.');
define('CMTX_HINT_FORM_COOKIE', 'Хранить "cookie" формы с информацией о пользователе. Этот параметр работает только, если вы не предоставите пользователю возможность выбирать.');
define('CMTX_HINT_FORM_COOKIE_DAYS', 'Сколько дней хранить "cookie" формы.');
define('CMTX_HINT_REPEAT_RATINGS', 'Что делать с полем "Рейтинг", если пользователь уже им пользовался.');
define('CMTX_HINT_AGREE_TO_PREVIEW', 'Должен ли пользователь принять политику конфиденциальности, а также правила и условия, прежде чем он сможет воспользоваться предпросматром комментария?');
define('CMTX_HINT_SECURIMAGE_LENGTH', 'Количество символов отбражаемых в капче.');
define('CMTX_HINT_SECURIMAGE_PERTURBATION', 'Степень искажения. 1.0 - высокое искажение. Чем выше значение, тем больше искажение.');
define('CMTX_HINT_SECURIMAGE_LINES', 'Количество линий отображаемых на капче.');
define('CMTX_HINT_SECURIMAGE_NOISE', 'Уровень шума (случайные точки) на изображении. От 0 до 10');
define('CMTX_HINT_APPROVE_COMMENTS', 'Вручную одобрять все комментарии.');
define('CMTX_HINT_APPROVE_NOTIFICATIONS', 'Вручную одобрять уведомления для пользователей.');
define('CMTX_HINT_TRUST_USERS', 'Если этот флажок установлен, администратор не должен будет одобрять комментарий, т.к. комментарии этого пользователя одобрялись ранее.');
define('CMTX_HINT_FLAG_MAX_PER_USER', 'Максимальное количество жалоб, поданных пользователем.');
define('CMTX_HINT_FLAG_MIN_PER_COM', 'Минимальное количество жалоб до помещения комментария под флаг.');
define('CMTX_HINT_FLAG_DISAPPROVE', 'Должны ли быть отклонены комментарии помеченные флагом?');
define('CMTX_HINT_FLOODING_DELAY', 'Следует ли пользователю подождать, прежде чем он получит возможность добавить ещё один комментарий.');
define('CMTX_HINT_FLOODING_MAXIMUM', 'Следует ли ограничить количество комментариев, которые пользователь может разместить за определенный период.');
define('CMTX_HINT_FLOODING_ALL_PAGES', 'Применять только к этой странице или ко всем страницам.');
define('CMTX_HINT_ONE_NAME', 'Отклонять комментарий, если введено более чем одно имя.');
define('CMTX_HINT_FIX_NAME', 'Первая буква заглавная.<br />Остальные буквы строчные.');
define('CMTX_HINT_FIX_TOWN', 'Первая буква заглавная.<br />Остальные буквы строчные.');
define('CMTX_HINT_APPROVE_WEBSITE', 'Вручную одобрять комментарий, если пользователь ввел адрес сайта в поле "Web-сайт".');
define('CMTX_HINT_PING', 'Проверьте существование веб-сайта. Ваш сервер должен быть способен это сделать.');
define('CMTX_HINT_NEW_WIN', 'Открыть ссылку(и) в новом окне (вкладке).');
define('CMTX_HINT_NO_FOLLOW', 'Добавить тег <i>rel=nofollow</i> для ссылок, чтобы предотвратить отслеживание их поисковыми системами. Это полезно с точки зрения SEO.');
define('CMTX_HINT_CONVERT_LINKS', 'Сделать любые web-ссылки кликабельными.');
define('CMTX_HINT_CONVERT_EMAILS', 'Сделать любые e-mail кликабельными.');
define('CMTX_HINT_LINE_BREAKS', 'Разрешать начать новую строку, когда пользователь нажимает клавишу Enter.');
define('CMTX_HINT_MASK', 'Заменить любые бранные слова этим текстом.');
define('CMTX_HINT_MAX_CAPITALS', 'Определять, когда пользователь вводит большое количество заглавных букв.');
define('CMTX_HINT_DETECT_REPEATS', 'Определять, когда пользователь вводит 3 или более повторяющихся символа.');
define('CMTX_HINT_CHECK_REFERRER', 'Следует ли проверить, что форма была отправлена с Вашего сайта.');
define('CMTX_HINT_CHECK_DB_FILE', 'Следует ли проверить, что в информация в базе данных includes/db/details.php доступна только для чтения.');
define('CMTX_HINT_CHECK_HONEYPOT', 'Оставлять ли поле пустым при вводе текста, скрытого с помощью CSS. Боты, как правило, заполняют все поля.');
define('CMTX_HINT_CHECK_TIME', 'Проверять ли при задержке нажатия кнопки "добавить комментарий" более чем на 5 секунд. Боты как правило отправляют форму без задержек.<br />(Whether to check that it took longer than 5 seconds to submit the form. Bots often submit forms instantly without waiting.)');
define('CMTX_HINT_BAN_COOKIE', 'Количество дней до истечения срока запрета cookie.');
define('CMTX_HINT_ADMIN_FOLDER', 'Имя Вашей переименованной папки admin. Например: <i>secret</i>');
define('CMTX_HINT_TIME_ZONE', 'Часовой пояс Вашей местности.');
define('CMTX_HINT_COMMENTS_URL',  'URL Вашей папки комментариев. <br />http://www.carlik.com/comments/');
define('CMTX_HINT_MYSQL_DUMP', 'Если у Вас возникли проблемы с резервной копией базы данных Вам, возможно, потребуется указать путь серверу на Ваш MySQLDump файл.');
define('CMTX_HINT_WYSIWYG', 'Должен ли WYSIWYG (What You see Is What You Get) редактор HTML быть включен для редактирования Комментариев?');
define('CMTX_HINT_LIMIT_COMMENTS', 'Для повышения производительности показать только это количество результатов в  Управление - > Комментарии.');
define('CMTX_HINT_ADMIN_COOKIE_DAYS', 'Количество дней до окончания  срока действия cookie администратора.');
define('CMTX_HINT_VISITOR_ENABLED', 'Нужно ли отслеживать и регистрировать активность посетителей в отчете?.');
define('CMTX_HINT_VISITOR_TIMEOUT', 'Количество времени, необходимое чтобы пользователь считался не активным.');
define('CMTX_HINT_VISITOR_REFRESH', 'Будут ли автоматически обновляться отчет о посетителях: Отчеты - > Посетители.');
define('CMTX_HINT_VISITOR_INTERVAL', 'Как часто нужно обновлять отчет о посетителях: Отчеты - > Посетители.');


?>