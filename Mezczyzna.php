<?php 


class Mezczyzna implements Observator, Observable{

	private $observators;
	private $name;

	public function __construct($name){

		$this->name=$name;
		$this->observators = new Listunia();

	}
	public function changeBlouseToShirt(){
		echo $this->name. " zmienia bluzke na koszule.<br>";
		$this->notifyObservators();
	}

	public function update(){
		echo $this->name." zauwazyl ze Kobieta zmienila spodnie na spodniczke.<br>";
	}
	public function addObservator(Observator $object){
		$this->observators->add($object);
	}
    public function removeObservator(Observator $object){

    	$this->observators->remove($object);

    }
    public function notifyObservators(){
    	foreach ($this->observators->buffer as $key => $value) {
    		$value->update();
    	}
    }
}