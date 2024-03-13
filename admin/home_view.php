<?php
    include("../functions/home_fxn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slaveme</title>
    <link rel="stylesheet" href="../css/admin-dashboard.css">
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
        <div class="container" id="chore-control">
            <div><img src="../icons/la_broom.svg" alt="home icon"></div>
            <div><p>Manage Chores</p></div>
        </div>
        <div class="container" id="assign-chores">
            <div><img src="../icons/la_broom.svg" alt="home icon"></div>
            <div><p>Assign Chores</p></div>
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
            
                <div class="col-one">
                    <div class="chore-column">
                        <div class="line"><hr></div>
                        <div class="name-count">
                            <div class="name"><p>All Chores</p></div>
                            <div class="count"><p><?php echo ($all_assignments === null) ? 0 : count($all_assignments); ?></p></div>
                        </div>
                        <div><img src="../icons/mdi_add.svg" alt=""></div>
                    </div>
                    <?php 
                        list_assignments($recent);
                    ?>
    
                </div>
                <div class="col-two">
                    <div class="chore-column">
                        <div class="line"><hr></div>
                        <div class="name-count">
                            <div class="name"><p>InProgress</p></div>
                            <div class="count"><p><?php echo ($in_progress === null) ? 0 : count($in_progress); ?></p></div>
                        </div>
                        <div><img src="../icons/mdi_add.svg" alt=""></div>
                    </div>
                    <?php 
                        list_assignments($in_progress);
                    ?>
                </div>
                <div class="col-three">
                    <div class="chore-column">
                        <div class="line"><hr></div>
                        <div class="name-count">
                            <div class="name"><p>Incomplete</p></div>
                            <div class="count"><p><?php echo ($incomplete === null) ? 0 : count($incomplete); ?></p></div>
                        </div>
                        <div><img src="../icons/mdi_add.svg" alt=""></div>
                    </div>
                    <?php 
                        list_assignments($incomplete);
                    ?>
                </div>
                <div class="col-two extra">
                    <div class="chore-column">
                        <div class="line"><hr></div>
                        <div class="name-count">
                            <div class="name"><p>Completed</p></div>
                            <div class="count"><p><?php echo ($complete === null) ? 0 : count($complete); ?></p></div>
                        </div>
                        <div><img src="../icons/mdi_add.svg" alt=""></div>
                    </div>
                    <?php 
                        list_assignments($complete);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    const choreControl = document.getElementById("chore-control");
    const assignChores = document.getElementById("assign-chores");
    let choreTask = document.querySelectorAll(".chore-task")

    choreTask.forEach(element => {
        element.addEventListener("click", function(){
            window.location.replace("chore_control_view.php")
        })
    });

    // route to appropriate pages
    choreControl.addEventListener("click", function(){
        window.location.replace("chore_control_view.php")
    })

    assignChores.addEventListener("click", function(){
        window.location.replace("assign-chore-view.php")
    })
</script>
</html>