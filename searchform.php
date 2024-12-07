<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" class="search-field" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit">search</button>
    <?php if(class_exists('WooCommerce')): ?>
        <input type="hidden" value="product" name="post_type" id="post_type">
    <?php endif; ?>
</form>