<?php

    session_start();

    include("../settings/connection.php");

    if (isset($_POST['submit-btn'])) {
        
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM people WHERE email = ?";

        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) == 0){
            // echo "<script>alert('Incorrect email')</script>";
            header("Location: ../login/login.php?msg=emerror");
            exit();
        }
        
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['passwd'])){

            $_SESSION['user-id'] = $row['pid'];
            $_SESSION['role-id'] = $row['rid'];

            header("Location: ../view/home-page.html");
            exit();
        }
        else{
            header("Location: ../login/login.php?msg=pserror");
            // echo "<script>alert('Incorrect password')</script>";
            exit();
        }
    }

?>