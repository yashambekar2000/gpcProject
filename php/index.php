<?php
  include('sqlconn.php');
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
    
</head>
<body>
<script>




// function save(){
//         var query = $('form').serialize();
//         var url = 'formdata.php';
//         $.post(url, query);

//     }

    
</script>



    <?php
  include('layouts/navbar.php');
  ?>
<?php if (isset($_GET['error'])) { ?>

<p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>
<div class="mainformdiv">
<h2 class="formheading">Submission Form</h2>
<form class="subform" action="formdata.php" method="POST">
    
    <label for="name">Enter a Name &nbsp&nbsp&nbsp&nbsp&nbsp </label>
    <input class="inputs" name="name" type="text" min="3">
<br><br>
    <label for="address">Address &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  </label>
    <input class="inputs" name="address" type="text" min="3">
<br><br>
    <label for="city">City &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
    <input class="inputs" name="city" type="text">
<br><br>
    <label for="state">State &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
    <input class="inputs" name="state" type="text">
<br><br>
    <label for="email">Email &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
    <input class="inputs" name="email" type="email">
<br><br>
    <label for="mobile">Mobile Number &nbsp&nbsp&nbsp&nbsp </label>
    <input class="inputs" name="mobile" type="number">
<br><br>
    <label for="qualification">Qualification &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
    <input class="inputs" name="qualification" type="text">
<br><br>
    <label for="gender">Gender &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  </label>
    <select class="inputs gender" name="gender" id="">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>
<br><br>
    <label for="skills">Skills&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  </label>
    <input class="inputs" name="skills" type="text">
<br><br>
    <label for="resume">Resume &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  </label>
    <input class="inputs resume" name="resume" type="file">
<br><br>
<button class="submitformbtn" >Submit</button>
</form>
</div>
</body>
</html>