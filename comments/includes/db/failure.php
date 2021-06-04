<?php
/*
Copyright © 2009-2013 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/
*/
if (!defined('IN_COMMENTICS')) { die('Access Denied.'); }
function cmtx_db_error_general() { //display a general database error to user

	echo "<h3>Commentics</h3>";
	echo "<div style='margin-bottom: 10px;'></div>";
	echo "<p>Извините, обнаружены проблемы с базой данных.</p>";
	echo "<p>Пожалуйста, попробуйте ещё раз в ближайшее время. Спасибо.</p>";

} //end of db-error-general function

function cmtx_db_error_connect() { //display a database connection error to admin

	if (defined("CMTX_IN_ADMIN")) {
		echo "<img src='images/commentics/logo.png' style='padding-bottom:15px' title='Commentics' alt='Commentics'/>";
		echo "<br />";
	}
	echo "Извините, обнаружены проблемы с <span style='font-weight:bold;color:#CC0000;'>подключением</span> к базе данных.";
	echo "<p></p>";
	echo "Пожалуйста, откройте файл <b>/comments/includes/db/details.php</b>";
	echo "<ol>";
	echo "<li>В строке <b>\$cmtx_mysql_username</b> данные верны?</li>";
	echo "<li>В строке <b>\$cmtx_mysql_password</b> данные верны?</li>";
	echo "<li>В строке <b>\$cmtx_mysql_host</b> данные верны?</li>";
	echo "<li>В строке <b>\$cmtx_mysql_port</b> данные верны?</li>";
	echo "</ol>";
	echo "Если все перечисленное правильно, проверьте включен ли Ваш сервер.";

} //end of db-error-connect function

function cmtx_db_error_select() { //display a database selection error to admin

	if (defined("CMTX_IN_ADMIN")) {
		echo "<img src='images/commentics/logo.png' style='padding-bottom:15px' title='Commentics' alt='Commentics'/>";
		echo "<br />";
	}
	echo "Извините, обнаружены проблемы с <span style='font-weight:bold;color:#CC0000;'>выбором</span> базы данных.";
	echo "<p></p>";
	echo ":Следующие шаги помогут Вам диагностировать их:";
	echo "<ol>";
	echo "<li>Вы создали базу данных?</li><br/>";
	echo "<li>Ваша база данных существует?</li><br/>";
	echo "<li>";
	echo "<i>(a)</i> Откройте файл /comments/includes/db/details.php";
	echo "<br/>";
	echo "<i>(b)</i> Проверте данные в строке <b>\$cmtx_mysql_database</b>";
	echo "<br/>";
	echo "<i>(c)</i> Они совпадают с созданной Вами базой данных?";
	echo "</li>";
	echo "<br/>";
	echo "<li>Имеет ли пользователь MySQL соответствующие привилегии?</li>";
	echo "<br/>";
	echo "<li>Попробуйте установить нормальное разрешение для файла details.php</li>";
	echo "</ol>";

} //end of db-error-select function


function cmtx_db_error_table() { //display a database tables error to admin

	echo "<img src='images/commentics/logo.png' style='padding-bottom:15px' title='Commentics' alt='Commentics'/>";
	echo "<br />";
	echo "Извините, обнаружены проблемы с <span style='font-weight:bold;color:#CC0000;'>таблицами </span> баз данных.";
	echo "<p></p>";
	echo "<u>Если скрипт ещё не установлен</u>";
	echo "<ul>";
	echo "<li>Вам необходимо запустить installer (domain.com/comments/installer/)</li>";
	echo "</ul>";
	echo "<p></p>";
	echo "<u>Если скрипт установлен</u>";
	echo "<ul>";
	echo "<li>Пожалуйста, откройте файл <b>/comments/includes/db/details.php</b></li>";
	echo "<li>Проверте правильность этой записи: <b>\$cmtx_mysql_table_prefix</b></li><br/>";
	echo "<li>Используя <i>phpMyAdmin</i>, проверьте наличие таблиц в базе данных.</li>";
	echo "</ul>";

} //end of db-error-table function
?>