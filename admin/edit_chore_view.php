<?php
    include("../settings/core.php");
    check_login();
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
    <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
    <style>
        body {
            background-color: darkgrey;
        }
        .pop-up {
            display: flex;
            flex-direction: column;
            width: 200px;
            gap: 10px;
            background-color: white;
            padding: 20px;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: solid;
        }


        .pop-up .header {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            font-size: 13px;
        }

        .pop-up form{
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .pop-up form input {
            padding: 7px 0;
        }

    </style>
</head>
<body>
    <div class="pop-up" id="pop">
        <div class="header">
            <div><p><strong>Edit a chore</strong></p></div>
        </div>
        <div><hr></div>
        <div class="form-container">
            <form action="../action/edit_a_chore_action.php" method="post" name="add-chore-form" id="">
                <input id="chore-name" name="chore-name" type="text" value="<?php echo $id_row['chorename']; ?>" placeholder="Chore name" pattern="[A-Za-z\s]+">
                <input name="chore-id" type="hidden" value="<?php echo $c_id; ?>">
                <input id="submit-btn" name="submit" type="submit">
            </form>
        </div>
    </div>

    
</body>
<script>

    let submitBtn = document.getElementById("submit-btn");

    function validateForm(event){
        let choreName = document.getElementById("chore-name").value;
        let pattern = /^[A-Za-z\s]+$/;

        if (!pattern.test(choreName)){
            swal('Error',"Can't add chore. Only letters allowed.", 'error');
            event.preventDefault();
        }
    }

    submitBtn.addEventListener("click", validateForm);
</script>
</html>