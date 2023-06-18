<?php
require_once("connectDB.php");

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

if (empty($email) || empty($password)) {
    header("Location: ../fyp/login.php?error=emptyfields");
    exit();
}else{
    $sql = "SELECT * FROM users WHERE uEmail=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../fyp/login.php?error=sqlerror");
    exit();

    }else{

        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)) {

            $pwdCheck = password_verify($password, $row['uPassword']);
            if($pwdCheck == false) {
                
                header("Location: ../fyp/login.php?error=wrongpassword");
                exit();

            }
            else if($pwdCheck == true) {
                session_start();
                $_SESSION['user_id'] = $row['uID'];
                $_SESSION['user_name'] = $row['uName'];

                header("Location: ../fyp/aboutus.php?error=success");
                exit();
            }
        }else{
            header("Location: ../fyp/login.php?error=nouser");
        exit();
        }
    }

}
    
}else{
    header("Location: ../fyp/index.php");
    exit();
}


?>