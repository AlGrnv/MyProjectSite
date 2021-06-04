<?php
/*
Copyright © 2009-2013 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/
*/

session_start();

if (isset($_POST['submit'])) {
	header('Location: ' . 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/system.php');
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

Добро пожаловать в установку программы Commentics.

<p></p>
<hr/>
<p></p>

Если Вы <b>устанавливаете<b> программу, убедитесь что:

<ul>
<li>База данных была создана.</li>
<li>Вы внесли соответствующие данные в файл /comments/includes/db/details.php</li>
<li>Пользователь MySQL имеет, <b>как минимум</b>, следующие привилегии:
	<ul><li>Select, Insert, Update, Delete, Create, Alter, Index and Drop.</li></ul>
</ul>

<p></p>
<hr/>
<p></p>

Если Вы <b>обновляете<b> программу, убедитесь что:

<ul>
<li>Вы создали резервную копию базы данных.</li>
<li>Вы создали резервную капию файлов.</li>
</ul>

<p></p>
<hr/>
<p></p>

Затем нажмите кнопку 'Установить'.

<?php
if (session_id() != '') {
	$_SESSION['cmtx_session_test'] = '1';
}
?>

<p></p>

<form name="installer" id="installer" action="index.php" method="post">
<input type="submit" class="button" name="submit" value="Установить" title="Установить"/>
</form>

</body>
</html>