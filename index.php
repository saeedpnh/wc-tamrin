<?php get_header(); ?>
<div class="content-area">
    <main>
        <div class="container">
            <div class="row">
            <?php
            if(have_posts()):
                while (have_posts()): the_post();
            ?>
                <div <?php post_class(); ?>>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="post-thumbnail">
                        <?php
                        if(has_post_thumbnail()):
                            the_post_thumbnail( 'fancy-lab-blog', array('class' => 'img-fluid') );
                        endif;    
                        ?>
                    </div>
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
            <?php endwhile; ?>
            <?php else: ?>
                <p>nothing to display</p>
            <?php endif; ?>    
            </div>
        </div>
    </main>
</div>
<?php get_footer(); ?>