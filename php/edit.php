<?php
//Database Connection
include ('sqlconn.php');
//Get ID from Database
if(isset($_GET['id'])){
 $sql = "SELECT * FROM submitted_data WHERE id =" .$_GET['id'];
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result);
}
//Update Information
if(isset($_POST['btn-update'])){
 $sname = $_POST['name'];
 $semail = $_POST['email'];
 $saddress = $_POST['address'];
 $scity = $_POST['city'];
 $sstate = $_POST['state'];
 $sgender = $_POST['gender'];
 $squalification = $_POST['qualification'];
 $sskills = $_POST['skills'];
 $smobile = $_POST['mobile'];
 $sresume = $_POST['resume'];
 $update = "UPDATE submitted_data SET  sstate='$sstate',sname='$sname',squalification='$squalification',sskills='$sskills', sgender='$sgender',saddress='$saddress',smobile='$smobile',semail='$semail',scity='$scity' WHERE id=". $_GET['id'];
 $up = mysqli_query($conn, $update);
 if(!isset($sql)){
 die ("Error $sql" .mysqli_connect_error());
 }
 else
 {
    header("Location: Home.php?success= data updated successfully");
 }
}
?>




<!-- Edit form -->
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="../css/edit.css">
    </head>
<body>



<div class="mainformdiv">
<h2 class="formheading">Update Form</h2>
<form class="subform"  method="POST">
    
    <label for="name">Enter a Name &nbsp&nbsp&nbsp&nbsp&nbsp </label>
    <input class="inputs" name="name" type="text" min="3" value="<?php echo $row['sname']; ?>">
<br><br>
    <label for="address">Address &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  </label>
    <input class="inputs" name="address" type="text" min="3" value="<?php echo $row['saddress']; ?>">
<br><br>
    <label for="city">City &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
    <input class="inputs" name="city" type="text" value="<?php echo $row['scity']; ?>">
<br><br>
    <label for="state">State &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
    <input class="inputs" name="state" type="text" value="<?php echo $row['sstate']; ?>">
<br><br>
    <label for="email">Email &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
    <input class="inputs" name="email" type="email" value="<?php echo $row['semail']; ?>">
<br><br>
    <label for="mobile">Mobile Number &nbsp&nbsp&nbsp&nbsp </label>
    <input class="inputs" name="mobile" type="number" value="<?php echo $row['smobile']; ?>">
<br><br>
    <label for="qualification">Qualification &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
    <input class="inputs" name="qualification" type="text" value="<?php echo $row['squalification']; ?>">
<br><br>
    <label for="gender">Gender &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  </label>
    <select class="inputs gender" name="gender" id="" value="<?php echo $row['sgender']; ?>">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>
<br><br>
    <label for="skills">Skills&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  </label>
    <input class="inputs" name="skills" type="text" value="<?php echo $row['sskills']; ?>">
<br><br>
   

<button type="submit" name="btn-update" id="btn-update" class="submitformbtn" onClick="update()"><strong>Update</strong></button>
<a href="Home.php"><button type="button" value="button">Cancel</button></a>
</form>
</div>



<!-- Alert for Updating -->
<script>
function update(){
 var x;
 if(confirm("Updated data Sucessfully") == true){
 x= "update";
 }
}
</script>
</body>
</html>
