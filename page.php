<?php get_header(); ?>
<div class="content-area">
    <main>
        <div class="container">
            <div class="row">
            <?php
                while (have_posts()): the_post();
            ?>
                <div>
                    <h2><?php the_title(); ?></h2>
                    <h2><?php the_content();  ?></h2>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
    </main>
</div>
<?php get_footer(); ?>