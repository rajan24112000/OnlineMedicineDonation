<?php
     session_start();
     require('dbconfig/config.php');
?>
<!DOCTYPE html>
<html>
<head>

	<title>Donate</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/donate.css">
   
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
                <a href="about.php">About US</a>
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
        <h3>Select NGO to Donate The Medicines</h3>
        <div id="main-wrapper">
                <form action="Donate.php" method="POST">
                    <center><label style="font-weight: bold;font-size: 20px; color: black; ">Select City :</label>
                    <select name="city" style="font-size: 20px; width: 40%;">
                        <option>Select</option>
                        <option>Delhi</option>
                        <option>Mumbai</option>
                        <option>Gujrat</option>
                        <option>Rajesthan</option>
                        <option>Asam</option>                   
                    </select></center>
                    <br>    
                    <center><button name="submit" type="submit" style="font-size: 20px; background-color: blue;">Submit</button></center>
                </form>
        </div>
            <table class="inner-container" align="center" border="1px;" style="width:95%;line-height: 35px; background-color: #adc7dc; margin-top: 10px;">
            <tr>
                <th colspan="8"><h2>NGO's Record</h2></th>
            </tr>
            <t width="100"style="text-align: center;"> 
                <th width="100">ID</th>
                <th>NGO Name</th>
                <th>Contact No.</th>
                <th>City</th>
                <th>About</th>
                <th>Actions</th>
            </t>
            <tbody>
                <?php
                    if(isset($_POST['submit'])){
                        $city = $_POST['city'];

                        if($city != " "){
                            $query = "SELECT * FROM ngologin WHERE city = '$city'";
                            $data = mysqli_query($con,$query) or die('error');
                            if(mysqli_num_rows($data)>0){
                                while($rows = mysqli_fetch_assoc($data)){
                                    $id = $rows['id'];
                                    $ngo_name = $rows['ngo_name'];
                                    $contact_no = $rows['contact_no'];
                                    $city = $rows['city'];
                                ?>
                                <tr style="text-align: center;">
                                    <td><?php echo $rows['id']; ?></td>
                                    <td><?php echo $rows['ngo_name']; ?></td>
                                    <td><?php echo $rows['contact_no']; ?></td>
                                    <td><?php echo $rows['city']; ?></td>
                                    <td style="font-weight: bold; background-color: green; text-align: center;"><?php echo "<a href='introduction_duplicate.php?id=". $rows['id'] ."' title='About NGO' data-toggle='tooltip'><span>About NGO</span></a>"; ?></td>
                                    <td style="font-weight: bold; background-color: red; text-align: center;"><?php echo "<a href='donateform.php' title='Donate' data-toggle='tooltip'><span>Donate</span></a>"; 
                                        $_SESSION['ngo_name']=$ngo_name;

                                    ?></td>

                                </tr>
                                <?php     
                                }
                            }
                            else{
                                ?>
                                    <tr>
                                        <td colspan="5"><center>Records Not Found</center></td>
                                    </tr>
                                <?php

                            }
                        }
                    }
                ?>
            </tbody>
        </table>
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
                            <a href="ngo_list.php">NGO's</a>
                        </li>
                        <li>
                            <a href="about.php">About Us</a>
                        </li>
                        <li>
                            <a href="index.php">Logout</a>
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