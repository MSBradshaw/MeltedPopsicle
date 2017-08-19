<?php
/*
Template Name: All Posts
*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>MeltedPopsicle</title>
	<link rel="stylesheet" href="../wp-content/themes/meltedpo/css/all_posts.css">
	<link rel="shortcut icon" href="wp-content/images/melted/favicon.ico" type="image/x-icon"/>
</head>
<body>
	<div class="content">
		<div class="header_wrap">
			<div class="title_wrap">
					<img src="http://localhost/melted/wp-content/images/meltednew/popsicle_title_dark_green.svg"/>
			</div>
			<h1 class="page_title">All Posts</h1>
		</div>
		<div class="nav">
			<a href="../" class="nav_item">Home</a>
			<a href="" class="nav_item">Most Popular</a>
			<a href="" class="nav_item">About Us</a>
		</div>
		<div class="post_list">
		<?php
		$args = array( 'numberposts' => -1 );
		$lastposts = get_posts( $args );
		foreach($lastposts as $post) : setup_postdata($post); ?>
			<h2><a class="post_link"href="<?php the_permalink(); ?>"><?php the_title(); echo ' : '; the_date(); ?></a></h2>
		<?php endforeach; ?>
		</div>
        <section class="bar_at_bottom">
            <div class="footer_img">
                <img src="..\wp-content\images\melted\popsicle_icon_white.svg"/>
            </div>
        </section>
	</div>
</body>
</html>
