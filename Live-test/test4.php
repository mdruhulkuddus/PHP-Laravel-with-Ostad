<?php
class Car {
    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function get_make() {
        return $this->make;
    }

    public function get_model() {
        return $this->model;
    }

    public function get_year() {
        return $this->year;
    }

    public function set_make($make) {
        $this->make = $make;
    }

    public function set_model($model) {
        $this->model = $model;
    }

    public function set_year($year) {
        $this->year = $year;
    }

    public function display_info() {
        echo "Car make: {$this->make}\n";
        echo "Car model: {$this->model}\n";
        echo "Car year: {$this->year}\n";
    }
}

// Create a Car object with make, model, and year of a 2015 Toyota Corolla
$car = new Car("Toyota", "Corolla", 2015);

// Display the car's information
$car->display_info();

// Update the car's make and model to a 2015 Honda Civic
$car->set_make("Honda");
$car->set_model("Civic");

// Display the updated car information
$car->display_info();
