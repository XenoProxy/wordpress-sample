<section class="no-results not-found">
  <header class="page-header">
      <h1 class="page-title"><?php esc_html_e( 'Ничего не найдено', 'my-custom-theme' ); ?></h1>
  </header>
  <div class="page-content">
      <?php
      if ( is_home() && current_user_can( 'publish_posts' ) ) :
          printf(
              '<p>' . wp_kses(
                  __( 'Готовы начать писать? <a href="%1$s">Начните здесь</a>.', 'my-custom-theme' ),
                  array(
                      'a' => array(
                          'href' => array(),
                      ),
                  )
              ) . '</p>',
              esc_url( admin_url( 'post-new.php' ) )
          );
      elseif ( is_search() ) :
          ?>
          <p><?php esc_html_e( 'К сожалению, ничего не найдено по вашему запросу. Попробуйте еще раз с другими ключевыми словами.', 'my-custom-theme' ); ?></p>
          <?php
          get_search_form();
      else :
          ?>
          <p><?php esc_html_e( 'Похоже, мы не можем найти то, что вы ищете. Возможно, поиск поможет.', 'my-custom-theme' ); ?></p>
          <?php
          get_search_form();
      endif;
      ?>
  </div>
</section>