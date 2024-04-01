<?php
    include("../settings/connection.php");
    include("../settings/core.php");

    if(get_role_id() == 2){
        header("Location: ../admin/assign-chore-view.php?del=failed");
        exit();
    }

    if(isset($_GET['aid'])){

        $assignmentId = $_GET['aid'];

        $sql = "DELETE FROM assignment WHERE assignmentid = $assignmentId";
        $result = mysqli_query($conn, $sql);

        if($result){
            header("Location: ../admin/assign-chore-view.php");
            exit();
        }
        else{}  //TODO: Display error message with sweet alert
    }
    else{
        header("Location: ../admin/assign-chore-view.php");
        exit();
    }
?>