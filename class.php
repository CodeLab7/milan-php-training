<h1> example </h1>

<?php
// parent class
abstract class Car{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }

}

// child class
class Audi extends Car {
    public function intro() : String {
        return " choose german quality ! $this->name! ";
    }
}

//child class object
$audi = new audi("Audi");
echo $audi->intro();

?>
