<?php
    include("../settings/connection.php");

    if (isset($_POST['submit'])){
        $new_name = $_POST['chore-name'];
        $chore_id = $_POST['chore-id'];

        $sql = "UPDATE chores SET chorename = ? WHERE cid = ?";

        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param($stmt, "si", $new_name, $chore_id);

        $result = mysqli_stmt_execute($stmt);

        if ($result){
            header("Location: ../admin/chore_control_view.php");
            exit;
        }

    }
?>