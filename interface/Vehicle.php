<?php

/**
     * Interfaces cannot have properties, while abstract classes can
     * All interface methods must be public, while abstract class methods is public or protected
     * All methods in an interface are abstract
     */
interface Vehicle{
    
    public function details($noOfWheel);
}
