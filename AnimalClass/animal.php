<?php
abstract class Animal{
	protected $name;
	protected $color;
	protected $voice;

	public function setName($name = null){
		$this->name = $name != null ? $name : 'its just animal without name';
	}
	public function setProperties($color,$voice){
		$this->color = $color;
		$this->voice = $voice;
	}

	abstract public function setType($type);

	abstract protected function getType();

	abstract public function call($voi);

	abstract public function whats_is_the_animal();
}
?>
