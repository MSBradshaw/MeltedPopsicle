<?php
/*
Template Name: Collage
*/
melted_header();
?>
<div class="grid"><?php
display_collage_inner(null);
?></div><?php
melted_footer();
function display_collage_inner($query){
	$even_or_odd = ' even ';
	if(have_rows('collage')){
		$count = 0;
		while(have_rows('collage')){
			the_row();
			if ( $count == 0 ) {
				?><div class="flex-row"><?php
			}
			$count++;
			the_switch_board($count);
			if ( $count == 2 ) {
				?></div><?php
				?><div class="flex-row mobile"><?php
				the_switch_board(0);
				?></div><?php
				$count = 0;
			}
		}
	}
}
function the_switch_board($count) {
	$class = '';
	if($count == 2){
		$class = 'desktop';
	}
	if( get_row_layout() == 'one_one_one' ){
		display_block('1 ' . $class,'image_size_1_number_1');
		display_block('1 ' . $class,'image_size_1_number_2');
		display_block('1 ','image_size_1_number_3');
	}elseif ( get_row_layout() == 'two_one' ){
		display_block('2 ' . $class,'image_size_2');
		display_block('1 ' . $class,'image_size_1');
	}elseif ( get_row_layout() == 'one_two' ){
		display_block('1 ' . $class,'image_size_1');
		display_block('2 ' . $class,'image_size_2');
	}elseif ( get_row_layout() == 'three' ) {
		display_block( '3 ' . $class, 'image_size_3' );
	}elseif ( get_row_layout() == 'three_video' ) {
		?>
		<iframe class="<?php echo "box box3 " . $class ?>"
		        src="<?php echo get_sub_field('video_size_3') ?>">
		</iframe>
		<?php
	}elseif ( get_row_layout() == 'one_two_video' ) {
		display_block('1 ' . $class,'image_size_1');
		?>
		<iframe class="<?php echo "box box2 " . $class ?>"
		        src="<?php echo get_sub_field('video_size_2') ?>">
		</iframe>
		<?php
	}elseif ( get_row_layout() == 'two_video_one' ) {
		?>
		<iframe class="<?php echo "box box2 " . $class ?>"
		        src="<?php echo get_sub_field('video_size_2') ?>">
		</iframe>
		<?php
		display_block('1 ' . $class,'image_size_1');
	}
}
function display_block($size,$field_name){?>
	<div class="box box<?php echo $size; ?>">
		<img src="<?php echo get_sub_field($field_name) ?>">
	</div>
	<?php
}