<h1>example 1</h1>
<!-- output :company: Hyundai
             model: i20  -->

<!DOCTYPE html>
<html>
<body>
<?php
// Define a class
	class Car {
				public $brand;
				public $model;
				public $color;

				// Constructor method
				public function __construct($brand, $model, $color) {
				$this->brand = $brand;
				$this->model = $model;
				$this->color = $color;
			}

				// Method (behavior)
				public function startEngine() {
				return "The {$this->color} {$this->brand} {$this->model}'s engine is running!";
			}
	}

// Create objects (instances)
$car1 = new Car("Toyota", "Camry", "Blue");
$car2 = new Car("Tesla", "Model 3", "Red");

// Access object properties and methods
echo $car1->startEngine();
echo "<br>";
echo $car2->startEngine();
?>
</body>
</html>
