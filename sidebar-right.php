<?php
    global $dm_settings;
    if ($dm_settings['right_sidebar'] != 0) : ?>
    <div class="span<?php echo $dm_settings['right_sidebar_width']; ?> dmbs-right">
        <?php //get the right sidebar
        dynamic_sidebar( 'Right Sidebar' ); ?>
    </div>
<?php endif; ?>