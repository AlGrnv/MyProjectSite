<?php
/*
Copyright © 2009-2013 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/
*/
?>
<!DOCTYPE html>
<html>
<head>
<title>Installer</title>
<meta name="robots" content="noindex"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css"/>

<script type="text/javascript">
// <![CDATA[
function check_passwords() {
if (document.install.admin_password_1.value == document.install.admin_password_2.value) {
return true;
} else {
alert('Пароли не совпадают!');
return false;
}
}
// ]]>
</script>

</head>
<body>

<img src="../images/commentics/logo.png" class="logo" title="Commentics" alt="Commentics"/>

<br />

<?php
/* Error Reporting */
@error_reporting(-1); //show every possible error
@ini_set('display_errors', 1); //display errors
?>

<?php
define('IN_COMMENTICS', 'true');
define('CMTX_IN_INSTALLER', 'true');
?>

<?php
require '../includes/db/connect.php'; //connect to database
if (!$cmtx_db_ok) { die(); }
?>

<?php
if (mysql_num_rows(mysql_query("SHOW TABLES LIKE '" . $cmtx_mysql_table_prefix . "comments'"))) {
echo "<span class='fail'>Программа уже установлена.</span>";
echo "<p></p>";
echo "<a href='javascript:history.back()'>Назад</a>";
echo "</body>";
echo "</html>";
die();
}
?>

Создание необходимых таблиц в базе данных.

<p></p>
<hr/>
<p></p>

<form name="install" id="install" style="padding-left:20px;" action="install_2.php" method="post" onsubmit="return check_passwords()">

<span class='heading'>Администратор</span>

<p></p>

<span class='heading_note'>Установочные данные для панели администратора.</span>

<p></p>

<span class='field'>Имя администратора:</span> <br />
<input type="text" name="admin_username" size="30"/> <span class='field_note'>(введите имя для входа в панель администратора)</span>
<p></p>
<span class='field'>Пароль администратора:</span><br />
<input type="password" name="admin_password_1" size="30"/> <span class='field_note'>(введите пароль для входа в панель администратора)</span>
<p></p>
<span class='field'>Повторите пароль:</span><br />
<input type="password" name="admin_password_2" size="30"/> <span class='field_note'>(повторите пароль для входа в панель администратора)</span>
<p></p>
<span class='field'>E-mail администратора:</span><br />
<input type="email" required name="admin_email_address" size="30"/> <span class='field_note'>(Введите Ваш e-mail)</span>

<p></p>
<hr/>
<p></p>

<span class='heading'>Основные данные</span>

<p></p>

<span class='heading_note'>Устанановка основных данных.</span>

<p></p>

<span class='field'>Часовой пояс:</span><br />
<?php
$time_zones = DateTimeZone::listIdentifiers();
echo "<select name='time_zone'>";
foreach ($time_zones as $time_zone) {
	echo "<option value='$time_zone'>$time_zone</option>";
}
echo "</select>";
?>
<span class='field_note'> (выбирете Ваш часовой пояс)</span>

<p></p>

<span class='field'>Папка администратора:</span><br />
<input type="text" required name="admin_folder" size="30" value="admin"/> <span class='field_note'>(введите новое имя для папки &quot;admin&quot;)</span>

<p></p>
<hr/>
<p></p>

<span class='heading'>Сайт</span>

<p></p>

<span class='heading_note'>Установщик может разместить некоторые из настроек администратора в соответствии с тремя пунктами ниже. </span>

<p></p>

<span class='heading_note'>Вы можете изменить эти настройки в любое время, так что не  слишком беспокойтесь о правильности заполнения..</span>

<p></p>

<span class='field'>Название сайта:</span><br />
<input type="text" required name="site_name" size="30" value="My Site"/> <span class='field_note'>(введите название Вашего сайта)</span>
<p></p>
<span class='field'>Доменное имя сайта:</span><br />
<input type="text" required name="site_domain" size="30" value="mysite.com"/> <span class='field_note'>(введите доменное имя Вашего сайта без http:// или www, если используете локальный сервер просто введите <b>localhost</b>)</span>
<p></p>
<span class='field'>URL папки Comments:</span><br />
<span class='part'>http://</span><input type="text" required name="comments_url" size="25" value="www.mysite.com"/><span class='part'>/comments/</span> <span class='field_note'>(введите полный URL папки comments)</span>
<p></p>
<span class='example'>например: mysite.com</span> <span class='example_note'>(без www)</span>
<br />
<span class='example'>например: www.mysite.com/myfolder</span> <span class='example_note'>(в папке)</span>
<br />
<span class='example'>например: www.subdomain.mysite.com</span> <span class='example_note'>(субдомен)</span>
<br />
<span class='example'>например: localhost</span> <span class='example_note'>(локальный сервер)</span>
<br />
<span class='example'>например: localhost/myfolder</span> <span class='example_note'>(локальный сервер и в папке)</span>

<p></p>
<hr/>
<p></p>

Когда будете готовы - нажмите ниже кнопку "Установить".

<p></p>

<input type="submit" class="button" name="submit" value="Установить" title="Установить"/>
</form>

</body>
</html>