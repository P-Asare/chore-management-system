<?php
    include("../settings/connection.php");

    $sql = "SELECT * FROM family_name";

    $result = mysqli_query($conn, $sql);

    if ($result){
        $family_roles = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>