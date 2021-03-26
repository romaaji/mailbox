<?php
ob_start(); // needs to be added here
include('../../include/db.php');
include('checkupload.php');
$query="SELECT * FROM smtp_setup";

$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);


if(isset($_POST['save'])){
   
    
$usermail=mysqli_real_escape_string($db,$_POST['usermail']);
$auth=mysqli_real_escape_string($db,$_POST['auth']);
$port=mysqli_real_escape_string($db,$_POST['port']);
$userpass=mysqli_real_escape_string($db,$_POST['userpass']);
$host=mysqli_real_escape_string($db,$_POST['host']); 

    


    
if($pdone=="error"){
    header("location:../?smtp=true&msg=error");
}else if($cdone=="error"){
    header("location:../?smtp=true&msg=error");
}else{
$query="UPDATE smtp_setup SET ";
$query.="usermail='$usermail',";
$query.="auth='$auth',";
$query.="port='$port',";
$query.="userpass='$userpass',";
$query.="hostid='$host' WHERE 1";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?smtp=true&msg=updated");
    exit();
}    

}    
    
}
