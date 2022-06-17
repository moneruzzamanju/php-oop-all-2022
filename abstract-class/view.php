<?php
require_once 'Car.php';
require_once 'Bus.php';

$car = new Car(4);
$car->details();

echo "<br>";
$bus = new Bus(6);
$bus->details();

