<?php
    include("../settings/connection.php");

    function get_a_chore_status($id){
        global $conn;

        $sql = "SELECT * from status WHERE sid = ?";

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