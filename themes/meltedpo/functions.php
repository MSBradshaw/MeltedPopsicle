<?php

function melted_header($image_name="popsicle_title_blue.svg"){
	$home_url = home_url();
	if(strpos($_SERVER[HTTP_HOST], 'localhost') !== false ){
		$home_url = 'http://localhost/melted';
	}
	?>
	<!DOCTYPE html>
		<html>
		<head>
			<meta charset="UTF-8">
			<title>MeltedPopsicle</title>
			<link rel="stylesheet" href="<?php echo $home_url . "/wp-content/themes/meltedpo/css/general.css" ?>"><?php
			if ( true === is_page( array( 'Collage' ) ) ) {
				?><link rel="stylesheet" href="<?php echo $home_url . "/wp-content/themes/meltedpo/css/collage.css" ?>"><?php

			}else if( true === is_page( array( 'All Posts' ) ) ){
				?><link rel="stylesheet" href="<?php echo $home_url . "/wp-content/themes/meltedpo/css/all_posts.css" ?>"><?php
			}else if( true === is_page( array( 'Home' ) ) ){
				?><link rel="stylesheet" href="<?php echo $home_url . "/wp-content/themes/meltedpo/css/home.css" ?>"><?php
			}
			?>
			<link rel="shortcut icon" href="wp-content/images/melted/favicon.ico" type="image/x-icon">
		</head>
		<body>
		<div class="content">
			<div class="header_wrap">
                <?php
                if(true == is_page( array( 'Home' ) )){
                    ?>
                    <section class="header">
                        <div class="hero_img_wrap">
                            <img src="<?php echo $image_name ?>"/>
                        </div>
                    </section>
                    <?php
                }else{
                    ?>
                    <div class="title_wrap">
                        <img src="<?php echo $home_url . "/wp-content/images/meltednew/" . $image_name ?>"/>
                    </div>
                    <h1 class="page_title"><?php echo get_the_title() ?></h1>
                    <?php
                }
                ?>

			</div>
			<div class="nav">
				<a href="<?php echo $home_url ?>" class="nav_item">Home</a>
				<a href="<?php echo $home_url . "/all-posts" ?>" class="nav_item">All Posts</a>
				<a href="<?php echo $home_url . "/collage" ?>" class="nav_item">Collage</a>
			</div>
	<?php
}

function melted_footer(){
	$home_url = home_url();
	if(strpos($_SERVER[HTTP_HOST], 'localhost') !== false ){
		$home_url = 'http://localhost/melted';
	}
	?>
	<section class="bar_at_bottom">
		<div class="footer_img">
			<img src="<?php echo $home_url . "/wp-content/images/melted/popsicle_icon_white.svg"?>"/>
		</div>
	</section>
	</div>
	</body>
	</html>
	<?php
}