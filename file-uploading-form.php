<!DOCTYPE html>
<html>
<body>
<form action="./file-uploading-form.php" method="post" enctype="multipart/form-data">
    <label for="fileupload"> chose a file to upload:</label>
    <input type="file" id="fileupload" name="file" accept="image/*"  required>
    <input type="submit" value="upload">
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'post' && isset($_FILES['file'])){
    $file = $_FILES['file'];
    $uploadDirectory = 'D:\code\milan-php-training';
    $uploadPath = $uploadDirectory . basename($file['name']);
    $uploadSuccess = move_uploaded_file($file['tmp_name'], $uploadPath);

    if($uploadSuccess){
        echo "fill upload successfully";
    }else{
        echo "error uploading file";
    }
}
?>