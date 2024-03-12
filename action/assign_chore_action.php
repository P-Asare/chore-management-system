<?php
    include("../settings/connection.php");

    if(isset($_POST['submit'])){

        $chore = $_POST['chore'];
        $status = 1;
        $date_assigned = date('m-d-Y');
        $due_date = $_POST['due-date'];
        // $assigned_by = $_SESSION['user-id'];
        $assigned_to = $_POST['assignee'];
        
        $ass = 2; // Test value due to unavailable session

        // Insert into assignment database
        $sql = "INSERT INTO assignment (cid, sid, date_assign, date_due, who_assigned) VALUES (?,?,?,?,?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "iissi", $chore, $status, $date_assigned, $due_date, $ass);
        mysqli_stmt_execute($stmt);

        $assignmentId = mysqli_insert_id($conn); // Get id of most recent insertion





    }
?>