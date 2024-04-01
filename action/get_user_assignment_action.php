<?php

    include("../settings/connection.php");

    function get_all_user_assignments($id){
        global $conn;

        $sql = "SELECT * FROM assignment WHERE assignmentid IN ( SELECT assignmentid FROM assigned_people WHERE pid = $id)";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            echo "Unsuccessful Query: ".mysqli_error($conn);
        }
        else{
            if (mysqli_num_rows($result) > 0){
                $assignments = mysqli_fetch_all($result, MYSQLI_ASSOC);
                return $assignments;
            }
        }
    }

    function get_user_assignments_inprogress($id){
        global $conn;

        $sql = "SELECT * FROM assignment WHERE sid = 2 and assignmentid IN ( SELECT assignmentid FROM assigned_people WHERE pid = $id)";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            echo "Unsuccessful Query: ".mysqli_error($conn);
        }
        else{
            if (mysqli_num_rows($result) > 0){
                $assignments = mysqli_fetch_all($result, MYSQLI_ASSOC);
                return $assignments;
            }
        }
    }

    function get_user_incomplete_assignments($id){
        global $conn;

        $sql = "SELECT * FROM assignment WHERE sid = 4 and CURDATE() > date_due and assignmentid IN ( SELECT assignmentid FROM assigned_people WHERE pid = $id)";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            echo "Unsuccessful Query: ".mysqli_error($conn);
        }
        else{
            if (mysqli_num_rows($result) > 0){
                $assignments = mysqli_fetch_all($result, MYSQLI_ASSOC);
                return $assignments;
            }
        }
    }

    function get_user_completed_assignments($id){
        global $conn;

        $sql = "SELECT * FROM assignment WHERE sid = 3 and assignmentid IN ( SELECT assignmentid FROM assigned_people WHERE pid = $id)";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            echo "Unsuccessful Query: ".mysqli_error($conn);
        }
        else{
            if (mysqli_num_rows($result) > 0){
                $assignments = mysqli_fetch_all($result, MYSQLI_ASSOC);
                return $assignments;
            }
        }
    }

?>