<?php
    include("../settings/core.php");
    // check_login();
    include("../action/get_a_chore_action.php");

    if (isset($_GET['id'])){
        $c_id = $_GET['id'];
        $id_row = get_chore($c_id);
    }
    else {
        header("Location: ../admin/chore_control_view.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit chore</title>
</head>
<body>


    
</body>
</html>