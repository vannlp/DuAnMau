<?php
session_start();
$URL = '//localhost:8000';
$URL_IMG = $URL . '/public/images/';


function save_file($fileNames, $target_dir)
{
    $fileUpload = $_FILES[$fileNames];
    $fileName = basename($fileUpload['name']);
    $target_path = $target_dir . $fileName;
    move_uploaded_file($fileUpload['tmp_name'], $target_path);
    return $fileName;
}
