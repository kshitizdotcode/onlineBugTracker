<?php

include 'include/connect.php'; 
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM `bug` WHERE bug_id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:edit.php');
    }else{
        die(mysqli_error($con));
    }
}
?>