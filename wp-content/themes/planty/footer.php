</main>

<footer class="foot">
    <?php
    wp_nav_menu([
        'theme_location' => 'footer',
        'container' => 'false',
        //ajout de la class "ul"
        'menu_class' => 'menu-footer'
    ]);
    ?>
</footer>

<?php wp_footer(); ?>

</div>


</body>

</html>