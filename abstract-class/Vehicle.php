<?php

abstract class Vehicle{
    public $wheel;

    public function __construct($noOfWheel)
    {
        $this->wheel = $noOfWheel;
    }

    abstract public function details();
}
