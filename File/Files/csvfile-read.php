<!-- csv file to open in php file to read  -->

<?php

$filename = 'data.csv';
$data = [];

// open the file
$f = fopen($filename, 'r');

if ($f === false) {
    die('can not open the file ' . $filename);
}

// read a line in csv file at a time
while (($row = fgetcsv($f)) !== false) {
    $data[] = $row;
}

//close the file
fclose($f);
echo "<table border=''>";
foreach ($data as $row) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>
<!-- output: Name	Mobile Number	City
             Milan	6353479999	    Gondal
             Mihir	6359478865	    Rajkot
             Ronak	9909225578	    Ahmedabad
             Hemal	1234568902	    Amreli


<!-- Append New Rows in a CSV File Using fputcsv -->
<!-- output: localhostpath/data.csv file download -->
<?php
//$rows = [
//        ['id','name'],
//        [180021,"hello"]];
//$path = 'data.csv';
//$fp = fopen($path,'w');
//foreach ($rows as $row){
//    fputcsv($fp,$row);
//}
//fclose($fp);
//?>


