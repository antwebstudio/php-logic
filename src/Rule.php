<?php

namespace Ant\Logic;

class Rule {
	public $rules;
	public $context;
	
	public function make($context) {
		$this->context = $context;
	}
	
	public function apply() {
	}
	
	public function json() {
		
	}
}