<?php get_header(); ?>		
		



<section class="container">
	

		<?php $articulos = new WP_Query([
			'showpost' => 3,
			"post_type" => "empleos "
			]);

		while ($articulos->have_posts()) {
		$articulos->the_post(); ?>







	
		
	<div class="row caja">
		<div class="col-sm-4">
	<?php the_post_thumbnail("medium"); ?>
		</div>
		<div class="col-sm-8">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p>Publciado por <?php the_author(); ?> el <?php the_time('d/m/Y'); ?></p>
			<?php the_excerpt(); ?>
		</div>
	</div>






		<?php } ?>

		

	



</section>


<?php get_footer(); ?>

