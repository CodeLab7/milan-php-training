<!-- example json file read in php -->
<?php
//read the json file
$json = file_get_contents('data.json');

//check the json file read
if ($json === false){
    die('error reding the file');
}

//decode the json file
$json_data = json_decode($json,true);

//check the decode file
if ($json_data === null){
    die("error decoding the json file");
}
//display data
print_r($json_data);

?>

