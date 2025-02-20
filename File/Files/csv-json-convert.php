

<!-- csv file to json convert -->

<?php
$fp = fopen('data.csv','r');
$headers = fgetcsv($fp); // column headers

$data = array();
while (($row = fgetcsv($fp))){
    $data[] = array_combine($headers, $row);
}
fclose($fp);
print_r($data);

$json = json_encode($data, JSON_PRETTY_PRINT); //convert to json

$output_filename = 'data.json'; // output json file
file_put_contents($output_filename, $json);
?>

