<?php 
session_start(); 
$mysqli = new mysqli(
    "localhost", 
    "root",
    "",
    "tefa"
); 

if($mysqli->connect_errno){
    echo "failed to connect" . $mysqli->connect_error;
}

?>