<?php
require '../vendor/autoload.php';
require '../includes/autoloader.inc.php';

error_reporting(E_ALL);

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

		$sentenceProvider = new \Gerbre\Sentence\AnySentenceProvider();
		$sentence = $sentenceProvider->giveRandomSentence();
		echo json_encode(array($sentence));
	});

	/**
	 * Generate an arbitrary number of sentences for the given language code
	 */
	$app->get('/sentence/:language/:sentences', function($language, $number) {
		// Multiple sentences
		$app = \Slim\Slim::getInstance();
		$app->response->headers->set('Content-Type', 'application/json');

		$sentenceProvider = new \Gerbre\Sentence\StaticSentenceProvider();
		$sentences = $sentenceProvider->giveRandomSentences(intval($number));

		// Return generated sentences
		echo json_encode($sentences);
	});

	/**
	 * Redirect to default language
	 */
	$app->get('/word', function() {
		$app = \Slim\Slim::getInstance();
		$app->redirect('word/nl');
	});

	/**
	 * Return a random word.
	 */
	$app->get('/word/:language', function($language) {
		// Multiple sentences
		$app = \Slim\Slim::getInstance();
		$app->response->headers->set('Content-Type', 'application/json');

		// TODO: construct sentence
		$word = "TODO ($language)";
		echo json_encode(array($word));
	});

	/**
	 * Return a random noun.
	 */
	$app->get('/word/:language/noun', function($language) {
		// Multiple sentences
		$app = \Slim\Slim::getInstance();
		$app->response->headers->set('Content-Type', 'application/json');

		$provider = new \Gerbre\Word\NounProvider($language);
		$word = $provider->giveRandomWord();
		echo json_encode(array($word));
	});

	/**
	 * Return a random verb.
	 */
	$app->get('/word/:language/verb', function($language) {
		// Multiple sentences
		$app = \Slim\Slim::getInstance();
		$app->response->headers->set('Content-Type', 'application/json');

		$provider = new \Gerbre\Word\VerbProvider($language);
		$word = $provider->giveRandomWord();
		echo json_encode(array($word));
	});
});

$app->run();