<?php

	require_once __DIR__.'/../vendor/autoload.php';
	require_once __DIR__.'/../src/Scrabble.php';

// use Symfony\Component\Debug\Debug;
// Debug::enable();


	$app = new Silex\Application();
// $app['debug'] = true;

	$app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

	$app->get('/', function() use ($app)
	{
		return $app['twig']->render('scrabble.hmtl.twig');

	});


	$app->get('/results', function() use ($app)	{
		$scrabble = new Scrabble($_GET['word']);
		return $app['twig']->render('scrabble.hmtl.twig', array('scrabble' => $scrabble));
	});

	return $app;

?>
