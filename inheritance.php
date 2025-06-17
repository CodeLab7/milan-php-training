

<!DOCTYPE html>
<html>
<body>

<?php
class Car{
    public $make;
    public $name;
   public function __construct($make, $name) {
       $this->make = $make;
       $this->name = $name;
       }
       public function intro(){
        echo "The company name is {$this->make} and  name is {$this->name}.";
    }
}

class Verna extends Car{
    public $color;
    public function __construct($make, $name, $color ) {
        $this->make = $make;
        $this->name = $name;
        $this->color =$color;
    }
    public function intro(){
        echo "The company name is {$this->make} and name is   {$this->name} in color  {$this->color}.";
    }

}
$verna = new Verna("Hyundai","Verna", "Black");
$verna->intro();

?>
</body>
</html>
