<?php
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
else :
    _e( 'Sorry, no posts matched!', 'cjszone');
endif;

get_sidebar();
get_footer();
