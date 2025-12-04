<?php
class Car {
    public $brand;
    public $model;
    public $color;
    public function __construct($brand, $model, $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }
    public function message() {
        return "My car is a: [BRAND] ". $this->brand ." [MODEL] ". $this->model . " [COLOR] ". $this->color ."";
    }
}

$myCar = new Car("Ford", "Fiesta", "Blue");
var_dump($myCar->message());

?>