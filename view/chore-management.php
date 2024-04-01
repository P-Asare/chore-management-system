<?php
    include("../settings/core.php");
    check_login();

    if(get_role_id() != 3){
        header("Location: ../admin/home_view.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slaveme</title>
    <link rel="stylesheet" href="../css/chore-management.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <div class="side-pane">
        <div class="first-container">
            <div><img src="../images/slave-me-logo-removebg-preview 1.png" alt="image of logo"></div>
            <div><p>Slaveme</p></div>
        </div>
        <div class="container">
            <div><img src="../icons/ant-design_home-outlined.svg" alt="home icon"></div>
            <div id="home-page"><p>Home</p></div>
        </div>
        <div class="container">
            <div><img src="../icons/bell.svg" alt="home icon"></div>
            <div><p>Notifications</p></div>
        </div>
        <div class="container">
            <div><img src="../icons/la_broom.svg" alt="home icon"></div>
            <div><p style="font-weight: bold; color: black;">Chores</p></div>
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
                <div class="col num">
                    <div>&nbsp;</div>
                    <div class="title">#</div>
                    <div><p>1</p></div>
                    <div><p>2</p></div>
                    <div><p>3</p></div>
                    <div><p>4</p></div>
                    <div><p>5</p></div>
                </div>
                <div class="col">
                    <div>&nbsp;</div>
                    <div class="title">Task Name</div>
                    <div><p>Sweeping</p></div>
                    <div><p>Scrub Cabinets</p></div>
                    <div><p>sweep floors</p></div>
                    <div><p>sweep floors</p></div>
                    <div><p>sweep floors</p></div>
                </div>
                <div class="col status">
                    <div>&nbsp;</div>
                    <div class="title">&nbsp;</div>
                    <div><p style="background-color: green;">Closed</p></div>
                    <div><p style="background-color: green;">Closed</p></div>
                    <div><p style="background-color: green;">Closed</p></div>
                    <div><p style="background-color: green;">Closed</p></div>
                    <div><p style="background-color: green;">Closed</p></div>
                </div>
                <div class="col date">
                    <div style="font-weight: bold; text-align: center;"><p>Completed Tasks</p></div>
                    <div class="title">Date Assigned</div>
                    <div><p>2-Feb-2024</p></div>
                    <div><p>2-Feb-2024</p></div>
                    <div><p>2-Feb-2024</p></div>
                    <div><p>2-Feb-2024</p></div>
                    <div><p>2-Feb-2024</p></div>
                </div>
                <div class="col date">
                    <div>&nbsp;</div>
                    <div class="title">Date Due</div>
                    <div><p>2-Feb-2024</p></div>
                    <div><p>2-Feb-2024</p></div>
                    <div><p>2-Feb-2024</p></div>
                    <div><p>2-Feb-2024</p></div>
                    <div><p>2-Feb-2024</p></div>
                </div>
                <div class="col act">
                    <div>&nbsp;</div>
                    <div class="title">Actions</div>
                    <div><input type="checkbox"></div>
                    <div><input type="checkbox"></div>
                    <div><input type="checkbox"></div>
                    <div><input type="checkbox"></div>
                    <div><input type="checkbox"></div>
                </div>
                <!-- completed tasks are above -->
                <div class="col num">
                    <div class="title">#</div>
                    <div><p>1</p></div>
                    <div><p>2</p></div>
                    <div><p>3</p></div>
                    <div><p>4</p></div>
                    <div><p>5</p></div>
                </div>
                <div class="col">
                    <div class="title">Task Name</div>
                    <div><p>Sweeping</p></div>
                    <div><p>Scrub Cabinets</p></div>
                    <div><p>sweep floors</p></div>
                    <div><p>sweep floors</p></div>
                    <div><p>sweep floors</p></div>
                </div>
                <div class="col status">
                    <div class="title">&nbsp;</div>
                    <div><p style="background-color: orange;">InProgress</p></div>
                    <div><p style="background-color: orange;">InProgress</p></div>
                    <div><p style="background-color: lightblue;">ToDo</p></div>
                    <div><p style="background-color: orange;">InProgress</p></div>
                    <div><p style="background-color: lightblue;">ToDo</p></div>
                </div>
                <div class="col date">
                    <div class="title">Date Assigned</div>
                    <div><p>2-Feb-2024</p></div>
                    <div><p>2-Feb-2024</p></div>
                    <div><p>2-Feb-2024</p></div>
                    <div><p>2-Feb-2024</p></div>
                    <div><p>2-Feb-2024</p></div>
                </div>
                <div class="col date">
                    <div class="title">Date Due</div>
                    <div><p>2-Feb-2024</p></div>
                    <div><p>2-Feb-2024</p></div>
                    <div><p>2-Feb-2024</p></div>
                    <div><p>2-Feb-2024</p></div>
                    <div><p>2-Feb-2024</p></div>
                </div>
                <div class="col act">
                    <div class="title">Actions</div>
                    <div><input type="checkbox"></div>
                    <div><input type="checkbox"></div>
                    <div><input type="checkbox"></div>
                    <div><input type="checkbox"></div>
                    <div><input type="checkbox"></div>
                </div>
                
            </div>
        </div>
    </div>
</body>
<script>
    let homePage = document.getElementById("home-page")

    homePage.addEventListener("click", function(){
        window.location.replace("home-page.php")
    })
</script>
</html>