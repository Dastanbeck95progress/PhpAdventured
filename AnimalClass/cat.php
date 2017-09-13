<?php
class Cat extends Animal{
	protected $type;

	public function call($voi){
		return $voi == 'kis' ? $this->voice : 'I don\'t understand you what about!';
	}

	public function setType($type){
		$this->type = $type;
	}

	public function getType(){
		return $this->type;
	}

	public function whats_is_the_animal(){
		print "Это кошка, кличка $this->name, относится к типу ".$this->getType();
	}
}