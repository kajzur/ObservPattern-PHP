<?php 
interface Observable
{
   public function addObservator(Observator $object);
   public function removeObservator(Observator $object);
   public function notifyObservators();
}