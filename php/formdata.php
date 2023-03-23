<?php
session_start();
include('sqlconn.php');

function validate($data){

    $data = trim($data);
    return $data;
}


function validateEmail($data){
    $data = trim($data);

    $data = stripslashes($data);

    $data = htmlspecialchars($data);

    return $data;
}


$semail = validateEmail($_POST['email']);
$sname = $_POST['name'];
$saddress = validate($_POST['address']);
$scity = validate($_POST['city']);
$sstate = validate($_POST['state']);
$squalification = validate($_POST['qualification']);
$sgender = validate($_POST['gender']);
$sskills = validate($_POST['skills']);
$smobile = $_POST['mobile'];
$sresume = $_POST['resume'];

if(empty($sname)) {

    header("Location: index.php?error= Name is required");

    exit();
}else if(empty($semail)){

    header("Location: index.php?error=email must be required");

    exit();
}else if(empty($smobile)){

    header("Location: index.php?error=mobile number must be of 10 digits");

    exit();

}else if(empty($scity)){

    header("Location: index.php?error=city name must be required");

    exit();

}else if(empty($sstate)){

    header("Location: index.php?error=state name must be required");

    exit();

}else if(empty($squalification)){

    header("Location: index.php?error=qualification must be required");

    exit();

}else if(empty($sgender)){

    header("Location: index.php?error=gender must be required");

    exit();

}else{

    $sql = "INSERT INTO submitted_data (sname, saddress, scity, sstate, squalification, sgender, sskills, semail, smobile)
    VALUES ('$sname', '$saddress', '$scity', '$sstate', '$squalification', '$sgender', '$sskills', '$semail', '$smobile')";
    
    if ($conn->query($sql) === TRUE) {
      header("Location: index.php");
      echo "New record created successfully";
      exit();
    } else {
        header("Location: index.php?error=data didn't store");

        exit();
    }
    
      

}




?>
