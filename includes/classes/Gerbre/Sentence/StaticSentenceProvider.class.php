<?php
namespace Gerbre\Sentence;

class StaticSentenceProvider extends AbstractSentenceProvider{
	protected function getResource(){
		return 'static.txt';
	}
}