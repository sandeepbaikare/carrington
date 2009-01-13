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

/*
// 	} else if ( is_404() && $template = get_404_template() ) {
// 		include($template);
// 		return;
// 	} else if ( is_search() && $template = get_search_template() ) {
// 		include($template);
// 		return;
	} else if ( is_tax() && $template = get_taxonomy_template()) {
		include($template);
		return;
// 	} else if ( is_home() && $template = get_home_template() ) {
// 		include($template);
// 		return;
	} else if ( is_attachment() && $template = get_attachment_template() ) {
		remove_filter('the_content', 'prepend_attachment');
		include($template);
		return;
// 	} else if ( is_single() && $template = get_single_template() ) {
// 		include($template);
// 		return;
	} else if ( is_page() && $template = get_page_template() ) {
		include($template);
		return;
// 	} else if ( is_category() && $template = get_category_template()) {
// 		include($template);
// 		return;
// 	} else if ( is_tag() && $template = get_tag_template()) {
// 		include($template);
// 		return;
// 	} else if ( is_author() && $template = get_author_template() ) {
// 		include($template);
// 		return;
// 	} else if ( is_date() && $template = get_date_template() ) {
// 		include($template);
// 		return;
// 	} else if ( is_archive() && $template = get_archive_template() ) {
// 		include($template);
// 		return;
// 	} else if ( is_comments_popup() && $template = get_comments_popup_template() ) {
// 		include($template);
// 		return;
// 	} else if ( is_paged() && $template = get_paged_template() ) {
// 		include($template);
// 		return;
	} else if ( file_exists(TEMPLATEPATH . "/index.php") ) {
		include(TEMPLATEPATH . "/index.php");
		return;
	}
*/
function cfct_posts_template($file) {
	$file = cfct_choose_general_template('posts');
	return $file;
}
add_filter('archive_template', 'cfct_posts_template');
add_filter('author_template', 'cfct_posts_template');
add_filter('category_template', 'cfct_posts_template');
add_filter('home_template', 'cfct_posts_template');
add_filter('search_template', 'cfct_posts_template');
add_filter('tag_template', 'cfct_posts_template');
add_filter('taxonomy_template', 'cfct_posts_template');

function cfct_single_template($file) {
	$file = cfct_choose_general_template('single');
	return $file;
}
add_filter('single_template', 'cfct_single_template');


function cfct_page($file = '') {
	if (empty($file)) {
		$file = cfct_default_file('pages');
	}
	cfct_template_file('pages', $file);
}

function cfct_header() {
	$file = cfct_choose_general_template('header');
	cfct_template_file('header', $file);
}

function cfct_footer() {
	$file = cfct_choose_general_template('footer');
	cfct_template_file('footer', $file);
}

function cfct_sidebar() {
	$file = cfct_choose_general_template('sidebar');
	cfct_template_file('sidebar', $file);
}

function cfct_posts() {
	$file = cfct_choose_general_template('posts');
	cfct_template_file('posts', $file);
}

function cfct_single() {
	$file = cfct_choose_general_template('single');
	cfct_template_file('single', $file);
}

function cfct_loop() {
	$file = cfct_choose_general_template('loop');
	cfct_template_file('loop', $file);
}

function cfct_content() {
	$file = cfct_choose_content_template();
	cfct_template_file('content', $file);
}

function cfct_excerpt() {
	$file = cfct_choose_content_template('excerpt');
	cfct_template_file('excerpt', $file);
}

function cfct_comments() {
	$file = cfct_choose_general_template('comments');
	cfct_template_file('comments', $file);
}

function cfct_comment() {
	$file = cfct_choose_comment_template();
	cfct_template_file('comment', $file);
}

function cfct_form($name = '') {
	cfct_template_file('forms', $name);
}

function cfct_misc($name = '') {
	cfct_template_file('misc', $name);
}

function cfct_error($name = '') {
	cfct_template_file('error', $name);
}


?>