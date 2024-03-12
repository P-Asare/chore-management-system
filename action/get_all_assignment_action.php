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


?>