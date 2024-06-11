<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "db_perpustakaan";


$conn = new mysqli($host, $username, $password, $db);

if($conn){
    echo("Connect");
}else{
    echo("Connection Failed");
}
