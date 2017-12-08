<?php
/*
Template Name: Home
*/
?>
<?php
$title = '';
$img_url = '';
$side_title = '';
$side_content = '';
if ( have_posts() ) {
while ( have_posts() ) {
    the_post();
    $title_img = get_field('home_title');
    $img_url = get_field('home_image');
    $side_title = get_field('side_bar_title');
    $side_content = get_field('side_bar_content');
    $side_img_url = get_field('side_image');

    } // end while
} // end if
melted_header($img_url);
?>

<section class="most_recent_post">
    <div class="most_recent_content">
        <h2 class="most_recent_section_title">Most Recent</h2>
        <?php
        $content = wp_get_recent_posts();
        if( $content ) {
            ?><h3 class="post_title"><?php echo $content[0]['post_title'];?></h3>
            <p class="post_content"><?php echo $content[0]['post_content'];?></p><?php
        }
        ?>
    </div>
    <section class="side_bar_outter">
        <div class="side_bar_img_wrapper">
            <img src="<?php echo $side_img_url ?>"/>
        </div>
        <h3 class="side_bar_title"><?php echo $side_title ?></h3>
        <p class="side_bar_content"><?php echo $side_content ?></p>
    </section>
</section>
<?php
melted_footer();