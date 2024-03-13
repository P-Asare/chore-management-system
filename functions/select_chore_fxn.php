<?php

    include("../settings/connection.php");

    function get_all_chores(){

        global $conn;

        $sql = "SELECT * FROM chores";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            die("Unsuccessful: ".mysqli_error($conn));
        }
        else{
            if(mysqli_num_rows($result) > 0){
                $chores = mysqli_fetch_all($result, MYSQLI_ASSOC);
                return $chores;
            }
        }
    }

    // Array of all users and their details
    $chores = get_all_chores();


?>