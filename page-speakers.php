<?php
/*
Template Name: Speakers
*/
?>

<?php get_header(); ?>

	<div class="row">
		<div class="twelve columns">
		
		<?php get_template_part('loop', 'page'); ?>
		
		<h2>2013 Speakers</h2>
		
		<?php
			$newspeaker_args = array(			  		
					'post_type' => 'speakers',
					'taxonomy' => 'tedxYear',
					'term' => '2013',
					'orderby' => 'title',
					'order' => 'ASC',
				);
			$newspeaker_query = new WP_Query($newspeaker_args);
		?>
	
		<?php /* Start loop */ ?>
		<?php $i = 0; ?>
		<?php while ($newspeaker_query->have_posts()) : $newspeaker_query->the_post(); ?>
		<?php if ($i%3 == 0 && $i != 0) { echo '</ul>'; } ?>
		<?php if ($i%3 == 0) { echo '<ul class="row clearfix new">'; } ?>
			<li class="four columns speaker">
				<a href="<?php the_permalink(); ?>" class="speakerLink">
					<?php the_post_thumbnail('wide_thumb', array(
						'alt' => ''.get_the_title().'',
						'title' => ''.get_the_title().'' 
					)); ?>
				</a>
				<p><strong><?php the_title(); ?></strong><br/>
				<span><?php echo get_post_meta($post->ID, '_tedx_speaker_jobposition_value', true) ?><br /> <em><?php echo get_post_meta($post->ID, '_tedx_speaker_employer_value', true) ?></em></span></p>
				
				<p><?php new_excerpt(300); ?></p>
				
				<p><a href="<?php the_permalink(); ?>" class="readMore" >Read <?php echo get_post_meta($post->ID, '_tedx_speaker_firstname_value', true) ?>'s Bio</a></p>
				
			</li>
		<?php
			$i++;
			endwhile; // End the loop
			echo '</ul>';
		?>
		
		<div class="clearfix"></div>
		</div>
		
	</div>
	
<?php get_footer(); ?>
