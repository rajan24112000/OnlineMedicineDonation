<?php
    session_start();
    require("dbconfig/config.php");

    $query = "select * from ngologin";
    $result = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>NGO Details</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/thanku.css">
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
                <a class="active" href="index.php">Home</a>
            </li>
            <li>
                <a href="Donate.php">Donate</a>
            </li>
            <li>
                <a href="about.php">About Us</a>
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
    <div id="banner">
        <div id="main-wrapper">
            <h2><center>Know More About NGO</center></h2>
            <table class="inner-container" align="center" border="1px;" style="width:95%;line-height: 35px; background-color: #adc7dc; margin-top: 10px;">
                <tr>
                    <th colspan="8"><h2>NGO List</h2></th>
                </tr>
                <t width="100"style="text-align: center;"> 
                    <th width="100">ID</th>
                    <th>NGO Name</th>
                    <th>City</th>
                    <th>About</th>
                </t>
                <?php
                    while($rows = mysqli_fetch_assoc($result))
                    {
                ?>  
                    <tr style="text-align: center;">
                        <td><?php echo $rows['id']; ?></td>
                        <td><?php echo $rows['ngo_name']; ?></td>
                        <td><?php echo $rows['city']; ?></td>
                        <td><a href="introduction_duplicate.php" style="font-size: 15px; font-weight: bold; color: red; text-decoration: underline;">Click Here</a></td>
                    </tr>
                <?php   
                    }
                ?>
            </table>
        </div>
    </div>
    <main>
        <footer>
            <div id="left-footer">
                <h3>Quick Links</h3>
                <p>
                    <ul>
                        <li>
                            <a href="index_homepage.php">Home</a>
                        </li>
                        <li>
                            <a href="Donate.php">Donate</a>
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
</body>
</html>