<?php
require_once 'Vehicle.php';

class Bus implements Vehicle{
   public function details($noOfWheel) 
   {
    return "Bus has $noOfWheel wheels";
   }
}