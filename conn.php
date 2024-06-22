<?php
$host= "localhost";
$username= "root";
$datapass= "";
$dataname= "journal";
$conn = mysqli_connect($host, $username, $datapass, $dataname);
if(!$conn){
    die("something went wrong");
}
?>
