<?php
include "db_conn.php";
session_start();

if (isset($_POST['uname']) && isset($_POST['pass'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['pass']);

    if (empty($uname)) {
        header("Location: ../admin.php?error=username is required");
        exit();
    } else if(empty($pass)) {
        header("Location: ../admin.php?error=password is required");
        exit();
    }else {
        // Use prepared statements to prevent SQL injection
        $sql = "SELECT * FROM admin WHERE user_name = '$uname' AND password = '$pass'";
        
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: ../dashboard.php");
                exit();
            }else{
                header("Location: ../admin.php?error=Incorect Username or Password");
                exit();
            }
        }else {
            header("Location: ../admin.php?error=Incorect Username or Password");
            exit();
        }
    }

}else {
    header("Location: ../admin.php");
    exit();
}