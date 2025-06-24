<?php get_header(); ?>

<div class="container">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content', 'single' ); // Специальный шаблон для одной записи
        endwhile;
    else :
        get_template_part( 'template-parts/content', 'none' );
    endif;
    ?>
</div>

<?php get_footer(); ?>