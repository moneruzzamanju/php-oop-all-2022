<?php

use App\classes\Home;
use App\classes\About;
use App\classes\Contact;

include __DIR__."./vendor/autoload.php";

$about = new About;
echo $about->name;

echo "<br/>";

$home = new Home;
echo $home->name;

echo "<br/>";

$contact = new Contact;
echo $contact->name;

echo "<br/>";

?>