<?php get_header(); ?>
<div class="content-area">
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php
                    if(have_posts()):
                        while (have_posts()): the_post();
                    ?>
                    <?php get_template_part( 'template-parts/content' ); ?>
                    <?php endwhile; ?>
                    <?php the_posts_pagination( array(
                        'prev_text'     =>  'Previous',
                        'next_text'     =>  'Next'
                    ) ) ?>
                    <?php else: ?>
                        <p>nothing to display</p>
                    <?php endif; ?>    
                </div>
                   <?php get_sidebar(); ?>
            </div>
        </div>
    </main>
</div>
<?php get_footer(); ?>