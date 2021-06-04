<?php
/*
Copyright © 2009-2013 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/
*/

if (!defined("IN_COMMENTICS")) { die("Access Denied."); }

class cmtx_settings {

	private $cmtx_settings;

	public function __get($name) {

		global $cmtx_mysql_table_prefix;

		if (!$this->cmtx_settings) {
			$result = mysql_query("SELECT * FROM `" . $cmtx_mysql_table_prefix . "settings`");
			$this->cmtx_settings = array();
			while ($row = mysql_fetch_assoc($result)) {
				$this->cmtx_settings[$row['title']] = $row['value'];
			}
		}

		return $this->cmtx_settings[$name];
	}
}

?>