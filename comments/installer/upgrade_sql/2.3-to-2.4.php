<?php
/*
Copyright © 2009-2013 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/
*/

if (!defined('IN_COMMENTICS')) { die('Access Denied.'); }
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('comments', 'gravatar_custom', 'http://');");
$from_name = mysql_query("SELECT * FROM `" . $cmtx_mysql_table_prefix . "settings` WHERE `title` = 'admin_new_ban_from_name'");
$from_name = mysql_fetch_assoc($from_name);
$from_name = $from_name["value"];
$from_email = mysql_query("SELECT * FROM `" . $cmtx_mysql_table_prefix . "settings` WHERE `title` = 'admin_new_ban_from_email'");
$from_email = mysql_fetch_assoc($from_email);
$from_email = $from_email["value"];
$reply_to = mysql_query("SELECT * FROM `" . $cmtx_mysql_table_prefix . "settings` WHERE `title` = 'admin_new_ban_reply_to'");
$reply_to = mysql_fetch_assoc($reply_to);
$reply_to = $reply_to["value"];
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('email', 'setup_from_name', '$from_name');");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('email', 'setup_from_email', '$from_email');");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('email', 'setup_reply_to', '$reply_to');");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('email', 'admin_email_test_subject', 'Comments: Email Test');");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('email', 'admin_email_test_from_name', '$from_name');");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('email', 'admin_email_test_from_email', '$from_email');");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('email', 'admin_email_test_reply_to', '$reply_to');");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('comments', 'scroll_speed', '50');");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('email', 'signature', 'Add your signature here');");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('notice', 'notice_settings_email_sender', '1');");
mysql_query("ALTER TABLE `" . $cmtx_mysql_table_prefix . "pages` CHANGE `page_id` `identifier` varchar(250) NOT NULL default ''");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('approval', 'trust_users', '0');");
mysql_query("ALTER TABLE `" . $cmtx_mysql_table_prefix . "comments` CHANGE `vote_up` `likes` int(10) unsigned NOT NULL default '0'");
mysql_query("ALTER TABLE `" . $cmtx_mysql_table_prefix . "comments` CHANGE `vote_down` `dislikes` int(10) unsigned NOT NULL default '0'");
mysql_query("DELETE FROM `" . $cmtx_mysql_table_prefix . "settings` WHERE `title` = 'field_size_name'");
mysql_query("DELETE FROM `" . $cmtx_mysql_table_prefix . "settings` WHERE `title` = 'field_size_email'");
mysql_query("DELETE FROM `" . $cmtx_mysql_table_prefix . "settings` WHERE `title` = 'field_size_website'");
mysql_query("DELETE FROM `" . $cmtx_mysql_table_prefix . "settings` WHERE `title` = 'field_size_town'");
mysql_query("DELETE FROM `" . $cmtx_mysql_table_prefix . "settings` WHERE `title` = 'field_size_comment_columns'");
mysql_query("DELETE FROM `" . $cmtx_mysql_table_prefix . "settings` WHERE `title` = 'field_size_comment_rows'");
mysql_query("DELETE FROM `" . $cmtx_mysql_table_prefix . "settings` WHERE `title` = 'field_size_question'");
mysql_query("DELETE FROM `" . $cmtx_mysql_table_prefix . "settings` WHERE `title` = 'notice_layout_form_sizes_maximums'");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('form', 'captcha_type', 'recaptcha');");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('form', 'field_maximum_captcha', '4');");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('form', 'securimage_width', '150');");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('form', 'securimage_height', '50');");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('form', 'securimage_length', '4');");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('form', 'securimage_perturbation', '.75');");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('form', 'securimage_lines', '5');");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('form', 'securimage_noise', '1');");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('form', 'securimage_text_color', '#707070');");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('form', 'securimage_line_color', '#707070');");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('form', 'securimage_back_color', '#F0F0F0');");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('form', 'securimage_noise_color', '#707070');");
mysql_query("ALTER TABLE `" . $cmtx_mysql_table_prefix . "pages` CHANGE `url` `url` varchar(1000) NOT NULL default ''");
mysql_query("ALTER TABLE `" . $cmtx_mysql_table_prefix . "viewers` CHANGE `page_url` `page_url` varchar(1000) NOT NULL default ''");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('form', 'state_name', 'normal');");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('form', 'state_email', 'normal');");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('form', 'state_website', 'normal');");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('form', 'state_town', 'normal');");
mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "settings` (`category`, `title`, `value`) VALUES ('form', 'state_country', 'normal');");

if (mysql_errno()) {
echo mysql_errno() . ': ' . mysql_error() . '<br />';
$error = true;
}

?>