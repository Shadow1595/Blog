<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/index.css">


<body>
<header class="container">
<center>
	<div class="row">
		<div class="col-sm-3">
		<img src="https://upload.wikimedia.org/wikipedia/commons/f/fd/Am%C3%A9rica_Noticias.png" width="150" class="logo">

		<h1><?php bloginfo('nombre'); ?></h1>

		</div>

		<div class="col-sm-9">
		<ul class="menu">
			<li><a href="#">Salud</a></li>
			<li><a href="#">Deporte</a></li>
			<li><a href="#">Actualidad</a></li>
			<li><a href="#">Entretenimiento</a></li>
			<li><a href="#">Destacado</a></li>		
		</ul>
		</div>
	</div>
		
		
</center>
</header>

<section class="container">
	<center>

		<?php $articulos = new WP_Query([
			'showpost' => 3
			]);

		while ($articulos->have_posts()) {
		$articulos->the_post(); ?>







	
		<h2><?php the_title(); ?></h2>
	<div class="row">
		<div class="col-sm-5">
	<?php the_post_thumbnail("medium"); ?>
		</div>
		<div class="col-sm-7">
			<?php the_excerpt(); ?>
		</div>
	</div>






		<?php } ?>

		

	


	</center>
</section>

<footer class="container">
	<center>
	<ul class="iconos">
		<i class="fa fa-facebook-official" aria-hidden="true"></i>
		<i class="fa fa-twitter" aria-hidden="true"></i>
		<i class="fa fa-instagram" aria-hidden="true"></i>
		<i class="fa fa-youtube-play" aria-hidden="true"></i>
	</ul>

</center>
</footer>

</body>
</html>