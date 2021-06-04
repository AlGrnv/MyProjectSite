<?php
/*
Copyright © 2009-2012 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/
*/

if (!defined("IN_COMMENTICS")) { die("Access Denied."); }

//delete reports older than the configured time period
mysql_query("DELETE FROM `" . $cmtx_mysql_table_prefix . "reports` WHERE `status` != 'pending' AND `dated` < DATE_SUB(NOW(), INTERVAL " . $cmtx_settings->days_to_delete_reports . " DAY)");

?>