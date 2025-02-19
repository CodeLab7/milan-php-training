<!-- example get_file_contents function -->
<!-- output: Abc123 -->

<!DOCTYPE html>

<body>
<?php
$url = "http://localhost/milan-php-training/File/Files/script.php";
$homepage = file_get_contents($url);
if ($homepage === false){
    echo "error fatching in url";
}
echo $homepage;
?>
</body>
</html>

<h2>example 2</h2>
<!-- json file to print -->
<!-- output: [ { "Name": "Milan", "Age": "21", "Gender": "Male" },
                { "Name": "Mihir", "Age": "22", "Gender": "Male" },
                { "Name": "kalpesh", "Age": "21", "Gender": "Male" } ]-->
<?php
$filename = 'data.json';
$content = file_get_contents($filename);

if ($content === false) {
    echo "Error reading the file.";
} else {
    echo $content;
}
?>
