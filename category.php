<?php
get_header();

?>


<div class="page">
	<section>
		
	<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post(); ?>

			<article <?php post_class(); ?>>
				<div class="post-body">
					<?php the_title('<h3>', '</h3>'); ?>
					<?php the_content(); ?>
					<a href="<?php the_permalink(); ?>">Read the suite</a>
				</div>
			</article>

		<?php	endwhile;
		endif;
?>

	</section>


	
</div>







<?php
get_footer();

?>