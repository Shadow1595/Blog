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
		$articulos->the_post();

		the_title();
		echo '<hr>';
		} ?>






	<h2>Guerra Rusia Vs Ucrania</h2>
	<div class="row">
		<div class="col-sm-5">
	<img src="https://i.ytimg.com/vi/Y4pwowUVusQ/maxresdefault.jpg"class="ucrania img-fluid">
		</div>
		<div class="col-sm-7">
		<p>Ucrania ha recibido este jueves nuevos compromisos en su resistencia contra la guerra de Rusia. Joe Biden ha prometido 800 millones de dólares adicionales en ayuda militar y Pedro Sánchez, que ha visitado Kiev, ha anunciado el mayor envío hasta ahora de armamento español y la llegada de agentes para investigar los crímenes de guerra. En paralelo, Kiev trabaja en un plan para que fondos congelados a Moscú, como parte de las sanciones, sirvan para pagar la reconstrucción tras la invasión, según avanza Reuters.

		Sobre el terreno, la situación de Mariupol es objeto de versiones diferentes. Aunque Putin ha celebrado la toma de la ciudad, pese a haber renunciado a asaltar la planta donde resisten combatientes ucranianos, fuentes de este país y el presidente estadounidense Biden dudan de que tenga el control total sobre esta localidad de gran importancia estratégica.</p>
		</div>
	</div>

	<h3>Peru vs Paraguay</h3>
	<div class="row">
		
	<div class="col-sm-7">
		<p>
		Perú vs. Paraguay 2-0. La selección peruana logró un importante triunfo y logró la codiciada plaza del repechaje al Mundial Qatar 2022 en el decisivo partido por la última fecha de la clasificatoria sudamericana. El duelo se jugó en el Estadio Nacional de Lima que por primera vez tras dos años de pandemia lució lleno total de hinchas que alentaron a la bicolor de principio a fin. Esta nueva alegría de la bicolor nos manda a Qatar y ahora tendrá que esperar a su próximo rival que saldrá del Australia vs Emiratos Arabes..

		En el primer tiempo, los dirigidos por Ricardo Gareca salieron con todo para asegurar el triunfo que les asegure el boleto al repechaje con el representante de Asia. Así, a los 4 minutos del iniciado el juego, Gianluca Lapadula hizo saltar a todo el Perú de sus asientos y gritar a todo pulmón el 1-0 a favor.

		En los descuentos, una jugada de Gianluca Lapadula pudo ser el tercero para los peruanos, pero el palo le dijo que no, pero en el rebote, Callens no la agarró bien y el disparo salió desviado.

		Un segundo tiempo sin mucho apuro, la selección peruana protegió su resultado y así el estadio Nacional cantó a viva voz ‘cómo no te voy a querer’ tras el pitazo final que desató la euforia de todos los integrantes de la selección peruana
	</p>
	</div>
	<div class="col-sm-5">
			<img src="https://phantom-marca.unidadeditorial.es/addff6e0d53bf87117cd6253e78a4107/resize/1320/f/jpg/assets/multimedia/imagenes/2022/03/28/16484899804985.jpg" class="partido img-fluid">
		</div>
</div>
		
	<h2>Covid-19</h2>	
	<div class="row">
		<div class="col-sm-5">
			<img src="https://www.paho.org/sites/default/files/styles/max_1500x1500/public/2021-05/covid-19-variants.jpg?itok=szJH1mCw" class="img-fluid">
		</div>
	<div class="col-sm-7">
		<p>
		La COVID-19 afecta de distintas maneras en función de cada persona. La mayoría de las personas que se contagian presentan síntomas de intensidad leve o moderada, y se recuperan sin necesidad de hospitalización.
		Los síntomas más habituales son los siguientes:
		Fiebre
 		Tos
		Cansancio
		Pérdida del gusto o del olfato
		Los síntomas menos habituales son los siguientes:
		Dolor de garganta
		Dolor de cabeza
		Molestias y dolores
		Diarrea
		Erupción cutánea o pérdida del color de los dedos de las manos o los pies
		Ojos rojos o irritados
	</div>


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