<!DOCTYPE html>
<html lang="en">
<body>

<?php

class Car {

	public $make;
	public $name;

	public function __construct($make, $name) {
		$this->make = $make;
		$this->name = $name;
	}

	public function company() {
		echo "The company name is {$this->make} and  name is {$this->name}.";
	}

}

class Verna extends Car {

	public $color;

	public function __construct($make, $name, $color) {
		parent::__construct($make, $name);
		$this->color = $color;
	}

	public function intro() {
		echo $this->company() . " in color  {$this->color}.";
	}

}

$verna = new Verna("Hyundai", "Verna", "Black");

$verna->intro();

?>
</body>
</html>
