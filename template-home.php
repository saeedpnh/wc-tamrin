<?php
/*
Template Name: Home Page
*/
get_header();
?>
<div class="content-area">
    <main>
        <section class="slider">
            <p>salam</p>
            <div class="flexslider">
                <ul class="slides">
                    <li><img src=<?php echo get_template_directory_uri() . "/img/1.jpg" ?> alt="slide 1"></li>
                    <li><img src=<?php echo get_template_directory_uri() . "/img/2.jpg" ?> alt="slide 2"></li>
                    <li><img src=<?php echo get_template_directory_uri() . "/img/3.jpg" ?> alt="slide 3"></li>
                    <li><img src=<?php echo get_template_directory_uri() . "/img/4.jpg" ?> alt="slide 4"></li>
                </ul>
            </div>
        </section>
        <section class="popular-product">
            <div class="container">
                <div class="row">
                    <h2>Popular Product</h2>
                    <?php echo do_shortcode( '[products limit="4" columns="4" orderby="popularity"]' ); ?>
                </div>
            </div>
        </section>
        <section class="new-arrivals">
        <div class="container">
                <div class="row">
                    <h2>New Arrivals</h2>
                    <?php echo do_shortcode( '[products limit="4" columns="4" orderby="title"]' ); ?>
                </div>
            </div>            
        </section>
        <section class="deal-of-the-week">Deal Of the Week</section>
        <section class="lab-blog">
            <div class="container">
                <div class="row">
                    <h4>Template Home Page blog</h4>
                    <?php $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 2   
                    ); ?>
                    <?php $blog_posts = new WP_Query($args); ?>
                    <?php if($blog_posts->have_posts()): ?>
                        <?php while($blog_posts->have_posts()): $blog_posts->the_post(); ?>
                        <?php 
                        if(has_post_thumbnail()):
                            the_post_thumbnail( 'fancy-lab-blog', array('class' => 'img-fluid' ));
                        endif;    
                        ?>
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                        <?php endwhile; ?>
                     <?php wp_reset_postdata(); ?>   
                    <?php else: ?>
                        <p>there is no post</p>    
                    <?php endif; ?>
                </div>    
            </div>
        </section>
    </main>
</div>
<?php get_footer(); ?>