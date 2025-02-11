

<nav class="main-nav">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'main-menu', // Correspond à 'main-menu' dans functions.php
        'container'      => 'ul', // Affiche une liste <ul>
        'menu_class'     => 'menu', // Ajoute une classe CSS "menu" au <ul>
    ));
    ?>
</nav>
