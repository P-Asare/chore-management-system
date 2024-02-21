<?php
    include("../settings/core.php");
    check_login();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slaveme</title>
    <link rel="stylesheet" href="../css/admin-management.css">
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
            <div><p style="color: rgb(16, 148, 16); font-weight: bold;">Manage Chores</p></div>
        </div>
        <div class="container">
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
                        <form action="" method="post" name="" id="">
                            <input id="chore-name" name="chore-name" type="text" placeholder="Chore name" pattern="[A-Za-z]+">
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
                    <div class="row">
                        <div>
                            Sweep
                        </div>
                        <div class="actions">
                            <div> Edit</div>
                            <div>Delete</div>
                        </div>
                    </div>
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

    function validateForm(event){
        let choreName = document.getElementById("chore-name").value;
        let pattern = /^[A-Za-z]+$/;

        if (!pattern.test(choreName)){
            alert('Chore Name should contain only letters');
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

    
</script>
</html>