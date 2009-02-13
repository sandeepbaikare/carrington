<?php

// This file is part of the Carrington Blog Theme for WordPress
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

global $previousday, $authordata;
$previousday = -1;

?>
<div class="hentry full <?php sandbox_post_class() ?>">
	<h1 class="entry-title><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
	<div class="entry-content">
<?php

the_content(); 

link_pages();
?>
	</div><!--/entry-content-->

<?php

the_date();

echo get_the_author();

comments_popup_link(__('No comments', 'carrington-blog'), __('1 comment', 'carrington-blog'), __('% comments', 'carrington-blog'));

edit_post_link(__('Edit This', 'carrington-blog'), '', '');

?>
</div><!-- .post -->