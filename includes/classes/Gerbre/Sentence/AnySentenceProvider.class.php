<?php
namespace Gerbre\Sentence;

class AnySentenceProvider extends AbstractSentenceProvider{
	protected function getResource(){
		return '';
	}

	public function giveRandomSentence(){
		$resources = array('DynamicSentenceProvider', 'StaticSentenceProvider');
		$resource = "\\Gerbre\\Sentence\\".$resources[array_rand($resources)];

		$sentenceProvider = new $resource();
		return $sentenceProvider->giveRandomSentence();
	}
}