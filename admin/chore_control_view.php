<?php
    include("../settings/core.php");
    include("../functions/chore_fxn.php");
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
    <link rel="stylesheet" href="../css/admin-management.css">
    <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
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
        <div class="container">
            <div><img src="../icons/la_broom.svg" alt="home icon"></div>
            <div><p style="color: rgb(16, 148, 16); font-weight: bold;">Manage Chores</p></div>
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
                <div class="pop-up" id="pop">
                    <div class="header">
                        <div><p><strong>Add a chore</strong></p></div>
                        <div id="close-pop-up"><p>X</p></div>
                    </div>
                    <div><hr></div>
                    <div class="form-container">
                        <form action="../action/add_score_action.php" method="post" name="add-chore-form" id="">
                            <input id="chore-name" name="chore-name" type="text" placeholder="Chore name" pattern="[A-Za-z\s]+">
                            <input id="submit-btn" name="submit" type="submit">
                        </form>
                    </div>
                </div>


                <div class="title-add">
                    <div><p>Chore List</p></div>
                    <div><button id="add-chore">Add a chore</button></div>
                </div>
                <div class="chore-table">
                    <div class="row headings">
                        <div>
                            Chore name
                        </div>
                        <div class="actions">
                            Actions
                        </div>
                    </div>
                    <?php
                        display_rows();
                    ?>
                </div>
            </div>
            
        </div>
    </div>
</body>
<script>
    let addChoreButton = document.getElementById("add-chore");
    let popUpBox = document.getElementById("pop");
    let overlay = document.getElementById("overlay");
    let closePopUp = document.getElementById("close-pop-up")
    let submitBtn = document.getElementById("submit-btn");

    const assignChores = document.getElementById("assign-chores");
    const homeView = document.getElementById("home-view");

    function validateForm(event){
        let choreName = document.getElementById("chore-name").value;
        let pattern = /^[A-Za-z\s]+$/;

        if (!pattern.test(choreName)){
            swal('Error',"Can't add chore. Only letters allowed.", 'error');
            event.preventDefault();
        }
    }

    addChoreButton.addEventListener("click", function() {
        popUpBox.style.visibility = "visible";
        overlay.style.visibility = "visible";
    });

    closePopUp.addEventListener("click", function(){
        popUpBox.style.visibility = "hidden";
        overlay.style.visibility = "hidden";
    })

    submitBtn.addEventListener("click", validateForm);

    document.addEventListener("DOMContentLoaded", function (){
        <?php
            if (isset($_GET['msg']) && $_GET['msg'] == 'inerror'){
                echo "swal('Error','Can't add chore', 'error');";
            }
            // if(isset($_GET['msg']) && $_GET['msg'] == 'dcerror'){
            //     echo "swal('Error', 'Can't delete chore', 'error');";
            // }
        ?>
    })

    // route to appropriate pages
    homeView.addEventListener("click", function(){
        window.location.replace("home_view.php")
    })

    assignChores.addEventListener("click", function(){
        window.location.replace("assign-chore-view.php")
    })

    
</script>
</html>