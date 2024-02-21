<?php

    include("../settings/connection.php");

    if (isset($_POST["submit"])){
        $cname = $_POST["chore-name"];

        $sql = "INSERT INTO chores (chorename) values (?)";

        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $cname);
        $result = mysqli_stmt_execute($stmt);

        if ($result){
            header("Location: ../admin/chore_control_view.php");
            exit;
        }
        else {
            header("Location: ../admin/chore_control_view?msg=inerror");
            exit();
        }

    }

?>