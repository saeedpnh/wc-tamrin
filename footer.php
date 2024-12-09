<footer>
<div class="container">
        <div class="row">
        <section class="footer-widgets">
                <?php if(is_active_sidebar( 'fancy-lab-sidebar-footer1' )): ?>
                        <?php dynamic_sidebar( 'fancy-lab-sidebar-footer1' ) ?>
                <?php endif; ?>
                <?php if(is_active_sidebar( 'fancy-lab-sidebar-footer2' )): ?>
                        <?php dynamic_sidebar( 'fancy-lab-sidebar-footer2' ) ?>
                <?php endif; ?>
                <?php if(is_active_sidebar( 'fancy-lab-sidebar-footer3' )): ?>
                        <?php dynamic_sidebar( 'fancy-lab-sidebar-footer31' ) ?>
                <?php endif; ?>
        </section>
        <section class="copyright mb-5">
                <?php echo get_theme_mod( 'set_copyright', 'All rights reserved' ); ?>
        </section>
        </div>
</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>