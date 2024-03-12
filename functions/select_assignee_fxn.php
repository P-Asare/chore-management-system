<?php

    include("../settings/connection.php");

    function get_all_assignees(){

        global $conn;

        $sql = "SELECT * FROM people WHERE rid = 3";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            die("Unsuccessful: ".mysqli_error($conn));
        }
        else{
            if(mysqli_num_rows($result) > 0){
                $assignees = mysqli_fetch_all($result, MYSQLI_ASSOC);
                return $assignees;
            }
        }
    }


?>