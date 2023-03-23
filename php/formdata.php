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


    // **************Code for Upload the resume with form data to database ****************
    if(isset($_POST["SubmitBtn"])){

        $fileName=$_FILES["resume"]["name"];
        $fileTmpName=$_FILES["resume"]["tmp_name"]; 
        $fileSize=$_FILES["resume"]["size"]/1024;
   // destination of the file on the server
   $destination = 'resumes/' . $fileName;

 
   $extension = pathinfo($fileName, PATHINFO_EXTENSION);

  

   if (!in_array($extension, ['pdf'])) {
    header("Location: index.php?error=file must be pdf..");
   } elseif ($_FILES['resume']['size'] > 1000000) { 
    header("Location: index.php?error=file to large");
   } else {
      
    // move the uploaded (temporary) file to the specified destination
       if (move_uploaded_file($fileTmpName, $destination)) {
        // header("Location: index.php?success=data submitted successfully");
        $sql = "INSERT INTO submitted_data (sname, saddress, scity, sstate, squalification, sgender, sskills, semail, smobile, fname, fsize )
  VALUES ('$sname', '$saddress', '$scity', '$sstate', '$squalification', '$sgender', '$sskills', '$semail', '$smobile', '$fileName', '$fileSize')";
  
  if ($conn->query($sql) === TRUE) {
      
      header("Location: index.php?success=data store successfully");
   
    exit();
  } else {
      header("Location: index.php?error=data didn't store");

      exit();
  }
       } else {
           echo "Failed to upload file.";
       }
   }



    }
      
}   





?>
