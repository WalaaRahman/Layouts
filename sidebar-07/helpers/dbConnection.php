<?php

session_start();

$server="localhost";
$dbName="task_management";
$userName="root";
$password="";

$con=mysqli_connect($server,$userName,$password,$dbName);

if (!$con){
    echo "Error : ".mysqli_error($con);
}

?>