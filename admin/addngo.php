<?php
	require('../dbconfig/config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add NGO</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/addngo.css">
    
</head>
<body>
	<div id="main-wrapper">
            <center>
                <h2>Add NGO</h2>
            </center>
            <form  name='ngo' action="#" method="post" onsubmit="return validation()">
                <div class="inner_container">
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" id="uname" autocomplete="off">
                     <span id="username" class="text-danger font-weight-bold"> </span>
                    <br><br>

                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" id="pass" autocomplete="off">
                     <span id="password" class="text-danger font-weight-bold"> </span>
                    <br><br>

                    <label><b>NGO Name</b></label>
                    <input type="text" placeholder="Enter the NGO name" name="ngo_name" id="ngoname" autocomplete="off">
                     <span id="ngo_name" class="text-danger font-weight-bold"> </span>
                    <br><br>

                    <label><b>Contact No.</b></label>
                    <input type="text" placeholder="Enter Contact no." name="contact_no" id="contact" autocomplete="off">
                     <span id="contact_no" class="text-danger font-weight-bold"> </span>
                    <br><br>

                    <label><b>City</b></label>
                    <input type="text" placeholder="Enter City" name="city" id="city" autocomplete="off">
                     <span id="city" class="text-danger font-weight-bold"> </span>
                    <br><br>

                      <input type="submit" value="Add" class="add-btn" name="Add">

                    <a href="ngodetail.php"><button type="button" class="back_button">Back</button></a>
                </div>
            </form>

            <script type="text/javascript">
        
            function validation(){
                var username = document.getElementById('uname').value;
                var password = document.getElementById('pass').value;
                var ngo_name = document.getElementById('ngoname').value;
                var contact_no = document.getElementById('contact').value;
                var city = document.getElementById('city').value;
                
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

                // Validating ngo name
                if(ngo_name == ""){
                document.getElementById('ngo_name').innerHTML =" ** Please fill the ngo_name field";
                return false;
                }
                if((ngo_name.length <= 2) || (ngo_name.length > 20)) {
                    document.getElementById('username').innerHTML =" ** ngo_name lenght must be between 2 and 20";
                    return false;   
                }
                if(!isNaN(ngo_name)){
                    document.getElementById('ngo_name').innerHTML =" ** only characters are allowed";
                    return false;
                }

                // Validating COntact no 
                if(contact_no == ""){
                document.getElementById('contact_no').innerHTML =" ** Please fill the mobile NUmber field";
                return false;
                }
                if(isNaN(contact_no)){
                    document.getElementById('contact_no').innerHTML =" ** user must write digits only not characters";
                    return false;
                }
                if(contact_no.length!=10){
                    document.getElementById('contact_no').innerHTML =" ** Mobile Number must be 10 digits only";
                    return false;
                }

                // Validating City
                if(city == ""){
                document.getElementById('city').innerHTML =" ** Please fill the city field";
                return false;
                }
                if((city.length <= 2) || (city.length > 20)) {
                    document.getElementById('city').innerHTML =" ** city lenght must be between 2 and 20";
                    return false;   
                }
                if(!isNaN(city)){
                    document.getElementById('city').innerHTML =" ** only characters are allowed";
                    return false;
                }
            }
            </script>
            <?php
            	if(isset($_POST['Add']))
            	{

            		@$username = $_POST['username'];
            		@$password = $_POST['password'];
            		@$ngo_name = $_POST['ngo_name'];
            		@$contact_no = $_POST['contact_no'];
            		@$city = $_POST['city'];

            		if($username == ""|| $password == ""|| $ngo_name == ""|| $contact_no == ""|| $city == "")
            		{
            			echo '<script type="text/javascript">alert("insert values in all fields")</script>';
            		}
            		else
            		{
            			$query = "insert into ngologin values('','$username','$password','$ngo_name','$contact_no','$city')";
                        $query_run = mysqli_query($con, $query);
                        if($query_run)
                        {
                        	echo '<script type="text/javascript">alert("NGO added successfully")</script>';
                        }
                        else
                        {
                            echo '<script type="text/javascript">alert("Value not inserted")</script>';
                        }
            		}
            	}
            ?>
    </div>
</body>
</html>