<?php
    include("../functions/select_role.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slaveme</title>
    <link rel="stylesheet" href="../css/login-page.css">
</head>
<body>

    <div class="side-sign-up">
        <div><img src="../images/slave-me-logo-removebg-preview 1.png" alt="slaveme logo"></div>
        <div><p>Welcome to</p></div>
        <div><h1>Slaveme</h1></div>
    </div>
    <div class="sign-up-container">
        <div class="title">Sign Up</div>
        <div class="sub-text">Create an account with slaveme to make full use of the system</div>
        <div class="form-container">
            <form action="../action/register_user.php" method="post" id="register-form" name="register-form">
                <div class="sign-up-form">
                    <div>
                        <div><p class="box-label">First Name</p></div>
                        <div><input type="text" name="first-name" class="input-text" placeholder="e.g Palal" pattern="[A-Za-z]+" required></div>
                        <div><p class="box-label">Email</p></div>
                        <div><input type="text" name="email" class="input-text" placeholder="e.g.palal@ashesi.com" pattern="[a-z]+@ashesi.com" required></div>
                        <div><p class="box-label">Phone Number</p></div>
                        <div><input type="text" name="number" class="input-text" placeholder="e.g. +233599583778" pattern="[+233][1-9]+" required></div>
                        <div><p class="box-label">Password</p></div>
                        <div class="password-box">
                            <img src="../icons/bxs_show.svg" alt="">
                            <input id="password1" name="password" type="password" class="password" placeholder="e.g ilovemango24" minlength="3" required>
                        </div>
                    </div>
                    <div>
                        <div><p class="box-label">Last Name</p></div>
                        <div><input type="text" name="last-name" class="input-text" placeholder="e.g Palal" pattern="[A-za-z]+" required></div>
                        <div class="radio">
                            <div class="radio-options">
                                <div><label for="female"><p>Female</p></label></div>
                                <div style="margin-top: 9px;"><label for="male"><p>Male</p></label></div>
                            </div>
                            <div class="radio-options">
                                <div><input type="radio" id="male" class="options" name="gender" value="male" required></div>
                                <div><input type="radio" id="female" class="options" name="gender" value="female" required></div>
                            </div>
                        </div>
                        <div><p class="box-label">Date of Birth</p></div>
                        <div class="date-of-birth-box">
                            <!-- <img src="../icons/solar_calendar-bold.svg" alt="calendar icon"> -->
                            <input type="date" class="input-text" name="dob" placeholder="12-Aug-24" pattern="[0-9]{2}-[A-za-z]{3}-[0-9]{2}" required>
                        </div>
                        <div><p class="box-label">Confirm Password</p></div>
                        <div class="password-box">
                            <img src="../icons/bxs_show.svg" alt="">
                            <input id="password2" type="password" name="confirm-password" class="password" placeholder="e.g ilovemango24" required>
                        </div>
                    </div>
                </div>
                <div class="dropdown">
                    <label for="position"><p>Position</p></label>
                    <select name="birth-position">
                        <?php foreach ($family_roles as $role): ?>
                            <option value="<?php echo $role['fid']; ?>"><?php echo $role['fam_name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="terms-container">
                    <div><input type="checkbox" id="terms-conditions" name="terms-conditions" required></div>
                    <div><p>I agree to all terms and conditions</p></div>
                </div>
                <div class="button-container">
                    <button id="submit-btn" name="submit-btn" type="submit">Sign in</button>
                </div>
            </form>
        </div>
        <div>
            <p class="account-text">Already have an account? <span><a href="index.html">Sign in</a></span></p>
        </div>
    </div>
    
</body>
<script>
    let form = document.getElementById("register-form")

    form.addEventListener("submit", function(event) {
        
        const password1 = document.getElementById("password1").value
        const password2 = document.getElementById("password2").value
        
        if (password1 != password2){
            event.preventDefault()
            alert("Your password is incorrect.")
        }
        // else {
        //     window.location.replace("../view/home-page.html")
        // }
    })
</script>
</html>