<?php

?>
<html>

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/homepage.css">
</head>
<body>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="adminhomepage.php">Home</a>
            </li>
            <li>
                <a href="userdetail.php">Donors</a>
            </li>
            <li>
                <a href="ngodetail.php">NGO's</a>
            </li>
            <li>
                <a href="getmedicines.php">Medicine</a>
            </li>
            <li>
                <a href="admin.php">Logout</a>
            </li>
        </ul>
    </div>
    <nav>
        <div id="logo-img">
            <a href="#">
                <img src="img/logo.jpg" alt="MedicineDonation">
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a class="active" href="adminhomepage.php">Home</a>
            </li>
            <li>
                <a href="userdetail.php">Donors</a>
            </li>
            <li>
                <a href="ngodetail.php">NGO's</a>
            </li>
            <li>
                <a href="getmedicines.php">Medicines</a>
            </li>
            <li>
                <a href="admin.php">Logout</a>
            </li>
        </ul>
    </nav>
    <div id="banner"></div>
    <footer>
		<div id="left-footer">
			<h3>Quick Links</h3>
            <p>
				<ul>
                    <li>
                        <a href="adminhomepage.php">Home</a>
                    </li>
                    <li>
                       	<a href="userdetail.php">Users</a>
                    </li>
                    <li>
                       	<a href="ngodetail.php">NGO's</a>
                    </li>
                    <li>
                        <a href="getmedicines.php">Medicines</a>
                    </li>
                    <li>
                        <a href="admin.php">Logout</a>
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
</body>
</html>
