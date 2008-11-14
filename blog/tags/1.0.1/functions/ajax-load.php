<?php

// This file is part of the Carrington Theme for WordPress
// http://carringtontheme.com
//
// Copyright (c) 2008 Crowd Favorite, Ltd. All rights reserved.
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

function cfct_ajax_post_content($post_id) {
	global $posts, $post;
	$posts = get_posts('include='.$post_id);
	$post = $posts[0];
	setup_postdata($post);
	cfct_content();
}

function cfct_ajax_post_comments($post_id) {
	global $post, $wp_query;
	$wp_query->is_single = true;
	$posts = get_posts('include='.$post_id);
	$post = $posts[0];
	setup_postdata($post);
	comments_template();
}

function cfct_ajax_load() {
	if (isset($_GET['cfct_action'])) {
		switch ($_GET['cfct_action']) {
			case 'post_content':
			case 'post_comments':
				if (isset($_GET['id'])) {
					$post_id = intval($_GET['id']);
				}
				if ($post_id) {
					call_user_func('cfct_ajax_'.$_GET['cfct_action'], $post_id);
					die();
				}
		}
	}
}

function cfct_ajax_comment_link() {
	global $post;
	echo ' rev="post-'.$post->ID.'" ';
}
add_filter('comments_popup_link_attributes', 'cfct_ajax_comment_link');

?>