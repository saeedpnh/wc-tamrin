<div
    <?php post_class(); ?>>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <div class="meta">
        <p>Published by: <?php the_author_posts_link() ?>on <?php echo get_the_date(); ?></p>
        <?php if(has_category()): ?>
            <p>Categories: <?php the_category( ' ' ); ?></p>
        <?php endif; ?>    
        <?php if(has_tag()): ?>
            <p>Tags: <?php the_tags( '', ', ' ) ?></p>
        <?php endif; ?>
    </div>
    <p><?php the_excerpt(  ); ?></p>
</div>