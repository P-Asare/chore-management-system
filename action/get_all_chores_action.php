<?php

    include("../settings/connection.php");

    function all_chores(){
        global $conn;

        $sql = "SELECT * FROM chores";

        $result = mysqli_query($conn, $sql);

        if (!$result){
            die("Unsuccessful Query: ". mysqli_error($conn));
        }
        else if (mysqli_num_rows($result) > 0){
            $chores = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $chores;
        }
    }

?>