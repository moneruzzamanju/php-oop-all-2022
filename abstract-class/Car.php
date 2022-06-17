<?php
require_once 'Vehicle.php';

class Car extends Vehicle{
   public function details() 
   {
    echo "Car has $this->wheel wheels";
   }
}