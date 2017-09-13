<?php

/*
	*  Example to use:

	* $dog = new Dog;
	* $dog->setProperties('black','guf');
	* $dog->setName('spot');
	* $dog->setType('питомец!');
	* $dog->whats_is_the_animal();
	* $dog->call('bo');
*/

class Dog extends Animal{
	protected $type;

	public function call($voi){
		return $voi == 'boo' ? $this->voice : 'I don\'t understand you what about!';
	}

	public function setType($type){
		$this->type = $type;
	}

	public function getType(){
		return $this->type;
	}

	public function whats_is_the_animal(){
		print "Это собака, кличка $this->name, относится к типу ".$this->getType();
	}
}
?>