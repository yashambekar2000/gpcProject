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
<h2 class="homeheading">Home </h2>
    <div class="logoutbtndiv"><a type="btn" class="logoutbtn" href="logout.php">Admin LogOut</a></div>


   </nav> 
   <!-- code to show success status -->
<?php if (isset($_GET['success'])) { ?>

<p class="success"><?php echo $_GET['success']; ?></p>

<?php } ?>

<!-- code to show error status -->
<?php if (isset($_GET['error'])) { ?>

<p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>

   <div class="tablediv">
    <h1>All Records Here</h1>
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
     include('retrivedata.php');
     while($value = mysqli_fetch_assoc($result)){?>
    <tr>
    <td>   <?php echo $value['sname'] ?></td>
        <td><?php echo $value['saddress'] ?></td>
        <td><?php echo $value['scity'] ?></td>
        <td><?php echo $value['sstate'] ?></td>
        <td><?php echo $value['squalification'] ?></td>
        <td><?php echo $value['sskills'] ?></td>
        <td><?php echo $value['sgender'] ?></td>
        <td><?php echo $value['semail'] ?></td>
        <td><?php echo $value['smobile'] ?></td>
        <td><a class="resumebtn" href="downloadresume.php?id=<?php echo $value['id'];?>"> Resume</a></td>
        <td><a class="updatebtn" href="edit.php?id=<?php echo $value['id'];?>"> Update</a></td>
        <td><a class="deletebtn" href="delete.php?id=<?php echo $value['id']; ?>">Delete</a> </td>
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