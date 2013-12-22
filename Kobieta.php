<?php 
include('observable.php');
include('observator.php');
include ('list.php');

class Kobieta implements Observator, Observable{

	private  $observators;
	private $name;

	public function __construct($name){
		$this->observators = new Listunia();
		$this->name=$name;
	}
	public function changeTrousersToSkirt(){
		echo $this->name. " zmienia spodnie na spodniczke :)<br>";
		$this->notifyObservators();
	}

	public function update(){
		echo $this->name." zauwazyla ze facet, ktorego obserwuje, zmienil bluzke na koszule.<br>";
	}

	public function addObservator(Observator $object){
		$this->observators->add($object);
	}
    public function removeObservator(Observator $object){

    	$this->observators.remove($object);

    }
    public function notifyObservators(){
    	foreach ($this->observators->buffer as $key => $value) {
    		$value->update();
    	}
    }
	
}