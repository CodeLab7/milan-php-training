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