<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slaveme</title>
    <!-- <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js'></script> -->
    <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <div class="titles">
        <div class="img-container">
            <img class="logo" src="../images/slave-me-logo-removebg-preview 1.png"/>
        </div>
        <div>
            <h1 class="slave-me-title">Slaveme</h1>
        </div>
    </div>
    <div class="intro-text">Good to see you again</div>
    <div class="sign-in-box">
        <form action="../action/login_user.php" method="post" id="login-form" class="login-form">
            <div><p class="box-label">Your email</p></div>
            <div class="input-box">
                <input class="input-text" name="email" type="text" pattern="[a-z]+@ashesi.com" placeholder="e.g.palalasare@ashesi.com" required/>
                <img src="../icons/iconamoon_profile-fill.svg">
            </div >
            <div>
                <p class="box-label">Your password</p>
            </div>
            <div class="input-box">
                <input class="input-text" name="password" type="password" placeholder="e.g.ilovemango" minlength="8" required/>
                <img src="../icons/fa-solid_unlock.svg">
            </div>
            <button type="submit" name="submit-btn" class="btn" id="login-btn">Sign in</button>
            <div class="bottom-links">
                <div>
                    <a href="register.php">Don't have an account</a>
                </div>
                <div>
                    <a href="">Forgot password</a>
                </div>
            </div>
        </form>
    </div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function (){
        <?php
            if (isset($_GET['msg']) && $_GET['msg'] == 'emerror'){
                echo "swal('Error','Your email is incorrect!', 'error');";
            }
            else if (isset($_GET['msg']) && $_GET['msg'] == 'pserror'){
                echo "swal('Error','Your password is incorrect!', 'error');";
            }
        ?>
    })
    </script>
</html>