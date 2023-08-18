<?php
    $server_name = 'localhost';
    $user_name = 'root';
    $password = '';
    $database = 'notepad';

    $conn = mysqli_connect($server_name,$user_name,$password,$database);
    if($conn){
        echo " ";
    }
    else{
        echo " Not connected";
    }
?>