<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/AdminLogin.css">
</head>
<body>
<?php
  include('layouts/navbar.php');
  ?>
        <form class="loginform" action="checklogin.php" method="POST">

<h2 class="formheading">LOGIN</h2>

<?php if (isset($_GET['error'])) { ?>

    <p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>

<label class="loginlabels" for="email">User Name</label>

<input class="logininputs" type="email" name="email" placeholder="User Name"><br>

<label class="loginlabels" for="password">Password</label>

<input class="logininputs" type="password" name="password" placeholder="Password"><br> 

<button class="sublogin" type="submit">LogIn</button>

</form>

</body>
</html>