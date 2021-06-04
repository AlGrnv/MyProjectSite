<?php
/*
Copyright © 2009-2013 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/
*/

if (!defined('IN_COMMENTICS')) { die('Access Denied.'); }
/* Anchors */
define('CMTX_ANCHOR_FORM', '#cmtx_form');
/* Heading */
define('CMTX_FORM_HEADING', '');
/* Form disabled messages */
define('CMTX_ALL_FORMS_DISABLED', 'Добавление коментариев запрещено.');
define('CMTX_THIS_FORM_DISABLED', 'Добавление коментариев к данной странице запрещено.');
/* Open form link */
define('CMTX_OPEN_FORM', '<img src="http://carlik.com/comments/images/buttons/chat.png" alt="" />');
/* JavaScript disabled message */
define('CMTX_JAVASCRIPT_DISABLED', 'JavaScript должен быть включен.');
/* Reply */
define('CMTX_REPLY_MESSAGE', 'Вы отвечаете на сообщение пользователя ');
define('CMTX_REPLY_CANCEL', '[отмена]');
define('CMTX_REPLY_NOBODY', 'Вы не ответили ни на одно сообщение.');
/* Required */
define('CMTX_REQUIRED_SYMBOL', '*');
define('CMTX_REQUIRED_SYMBOL_MESSAGE', CMTX_REQUIRED_SYMBOL . ' Обязательные поля');
/* Field labels */
define('CMTX_LABEL_NAME', 'Имя:');
define('CMTX_LABEL_EMAIL', 'Email:');
define('CMTX_LABEL_WEBSITE', 'Сайт:');
define('CMTX_LABEL_TOWN', 'Город:');
define('CMTX_LABEL_COUNTRY', 'Страна:');
define('CMTX_LABEL_RATING', 'Оценка:');
define('CMTX_LABEL_COMMENT', 'Отзыв:');
define('CMTX_LABEL_QUESTION', 'Вопрос:');
define('CMTX_LABEL_CAPTCHA', 'Защитный код:');
/* Field titles */
define('CMTX_TITLE_NAME', 'Введите имя');
define('CMTX_TITLE_EMAIL', 'Введите адрес электронной почты');
define('CMTX_TITLE_WEBSITE', 'Введите адрес веб-сайта');
define('CMTX_TITLE_TOWN', 'Введите город');
define('CMTX_TITLE_COMMENT', 'Введите комментарий');
define('CMTX_TITLE_QUESTION', 'Введите ответ на вопрос');
define('CMTX_TITLE_NOTIFY', 'Получать уведомления по электронной почте');
define('CMTX_TITLE_REMEMBER', 'Запомнить введенную мной информацию');
define('CMTX_TITLE_PRIVACY', 'Соглашаюсь с политикой конфиденциальности');
define('CMTX_TITLE_TERMS', 'Соглашаюсь с условиями');
define('CMTX_TITLE_SUBMIT', 'Добавить комментарий');
define('CMTX_TITLE_PREVIEW', 'Предварительный просмотр');
/* Note displayed after email field */
define('CMTX_NOTE_EMAIL', '(Не публикуется)');
/* Текст отображаемый для кода JavaScript BB запросов */
define('CMTX_PROMPT_ENTER_BULLET', 'Введите пункты списка. Нажмите отменить или оставте поле  пустым, чтобы завершить список.');
define('CMTX_PROMPT_ENTER_ANOTHER_BULLET', 'Введите другой пункт списка. Нажмите отменить или оставте поле  пустым, чтобы завершить список.');
define('CMTX_PROMPT_ENTER_NUMERIC', 'Введите пункты списка. Нажмите отменить или оставте поле  пустым, чтобы завершить список.');
define('CMTX_PROMPT_ENTER_ANOTHER_NUMERIC', 'Введите другой элемент списка. Нажмите отменить или оставте поле пустым, чтобы закончить список.');
define('CMTX_PROMPT_ENTER_LINK', 'Пожалуйста, введите ссылку на сайт');
define('CMTX_PROMPT_ENTER_LINK_TITLE', 'При желании, Вы также можете ввести название для ссылки');
define('CMTX_PROMPT_ENTER_EMAIL', 'Пожалуйста, введите адрес электронной почты');
define('CMTX_PROMPT_ENTER_EMAIL_TITLE', 'При желании Вы также можете ввести адрес электронной почты');
define('CMTX_PROMPT_ENTER_IMAGE', 'Пожалуйста, введите ссылку на изображение');
define('CMTX_PROMPT_ENTER_VIDEO', 'Пожалуйста, введите ссылку на видео. Поддерживаемые сайты включают в себя: \nYouTube  Vimeo  MetaCafe и Dailymotion.');
/* Text displayed for invalid BB Code entries */
define('CMTX_BB_INVALID_LINK', '<i>(недействительная ссылка)</i>');
define('CMTX_BB_INVALID_EMAIL', '<i>(недействительный e-mail)</i>');
define('CMTX_BB_INVALID_IMAGE', '<i>(недействительное изображение)</i>');
define('CMTX_BB_INVALID_VIDEO', '<i>(недействительное видео)</i>');
/* Text displayed before/after the counter */
define('CMTX_TEXT_COUNTER', '%s');
/* Text displayed before question field */
define('CMTX_TEXT_QUESTION', ' (введите ответ)');
/* Text displayed for Securimage captcha */
define('CMTX_TEXT_SECURIMAGE', 'Введите код:');
define('CMTX_TITLE_SECURIMAGE', 'Введите код с картинки:');
define('CMTX_TITLE_SECURIMAGE_AUDIO', 'Audio');
define('CMTX_TITLE_SECURIMAGE_REFRESH', 'Обновить');
/* Text displayed if ReCaptcha key missing */
define('CMTX_RECAPTCHA_NO_KEY', '<b>Внимание</b>: API ключи отсутствуют в Настройки -> ReCaptcha');
/* Text displayed after notify checkbox */
define('CMTX_TEXT_NOTIFY', 'Уведомлять о новых коментариях по почте.');
/* Text displayed after remember checkbox */
define('CMTX_TEXT_REMEMBER', 'Запомнить информацию введенную в поля формы.');
/* Text displayed after privacy checkbox. Текст, отображаемый после поля конфиденциальность */
define('CMTX_TEXT_PRIVACY', 'Я прочитал(а) и понял(а) соглашение о <a href="' . cmtx_url_encode($cmtx_settings->url_to_comments_folder) . 'agreement/russian/privacy_policy.html" title="View privacy policy" target="_blank" rel="nofollow"> политике конфиденциальности</a>.');
/* Text displayed after terms checkbox. Текст, отображаемый после поля правила */
define('CMTX_TEXT_TERMS', 'Я прочитал(а) и согласен(а) с  <a href="' . cmtx_url_encode($cmtx_settings->url_to_comments_folder) . 'agreement/russian/terms_and_conditions.html" title="View terms and conditions" target="_blank" rel="nofollow">привилами и условиями</a>.');
/* Text for form submit button */
define('CMTX_SUBMIT_BUTTON', 'Добавить комментарий');
/* Text for form preview button *//* Текст для кнопки  предварительного просмотра */
define('CMTX_PREVIEW_BUTTON', 'Предварительный просмотр');
/* Text for form buttons when processing */
define('CMTX_PROCESSING_BUTTON', 'Пожалуйста, подождите ...');
/* Text for 'powered by' statement */
define('CMTX_POWERED_BY', '<a href="http://www.carlik.com/site/comment.php" title="Русификатор" target="_blank">Русифицированная</a> версия скрипта');


?>