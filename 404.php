<?php get_header(); ?>
<div class="container">
    <div class="row">
        <h1><?php _e( 'page not found', 'fancy-lab' ); ?></h1>
        <?php 
        the_widget( 'WP_Widget_Resent_Posts', array(
            'title'     =>  __( 'Take a look at out lastest posts', 'fancy-lab' );,
            'number'    =>  3
            )
        );
        ?>
    </div>
</div>
<?php get_footer(); ?>