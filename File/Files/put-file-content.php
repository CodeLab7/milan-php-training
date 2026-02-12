<?php
$file = 'D:\code\milan-php-training\put-file-content.php';
$data = 'hello , wrold!';

$result = file_put_contents($file,$data);
if ($result === false){
    echo "error writing to file";
}else{
    echo "data write to the file successfuly";
}
?>

<!--output 1 main file: data write the file successfuly-->
<!--output 2 script new file add : 'hello , world!' -->
