<?php
namespace Gerbre\Word;

class NounProvider extends AbstractWordProvider {
	protected function getResource() {
		return 'nouns.txt';
	}
}