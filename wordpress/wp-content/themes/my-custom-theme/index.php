<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            <p><?php bloginfo( 'description' ); ?></p>
        </div>
    </header>

    <div class="container">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="post-meta">
                        Опубликовано <?php the_date(); ?> в <?php the_time(); ?> автором <?php the_author_posts_link(); ?>
                        <?php if ( has_category() ) { ?>
                            в <?php the_category(', '); ?>
                        <?php } ?>
                        <?php the_tags('<br>Теги: ', ', ', ''); ?>
                    </p>
                    <div class="entry-content">
                        <?php the_content( 'Читать далее &raquo;' ); ?>
                    </div>
                </article>
                <?php
            endwhile;
        else :
            ?>
            <p>Контент не найден.</p>
            <?php
        endif;
        ?>
    </div>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. Все права защищены.</p>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>