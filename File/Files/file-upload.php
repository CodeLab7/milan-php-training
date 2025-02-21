<?php phpinfo() ?>

<!DOCTYPE html>
<html>
<body>
<form action="file-upload.php" method="POST" enctype="multipart/form-data">
    <label for="fileupload">Choose a file to upload:</label>
    <input type="file" id="fileupload" name="file" accept="image/*" required>
    <input type="submit" value="Upload">
</form>
</body>
</html>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $uploadDirectory = 'D:\code\milan-php-training\File\\';
    $uploadPath = $uploadDirectory . basename($file['name']);
    $uploadSuccess = move_uploaded_file($file['tmp_name'], $uploadPath);

    if ($uploadSuccess) {
        echo "File uploaded successfully";
    } else {
        echo "Error uploading file";
    }


}
?>