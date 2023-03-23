<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
<nav class="homenavbardiv">
    <!-- <h2 class="homeheading"><a class="homeheadingancor" href="index.php">Home</a> </h2> -->
    <div class="logoutbtndiv"><a type="btn" class="logoutbtn" href="logout.php">Admin LogOut</a></div>


   </nav> 

   <div class="tablediv">
   <table border-collapse class="tablef">
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Qualification</th>
        <th>Skills</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Mobile Number</th>
        <th>Resume</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>

    <?php
    foreach($data as $value) {

    ?>
    <tr>
    <td>   <?php $value['sname'] ?></td>
        <td><?php $value['saddress'] ?></td>
        <td><?php $value['scity'] ?></td>
        <td><?php $value['sstate'] ?></td>
        <td><?php $value['squalification'] ?></td>
        <td><?php $value['sskills'] ?></td>
        <td><?php $value['sgender'] ?></td>
        <td><?php $value['semail'] ?></td>
        <td><?php $value['smobile'] ?></td>
        <td><a class="resumebtn" href=""> Resume</a></td>
        <td><a class="updatebtn" href=""> Update</a></td>
        <td><a class="deletebtn" href="">Delete</a> </td>
    </tr>

    <?php
        }
    ?>
   </table>

   </div>
</body>
</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>