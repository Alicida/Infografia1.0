<?php

	date_default_timezone_set('America/Mexico_City');
	require './vendor/autoload.php';

	$App = App::Singleton();

	$App->addRoute('GET', '/', 'StaticsController#index', 'home');
	$App->addRoute('GET', '/form/', 'StaticsController#form', 'form');
	$App->addRoute('POST', '/info/', 'StaticsController#info', 'info');
	$App->addRoute('GET', '/ages/', 'StaticsController#jsonAge', 'ages');

	$App->start();
