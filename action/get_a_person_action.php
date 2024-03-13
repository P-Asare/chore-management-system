<?php
    include("../settings/connection.php");

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
?>