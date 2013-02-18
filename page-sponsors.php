<?php
/*
Template Name: Sponsorship Details
*/
?>

<?php get_header(); ?>
	
	<?php get_template_part('loop', 'page'); ?>

	<h2>Category 1</h2>
	<?php
			$details_args = array(			  		
					'post_type' => 'sponsors',
					'taxonomy' => 'tedxCategory',
					'term' => 'category 1',
					'orderby' => 'title',
					'order' => 'ASC',
					'posts_per_page' => -1,
				);
			$details_query = new WP_Query($details_args);
		?>
	
		<?php /* Start loop */ ?>
		<?php $i = 0; ?>
		<?php while ($details_query->have_posts()) : $details_query->the_post(); ?>
		<?php if ($i%3 == 0 && $i != 0) { echo '</ul>'; } ?>
		<?php if ($i%3 == 0) { echo '<ul class="row clearfix">'; } ?>
			<li class="four columns">
				<a href="<?php echo get_post_meta($post->ID, '_tedx_sponsor_url_value', true) ?>" target="_blank" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('sponsor_logo', array(
						'alt' => ''.get_the_title().'',
						'title' => ''.get_the_title().'' 
					)); ?>
				</a>
			</li>
		<?php
			$i++;
			endwhile; // End the loop
			echo '</ul>';
			?>

		<h2>Category 2</h2>

		<?php
			$details_args = array(			  		
					'post_type' => 'sponsors',
					'taxonomy' => 'tedxCategory',
					'term' => 'category 2',
					'orderby' => 'title',
					'order' => 'ASC',
					'posts_per_page' => -1,
				);
			$details_query = new WP_Query($details_args);
		?>
	
		<?php /* Start loop */ ?>
		<?php $i = 0; ?>
		<?php while ($details_query->have_posts()) : $details_query->the_post(); ?>
		<?php if ($i%3 == 0 && $i != 0) { echo '</ul>'; } ?>
		<?php if ($i%3 == 0) { echo '<ul class="row clearfix">'; } ?>
			<li class="four columns">
				<a href="<?php echo get_post_meta($post->ID, '_tedx_sponsor_url_value', true) ?>" target="_blank" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('sponsor_logo', array(
						'alt' => ''.get_the_title().'',
						'title' => ''.get_the_title().'' 
					)); ?>
				</a>
			</li>
		<?php
			$i++;
			endwhile; // End the loop
			echo '</ul>';
			?>
	
<?php get_footer(); ?>
