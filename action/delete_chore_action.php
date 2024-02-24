<?php
    include("../settings/connection.php");

    if (isset($_GET['id'])){

        $chore_id = $_GET['id'];
        $sql = "DELETE FROM chores WHERE cid = ?";

        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $chore_id);
        mysqli_stmt_execute($stmt);
        
        $result = mysqli_stmt_get_result($stmt);
        if ($result){
            header("Location: ../admin/chore_control_view.php");
            exit();
        }
        else{
            // missing error message
            header("Location: ../admin/chore_control_view.php");
            exit();
        }
    }
?>