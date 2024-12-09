<?php
/*
the template for the sidebar containing the main widget area

@package Fancy Lab
*/
?>

<?php if(is_active_sidebar( 'fancy-lab-sidebar-1' )): ?>
    <div class="col-md-4">
        <?php dynamic_sidebar( 'fancy-lab-sidebar-1' ); ?>
    </div>
<?php endif; ?>