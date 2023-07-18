<?php 
include "Conn.php";
?>

<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Responsive Login and Signup Form </title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <section class="container forms">
        <!-- Signup Form -->

        <div class="form signup">
            <div class="form-content">
                <header>Signup</header>
                <!--use-->
                <form action="#">
                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input" name="Email">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Create password" class="password" name="Password">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Confirm password" class="password" name="Confirmpassword">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field button-field">
                        <button type="submit" name="submit">Signup</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                </div>
            </div>

            <div class="line"></div>

            <div class="media-options">
                <a href="#" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Login with Facebook</span>
                </a>
            </div>

            <div class="media-options">
                <a href="#" class="field google">
                    <img src="images/google.png" alt="" class="google-img">
                    <span>Login with Google</span>
                </a>
            </div>

        </div>
        <!--login-->
        <div class="form login">
            <div class="form-content">
                <header>Login</header>
                <form action="">
                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input" name="email1">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Password" class="password" name="password1">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="form-link">
                        <a href="#" class="forgot-pass">Forgot password?</a>
                    </div>

                    <div class="field button-field">
                        <button type="submit" name="submit">Login</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                </div>
            </div>

            <div class="line"></div>

            <div class="media-options">
                <a href="https://www.facebook.com/login.php/" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Login with Facebook</span>
                </a>
            </div>

            <div class="media-options">
                <a href="https://www.Google.com/" class="field google">
                    <img src="images/google.png" alt="" class="google-img">
                    <span>Login with Google</span>
                </a>
            </div>

        </div>
    </section>

    <!-- JavaScript -->
    <script src="js/script.js"></script>
    <?php
    
    if (isset($_REQUEST['submit'])) {
        
        $ins="insert into login values('".$_REQUEST['Email']."','".$_REQUEST['Password']."','".$_REQUEST['Confirmpassword']."','".$_REQUEST['email1']."','".$_REQUEST['password1']."')";

        $ex=$conn->query($ins);

        if ($ex) {
            
            echo '<script>alert("Thanks")</script>';
        }
        else{

            echo "Not";
        }
    }




?>
</body>

</html>