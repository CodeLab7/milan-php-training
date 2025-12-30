<h1>calling function</h1>
<!-- output: Hy!
            Hello world! -->
<?php
//defining a function
function myMessage(){
    echo (" Hy! <br>");
    echo "Hello world!";
}

//calling a function
myMessage();
?>

<h2> Anonymous function</h2>
<!-- output: Hello , Milan Patel -->
<?php
$greet = function($name){
    echo "Hello , $name";
};

$greet("Milan Patel");
?>

<h3>Static function</h3>
<!-- output: How are you! -->
<?php
class Myclass{
    public static function Hello(){
        echo "How are you!";
    }

    function name(){
        echo "My name is Milan Patel";
    }
}
Myclass::Hello();
echo "<br>";
Myclass::name(); //only static method can be called using class name

?>
