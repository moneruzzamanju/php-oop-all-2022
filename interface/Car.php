<?php
require_once 'Vehicle.php';

class Car implements Vehicle{
   public function details() 
   {
    return "Car has 6 wheels";
   }
}