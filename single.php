<?php get_header(); ?>


<section>
	<section>
	<center>
		<h1><?php the_title(); ?></h1>

		<h4>Resumen: <?php the_field("resumen"); ?></h4>
	<?php the_post_thumbnail("large"); ?>
	
		<?php the_content(); ?>

		<h4>Fuente: <?php the_field("fuente"); ?></h4>


	
	<ul>
		<li><a href="#">Situacion Actual</a></li>
		<li><a href="#">Putin</a></li>
		<li><a href="#">Estado</a></li>
		<li><a href="#">Ucrania</a></li>
	</ul>

</center>
</section>

<?php get_footer(); ?>