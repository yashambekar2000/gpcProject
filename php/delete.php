<?php
include('sqlconn.php');

$id = $_GET['id']; 

$del = mysqli_query($conn,"delete from submitted_data where id = '$id'"); 

if($del)
{
    mysqli_close($conn); 
    header("Location: Home.php?error= one record deleted"); 
    exit;	
}
else
{
    header("Location: index.php?error= data didn't deleted");
}
?>