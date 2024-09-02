<?php
include'db_conn.php';
$id= $_GET['id'];
$sql="DELETE FROM `vacation` WHERE id=$id";
$result=mysqli_query($conn, $sql);
if($result){
  header("location:../vacation_table.php?msg=Record deleted successfuly!");
}else{
    echo"Failed:".mysqli_error($conn);
}