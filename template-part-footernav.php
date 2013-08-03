<?php if ( has_nav_menu( 'footer_menu' ) ) : ?>
    <div class="footer_menu dmbs-footer-menu">
        <div class="navbar navbar-inverse navbar-fixed-bottom">
            <div class="navbar-inner">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".footer-nav-bar">
                    <span class="icon-chevron-up"></span>
                </a>
                <div class="nav-collapse collapse footer-nav-bar">
                    <?php
                    wp_nav_menu( array(
                            'theme_location' => 'footer_menu',
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