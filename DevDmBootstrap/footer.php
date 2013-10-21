<?php
    global $dm_settings;
    if ($dm_settings['author_credits'] != 0) : ?>
        <div class="row-fluid">
            <p class="text-center"><a href="<?php global $developer_uri; echo $developer_uri; ?>">DevDmBootstrap created by Danny Machal</a></p>
        </div>
<?php endif; ?>

<?php get_template_part('template-part', 'footernav'); ?>


</div>
<!-- end main container -->

<?php if (!empty($dm_settings['analytics_code'])) { echo stripslashes($dm_settings['analytics_code']) ;} ?>

<?php wp_footer(); ?>

</body>
</html>