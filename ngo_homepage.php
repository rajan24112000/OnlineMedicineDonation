<?php

	session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ngo_homepage.css">
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
                <a class="active" href="ngo_homepage.php">Home</a>
            </li>
            <li>
                <a href="view_medicine.php">Donated Medicine</a>
            </li>
		    <form method="post">
                <button name="logout" class="log-btn">Logout</button>
            </form>
        </ul>
        <?php
            if(isset($_POST['logout']))
            {
                session_destroy();
                header('location:ngo.php');
            }
        ?>
    </nav>
    <div id="banner">
        <div id="main-wrapper">
            <center><h3 style="font-size: 300%; font-weight: bold;">Welcome <?php echo $_SESSION['username']?></h3></center>
        </div>
    </div>
    <main>
        <footer>
            <div id="left-footer">
                <h3>Quick Links</h3>
                <p>
                    <ul>
                        <li>
                            <a href="ngo
                            _homepage.php">Home</a>
                        </li>
                        <li>
                            <a href="view_medicine.php">Donated Medicine</a>
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