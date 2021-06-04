<?php
/*
Copyright © 2009-2012 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/
*/

if (!defined("IN_COMMENTICS")) { die("Access Denied."); }

//delete comment ip addresses older than the configured time period
mysql_query("UPDATE `" . $cmtx_mysql_table_prefix . "comments` SET `ip_address` = '00.00.00.00' WHERE `dated` < DATE_SUB(NOW(), INTERVAL " . $cmtx_settings->days_to_delete_comment_ips . " DAY)");

?>