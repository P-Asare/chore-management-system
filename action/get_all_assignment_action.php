<?php
    include("../settings/connection.php");

    function get_all_assignments(){
        global $conn;

        $sql = "SELECT * FROM assignment";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            echo "Unsuccessful Query: " . mysqli_error($conn);
        }
        else{
            if (mysqli_num_rows($result) > 0){
                $assignments = mysqli_fetch_all($result, MYSQLI_ASSOC);
                return $assignments;
            }
        }
    }

    // Get assignments that are being done
    function get_assingments_inprogress(){
        global $conn;

        $sql = "SELECT * FROM assignment WHERE sid = 2 AND CURDATE() < date_due";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            echo "Unsuccessful Query: " . mysqli_error($conn);
        }
        else{
            if (mysqli_num_rows($result) > 0){
                $assignments = mysqli_fetch_all($result, MYSQLI_ASSOC);
                return $assignments;
            }
        }
    }

    // Get assignments that have been overpassed
    function get_incomplete_assignments(){
        global $conn;

        $sql = "SELECT * FROM assignment WHERE sid = 4 AND CURDATE() > date_due";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            echo "Unsuccessful Query: " . mysqli_error($conn);
        }
        else{
            if (mysqli_num_rows($result) > 0){
                $assignments = mysqli_fetch_all($result, MYSQLI_ASSOC);
                return $assignments;
            }
        }
    }

    // Get assignments marked as complete
    function get_completed_assignments(){
        global $conn;

        $sql = "SELECT * FROM assignment WHERE sid = 3";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            echo "Unsuccessful Query: " . mysqli_error($conn);
        }
        else{
            if (mysqli_num_rows($result) > 0){
                $assignments = mysqli_fetch_all($result, MYSQLI_ASSOC);
                return $assignments;
            }
        }
    }

    // Get the last 3 assignments added to the assignment relation
    function get_recent_assignments(){
        global $conn;

        $sql = "SELECT * FROM assignment WHERE sid = 2 ORDER BY assignmentid DESC LIMIT 3";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            echo "Unsuccessful Query: " . mysqli_error($conn);
        }
        else{
            if (mysqli_num_rows($result) > 0){
                $assignments = mysqli_fetch_all($result, MYSQLI_ASSOC);
                return $assignments;
            }
        }
    }



?>