<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>MeltedPopsicle</title>
	<link rel="stylesheet" href="../../../../wp-content/themes/meltedpo/css/single-post.css">
	<link rel="shortcut icon" href="../../../wp-content/images/melted/favicon.ico" type="image/x-icon"/>
</head>
<body>
<div class="content">
	<div class="header_wrap">
		<div class="title_wrap">
			<img src="http://localhost/melted/wp-content/images/meltednew/popsicle_title_blue.svg"/>
		</div>
	</div>
	<div class="nav">
		<a href="../../../../" class="nav_item">Home</a>
		<a href="../all-posts/" class="nav_item">All Posts</a>
		<a href="" class="nav_item">Most Popular</a>
		<a href="" class="nav_item">About Us</a>
	</div>
	<div class="the_post">
		<?php
		$content = wp_get_recent_posts();
        if(have_posts()){
            while(have_posts()){
                the_post();
	            ?><h3 class="post_title"><?php the_title();?></h3>
                <p class="post_content"><?php the_content();?></p><?php
            }
        }

		?>
	</div>
	<section class="bar_at_bottom">
		<div class="footer_img">
			<img src="../../../..\wp-content\images\melted\popsicle_icon_white.svg"/>
		</div>
	</section>
</div>
</body>
</html>
