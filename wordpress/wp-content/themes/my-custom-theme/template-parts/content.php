<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="post-meta">
        Опубликовано <?php the_date(); ?> в <?php the_time(); ?> автором <?php the_author_posts_link(); ?>
        <?php if ( has_category() ) { ?>
            в <?php the_category(', '); ?>
        <?php } ?>
        <?php the_tags('<br>Теги: ', ', ', ''); ?>
    </p>
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
        </div>
    <?php endif; ?>
    <div class="entry-summary">
        <?php the_excerpt(); // Выводит отрывок поста ?>
    </div>
</article>