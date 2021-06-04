<?php
/*
Copyright © 2009-2013 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/
*/

if (!defined('IN_COMMENTICS')) { die('Access Denied.'); }

$cmtx_ratings = '<select name="cmtx_rating" title="' . cmtx_define(CMTX_TITLE_RATING) . '">
<option value="">' . cmtx_define(CMTX_TOP_RATING) . '</option>
<option value="1">1 - ' . cmtx_define(CMTX_RATING_ONE) . '</option>
<option value="2">2 - ' . cmtx_define(CMTX_RATING_TWO) . '</option>
<option value="3">3 - ' . cmtx_define(CMTX_RATING_THREE) . '</option>
<option value="4">4 - ' . cmtx_define(CMTX_RATING_FOUR) . '</option>
<option value="5">5 - ' . cmtx_define(CMTX_RATING_FIVE) . '</option>
</select>';

$cmtx_rated = '<select name="cmtx_rating" disabled="disabled" title="' . cmtx_define(CMTX_HAS_RATED) . '">
<option value="">' . cmtx_define(CMTX_HAS_RATED) . '</option>
</select>';

?>