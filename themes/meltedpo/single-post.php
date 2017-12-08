<?php
melted_header()
?>
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
<?php
melted_footer();