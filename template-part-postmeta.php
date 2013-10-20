<?php global $dm_settings; ?>
<?php if ($dm_settings['show_postmeta'] != 0) : ?>
    <p class="text-right">
        <i class="icon-user"></i> <?php the_author_posts_link(); ?>
        <i class="icon-time"></i> <?php the_time('F jS, Y'); ?>
        <?php edit_post_link(__('<i class="icon-edit"></i> Edit'), ''); ?>
    </p>
    <p class="text-right"><i class="icon-circle-arrow-right"></i> Posted In: <?php the_category(', '); ?></p>
    <?php if( has_tag() ) : ?>
        <p class="text-right"><i class="icon-tags"></i>
        <?php the_tags(); ?>
        </p>
    <?php endif; ?>
<?php endif; ?>