<?php

    require('dbconfig/config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/
    all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/register.css">
    
        
</head>

<body>
    <nav>
        <div id="logo-img">
            <a href="#">
                <img src="img/logo.jpg" alt="DonateMedicine">
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a class="active" href="index.php">Home</a>
            </li>
            <li>
                <a href="ngo_list1.php">NGO's</a>
            </li>
            <li>
                <a href="ngo.php">NGO Login</a>
            </li>
            <li>
                <a href="about.php">About Us</a>
            </li>
        </ul>
    </nav>
    <div id="banner">
        <div id="main-wrapper">
            <center>
                <h2>Register Yourself</h2>
            </center>
            <form  name='registration' action="#" method="post" onsubmit="return validation()">
                <div class="imgcontainer">
                    <img src="img/img1.png" class="img1" alt="image not available">
                </div>
                <div class="inner_container">
                    <label><b>First Name</b></label>
                    <input type="text" placeholder="Enter first name" name="firstname" id="fname" autocomplete="off">
                    <span id="firstname" class="text-danger font-weight-bold"> </span>
                    <br><br>

                    <label><b>Last Name</b></label>
                    <input type="text" placeholder="Enter last name" name="lastname" id="lname" autocomplete="off">
                    <span id="lastname" class="text-danger font-weight-bold"> </span>
                    <br><br>

                    <label><b>Email-id</b></label>
                    <input type="email" placeholder="Enter the email-id" name="email" id="emails" autocomplete="off">
                    <span id="email" class="text-danger font-weight-bold"> </span>
                    <br><br>

                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter username" name="username" id="user" autocomplete="off">
                    <span id="username" class="text-danger font-weight-bold"> </span>
                    <br><br>

                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" id="pass" autocomplete="off">
                    <span id="password" class="text-danger font-weight-bold"> </span>
                    <br><br>

                    <label><b>Confirm Password</b></label>
                    <input type="password" placeholder="Enter the password again" name="cpassword" id="cpass"autocomplete="off">
                    <span id="cpassword" class="text-danger font-weight-bold"> </span>
                    <br><br>

                    <input type="submit" value="Register" class="signup_button" name="register">

                    <a href="login.php"><button type="button" class="back_button">Back to Login</button></a>
                </div>
            </form>
            <script type="text/javascript">
        
            function validation(){

                var firstname = document.getElementById('fname').value;
                var lastname = document.getElementById('lname').value;
                var email = document.getElementById('emails').value;
                var username = document.getElementById('user').value;
                var password = document.getElementById('pass').value;
                var cpassword = document.getElementById('cpass').value;

                // Validating First Name
                if(firstname == ""){
                    document.getElementById('firstname').innerHTML =" ** Please fill the firstname field";
                    return false;
                }
                if((firstname.length <= 2) || (firstname.length > 20)) {
                    document.getElementById('firstname').innerHTML =" ** firstname lenght must be between 2 and 20";
                    return false;   
                }
                if(!isNaN(firstname)){
                    document.getElementById('firstname').innerHTML =" ** only characters are allowed";
                    return false;
                }

                // Validating Last Name
                if(lastname == ""){
                    document.getElementById('lastname').innerHTML =" ** Please fill the lastname field";
                    return false;
                }
                if((lastname.length <= 2) || (lastname.length > 20)) {
                    document.getElementById('lastname').innerHTML =" ** lastname lenght must be between 2 and 20";
                    return false;   
                }
                if(!isNaN(lastname)){
                    document.getElementById('lastname').innerHTML =" ** only characters are allowed";
                    return false;
                }

                //Validating email id
                if(email == ""){
                    document.getElementById('email').innerHTML =" ** Please fill the email idx` field";
                    return false;
                }
                if(email.indexOf('@') <= 0 ){
                    document.getElementById('email').innerHTML =" ** @ Invalid Position";
                    return false;
                }

                if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
                    document.getElementById('email').innerHTML =" ** . Invalid Position";
                    return false;
                }

                // Validating username
                if(username == ""){
                    document.getElementById('username').innerHTML =" ** Please fill the username field";
                    return false;
                }
                if((username.length <= 2) || (username.length > 20)) {
                    document.getElementById('username').innerHTML =" ** Username lenght must be between 2 and 20";
                    return false;   
                }
                if(!isNaN(username)){
                    document.getElementById('username').innerHTML =" ** only characters are allowed";
                    return false;
                }

                // Validating password and confirm password
                if(password == ""){
                    document.getElementById('password').innerHTML =" ** Please fill the password field";
                    return false;
                }
                if((password.length <= 5) || (password.length > 20)) {
                    document.getElementById('password').innerHTML =" ** Passwords lenght must be between  5 and 20";
                    return false;   
                }

                if(password!=cpassword){
                    document.getElementById('password').innerHTML =" ** Password does not match the confirm password";
                    return false;
                }

                if(cpassword == ""){
                    document.getElementById('cpassword').innerHTML =" ** Please fill the confirmpassword field";
                    return false;
                }
            }
            </script>
            <?php
                if(isset($_POST['register']))
                {
                    //echo '<script type="text/javascript">alert("register button clicked")</script>';
                    @$firstname = $_POST['firstname'];
                    @$lastname = $_POST['lastname'];
                    @$email = $_POST['email'];
                    
                    @$username = $_POST['username'];
                    @$password = $_POST['password'];
                    @$cpassword = $_POST['cpassword'];
                    
                    if($password == $cpassword)
                    {
                        $encrypted_password = md5($password);
                        $query = "select * from logintable WHERE username = '$username'";
                        //echo $query;
                        $query_run = mysqli_query($con,$query);
                        //echo mysql_num_rows($query_run);
                        if($query_run)
                        {
                            if(mysqli_num_rows($query_run)>0)
                            {
                                echo '<script type="text/javascript">alert("This username alredy exists.. please try another username!")</script>';
                            }
                            else
                            {
                                $query = "insert into logintable values(' ','$firstname','$lastname','$email','$username','$encrypted_password')";
                                $query_run = mysqli_query($con,$query);
                                if($query_run)
                                {
                                    echo '<script type="text/javascript">alert("User Registered.. welcome")</script>';   
                                }
                                else
                                {
                                    echo '<p class="bg-danger msg-block">Registration unsuccessful due to server error.please try later.</p>';
                                }
                            }
                        }
                        else
                        {
                            echo '<script type="text/javascript">alert("db error")</script>';
                        }
                    }
                    else
                    {
                        echo '<script type="text/javascript">alert("password and confirm password do not match.")</script>';
                    }
                }
                else
                {
                    
                }  
            ?>
           
        </div>
    </div>
    <main>
        <footer>
            <div id="left-footer">
                <h3>Quick Links</h3>
                <p>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="ngo-list1.php">NGO's</a>
                        </li>
                        <li>
                            <a href="ngo.php">NGO Login</a>
                        </li>
                        <li>
                            <a href="about.php">About Us</a>
                        </li>
                    </ul>
                </p>
            </div>
            <div id="right-footer">
                <h3>Follow us on</h3>
                <div id="social-media-footer">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>This website is developed by Medicine Donation team.</p>
            </div>
        </footer>
    </main>
</body>

</html>

