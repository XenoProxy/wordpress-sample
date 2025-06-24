<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h2><?php the_title(); ?></h2>
    <p class="post-meta">
        Опубликовано <?php the_date(); ?> в <?php the_time(); ?> автором <?php the_author_posts_link(); ?>
        <?php if ( has_category() ) { ?>
            в <?php the_category(', '); ?>
        <?php } ?>
        <?php the_tags('<br>Теги: ', ', ', ''); ?>
    </p>
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-thumbnail">
            <?php the_post_thumbnail( 'large' ); ?>
        </div>
    <?php endif; ?>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <?php
    // Показать ссылки навигации постов
    the_post_navigation();

    // Показать комментарии
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
    ?>
</article>