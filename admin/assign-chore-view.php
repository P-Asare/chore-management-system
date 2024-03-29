<?php
    include("../settings/core.php");
    include("../functions/select_assignee_fxn.php");
    include("../functions/select_chore_fxn.php");
    include("../functions/get_all_assignments_fxn.php");
    check_login();

    if(get_role_id() == 3){
        header("Location: ../view/chore-management.html");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slaveme</title>
    <link rel="stylesheet" href="../css/admin-assignment.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <div class="overlay" id="overlay">&nbsp;</div>
    <div class="side-pane">
        <div class="first-container">
            <div><img src="../images/slave-me-logo-removebg-preview 1.png" alt="image of logo"></div>
            <div><p>Slaveme</p></div>
        </div>
        <div class="container" id="home-view">
            <div><img src="../icons/ant-design_home-outlined.svg" alt="home icon"></div>
            <div><p>Home</p></div>
        </div>
        <div class="container">
            <div><img src="../icons/bell.svg" alt="home icon"></div>
            <div><p>Notifications</p></div>
        </div>
        <div class="container" id="chore-control">
            <div><img src="../icons/la_broom.svg" alt="home icon"></div>
            <div><p>Manage Chores</p></div>
        </div>
        <div class="container">
            <div><img src="../icons/la_broom.svg" alt="home icon"></div>
            <div><p style="color: rgb(16, 148, 16); font-weight: bold;">Assign Chores</p></div>
        </div>
        <div class="spaces-dropdown" id="spaces-dropdown">
            <div class="title">
                <div><p>Spaces</p></div>
                <div><img src="../icons/ep_arrow-up.svg" alt="arrow down icon"></div>
            </div>
            <div id="myDropdown" class="dropdown-content">
                <div class="space-button">
                    <div class="letter-box" id="kitchen-box">K</div>
                    <div><a id="kitchen" href="#">Kitchen</a></div>
                </div>
                <div class="space-button">
                    <div class="letter-box" id="living-box">L</div>
                    <div><a id="living-room" href="#">Living Room</a></div>
                </div>
                <div class="space-button">
                    <div class="letter-box" id="yard-box">B</div>
                    <div><a id="back-yard" href="#">Back Yard</a></div>
                </div>
                
            </div>   
        </div>
        <a href="../login/logout_view.php" style="color: black;">
            <div style="padding-left: 20px;" class="material-symbols-outlined">
                logout 
                <span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; margin-top: -10px;">Logout</span>
            </div>
        </a>
    </div>
    <div class="main-pane">
        <div class="header">
            <div class="calendar-board" id="board">
                <div class="container"><img src="../icons/fluent_board-16-regular (1).svg" alt="image of board"></div>
                <div><p>Board</p></div>
            </div>
            <div class="calendar-board" id="board">
                <div class="container"><img src="../icons/fluent_board-16-regular (1).svg" alt="image of calendar"></div>
                <div><p>Calendar</p></div>
            </div>
        </div>
        <div id="page">
            <div class="body">
                <div class="pop-up" id="pop">
                    <div class="header">
                        <div><p><strong>Assign a chore</strong></p></div>
                        <div id="close-pop-up"><p>X</p></div>
                    </div>
                    <div><hr></div>
                    <div class="form-container">
                        <form action="../action/assign_chore_action.php" method="post" name="assignment-form" id="assignment-form">
                            <label for="chore-name">Assignee</label>
                            <select name="assignee" type="text">
                                <option value="">Assign Person</option>
                                <?php foreach($assignees as $assignee): ?>
                                    <option value="<?php echo $assignee["pid"]; ?>"><?php echo $assignee["fname"]." ".$assignee["lname"]; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label for="chore-name">Assign chore</label>
                            <select name="chore" type="text">
                                <option value="">Assign chore</option>
                                <?php foreach($chores as $chore): ?>
                                    <option value="<?php echo $chore["cid"]; ?>"><?php echo $chore["chorename"]; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label for="chore-name">Due Date</label>
                            <input name="due-date" type="date" required>
                            <input id="submit-btn" name="submit" type="submit">
                        </form>
                    </div>
                </div>


                <div class="title-add">
                    <div><p>Chore List</p></div>
                    <div><button id="assign-chore">Assign a chore</button></div>
                </div>
                <div class="chore-table">
                    <div class="row headings">
                        <div>
                            Chore name
                        </div>
                        <div>
                            Assigned By
                        </div>
                        <div>
                            Date Assigned
                        </div>
                        <div>
                            Date Due
                        </div>
                        <div>
                            Chore Status
                        </div>
                        <div class="actions">
                            Actions
                        </div>
                    </div>
                    <!-- Display all the assigned chores in database-->
                    <?php 
                        display_assignments();
                    ?>
                </div>
            </div>
            
        </div>
    </div>
</body>
<script>
    let addChoreButton = document.getElementById("assign-chore");
    let popUpBox = document.getElementById("pop");
    let overlay = document.getElementById("overlay");
    let closePopUp = document.getElementById("close-pop-up")

    const homeView = document.getElementById("home-view");
    const choreControl = document.getElementById("chore-control");

    
    // route to appropriate pages
    homeView.addEventListener("click", function(){
        window.location.replace("home_view.php")
    });

    choreControl.addEventListener("click", function(){
        window.location.replace("chore_control_view.php")
    });

    addChoreButton.addEventListener("click", function() {
        popUpBox.style.visibility = "visible";
        overlay.style.visibility = "visible";
    });

    closePopUp.addEventListener("click", function(){
        popUpBox.style.visibility = "hidden";
        overlay.style.visibility = "hidden";
    });
</script>
</html>