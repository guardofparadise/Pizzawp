<footer>
    <?php
    $args=array(
        'theme-location'=>'footer-menu',
        'container'=>'nav',
        'after'=>'<span class="separator"> | </span>'
);
    wp_nav_menu($args);
    ?>

<div class="location">
<p><?php echo esc_html(get_option('lapizzeria_location')); ?></p>
            <p><?php echo esc_html(get_option('lapizzeria_phone')); ?></p>
       
</div>
<p class="copyright">
    All rights reserved <?php echo date('Y'); ?>
</p>
</footer>

<?php wp_footer();?>
    </body>
</html>