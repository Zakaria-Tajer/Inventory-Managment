<?php

$server = 'localhost';
$usermame = 'root';
$password = '';
$database = 'test';


$conn = mysqli_connect($server, $usermame, $password, $database);

if(!$conn){
    echo 'failed';
}else {
    echo 'database connected';
}



?>