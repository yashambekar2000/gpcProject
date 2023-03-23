<?php 

session_start(); 

include "sqlconn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['email']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: AdminLogin.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: AdminLogin.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM users WHERE email='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['email'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: home.php");

                exit();

            }else{

                header("Location: AdminLogin.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: AdminLogin.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: AdminLogin.php");

    exit();

}





?>