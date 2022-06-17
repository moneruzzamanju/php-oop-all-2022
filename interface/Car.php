<?php
require_once 'Vehicle.php';

class Car implements Vehicle{
   public function details($noOfWheel) 
   {
    return "Car has $noOfWheel wheels";
   }
}