<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$uploaddir = '../uploads/'.uniqid();
$result = "";
$file = $uploaddir . basename($_FILES[0]['name']); 

if(move_uploaded_file( $_FILES[0]['tmp_name'], $file ))
$result = $file;
else $result = "error";

echo $result;

?>