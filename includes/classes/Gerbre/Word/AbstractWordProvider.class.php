<?php
namespace Gerbre\Word;

abstract class AbstractWordProvider {
	protected abstract function getResource();
	protected $words;

	/**
	 * Construct a word provider
	 * @param string $language Language code. Not used yet.
	 */
	public function __construct($language) {
		$this->loadResources();
	}

	/**
	 * Load all resources for this WordProvider
	 */
	protected function loadResources() {
		$words = file_get_contents(\Gerbre\Util::getResourcePath() . 'language/nl/words/' . $this->getResource());
		$this->words = explode("\n", $words);
	}

	/**
	 * Return a random word
	 * @return string Random word
	 */
	public function giveRandomWord() {
		return $this->words[mt_rand(0, count($this->words) - 1)];;
	}
}