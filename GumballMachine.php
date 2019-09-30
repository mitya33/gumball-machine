<?php

class GumballMachine{

	private $gumballs;


	// Get the amount of gumballs still in the machine
	public function getGumballs(){
		return $this->gumballs;
	}

	// Set the amount of gumballs in the machine
	public function setGumballs($amount){
		$this->gumballs = $amount;
	}

	// The user turns the wheel, machine dispenses gumball!
	//public function turnWheel(){
	//	$this->setGumballs($this->getGumballs() -1);
	//}
	// Marios re-work of the function to make it work if the machine is empty
	public function turnWheel(){
        if ($this->gumballs >= 1){
            $this->setGumballs($this->getGumballs() -1);
        }
        return 0;
    }
}
