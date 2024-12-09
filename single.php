<?php
/*
the template for displaying all single posts
@link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

@package Fancy Lab
*/
get_header();
?>
<div id="primary" class="content-area">
    <div id="main">
        <div class="container">
            <div class="row">
                <?php while(have_posts()): the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header>
                            <h1><?php the_title(); ?></h1>
                            <div class="meta">
                                <p>published by: <?php the_author_posts_link(); ?>on <?php echo get_the_date(); ?></p>
                                <p>Categoris: <?php the_category( ' ' ); ?></p>
                                <?php if(has_tag()): ?>
                                    <p>Tags: <?php the_tags( '',', ' ); ?></p>
                                <?php endif; ?>    
                            </div>
                            <div class="post-thumbnail">
                                <?php
                                if(has_post_thumbnail()):
                                    the_post_thumbnail( 'fancy-lab-blog', array('class' => 'img-fluid') );
                                endif;    
                                ?>
                            </div>
                        </header>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                    <?php
                    if(comments_open() || get_comments_number()):
                        comments_template();
                    endif;    
                    ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>