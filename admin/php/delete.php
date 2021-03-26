<?php 
ob_start(); // needs to be added here
session_start();

include('../../include/db.php');
    ?> 
<?php

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $query="DELETE FROM contact WHERE id='$id'";
    $run=mysqli_query($db,$query);
    if($run){
        header("location:../?inbox=delete");
    }
}

