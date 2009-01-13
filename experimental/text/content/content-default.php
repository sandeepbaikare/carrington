<?php

// This file is part of the Carrington Blog Theme for WordPress
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
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

global $previousday, $authordata;
$previousday = -1;

?>
<div id="post-content-<?php the_ID() ?>" class="hentry full <?php sandbox_post_class() ?>">
	<h1 class="entry-title full-title"><a href="<?php the_permalink() ?>" title="Permanent link to <?php the_title_attribute() ?>" rel="bookmark" rev="post-<?php the_ID(); ?>"><?php the_title() ?></a></h1>
	<div class="by-line">
		<address class="author vcard full-author">
			<?php printf(__('<span class="by">By</span> %s', 'carrington-blog'), '<a class="url fn" href="'.get_author_link(false, get_the_author_ID(), $authordata->user_nicename).'" title="View all posts by ' . attribute_escape($authordata->display_name) . '">'.get_the_author().'</a>') ?>
		</address>
		&mdash;
		<span class="date full-date"><?php the_date(); ?></span>
	</div><!--/by-line-->
	<div class="entry-content full-content">
		<?php the_content('<span class="more-link">'.__('Continued...', 'carrington-blog').'</span>'); link_pages('<p class="pages-link">'.__('Pages: ', 'carrington-blog'), "</p>\n", 'number'); ?>
		<div class="clear"></div>
	</div><!--/entry-content-->
	<div class="clear"></div>
	<p class="comments-link"><?php comments_popup_link(__('No Comments', 'carrington-blog'), __('1 Comment', 'carrington-blog'), __('% Comments', 'carrington-blog')); ?></p>
	<div id="post-comments-<?php the_ID(); ?>-target"></div>
	<?php edit_post_link(__('Edit This', 'carrington-blog'), '<div class="entry-editlink">', '</div>'); ?>
	<p class="filed categories"><?php printf(__('Categories: %s.', 'carrington-blog'), get_the_category_list(', ')) ?></p>
	<?php the_tags(__('<p class="filed tags">Tags: ', 'carrington-blog'), ', ', '</p>'); ?>
	<!--/filed-->
</div><!-- .post -->