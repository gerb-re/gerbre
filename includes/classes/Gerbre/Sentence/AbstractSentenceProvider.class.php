<?php
namespace Gerbre\Sentence;

abstract class AbstractSentenceProvider{
	protected abstract function getResource();

	protected function readResource(){
		$sentences = file_get_contents(\Gerbre\Util::getResourcePath() . 'language/nl/sentences/' . $this->getResource());
		$sentences = explode("\n", $sentences);
		return $sentences;
	}

	public function giveRandomSentence(){
		$sentences = $this->readResource();
		return $sentences[array_rand($sentences)];
	}

	public function giveRandomSentences($amount = 1){
		$sentences = array();
		for ($i = 0; $i < intval($amount); $i++) {
			$sentences[] = $this->giveRandomSentence();
		}
		return $sentences;
	}
}