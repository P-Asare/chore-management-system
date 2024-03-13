<?php
    include("../settings/connection.php");

    // Return the person who assigned the task
    function get_person($id){
        global $conn;

        $sql = "SELECT * from people WHERE pid = ?";

        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if(!$result){
            die("Unsuccessful query: ".mysqli_error($conn));
        }
        else{
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                return $row;
            }
        }
    }

    // Return the person who the task was assigned to
    function get_assigned_person($id){
        global $conn;

        $sql = "SELECT * FROM people WHERE pid = (SELECT pid FROM assigned_people WHERE assignmentid = ?)";

        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        
        if(!$result){
            die("Unsuccessful query: ".mysqli_error($conn));
        }
        else{
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                return $row;
            }
        }
    }
?>