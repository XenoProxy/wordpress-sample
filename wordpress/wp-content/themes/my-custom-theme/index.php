<?php get_header(); ?>

<div class="container">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            // Можно использовать get_template_part() для реиспользования частей шаблона
            get_template_part( 'template-parts/content', get_post_type() );
        endwhile;
    else :
        get_template_part( 'template-parts/content', 'none' );
    endif;
    ?>
</div>

<?php get_footer(); ?>