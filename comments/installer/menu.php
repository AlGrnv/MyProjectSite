<?php
/*
Copyright © 2009-2013 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/
*/

if (isset($_POST['submit'])) {
	if ($_POST['action'] == 'install') {
		header('Location: ' . 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/install_1.php');
		die();
	} else {
		header('Location: ' . 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/upgrade_1.php');
		die();
	}
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

Вы желаете установить или обновить программу комментариев?

<p></p>

<form name="installer" id="installer" action="menu.php" method="post">

<input type="radio" name="action" value="install" checked="checked"/> Установить
<br />
<input type="radio" name="action" value="upgrade" /> Обновить

<p></p>

<input type="submit" class="button" name="submit" value="Продолжить" title="Продолжить"/>

</form>

</body>
</html>