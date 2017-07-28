<?php
/*
Template Name: Home
*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>MeltedPopsicle</title>
	<link rel="stylesheet" href="wp-content/themes/meltedpo/css/home.css">
	<link rel="shortcut icon" href="wp-content\images\melted\favicon.ico" type="image/x-icon"/>
</head>
<body>
	<?php
	$title = '';
	$img_url = '';
	if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		$title_img = get_field('home_title');
		$img_url = get_field('home_image');
		} // end while
	} // end if
	?>
	<div class="title_wrap">
			<img src="wp-content\images\melted\popsicle_title_blue_dark.svg"/>
	</div>
	<div class="content">
		<section class="header">
			<div class="hero_img_wrap">
				<img src="<?php echo $img_url ?>"/>
			</div>
		</section>
		<div class="nav">
			<a href="" class="nav_item">All Posts</a>
			<a href="" class="nav_item">Most Popular</a>
			<a href="" class="nav_item">About Us</a>
		</div>
		<section class="most_recent_post">
			<div class="most_recent_content">
				<h2 class="most_recent_section_title">The Daily Drip</h2>
				<?php
				$content = wp_get_recent_posts();
				if( $content ) {
					?><h3 class="post_title"><?php echo $content[0]['post_title'];?></h3>
					<p class="post_content"><?php echo $content[0]['post_content'];?></p><?php
				}
				?>
			</div>
		</section>
	</div>
</body>
</html>
