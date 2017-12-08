<?php
/*
Template Name: All Posts
*/
melted_header('popsicle_title_dark_green.svg');

?>
		<div class="post_list">
		<?php
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => -1
		);
        $thequery = new WP_Query( $args );
        if ( $thequery->have_posts() ) {
            while ( $thequery->have_posts() ) {
                $thequery->the_post();
	            ?>
                <div class="post_wrapper">
                    <a class="post_tag" href="<?php echo get_permalink() ?>">
                        <img src="<?php echo get_field( 'portrait') ?>">
                        <p class="post_name"><?php echo get_the_title() ?></p>
                        <p class="post_date"><?php echo get_the_date() ?></p>
                    </a>
                </div>
	            <?php

            }
        }
melted_footer();