<?php
$content = file_get_contents('script.php');
if($content === false) {
    echo "error fatching in url";
}else{
    echo $content;
}
?>