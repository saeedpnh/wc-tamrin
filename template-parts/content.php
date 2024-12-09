<div
    <?php post_class(); ?>>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <div class="post-thumbnail">
        <?php
        if(has_post_thumbnail()):
            the_post_thumbnail( 'fancy-lab-blog', array('class' => 'img-fluid') );
        endif;    
        ?>
    </div>
    <div class="meta">
        <p><?php _e('Published by','fancy-lab'); ?>:<?php the_author_posts_link() ?><?php _e('on','fancy-lab'); ?> <?php echo get_the_date(); ?></p>
        <?php if(has_category()): ?>
            <p><?php _e('Categories','fancy-lab'); ?>:<?php the_category( ' ' ); ?></p>
        <?php endif; ?>    
        <?php if(has_tag()): ?>
            <p><?php _e('Tags','fancy-lab'); ?>:<?php the_tags( '', ', ' ) ?></p>
        <?php endif; ?>
    </div>
    <p><?php the_excerpt(  ); ?></p>
</div>