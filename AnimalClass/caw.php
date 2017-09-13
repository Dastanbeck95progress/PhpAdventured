<?php

/*
	*  Example to use:

	* $caw = new Caw;
	* $caw->setProperties('color','Muuuuu');
	* $caw->setType('животное!');
	* $caw->whats_is_the_animal();
	* $caw->call('mo');
*/

class Caw extends Animal{
	protected $type;

	public function call($voi){
		return ($voi == 'mo' ? $this->voice : 'I don\'t understand you what about!');
	}

	public function setType($type){
		$this->type = $type;
	}

	public function getType(){
		return $this->type;
	}

	public function whats_is_the_animal(){
		print "Это карова, относится к типу ".$this->getType();
	}
}
?>