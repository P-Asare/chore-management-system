<?php

    include("../settings/connection.php");

    // _SERVER["REQUEST_METHOD"] == "POST"
    if (isset($_POST["submit-btn"])){ //isset() for name of button

        // echo "hello";
        // exit();

        $fname = $_POST["first-name"];
        $lname = $_POST["last-name"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $tel = $_POST["number"];
        $dob = $_POST["dob"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm-password"];
        $fid = $_POST["birth-position"];

        $rid = 3; // Default rid value as stated in instruction

        if($password == $confirm_password){
            $passwd = password_hash($password, PASSWORD_DEFAULT);
        }
        else {
            echo "<script> alert('Passwords do not match');</script>";
            exit;
        }

        $sql = "INSERT INTO people (rid, fid, fname, lname, gender, dob, tel, email, passwd) values (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "iisssssss", $rid, $fid, $fname, $lname, $gender, $dob, $tel, $email, $passwd);
        $result = mysqli_stmt_execute($stmt);

        if ($result){
            header("Location: ../login/login.php");
            exit;
        }
        else {
            echo "<script> alert(Error: ".mysqli_error($conn).")</script>";
        }
    }
    else{
        echo "Not working";
    }

?>