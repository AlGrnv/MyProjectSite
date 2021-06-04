<?php
/*
Copyright © 2009-2013 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/
*/

if (!defined('IN_COMMENTICS')) { die('Access Denied.'); }


function cmtx_get_version() { //get version

	global $mysql_table_prefix;

	$version_query = mysql_query("SELECT * FROM `" . $mysql_table_prefix . "version` ORDER BY `dated` DESC LIMIT 1");
	$version_result = mysql_fetch_assoc($version_query);
	$version = $version_result["version"];

	return $version;

} //end of get-version function

?>