<?php
    session_start();
    require('dbconfig/config.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/about.css">
</head>

<body>
    <nav>
        <div id="logo-img">
            <a href="#">
                <img src="img/logo.jpg" alt="MedicineDonation">
            </a>
            <h5>Welcome <?php echo $_SESSION['username'] ?></h5>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a class="active" href="index_homepage.php">Home</a>
            </li>
            <li>
                <a href="ngo_list.php">NGO's</a>
            </li>
            <li>
                <a href="Donate.php">Donate</a>
            </li>
            <form method="post">
                <button name="logout" class="log-btn">Logout</button>
            </form>
        </ul>
        <?php
            if(isset($_POST['logout']))
            {
                session_destroy();
                header('location:login.php');
            }
        ?>
    </nav>
   
    <main>
        <h2 class="page-heading"> About Donate Medicine</h2>
        <div id="post-container">
            <section id="blogpost">
                <div class="card">
                    <div class="card-description">
                        
                        <p class="paragraph">This website is about the collection of medicine
                             which is unused bythe patient who recovers completely and medicine becomes waste that medicine can be collected and used further for needy people.</p>
                        <p class="paragraph">The website must be like user can donate the unused 
                            medicine to NGO.That NGO can help needy people. The user can donate the medicine.It’s can be claimed by NGO.  They can collect from a particular place. </p>
                    </div>
                </div>
            </section>
        </div>
        <h2 class="contact-heading">Contact Us</h2>
        <div id="banner">
            <div id="main-wrapper">
                <center>
                    <h2>Contact Us</h2>
                </center>
                <hr>
                <form class="contact-form" method="post">
                    <div class="inner_container">
                        <h3><b>Please fill out the form below to contact us and we will get in touch with you shortly.</b>
                        </h3>
                        <label><b>Name</b></label>
                        <input type="text" placeholder="First" name="fname" required>
                        <input type="text" placeholder="Last" name="lname" required>
                        <br><br>

                        <label><b>Email-id</b></label>
                        <input type="email" placeholder="Email" name="email" required>
                        <br><br>

                        <label><b>Contact no.</b></label>
                        <input type="tel" name="contact_no" required>
                        <br><br>

                        <label><b>Message</b></label>
                        <br><br>
                        <textarea name="message" id="text_area" cols="60" rows="8"></textarea>
                        <br><br>

                        <button type="submit" name="contact" value="submit" class="contactus_button">Submit</button>
                    </div>
                </form>
                <?php
                if(isset($_POST['contact']))
                {
                    //echo '<script type="text/javascript">alert("submit button clicked ")</script>'

                    @$fname = $_POST['fname'];
                    @$lname = $_POST['lname'];
                    @$email = $_POST['email'];
                    @$conatct_no = $_POST['contact_no'];
                    @$message = $_POST['message'];

                    $query = "insert into contacttable values('','$fname','$lname','$email','$contact_no','$message')";
                    $query_run = mysqli_query($con,$query);
                    if($query_run)
                    {
                        echo '<script type="text/javascript">alert("your query is submited we will get in touch with you shortly.")</script>';
                    }
                    else
                    {
                        echo '<script type="text/javascript">alert("db error! try again after some time")</script>';
                    }
                }
                else
                {
                
                }
            ?>
            </div>
        </div>
        <footer>
            <div id="left-footer">
                <h3>Quick Links</h3>
                <p>
                    <ul>
                        <li>
                            <a href="index_homepage.php">Home</a>
                        </li>
                        <li>
                            <a href="ngo_list.php">NGO's</a>
                        </li>
                        <li>
                            <a href="Donate.php">Donate</a>
                        </li>
                    </ul>
                </p>
            </div>
            <div id="right-footer">
                <h3>Follow us on</h3>
                <div id="social-media-footer">
                    <ul>
                        <li>
                            <a href="">
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
