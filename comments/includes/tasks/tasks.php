<?php
/*
Copyright © 2009-2013 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/
*/

if (!defined('IN_COMMENTICS')) { die('Access Denied.'); }

if (cmtx_setting('task_enabled_delete_bans')) {
require_once $cmtx_path . 'includes/tasks/delete_bans.php'; //load task to delete bans
}

if (cmtx_setting('task_enabled_delete_reporters')) {
require_once $cmtx_path . 'includes/tasks/delete_reporters.php'; //load task to delete reporters
}

if (cmtx_setting('task_enabled_delete_subscribers')) {
require_once $cmtx_path . 'includes/tasks/delete_subscribers.php'; //load task to delete subscribers
}

if (cmtx_setting('task_enabled_delete_voters')) {
require_once $cmtx_path . 'includes/tasks/delete_voters.php'; //load task to delete voters
}

?>