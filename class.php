<?php
class Frute {
    private $name;
    private $color;

function set_name($name){
    $this->name = $name;
}
function get_name(){
    return $this->name;
}
function set_color($color){
    $this->color = $color;
}
function get_color(){
    return $this->color;
}
}

$Frute = new frute ();
$Frute->set_color('Apple');
$Frute->set_name('Green');
echo $Frute->get_color();
echo $Frute->get_name() . "<br>";
?>

<?php
// parent class
abstract class Car{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }

}


// child class
// outpt:choose german quality ! Audi!

class Audi extends Car {
    public function intro() : String {
        return " choose german quality ! $this->name! ";
    }
}

//child class object
$audi = new audi("Audi");
echo $audi->intro();

?>
