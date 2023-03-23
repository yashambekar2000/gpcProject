<?php

include ('sqlconn.php');


// Download files
if (isset($_GET['id'])) {
    $id = $_GET['id'];

   
    $sql = "SELECT * FROM submitted_data WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'resumes/' . $file['fname'];
   

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('resumes/' . $file['fname']));
        readfile('resumes/' . $file['fname']);

        exit;
    }

}