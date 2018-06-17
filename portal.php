<?php
    session_start();
    require 'dbconfig/config.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/material_icon.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="img/jpg" href="img/nysc_icon.jpg">
    <link rel="stylesheet" href="css/awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">    
    <title>NYSC | Obio/Akpor LGA</title>

<script>
    function w3_open(){
        document.getElementById("main").style.marginLeft="25%";
        document.getElementsByClassName("w3-sidenav")[0].style.width = "25%";
        document.getElementsByClassName("w3-sidenav")[0].style.display="block";
        document.getElementsByClassName("w3-opennav")[0].style.display="none";
    }
    function w3_close(){
        document.getElementById("main").style.marginLeft="0%";
        document.getElementsByClassName("w3-sidenav")[0].style.display="none";
        document.getElementsByClassName("w3-opennav")[0].style.display="inline-block";
    }    
</script>

<style>
#head1{
    text-align:center;
}
#head1.w3-border{
    border-radius:10px;
    height:7vh;
    margin-top:5px;
}
#head2.w3-border{
    border-radius:10px;
    width:60%;height:4vh;
    margin-top:5px;
}
#head3.w3-border{
    border-radius:10px;
    width:50%;height:4vh;
    margin-top:5px;
}
footer p.courtesy{
    font-size:14px; font-family:"Consolas";
    float:right; color:white;
}

.w3-main{
    background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(img/BG.jpg);
    background-position: center; background-repeat: no-repeat;
    background-size: cover; background-attachment: fixed;
}
</style>

</head>
<body>
<div id="main">
    <nav class="w3-sidenav w3-card-2" style="display:none">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-small white">
        <img class="w3-circle" id="img" src="img/nysc_icon.jpg" alt="nysc" width="50px" ></a>
        <a href="home.php"class="w3-color green">Home</a>		
        <a href="about.php" class="w3-color blue">About</a>		
        <a href="admin.php" class="w3-color red">Admin</a>		
        <a href="http://www.nysc.gov.ng" target="_blank" class="w3-color green">Main Site</a>
    </nav>
    <header class="w3-container green">
        <h2><i class="material-icons w3-opennav" onclick="w3_open()">menu</i> NYSC OBIO/AKPOR LOCAL GOVERNMENT
        </h2>
    </header>

    <div class="w3-container w3-color light-grey w3-center w3-animate-zoom">
        <h1>NYSC Obio/Akpor Local Government Portal Site</h1> 
    </div>

<!-- .....LOGIN AND REGISTREATION..... -->
    <div class="w3-main">
        <div class="w3-row">
            <div class="w3-col m6 l6">
                <div id="box1" class="w3-half w3-container">
                    <h3 style="color: white; text-transform: uppercase;">Login Here!</h3 style="color: white; text-transform: uppercase;">
                    <form method="POST" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <input type="text" name="statecode" class="w3-input" placeholder="State Code" required="required"> <br>
                        <input type="password" name="password" class="w3-input" placeholder="Password" required="required"> <br>
                        <button type="submit" name="login_btn" id="btn1" class="w3-btn w3-green w3-ripple" value="Login"><i class="fa fa-sign-in"></i> Login</button><br><br>
                    </form>

                    <?php

                        if (isset($_POST['login_btn'])) 
                        {
                            //echo '<script type="text/javascript">alert("Button Clicked")</script>';
                            $statecode=$_POST['statecode'];
                            $password=$_POST['password'];

                            $query = "select * from loginform WHERE statecode = '$statecode' AND password = '$password'";
                            $query_run = mysqli_query($conn,$query);

                            if (mysqli_num_rows($query_run)>0) 
                            {
                                $_SESSION['statecode']=$statecode;
                                header('location:welcome.php');
                            }
                            else
                            {
                                echo '<script type="text/javascript">alert("Invalid Username or Password")</script>';
                            }

                        }
                    ?>  

                </div>
                
            </div>

            <div class="w3-col m6 l6">
                <div id="box2" class="w3-container">
                    <h3 style="color: white; text-transform: uppercase;">Register Here!</h3 style="color: white; text-transform: uppercase;">
                    <form method="POST" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <input type="text" name="firstname" class="w3-input" placeholder="Firstname" required="required"> <br>
                        <input type="text" name="lastname" class="w3-input" placeholder="Lastname" required="required"> <br>
                        <input type="text" name="statecode" class="w3-input" placeholder="State Code" required="required"> <br>
                        <input type="email" name="email" class="w3-input" placeholder="Email" required="required"> <br>
                        <input type="password" name="password" class="w3-input" placeholder="Password" required="required"> <br>
                        <input type="password" name="cpassword" class="w3-input" placeholder="Confirm Password" required="required"> <br>
                        <select class="w3-select" style="width: 40%;height: 40px;" name="option" required="required">
                            <option value="disabled selected">Choose your Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <br><br>
                        <button type="submit" name="register_btn" id="btn2" class="w3-btn w3-red w3-ripple" value="Register"><i class="fa fa-user-plus"></i> Register</button> <br><br>
                    </form>

                    <?php
                    if (isset($_POST['register_btn'])) 
                    {
                        //echo '<script type="text/javascript">alert("Button Clicked")</script>';
                        $firstname=$_POST['firstname'];
                        $lastname=$_POST['lastname'];
                        $statecode=$_POST['statecode'];
                        $email=$_POST['email'];
                        $password=$_POST['password'];
                        $cpassword=$_POST['cpassword'];
                        $option=$_POST['option'];

                        if ($password==$cpassword) 
                        {
                            $query = "SELECT * FROM loginform WHERE statecode = '$statecode' ";
                            $query_run = mysqli_query($conn,$query);

                            if (mysqli_num_rows($query_run)>0) 
                            {
                                echo '<script type="text/javascript">alert("User with this State Code already registered :(")</script>';
                            }
                            else
                            {
                                $query="INSERT INTO loginform VALUES('','$firstname','$lastname','$statecode','$email','$password','$option')";
                                $query_run = mysqli_query($conn,$query);

                                if ($query_run) 
                                {
                                    echo '<script type="text/javascript">alert("Successfull. Login Now :) ")</script>';
                                }
                                else
                                {
                                    echo '<script type="text/javascript">alert("Error!!! :(" )</script>';
                                }
                            }
                        }
                        else
                            echo '<script type="text/javascript">alert("Password does not match :(")</script>';
                    }

                    ?>
  
                </div>
                   
            </div>
        </div>

    </div>

<!-- END FORM -->
</div>

<footer class="w3-footer">
    

</footer>

</div>
</body>
</html>