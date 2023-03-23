<?php
// session_start();
include('sqlconn.php');


$selectQuery = "SELECT * FROM `submitted_data` ORDER BY `id` ASC";
$result = mysqli_query($conn,$selectQuery);
if(mysqli_num_rows($result) > 0){
}else{
    $msg = "No Record found";
}
?>