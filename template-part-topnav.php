
<?php if ( has_nav_menu( 'main_menu' ) ) : ?>

    <div class="row-fluid dmbs-top-menu">
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-chevron-down"></span>
                </a>

                <div class="nav-collapse collapse">
                    <?php
                    wp_nav_menu( array(
                            'theme_location' => 'main_menu',
                            'depth'      => 10,
                            'container'  => false,
                            'menu_class' => 'nav',
                            'fallback_cb' => 'wp_page_menu',
                            'walker' => new wp_bootstrap_navwalker())
                    );
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>