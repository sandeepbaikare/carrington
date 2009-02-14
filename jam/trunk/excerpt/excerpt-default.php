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

?>
<div class="hentry excerpt <?php sandbox_post_class() ?>">

	<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
	
<?php

the_excerpt();

the_time('F j, Y');

the_category(', ');

comments_popup_link(__('No comments', 'carrington-blog'), __('1 comment', 'carrington-blog'), __('% comments', 'carrington-blog'));

?>
</div><!-- .excerpt -->