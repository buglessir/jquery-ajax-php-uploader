<?php

if($_FILES['image'])
{

    $file_name = $_FILES['image']['name'];
    $file_source_path = $_FILES['image']['tmp_name'];
    $file_upload_path = 'files/'.$file_name;
    
    $upload = move_uploaded_file($file_source_path, $file_upload_path);

    echo $upload;

}

?>
