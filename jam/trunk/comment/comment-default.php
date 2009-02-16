<?php

// This file is part of the Carrington JAM Theme for WordPress
// http://carringtontheme.com
//
// Copyright (c) 2008-2009 Crowd Favorite, Ltd. All rights reserved.
// http://crowdfavorite.com
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
// **********************************************************************

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

global $comment;

if ($comment->comment_approved == '0') {
	_e('Your comment is awaiting moderation.', 'carrington-jam');
}

if (function_exists('get_avatar')) { 
	echo get_avatar($comment, 54);
}

get_comment_author_link();

comment_text();

comment_date();

edit_comment_link(__('Edit This', 'carrington-jam'), '', '');

?>