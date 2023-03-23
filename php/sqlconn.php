<?php

$host= "localhost";

$user= "root";

$password = "";

$db_name = "gpc_assignment";

$conn = mysqli_connect($host, $user, $password, $db_name);

if (!$conn) {

   die("Connection failed!") ; ;

}
try{

  $query = "SELECT id FROM submitted_data ";
  $result = mysqli_query($conn, $query);
}catch(Exception $e){
  $query= null;
}


if(empty($result)) {
               // sql to create table
$sql = "CREATE TABLE submitted_data (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    sname VARCHAR(30) NOT NULL,
    saddress VARCHAR(30) ,
    scity VARCHAR(30) NOT NULL,
    sstate VARCHAR(30) NOT NULL,
    squalification VARCHAR(30) ,
    sskills VARCHAR(30) ,
    sgender VARCHAR(30) NOT NULL,
    smobile VARCHAR(10),
    semail VARCHAR(50),
    fname VARCHAR(255),
    fsize INT,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
  
}


    
   
?>