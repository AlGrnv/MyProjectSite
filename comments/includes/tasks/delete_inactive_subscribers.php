<?php
/*
Copyright © 2009-2012 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/
*/

if (!defined("IN_COMMENTICS")) { die("Access Denied."); }

//delete subscribers who have been inactive for longer than the configured time period
mysql_query("DELETE FROM `" . $cmtx_mysql_table_prefix . "subscribers` WHERE `is_confirmed` = '1' AND `is_active` = '0' AND `last_action` < DATE_SUB(NOW(), INTERVAL " . $cmtx_settings->days_to_delete_inactive_subscribers . " DAY)");

?>