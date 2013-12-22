<?php

class Listunia{

	private $counter;
	public $buffer;
	public function __construct(){
		$this->counter=0;
		$this->buffer = array();
	}
	
	public function add(Observator $object){
		$this->buffer[$this->counter]=$object;
		$this->counter++;
	}

	public function remove(Observator $object){
		foreach ($this->buffer as $key => $value) {
			if($value == $object)
				unset($value);
		}
	}


}