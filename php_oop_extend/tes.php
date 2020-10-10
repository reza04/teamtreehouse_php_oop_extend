<?php

/**
 *  Exercise extends
 * 
 * 1. create kelas Cycle
 * 2. class Cycle have properties,color and speed
 * 3. class Cycle have method canRide
 * 4. create another class ElectricCycle extend from Cycle 
 * 5. ElectricCycle have a new method resourcePower
 * 6. Good Luck!
 */

class Cycle{

    // Properties
    private $color;
    private $speed;
    // protected
    // public

    // Method
    public function __construct($color, $speed) {
        $this->color = $color;
        $this->speed = $speed;
    }

    public function canRide(){
        echo "This can ride,this cycle have color {$this->color} and have speed {$this->speed} \n";
    }
};

class ElectricCycle extends Cycle {
    public function resourcePower() {
      echo "This cycle have batteries for power";
    }
}

$electric_cycle = new ElectricCycle("Red","2km/hour");
$electric_cycle->canRide();
$electric_cycle->resourcePower();