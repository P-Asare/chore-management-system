<?php
    include("../settings/core.php");
    include("../functions/select_assignee_fxn.php");
    // check_login();

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
        <div class="container">
            <div><img src="../icons/ant-design_home-outlined.svg" alt="home icon"></div>
            <div><p>Home</p></div>
        </div>
        <div class="container">
            <div><img src="../icons/bell.svg" alt="home icon"></div>
            <div><p>Notifications</p></div>
        </div>
        <div class="container">
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
                        <form action="" method="" name="" id="">
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
                                <option value="0">Sweep</option>
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
                    <div class="row">
                        <div>
                            Sweep
                        </div>
                        <div>
                            Palal Asare
                        </div>
                        <div>
                            1-Feb-2024
                        </div>
                        <div>
                            2-Feb-2024
                        </div>
                        <div>
                            InProgress
                        </div>
                        <div class="actions">
                            <div class="material-symbols-outlined"> edit</div>
                            <div class="material-symbols-outlined">delete</div>
                            <div class="material-symbols-outlined">done</div>
                        </div>
                    </div>
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

    addChoreButton.addEventListener("click", function() {
        popUpBox.style.visibility = "visible";
        overlay.style.visibility = "visible";
    });

    closePopUp.addEventListener("click", function(){
        popUpBox.style.visibility = "hidden";
        overlay.style.visibility = "hidden";
    })
</script>
</html>