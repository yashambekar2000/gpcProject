<?php

$host= "localhost";

$user= "root";

$password = "";

$db_name = "gpc_assignment";

$conn = mysqli_connect($host, $user, $password, $db_name);

if (!$conn) {

   die("Connection failed!") ; ;

}

$query = "SELECT id FROM submitted_data ";
$result = mysqli_query($conn, $query);

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
    smobile INT NOT NULL,
    semail VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table MyGuests created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
  $result = mysqli_query($dbConnection, $query);
}


    
   
?>