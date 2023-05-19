<?php
namespace Cars;

/**
 * Differences between abstract and intefaces.
 * Interfaces specify the class which all the classes and methods inheriting from it should have.
 * All the methods in an interface are abstract so they cannot be implemented when defining the interface. 
 * Interfaces cannot have properties and all interface methods have to be public.
 */

interface Vehicle {
    public function start();
    public function stop();
}

// Allows classes to inherit multiple behaviours.
trait Engine {
    private $engineOn = false;

    public function startEngine() {
        $this->engineOn = true;
        echo "Engine started\n";
    }

    public function stopEngine() {
        $this->engineOn = true;
        echo "Engine started\n";
    }
}

class Car implements Vehicle {
    use Engine;

    public function start() {
        $this->startEngine();
    }

    public function stop() {
        $this->stopEngine();
    }
}

class Truck implements Vehicle {
    use Engine;

    public function start() {
        $this->start();
    }

    public function stop() {
        $this->stop();
    }
}

class Garage {
    private static $vehicles = [];

    public static function addVehicle(Vehicle $vehicle) {
        self::$vehicles[] = $vehicle;
        echo "Vehicle added to garage";
    }
}