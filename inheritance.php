<!-- inheritance example
    output: Am i a frute or berry? The frute is Strawberry and the color is Red. -->

<!DOCTYPE html>
<html>
<body>

<?php
class Frute{
    public $name;
    public $color;
    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    public function intro(){
        echo "The frute is {$this->name} and the color is {$this->color}.";
    }
}
// Strawberry is inherited from Frute
class Strawberry extends Frute{
    public function message() {
        echo "Am i a frute or berry? ";
    }
}
$strawberry = new Strawberry("Strawberry" , "Red") ;
$strawberry->message();
$strawberry->intro() ;
echo "<br>"
?>
</body>
</html>

<!-- overriding inheritance  in example-->
<!-- output: The company name is Hyundai and name is Verna in color Black.-->

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