<nav id="menu">
    <header class="major">
        <h2>Menu</h2>
    </header>
    <ul>
        <?php wp_nav_menu(array(
            'theme_location'    => "primary_menu_left",
            'depth'             => "2"
        )); ?>
    </ul>
</nav>