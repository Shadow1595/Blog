<?php

add_action("init", "codigo_inicial");

function codigo_inicial() {

	register_post_type("empleos", [
		"label" => "empleos",
		"public" => true
	]);

	register_nav_menus([
		'principal' => "Zona Principal"


	]);


}	





?>