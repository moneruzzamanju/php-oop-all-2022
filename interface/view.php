<?php
require_once 'Car.php';
require_once 'Bus.php';

$car = new Car();
echo $car->details(4);

echo "<br>";

$bus = new Bus();
echo $bus->details(6);
