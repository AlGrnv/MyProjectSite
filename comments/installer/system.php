<?php
/*
Copyright © 2009-2013 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/
*/

session_start();

if (isset($_POST['submit'])) {
	header('Location: ' . 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/menu.php');
	die();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Installer</title>
<meta name="robots" content="noindex"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css"/>
</head>
<body>

<img src="../images/commentics/logo.png" class="logo" title="Commentics" alt="Commentics"/>

<br />

<?php
@error_reporting(0); //turn off all error reporting
@ini_set('display_errors', 0); //don't display errors
@ini_set('log_errors', 0); //don't log errors
?>

<?php
define('IN_COMMENTICS', 'true');
define('CMTX_IN_INSTALLER', 'true');
?>

<?php
if (extension_loaded('mysql')) {
require '../includes/db/connect.php'; //connect to database
if (!$cmtx_db_ok) { die(); }
}
?>

Будет произведена проверка системы..

<p></p>

<?php
$proceed = true;
$notes = "";
?>

<?php
echo "<label class='system_item'>PHP версии 5.2 или выше</label>";
if (version_compare(PHP_VERSION, '5.2.0', '>=')) {
echo "<span class='system_green'>Соответствует</span>";
} else {
echo "<span class='system_red'>Не соответствует</span>";
$notes .= "- Необходимо иметь PHP версии 5.2 или выше.<br />";
$proceed = false;
}

echo "<br />";

echo "<label class='system_item'>MySQL версии 5.0.7 или выше</label>";
if (version_compare(mysql_get_server_info(), '5.0.7', '>=')) {
echo "<span class='system_green'>Соответствует</span>";
} else {
echo "<span class='system_red'>Не соответствует</span>";
$notes .= "- Необходимо иметь MySQL версии 5.0.7 или выше.<br />";
$proceed = false;
}

echo "<br />";

echo "<label class='system_item'>PHP session</label>";
if (session_id() != '') {
	if (isset($_SESSION['cmtx_session_test']) && $_SESSION['cmtx_session_test'] == '1') {
		echo "<span class='system_green'>Соответствует</span>";
	} else {
		echo "<span class='system_red'>Не соответствует</span>";
		$notes .= "- PHP session необходима для панели администратора.<br />";
		$proceed = false;
	}

} else {
echo "<span class='system_red'>Не соответствует</span>";
$notes .= "- PHP session необходима для панели администратора.<br />";
$proceed = false;
}

echo "<br />";

echo "<label class='system_item'>Наличие Ctype extension</label>";
if (extension_loaded('ctype')) {
echo "<span class='system_green'>Соответствует</span>";
} else {
echo "<span class='system_red'>Не соответствует</span>";
$notes .= "- Необходимо наличие Ctype extension.<br />";
$proceed = false;
}

echo "<br />";

echo "<label class='system_item'>Наличие Filter extension</label>";
if (extension_loaded('filter')) {
echo "<span class='system_green'>Соответствует</span>";
} else {
echo "<span class='system_red'>Не соответствует</span>";
$notes .= "- Filter extension необходим для проверки формы.<br />";
$proceed = false;
}

echo "<br />";

echo "<label class='system_item'>Magic Quotes</label>";
if (function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) {
echo "<span class='system_amber'>Не соответствует</span>";
$notes .= "- Magic Quotes должен быть отключен, иначе Вы будете видеть дополнительные слэши (extra slashes)<br />";
} else {
echo "<span class='system_green'>Соответствует</span>";
}

echo "<br />";

echo "<label class='system_item'>System() function</label>";
if (function_exists('system') && is_callable('system')) {
echo "<span class='system_green'>Соответствует</span>";
} else {
echo "<span class='system_amber'>Не соответствует</span>";
$notes .= "- system() function используется инструментом резервного копирования баз данных.<br />";
}

echo "<br />";

echo "<label class='system_item'>cURL extension</label>";
if (extension_loaded('curl')) {
echo "<span class='system_green'>Соответствует</span>";
} else {
echo "<span class='system_amber'>Не соответствует</span>";
$notes .= "- cURL используется для проверки версии скрипта и новостей.<br />";
}

echo "<br />";

echo "<label class='system_item'>fopen(URL)</label>";
if ((bool)ini_get('allow_url_fopen')) {
echo "<span class='system_green'>Соответствует</span>";
} else {
echo "<span class='system_amber'>Не соответствует</span>";
$notes .= "- fopen(URL) используется для проверки версии скрипта и новостей.<br />";
}

echo "<br />";

echo "<label class='system_item'>fsockopen включен</label>";
if (function_exists('fsockopen') && is_callable('fsockopen')) {
echo "<span class='system_green'>Соответствует</span>";
} else {
echo "<span class='system_amber'>Не соответствует</span>";
$notes .= "- fsockopen используется для Akismet и ReCaptcha (защита от спама).<br /><br />";
}

echo "<br />";

echo "<label class='system_item'>GD extension</label>";
if (extension_loaded('gd')) {
echo "<span class='system_green'>Соответствует</span>";
} else {
echo "<span class='system_amber'>Не соответствует</span>";
$notes .= "- GD extension необходим для Securimage капчи.<br />";
}

echo "<br />";

echo "<label class='system_item'>FreeType</label>";
if (function_exists('imagettftext')) {
echo "<span class='system_green'>Соответствует</span>";
} else {
echo "<span class='system_amber'>Не соответствует</span>";
$notes .= "- FreeType необходим для Securimage капчи.<br />";
}
?>

<p></p>

<?php
if (!empty($notes)) {
echo "<b>Сообщения</b>:<br />";
echo "<i>$notes</i>";
echo "<p></p>";
}
?>

<?php
if (!empty($notes) && $proceed) {
echo "Установка может быть продолжена.";
echo "<p></p>";
}
?>

<?php if ($proceed) { ?>
<form name="system" id="system" action="system.php" method="post">
<input type="submit" class="button" name="submit" value="Продолжить" title="Продолжить"/>
</form>
<?php } else { ?>
<span class='fail'>Установка не может быть продолжена.</span>
<?php } ?>

</body>
</html>