<?php
    include("../settings/core.php");
    check_login();
    include("../functions/home_fxn.php");

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
    <link rel="stylesheet" href="../css/home-page.css">
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
            <div><p style="color: rgb(16, 148, 16); font-weight: bold;">Home</p></div>
        </div>
        <div class="container">
            <div><img src="../icons/bell.svg" alt="home icon"></div>
            <div><p>Notifications</p></div>
        </div>
        <div class="container">
            <div><img src="../icons/la_broom.svg" alt="home icon"></div>
            <div id="chores"><p>Chores</p></div>
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
            
                <div class="col-one">
                    <div class="chore-column">
                        <div class="line"><hr></div>
                        <div class="name-count">
                            <div class="name"><p>Inprogress</p></div>
                            <div class="count"><p><?php echo ($all_user_assignments === null) ? 0 : count($all_user_assignments); ?></p></div>
                        </div>
                        <div><img src="../icons/mdi_add.svg" alt=""></div>
                    </div>
                    <?php
                        list_assignments($all_user_assignments);
                    ?>
    
                </div>
                <div class="col-two">
                    <div class="chore-column">
                        <div class="line"><hr></div>
                        <div class="name-count">
                            <div class="name"><p>Incomplete</p></div>
                            <div class="count"><p>1</p></div>
                        </div>
                        <div><img src="../icons/mdi_add.svg" alt=""></div>
                    </div>
                    <div class="chore-task">
                        <div class="details">
                            <div><p class="name">Palal Asare > Chores</p></div>
                            <div><p class="desc">Cleanfloor</p></div>
                            <div><img style="opacity: 0.5" src="../icons/tabler_flag-filled.svg" alt="picture of flag"></div>
                        </div>
                        <div class="color" style="background-color: #ffd3331f">
                        </div>
                    </div>
                </div>
                <div class="col-three">
                    <div class="chore-column">
                        <div class="line"><hr></div>
                        <div class="name-count">
                            <div class="name"><p>Completed</p></div>
                            <div class="count"><p>3</p></div>
                        </div>
                        <div><img src="../icons/mdi_add.svg" alt=""></div>
                    </div>
                    <div class="chore-task">
                        <div class="details">
                            <div><p class="name">Palal Asare > Chores</p></div>
                            <div><p class="desc">Cleanfloor</p></div>
                            <div><img style="opacity: 0.5" src="../icons/tabler_flag-filled.svg" alt="picture of flag"></div>
                        </div>
                        <div class="color" style="background-color: #ffd3331f">
                        </div>
                    </div>
                    <div class="chore-task">
                        <div class="details">
                            <div><p class="name">Palal Asare > Chores</p></div>
                            <div><p class="desc">Cleanfloor</p></div>
                            <div><img style="opacity: 0.5" src="../icons/tabler_flag-filled.svg" alt="picture of flag"></div>
                        </div>
                        <div class="color" style="background-color: #ffd3331f">
                        </div>
                    </div>
                    <div class="chore-task">
                        <div class="details">
                            <div><p class="name">Palal Asare > Chores</p></div>
                            <div><p class="desc">Cleanfloor</p></div>
                            <div><img style="opacity: 0.5" src="../icons/tabler_flag-filled.svg" alt="picture of flag"></div>
                        </div>
                        <div class="color" style="background-color: #ffd3331f">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    let chores = document.getElementById("chores")
    let choreTask = document.querySelectorAll(".chore-task")

    choreTask.forEach(element => {
        element.addEventListener("click", function(){
            window.location.replace("chore-management.php")
        })
    });

    chores.addEventListener("click", function(){
        window.location.replace("chore-management.php")
    })

</script>
</html>