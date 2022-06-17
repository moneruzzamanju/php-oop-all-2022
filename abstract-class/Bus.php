<?php
require_once 'Vehicle.php';

class Bus extends Vehicle{
   public function details() 
   {
    echo "Bus has $this->wheel wheels";
   }
}