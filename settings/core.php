<?php

    session_start();
    
    function check_login(){

        if (!isset($_SESSION['user-id'])){
            header("Location: ../login/login.php");
            die();
        }
    }

    function get_role_id(){
        if (!isset($_SESSION['role-id'])){
            return $_SESSION['role-id'];
        }
    }
?>