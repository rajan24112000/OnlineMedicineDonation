<?php 

    session_start();
    require('dbconfig/config.php');

 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>

<body> 
    <nav>
        <div id="logo-img">
            <a href="#">
                <img src="img/logo.jpg" alt=" DonateMedicine">
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
                <a href="about1.php">About US</a>
            </li>
        </ul>
    </nav>
    <div id="banner">
        <div id="main-wrapper">
            <center>
                <h2>User Login</h2>
            </center>
            <div class="imgcontainer">
                <img src="img/img1.png" class="img1" alt="loginimage">
            </div>
            <form  name="registration" action="login.php" method="post">
                <div class="inner_container">
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter username" name="username">
                    <br><br>

                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter password" name="password" required>
                    <br><br>

                    <button class="login_button" name="login" type="submit">Login</button>

                    <a href="register.php"><button type="button" class="register_button">Register</button></a>
                </div>
            </form>
            <?php
                if(isset($_POST['login']))
                {
                    @$username = $_POST['username'];
                    @$password = $_POST['password'];
                    $encrypted_password = md5($password);
                    $query = "select * from logintable WHERE username = '$username' AND password = '$encrypted_password'";
                    //echo $query;
                    $query_run = mysqli_query($con,$query);
                    //echo mysql_num_rows($query_run);
                    if($query_run)
                    {
                        if(mysqli_num_rows($query_run)>0)
                        {
                            //VALID
                            $_SESSION['username'] = $username;
                            header('location:index_homepage.php');
                        }
                        else
                        {
                            echo '<script type="text/javascript">alert("No such user exists or Invalid Credentials")</script>';
                        }
                    }
                    else
                    {
                        echo '<script type="text/javascript">alert("Database Error")</script>';
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
                            <a href="about1.php">About Us</a>
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
</Body>

</html>