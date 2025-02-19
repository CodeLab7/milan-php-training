<h1>include and include_once</h1>
<!-- output: i have Abc 123
            error
            how are you! -->

<!DOCTYPE html>
<html>
<body>

<?php include('script.php') ;
{

    echo "i have $name $number";
}
include_once  ('no script.php') ;
{

    echo "<br>how are you!";
}
?>
</body>
</html>

<h2>require and require_once</h2>
<!-- output :i have Abc 123
             error
             error!  -->
<?php
require ('script.php');
{
    echo "i have $name $number";
}
require_once ('no script.php');
{
    echo "<br>how are you!";
}

?>

