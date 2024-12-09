<?php get_header(); ?>
<div class="content-area">
    <main>
        <div class="container">
            <div class="row">
            <?php
            the_archive_title( '<h1 class="article-title">', '</h1>' );
            if(have_posts()):
                while (have_posts()): the_post();
            ?>
            <?php get_template_part( 'template-parts/content', 'archive' ); ?>
            <?php endwhile; ?>
            <?php the_posts_pagination( array(
                'prev_text'     =>  'Previous',
                'next_text'     =>  'Next'
            ) ) ?>
            <?php else: ?>
                <p>nothing to display</p>
            <?php endif; ?>    
            </div>
        </div>
    </main>
</div>
<?php get_footer(); ?>