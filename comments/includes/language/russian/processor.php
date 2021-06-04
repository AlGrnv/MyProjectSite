<?php
/*
Copyright © 2009-2013 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/
*/

if (!defined('IN_COMMENTICS')) { die('Access Denied.'); }
/* Error box */
define('CMTX_ERROR_NUMBER', 'Извините,  но %d ошибка была обнаружена в процессе создания комментария');     
define('CMTX_ERRORS_NUMBER', 'Извините,  но ошибки в количестве %d  шт. были обнаружены в процессе создания комментария');     
define('CMTX_ERROR_CORRECTION', 'Пожалуйста  исправьте эту ошибку и отправьте комментарий еще раз:');     
define('CMTX_ERRORS_CORRECTION', 'Пожалуйста  исправте эти ошибки и отправьте комментарий еще раз:');     
/* Preview box */
define('CMTX_PREVIEW_TEXT', 'Только предварительный просмотр.');
/* Approval box */
define('CMTX_APPROVAL_OPENING', 'Спасибо.');
define('CMTX_APPROVAL_TEXT', 'Ваш комментарий ожидает подтверждения.');
/* Success box */
define('CMTX_SUCCESS_OPENING', 'Спасибо.');
define('CMTX_SUCCESS_TEXT', 'Ваш комментарий был добавлен.');
/* Error messages */
define('CMTX_ERROR_MESSAGE_NO_NAME', 'Поле "Имя" не может быть пустым. Пожалуйста  введите Ваше имя.');   
define('CMTX_ERROR_MESSAGE_ONE_NAME', 'Ввести можно только одно имя. Пожалуйста  введите одно имя.');   
define('CMTX_ERROR_MESSAGE_INVALID_NAME', 'Имя должно содержать буквы и  возможно  - & . 0-9 \'');  
define('CMTX_ERROR_MESSAGE_RESERVED_NAME', 'Введенное имя уже зарегестрировано. Пожалуйста,  выберите другое имя.');   
define('CMTX_ERROR_MESSAGE_BANNED_NAME', 'Введенное имя запрещено. Пожалуйста,  выберите другое имя.');   
define('CMTX_ERROR_MESSAGE_DUMMY_NAME', 'Введенное имя Вам не принадлежит. Пожалуйста,  введите Ваше имя.');   
define('CMTX_ERROR_MESSAGE_LINK_IN_NAME', 'Введенное имя содержит ссылку. Пожалуйста,  введите Ваше имя без ссылки.');   
define('CMTX_ERROR_MESSAGE_NO_EMAIL', 'Поле "e-mail" не может быть пустым. Пожалуйста,  введите Ваш e-mail.');   
define('CMTX_ERROR_MESSAGE_INVALID_EMAIL', 'Адрес e-mail кажется неправильным. Пожалуйста,  проверьте Вашу запись.');   
define('CMTX_ERROR_MESSAGE_RESERVED_EMAIL', 'Введенный e-mail заблокирован. Пожалуйста,  введите Ваш действующий e-mail.');   
define('CMTX_ERROR_MESSAGE_BANNED_EMAIL', 'Введенный e-mail запрещен. Пожалуйста,  введите другой e-mail.');   
define('CMTX_ERROR_MESSAGE_DUMMY_EMAIL', 'Введенный e-mail не Ваш. Пожалуйста,  введите Ваш e-mail.');   
define('CMTX_ERROR_MESSAGE_NO_WEBSITE', 'Поле "Сайт" не может быть пустым. Пожалуйста,  введите имя Вашего сайта.');   
define('CMTX_ERROR_MESSAGE_INVALID_WEBSITE', 'Введенный адрес кажется неправильным. Пожалуйста,  проверьте Вашу запись.');   
define('CMTX_ERROR_MESSAGE_RESERVED_WEBSITE', 'Введенный адрес зарезервирован. Пожалуйста,  введите адрес веб-сайта.');   
define('CMTX_ERROR_MESSAGE_BANNED_WEBSITE_IN_WEBSITE', 'Введенный адрес запрещен. Пожалуйста,  удалите его.');   
define('CMTX_ERROR_MESSAGE_BANNED_WEBSITE_IN_COMMENT', 'Адрес сайта в комментарий запрещен. Пожалуйста,  удалите его.');   
define('CMTX_ERROR_MESSAGE_DUMMY_WEBSITE', 'Введенный адрес не Ваш. Пожалуйста,  введите адрес Вашего веб-сайта.');   
define('CMTX_ERROR_MESSAGE_NO_TOWN', 'Поле "Город" не может быть пустым. Пожалуйста,  введите название Вашего города.');   
define('CMTX_ERROR_MESSAGE_INVALID_TOWN', 'Город должен содержать буквы и  возможно   - & . \'');  
define('CMTX_ERROR_MESSAGE_RESERVED_TOWN', 'Введеннный город зарезервирован. Пожалуйста,  введите другой город.');   
define('CMTX_ERROR_MESSAGE_BANNED_TOWN', 'Введеннный город запрещен. Пожалуйста,  введите другой город.');   
define('CMTX_ERROR_MESSAGE_DUMMY_TOWN', 'Введеннный город не Ваш. Пожалуйста,  введите Ваш город.');   
define('CMTX_ERROR_MESSAGE_LINK_IN_TOWN', 'Название города содержит ссылку. Пожалуйста,  введите название  города без ссылки.');   
define('CMTX_ERROR_MESSAGE_NO_COUNTRY', 'Стране не выбрана. Пожалуйста,  выберите Вашу страну.');   
define('CMTX_ERROR_MESSAGE_INVALID_COUNTRY', 'Выбранная страна является недопустимой. Пожалуйста,  попробуйте еще раз.'); 
define('CMTX_ERROR_MESSAGE_COUNTRY_SEARCH', 'Выбранная страна не найдена. Пожалуйста,  попробуйте еще раз.');
define('CMTX_ERROR_MESSAGE_NO_RATING', 'Рейтинг не был выбран. Пожалуйста,  выберите Ваш рейтинг.');   
define('CMTX_ERROR_MESSAGE_INVALID_RATING', 'Выбранные рейтинг является недействительным. Пожалуйста,  попробуйте еще раз.');   
define('CMTX_ERROR_MESSAGE_INVALID_REPLY', 'Комментарий  на который Вы отвечаете является недействительным. Пожалуйста,  попробуйте еще раз.');  
define('CMTX_ERROR_MESSAGE_NO_COMMENT', 'Поле комментария не может быть пустым. Пожалуйста,  введите Ваш комментарий .');   
define('CMTX_ERROR_MESSAGE_COMMENT_MIN', 'Комментарий слишком короткий. Пожалуйста,  введите более подробный комментарий.');   
define('CMTX_ERROR_MESSAGE_COMMENT_MAX', 'Комментарий слишком длинный. Пожалуйста,  введите более краткий комментарий.');   
define('CMTX_ERROR_MESSAGE_COMMENT_MAX_LINES', 'Комментарий содержит слишком много строк. Пожалуйста,  откорректируйте.');   
define('CMTX_ERROR_MESSAGE_COMMENT_RESUBMIT', 'Введенный комментарий  уже представлен. Пожалуйста,  отправьте комментарий.');   
define('CMTX_ERROR_MESSAGE_SMILIES_MAX', 'Комментарий содержит слишком много смайликов. Пожалуйста,  введите меньше смайлов.');   
define('CMTX_ERROR_MESSAGE_MILD_SWEARING', 'Комментарий содержит оскорбительные слова. Пожалуйста,  удалите эти слова.');   
define('CMTX_ERROR_MESSAGE_STRONG_SWEARING', 'Ругательства не допускаются. Пожалуйста,  удалите бранные слова из Вашего комментария.');   
define('CMTX_ERROR_MESSAGE_SPAMMING', 'Спам не допускается. Пожалуйста,  удалите спам из комментариев.');   
define('CMTX_ERROR_MESSAGE_LONG_WORD', 'Комментарий содержит слишком длинное слово. Сократите или удалите его.');    
define('CMTX_ERROR_MESSAGE_CAPITALS', 'Комментарий содержит слишком много заглавных букв. Пожалуйста,  сократите их количество.');   
define('CMTX_ERROR_MESSAGE_LINK_IN_COMMENT', 'Комментарий содержит ссылку. Пожалуйста,  удалите ссылку .');   
define('CMTX_ERROR_MESSAGE_REPEATS', 'Комментарий содержит повторяющиеся символы. Пожалуйста,  удалите их.');   
define('CMTX_ERROR_MESSAGE_NO_ANSWER', 'Поле "Вопрос" не может быть пустым. Пожалуйста,  введите ответ .');   
define('CMTX_ERROR_MESSAGE_WRONG_ANSWER', 'Ответ на вопрос был неправильным. Пожалуйста,  попробуйте еще раз.');   
define('CMTX_ERROR_MESSAGE_NO_CAPTCHA', 'Поле капчи не может быть пустым. Пожалуйста,  введите символы.');   
define('CMTX_ERROR_MESSAGE_WRONG_CAPTCHA', 'Символы вы видите на изображении оказались неверными. Пожалуйста,  попробуйте еще раз.');   
define('CMTX_ERROR_MESSAGE_FLOOD_CONTROL_DELAY', 'Ваш последний комментарий был представлен не так давно. Пожалуйста,  подождите некоторое время.');   
define('CMTX_ERROR_MESSAGE_FLOOD_CONTROL_MAXIMUM', 'Вы представили ряд замечаний в последнее время. Пожалуйста,  подождите некоторое время.');   
define('CMTX_ERROR_MESSAGE_NO_REFERRER', 'Пожалуйста  включите веб-браузер для отправки реферальной информации.');
define('CMTX_ERROR_MESSAGE_INCORRECT_REFERRER', 'Есть подозрение на проникновение с другог сайта.');
define('CMTX_ERROR_MESSAGE_MAXIMUMS', 'Пожалуйста, настройте Ваш браузер для поддержки максимальной длины поля.');
define('CMTX_ERROR_MESSAGE_HONEYPOT', 'Скрытое поле, используемое для обнаружения ботов, было заполнено. Пожалуйста, оставте его пустым');
define('CMTX_ERROR_MESSAGE_MIN_TIME', 'Форма была заполнена слишком быстро. Пожалуйста, сделайте это медленнее.');
define('CMTX_ERROR_MESSAGE_MISSING_DATA', 'Некоторых данных не хватает. Пожалуйста, заполните форму ещё раз.');
/* Messages displayed to user when banned */
define('CMTX_BAN_MESSAGE_BANNED_NOW', '<p>Вы только что были забанены.</p><p>Это может быть следствием различных причин, включая ругань, спам и действия, расценивающиеся как хакерство.</p><p>Если Вы считаете, что произошла ошибка, пожалуйста, обратитесь к администратору, указав Ваш IP-адрес.</p>');
define('CMTX_BAN_MESSAGE_BANNED_PREVIOUSLY', 'Извините, Вы были забанены.');
/* Ban reasons */
define('CMTX_BAN_REASON_INCORRECT_SECURITY_KEY', 'Неверный ключ безопасности.');
define('CMTX_BAN_REASON_NO_SECURITY_KEY', 'Нет ключа безопасности.');
define('CMTX_BAN_REASON_NO_RESUBMIT_KEY', 'Нет повторного ключа.');
define('CMTX_BAN_REASON_INVALID_RESUBMIT_KEY', 'Неверный повторный ключ.');
define('CMTX_BAN_REASON_INJECTION', 'Попытка проникновения.');
define('CMTX_BAN_REASON_RESERVED_NAME', 'Такое имя уже существует.');
define('CMTX_BAN_REASON_BANNED_NAME', 'Введено запрещенное имя.');
define('CMTX_BAN_REASON_DUMMY_NAME', 'Такое имя недопустимо.');
define('CMTX_BAN_REASON_LINK_IN_NAME', 'Имя содержит ссылку.');
define('CMTX_BAN_REASON_RESERVED_EMAIL', 'Адрес уже используется.');
define('CMTX_BAN_REASON_BANNED_EMAIL', 'Введен запрещенный адрес.');
define('CMTX_BAN_REASON_DUMMY_EMAIL', 'Введен неверный адрес.');
define('CMTX_BAN_REASON_RESERVED_WEBSITE', 'Данный сайт уже зарезервирован.');
define('CMTX_BAN_REASON_BANNED_WEBSITE_IN_WEBSITE', 'Введен запрещенный сайт.');
define('CMTX_BAN_REASON_BANNED_WEBSITE_IN_COMMENT', 'Комментарий содержит запрещенный сайт.');
define('CMTX_BAN_REASON_DUMMY_WEBSITE', 'Введен неверный сайт.');
define('CMTX_BAN_REASON_RESERVED_TOWN', 'Введенный город уже существует.');
define('CMTX_BAN_REASON_BANNED_TOWN', 'Введенный город недопустим.');
define('CMTX_BAN_REASON_DUMMY_TOWN', 'Введен неправильный город.');
define('CMTX_BAN_REASON_LINK_IN_TOWN', 'Город содержит ссылку.');
define('CMTX_BAN_REASON_MILD_SWEARING', 'Грубая лексика.');
define('CMTX_BAN_REASON_STRONG_SWEARING', 'Нецензурная лексика.');
define('CMTX_BAN_REASON_SPAMMING', 'Спам');
define('CMTX_BAN_REASON_CAPITALS', 'Слишком много заглавных букв.');
define('CMTX_BAN_REASON_LINK_IN_COMMENT', 'Комментарий содержит ссылку.');
define('CMTX_BAN_REASON_REPEATS', 'Комментарий содержит повторы.');
/* Approval reasons */
define('CMTX_APPROVE_REASON_ALL', 'Одобрить все.');
define('CMTX_APPROVE_REASON_RESERVED_NAME', 'Такое имя уже существует.');
define('CMTX_APPROVE_REASON_BANNED_NAME', 'Такое имя невозможно.');
define('CMTX_APPROVE_REASON_DUMMY_NAME', 'Имя введено неверно.');
define('CMTX_APPROVE_REASON_LINK_IN_NAME', 'Имя содержит ссылку.');
define('CMTX_APPROVE_REASON_RESERVED_EMAIL', 'Такой адрес уже существует.');
define('CMTX_APPROVE_REASON_BANNED_EMAIL', 'Введенный адрес запрещен.');
define('CMTX_APPROVE_REASON_DUMMY_EMAIL', 'Адрес введен неверно.');
define('CMTX_APPROVE_REASON_WEBSITE_ENTERED', 'Сайт введен.');
define('CMTX_APPROVE_REASON_RESERVED_WEBSITE', 'Такой сайт уже существует.');
define('CMTX_APPROVE_REASON_BANNED_WEBSITE_IN_WEBSITE', 'Введен запрещенный сайт.');
define('CMTX_APPROVE_REASON_BANNED_WEBSITE_IN_COMMENT', 'Комментарий содержит запрещенный сайт.');
define('CMTX_APPROVE_REASON_DUMMY_WEBSITE', 'Введен неверный сайт.');
define('CMTX_APPROVE_REASON_RESERVED_TOWN', 'Такой город уже существует.');
define('CMTX_APPROVE_REASON_BANNED_TOWN', 'Такой город невозможен.');
define('CMTX_APPROVE_REASON_DUMMY_TOWN', ' Город введен неверно.');
define('CMTX_APPROVE_REASON_LINK_IN_TOWN', 'Название города содержит ссылку.');
define('CMTX_APPROVE_REASON_LINK_IN_COMMENT', 'Комментарий содержит ссылку.');
define('CMTX_APPROVE_REASON_REPEATS', 'Комментарий содержит повторы.');
define('CMTX_APPROVE_REASON_IMAGE_ENTERED', 'Загружена картинка.');
define('CMTX_APPROVE_REASON_VIDEO_ENTERED', 'Загружено видео.');
define('CMTX_APPROVE_REASON_MILD_SWEARING', 'Грубая лексика.');
define('CMTX_APPROVE_REASON_STRONG_SWEARING', 'Нецензурная лексика.');
define('CMTX_APPROVE_REASON_SPAMMING', 'Спам.');
define('CMTX_APPROVE_REASON_CAPITALS', 'Слишком много заглавных букв.');
define('CMTX_APPROVE_REASON_AKISMET', 'Akismet - фильтр спама.');

?>﻿