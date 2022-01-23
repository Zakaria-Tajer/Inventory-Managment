<?php

$server = 'localhost';
$usermame = 'root';
$password = '';
$database = 'users';


$conn = mysqli_connect($server, $usermame, $password, $database);

if(!$conn){
    echo 'failed';
}else {
    // echo 'connectd';
}



?>