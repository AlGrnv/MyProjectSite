<?php
/*
Copyright © 2009-2013 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/
*/

if (!defined('IN_COMMENTICS')) { die('Access Denied.'); }
?>

<div class='page_help_block'>
<a class='page_help_text' href="http://www.commentics.org/wiki/doku.php?id=admin:<?php echo $_GET['page']; ?>" target="_blank"><?php echo CMTX_LINK_HELP; ?></a>
</div>

<h3><?php echo CMTX_TITLE_ACCESS; ?></h3>
<hr class="title"/>

<?php echo CMTX_DESC_REPORT_ACCESS; ?>

<p />

<table id="data" class="display" summary="Access">
    <thead>
    	<tr>
			<th><?php echo CMTX_TABLE_USERNAME; ?></th>
            <th><?php echo CMTX_TABLE_IP_ADDRESS; ?></th>
			<th><?php echo CMTX_TABLE_PAGE; ?></th>
			<th><?php echo CMTX_TABLE_DATE_TIME; ?></th>
        </tr>
    </thead>
    <tbody>

<?php
$access_log = mysql_query("SELECT * FROM `" . $cmtx_mysql_table_prefix . "access` ORDER BY `dated` DESC");
while ($access = mysql_fetch_assoc($access_log)) {
?>
    	<tr>
			<td><?php echo cmtx_sanitize($access["username"], true, false); ?></td>
			<td><?php if (cmtx_setting('is_demo')) { echo "(<i>" . CMTX_TABLE_IP_HIDDEN . "</i>)"; } else { echo $access["ip_address"]; } ?></td>
			<td><?php echo $access["page"]; ?></td>
            <td><span style="display:none;"><?php echo date("YmdHis", strtotime($access["dated"])); ?></span><?php echo date("jS F Y g:ia", strtotime($access["dated"])); ?></td>
        </tr>	
<?php } ?>

    </tbody>
</table>