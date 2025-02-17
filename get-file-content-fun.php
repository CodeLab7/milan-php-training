<?php
$content = file_get_contents('script.php');
if($content === false) {
    echo "error fatching in url";
}else{
    echo $content;
}
?>

<!-- example 2 -->

<!DOCTYPE html>
<html lang="ln">
<head>
    <title>upload file </title>
</head>
<body>
    <form action="script.php" method="post" enctype="multipart/form-data">
        <label for="filetoupload">silect file to upload:</label>
        <input type="file" name="filetoupload" id="filetoupload" required>
        <input type="submit" value=" upload file" name="submit">
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'post'&& isset($_FILES['filetoupload'])){
     // Check if the file was uploaded without errors
    if ($_FILES['filetoupload']['error'] === UPLOAD_ERR_OK){
         // Get the temporary file path
        $tmpName = $_FILES['filetoupload']['tmp_name'];
        // Read the file contents

        $filecontents = file_get_contents($tmpName);

        if ($filecontents === false){
            echo "error reading the file";
        }else{
            echo "file contents\2";
        }
    }else{
        echo "file uploading error";
    }
}else{
    echo "file not uploaded";
}

?>