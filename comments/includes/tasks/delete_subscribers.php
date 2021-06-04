<?php
/*
Copyright © 2009-2013 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/
*/

if (!defined('IN_COMMENTICS')) { die('Access Denied.'); }

//delete subscribers who have been unconfirmed for longer than the configured time period
mysql_query("DELETE FROM `" . $cmtx_mysql_table_prefix . "subscribers` WHERE `is_confirmed` = '0' AND `dated` < DATE_SUB(NOW(), INTERVAL " . cmtx_setting('days_to_delete_subscribers') . " DAY)");

?>