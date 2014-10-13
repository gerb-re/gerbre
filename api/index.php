<?php
require '../vendor/autoload.php';

$app = new \Slim\Slim(array(
	'debug' => true
));

$app->group('/gerbsverbs', function () use ($app) {
	/**
	 * Redirect to default language
	 */
	$app->get('/sentence', function() {
		$app = \Slim\Slim::getInstance();
		$app->redirect('sentence/nl');
	});

	/**
	 * Generate one single sentence for the given language code.
	 */
	$app->get('/sentence/:language', function($language) {
		// Multiple sentences
		$app = \Slim\Slim::getInstance();
		$app->response->headers->set('Content-Type', 'application/json');

		// TODO: construct sentence
		$sentence = "TODO ($language)";
		echo json_encode(array($sentence));
	});

	/**
	 * Generate an arbitrary number of sentences for the given language code
	 */
	$app->get('/sentence/:language/:sentences', function($language, $number) {
		// Multiple sentences
		$app = \Slim\Slim::getInstance();
		$app->response->headers->set('Content-Type', 'application/json');

		// Construct multiple sentences
		$sentences = [];

		for ($i = 0; $i < intval($number); $i++) {
			// TODO: construct sentence
			$sentences[] = "TODO ($language) $i";
		}

		// Return generated sentences
		echo json_encode($sentences);
	});
});

$app->run();