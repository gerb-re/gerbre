<?php
namespace Gerbre\Sentence;

class DynamicSentenceProvider extends AbstractSentenceProvider{
	protected function getResource(){
		return 'dynamic.txt';
	}

	public function giveRandomSentence(){
		$sentences = $this->readResource();
		$sentence = $sentences[array_rand($sentences)];
		$wordProvider = new \Gerbre\Word\NounProvider('nl');
		return sprintf($sentence, $wordProvider->giveRandomWord());
	}
}