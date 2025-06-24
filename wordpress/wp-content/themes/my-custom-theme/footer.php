</div><footer>
        <div class="container">
            <?php
            // Пример вывода другого меню в футере
            wp_nav_menu( array(
                'theme_location' => 'footer', // Используем зарегистрированное меню "footer"
                'menu_id'        => 'footer-menu',
                'depth'          => 1, // Ограничиваем до 1 уровня вложенности для футера
            ) );
            ?>
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. Все права защищены.</p>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>