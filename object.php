<h1>example 1</h1>
<!-- output :company: Hyundai
             model: i20  --!>

<!DOCTYPE html>
<html>
<body>
<?php
class Car {
    public $make;
    public $model;

    function set_make($make){
        $this ->make = $make;
    }
    function get_make(){
        return $this ->make;
    }
    function set_model($model){
        $this ->model = $model;
    }

    function get_model(){
        return $this ->model;
    }

}
$car = new Car();
$car->set_make('Hyundai');
$car->set_model('i20');
echo "make: ". $car->get_make(). "<br>";
echo "model: ". $car->get_model();

?>
