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
<!-- outout: Array (
                    [0] => Array ( [Name] => Milan [Mobile Number] => 6353479999 [City] => Gondal )
                    [1] => Array ( [Name] => Mihir [Mobile Number] => 6359478865 [City] => Rajkot )
                    [2] => Array ( [Name] => Ronak [Mobile Number] => 9909225578 [City] => Ahmedabad )
                    [3] => Array ( [Name] => Hemal [Mobile Number] => 1234568902 [City] => Amreli )
                    )