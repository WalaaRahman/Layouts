<?php 
    require '../helpers/dbConnection.php';

    $task_id=$_GET['id'];

    $sql="delete from task where id=$task_id";
    $op=mysqli_query($con,$sql);
    // echo mysqli_error($con);
    // exit;
   echo  '<script> alert("Are you Sure ?");</script>';
    if($op){
        header("Location: index.php");
    }
    else{
        echo "Error Deleting Task...";
    }


?>