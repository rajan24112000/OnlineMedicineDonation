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
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" type="text/css" href="css/donate_form.css">
    <style type="text/css">
        #medname-list{float:left;list-style:none;margin-top:-3px;padding:0;width:190px;position: absolute;}
        #medname-list li{padding: 10px; background: #f0f0f0; border-bottom: #bbb9b9 1px solid;}
        #medname-list li:hover{background:#ece3d2;cursor: pointer;}
        #search-box{padding: 10px;border: #a8d4b1 1px solid;border-radius:4px;
    </style>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    
    <script type="text/javascript">
       
        function PreviewImage(){
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById('imglink').files[0]);

            oFReader.onload = function(oFREvent){
                document.getElementById("uploadPreview").src = oFREvent.target.result;
            };
        };

        function myFunction() {
            location.replace("index_homepage.php")
        };

        $(document).ready(function(){
                $("#search-box").keyup(function(){
                    $.ajax({
                        type: "POST",
                        url: "mysql.php",
                        data:'keyword='+$(this).val(),
                        beforeSend: function(){
                            $("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
                        },
                        success: function(data){
                            $("#suggesstion-box").show();
                            $("#suggesstion-box").html(data);
                            $("#search-box").css("background","#FFF");
                        }
                    });
                });
        });
        function selectMedname(val) {
            $("#search-box").val(val);
            $("#suggesstion-box").hide();
        } 
    </script>    
    
   
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
        <div id="main-wrapper">
            <h2><center>Donate To Save Others Life</center></h2>
            <form id="wrap" method="post" enctype="multipart/form-data" action="#">
                <?php
                    echo "<h3>Thank you for selecting<h3>";
                ?>
                <h2>NGO Details</h2>
                <label>NGO Name *:</label>
                <input type="text" name="ngo_name" class="input1" placeholder="NGO Name" id="ngo">
                <span id="ngo_name" class="error"> </span>

            
                <h2>Personal Details</h2>

                <label>Name *: </label>
                <input type="text" class="input1" name="fname" placeholder="First Name" id="fname">
                <input type="text" name="mname" placeholder="Middle Name (Optional)">
                <input type="text" name="lname" placeholder="Last Name" size="20" />

                <br><br>
                <label>Email-id *: </label> 
                <input type="email" class="input2" name="email" placeholder="Email-id">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label>Conatact No. *: </label>
                <input type="text" class="input3" name="contactno" id="contact">
                <span id="contactno" class="error"> </span>
                <br><br>

                <h2>Residential Address</h2>
                
                <label>Flat/Door/Block No. *: </label>
                <input type="text" class="input4" name="flatno">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label>Street/Lane *: </label>
                <input type="text" class="input5" name="street" id="street">
                <br><br>
                <label>Area/Locality *: </label>
                <input type="text" class="input6" name="area">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label>Pin code *: </label>
                <input type="text" class="input7" name="pincode">
                <br><br>
                <label>State *: </label>
                <input type="text" class="input8" name="state">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label>City/Town *: </label>
                <input type="text" class="input9" name="city">

                <h2>Medicine Details</h2>
                <h5><u>Note</u></h5>
                <p><b>-> image size should not be more than 2mb.</b></p>
                <p><b>-> image should be in jpg,jpeg,png format</b></p>
                
                <label>Medicine Name *:</label>
                <input type="text" class="input10" name="medname" id="search-box">
                <span id="medname" class="error"> </span>
                <div id="suggesstion-box"></div>

                <br><br>                
                <label>No. of Units *:</label>
                <input type="text" class="input11" name="units" id="unit"> 

                <br><br>
                <label>MFG. Date *:</label>
                <input type="text" class="input12" name="mfgdate">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label>EXP. Date *:</label>
                <input type="text" class="input13"name="expdate">
                <br><br>
                <label class="label1">Mfg. & Exp. date image</label>
                <img id="uploadPreview" src=" ">
                <br><br>
                <input type="file" id="imglink" name="imglink" accept=".jpg, .jpeg, .png" onchange="
                PreviewImage();">
                <br><br>
                <button type="submit" value="Donate" class="donate-button" name="donate" onclick="return validation()">Donate</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="cancel-button" name="cancel" type="submit" formaction="Donate.php">Cancel</button>  
                <h3><u>Note</u></h3>
                <p><b>As soon as your donation is verified, our executive team will call you within 2-4 days and collect medicine from you.</b></p>
            </form>
            <script type="text/javascript">
        
            function validation(){

                var ngo_name = document.getElementById('ngo').value;
                var contactno = document.getElementById('contact').value;
                var medname = document.getElementById('search-box').value;

                // Validating ngo Name
                if(ngo_name == ""){
                    document.getElementById('ngo_name').innerHTML =" ** Please fill the ngo_name field";
                    return false;
                }
                if((ngo_name.length <= 2) || (ngo_name.length > 20)) {
                    document.getElementById('ngo_name').innerHTML =" ** ngo_name lenght must be between 2 and 20";
                    return false;   
                }
                if(!isNaN(ngo_name)){
                    document.getElementById('ngo_name').innerHTML =" ** only characters are allowed";
                    return false;
                }

                // Validating Contact no 
                if(contactno == ""){
                document.getElementById('contactno').innerHTML =" ** Please fill the mobile NUmber field";
                return false;
                }
                if(isNaN(contactno)){
                    document.getElementById('contactno').innerHTML =" ** user must write digits only not characters";
                    return false;
                }
                if(contactno.length!=10){
                    document.getElementById('contactno').innerHTML =" ** Mobile Number must be 10 digits only";
                    return false;
                }

                // Validating Medicine Name
                if(medname == ""){
                    document.getElementById('medname').innerHTML =" ** Please fill the medname field";
                    return false;
                }
                if((medname.length <= 2) || (medname.length > 40)) {
                    document.getElementById('medname').innerHTML =" ** medname lenght must be between 2 and 20";
                    return false;   
                }
                if(!isNaN(medname)){
                    document.getElementById('medname').innerHTML =" ** only characters are allowed";
                    return false;
                }
            }
            </script>
            <?php
                if(isset($_POST['donate']))
                {   

                    //echo '<script type="text/javascript">alert("register button clicked")</script>';
                    @$ngo_name = $_POST['ngo_name'];
                    @$fname = $_POST['fname'];
                    @$mname = $_POST['mname'];
                    @$lname = $_POST['lname'];
                    @$email = $_POST['email'];
                    @$contactno = $_POST['contactno'];
                    @$flatno = $_POST['flatno'];
                    @$street = $_POST['street'];
                    @$area = $_POST['area'];
                    @$pincode = $_POST['pincode'];
                    @$state = $_POST['state'];
                    @$city = $_POST['city'];
                    @$medname = $_POST['medname'];
                    @$units = $_POST["units"];
                    @$mfgdate = $_POST['mfgdate'];
                    @$expdate = $_POST['expdate'];

                    $img_name = $_FILES['imglink']['name'];
                    $img_size = $_FILES['imglink']['size'];
                    $img_tmp = $_FILES['imglink']['tmp_name'];

                    $directory = 'uploads/';
                    $target_file = $directory.$img_name;


                    if($ngo_name=="" || $fname=="" || $mname=="" || $lname=="" || $email=="" || $contactno=="" || $flatno=="" || $street=="" || $area=="" || $pincode=="" || $state=="" || $city=="" || $medname=="" || $units=="" || $mfgdate=="" || $expdate=="")
                    {
                        echo '<script type="text/javascript">alert("insert values in all fields")</script>';
                    }
                    elseif (file_exists($target_file)) {
                        echo '<script type="text/javascript">alert("image file already exist.")</script>';
                    }
                    elseif ($img_size>2097152) {
                        echo '<script type="text/javascript">alert("image file size larger than 2 mb")</script>';
                    }
                    else
                    {
                        move_uploaded_file($img_tmp, $target_file);
                        $query = "insert into donatetable values('','$ngo_name','$fname','$mname','$lname','$email','$contactno','$flatno','$street','$area','$pincode','$state','$city','$medname','$units','$mfgdate','$expdate','$target_file')";
                        $query_run = mysqli_query($con, $query);
                        if($query_run)

                        {
                            echo '<script type="text/javascript">alert("Thank you very much for donating unused medicine to us.With this small contribution of yours, we can help many needy people who do not have enough money to buy medicines.")</script>';    
                        }
                        else
                        {
                            echo '<script type="text/javascript">alert("Value not inserted")</script>';
                        }
                    }
                }    
            ?>
            <?php
                if(isset($_POST['cancel']))
                {
                    unset($_SESSION['ngo_name']);
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
                            <a href="user_homepage.php">Home</a>
                        </li>
                        <li>
                            <a href="ngo_list.php">NGO's</a>
                        </li>
                        <li>
                            <a href="about.php">About Us</a>
                        </li>
                        <li >
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
