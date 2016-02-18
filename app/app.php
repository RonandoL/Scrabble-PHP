<?php

	require_once __DIR__.'/../vendor/autoload.php';
	require_once __DIR__.'/../src/Scrabble.php';

	$app = new Silex\Application();

	$app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

	$app->get('/', function() use ($app)
	{
		return $app['twig']->render('scrabble.hmtl.twig');
		
	});

	// User input form
	$app->get('/results', function() use ($app)
	{
		$scrabble = new Scrabble($_GET['word']);
		return $app['twig']->render('scrabble.hmtl.twig', array('scrabble' => $scrabble);

	});


	return $app;

?>
