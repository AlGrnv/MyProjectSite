<?php
/*
Copyright © 2009-2013 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/
*/
?>

<?php if (!defined('IN_COMMENTICS')) { die('Access Denied.'); } ?>

<?php
if (cmtx_setting('sort_order_parts') == '1,2') { //display comments first

	if (cmtx_setting('split_screen')) { //side-by-side layout
	
		echo "<table style='width:100%; padding:0px; border:none;'>";
		echo "<tr>";
		echo "<td style='vertical-align:top;'>";
		require_once $cmtx_path . 'includes/template/comments.php'; //load comments
		echo "</td>";
		echo "<td style='width:530px; padding-left:75px; vertical-align:top;'>";
		require_once $cmtx_path . 'includes/template/form.php'; //load form
		echo "</td>";
		echo "</tr>";
		echo "</table>";
		
	} else { //default vertical layout
	
		require_once $cmtx_path . 'includes/template/comments.php'; //load comments
		echo "<div class='cmtx_height_for_divider'></div>"; //height between comments/form
		require_once $cmtx_path . 'includes/template/form.php'; //load form
		
	}
	
} else { //display form first

	if (cmtx_setting('split_screen')) { //side-by-side layout
	
		echo "<table style='width:100%; padding:0px; border:none;'>";
		echo "<tr>";
		echo "<td style='width:450px; vertical-align:top;'>";
		require_once $cmtx_path . 'includes/template/form.php'; //load form
		echo "</td>";
		echo "<td style='width:50px;'></td>";
		echo "<td style='vertical-align:top;'>";
		require_once $cmtx_path . 'includes/template/comments.php'; //load comments
		echo "</td>";
		echo "</tr>";
		echo "</table>";
		
	} else { //default vertical layout
	
		require_once $cmtx_path . 'includes/template/form.php'; //load form
		echo "<div class='cmtx_height_for_divider'></div>"; //height between form/comments
		require_once $cmtx_path . 'includes/template/comments.php'; //load comments
		
	}
	
}
?>