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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="icon" type="img/jpg" href="img/nysc_icon.jpg">
    <link rel="stylesheet" href="css/awesome.min.css">
    <link rel="stylesheet" href="css/material_icon.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/style.css">
    <title>NYSC | Obio/Akpor LGA</title>

    <!--
        JavaScript Menu enable
    -->
    <script>
       function w3_open()
        {
            document.getElementById("main").style.marginLeft="25%";
            document.getElementsByClassName("w3-sidenav")[0].style.width="25%";
            document.getElementsByClassName("w3-sidenav")[0].style.display="block";
            document.getElementsByClassName("w3-opennav")[0].style.display="none";
        }
        function w3_close()
        {
            document.getElementById("main").style.marginLeft="0%";
            document.getElementsByClassName("w3-sidenav")[0].style.display="none";
            document.getElementsByClassName("w3-opennav")[0].style.display="inline-block";
        }
    </script>

    <style>
        body{
            background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url("img/cds_a.jpg");
            background-position: center; background-repeat:no-repeat;
            background-size: cover; background-attachment: fixed;
            color:white;
        }
        .w3-select{
            background-color: rgba(245, 244, 244, 0.8);
            color:black;
            width:25%;
        }
        h1{
            font-variant: small-caps;
            text-align:center;
            color:grey;
        }
        section.content {
            width: 100%;
            margin: 30px auto;
            text-align: justify;
            line-height: 30px;
        }
        form{
            width: 100%;
            margin: 30px auto;
            text-align: justify;
        }
    </style>
</head>
<body>
    <!--
        MENU WRAPPER
    -->
    <div id="main">
        <nav class="w3-sidenav white w3-card-2" style="display: none">
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-small">
                <img class="w3-circle" id="img" src="img/nysc_icon.jpg" alt="NYSC Logo" width="50px">
                <i class="fa fa-window-close" style="font-size:16px; color:red;" aria-hidden="true"></i>
            </a>
            <a class="w3-color green" href=""><i class="fa fa-user"></i> Hello <?php echo $_SESSION['statecode']; ?></a>
            <a class="w3-color grey" href="#"><i class="fa fa-question-circle"></i> Need Help?</a>
            <a class="w3-color white" href="cds.php"><i class="fa fa-user-plus"></i> Facebook File</a>
            <!--a class="w3-color grey" href="profile.php"><i class="fa fa-eye"></i> View Profile</a-->
            <a class="w3-color red" href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
            <a class="w3-color green" href="home.php" target="_blank"><i class="fa fa-globe"></i> Main Page</a>           
        </nav>
        
        <!--
            HEADING 
        -->
        <header class="w3-container w3-color green">
            <h2><i class="material-icons w3-opennav" onclick="w3_open()">menu</i>NYSC OBIO/AKPOR LOCAL GOVERNMENT</h2>
        </header>
        
        <!--
            FORM VALIDATION
        -->
        <div class="w3-main">
            <div class="w3-row">
                <div class="w3-col m6 l6">
                <section class="w3-half w3-container content">
                        <h1 style="text-align:center;">Community Development Service</h1>
                        <p style="text-align:right; color:grey;">Service and Humility...</p> <br>

                        <p style="text-align:justify;">
                            Community Development Service is a very important programme for all Corp members to be part of. 
                            These registration platform is one of its first kind.
                            
                            Community Development Service is a very important programme for all Corp members to be part of. 
                            These registration platform is one of its first kind.
                            
                            Community Development Service is a very important programme for all Corp members to be part of. 
                            These registration platform is one of its first kind.
                            
                            Community Development Service is a very important programme for all Corp members to be part of. 
                            These registration platform is one of its first kind.
                            
                            Community Development Service is a very important programme for all Corp members to be part of. 
                            These registration platform is one of its first kind.
                            
                            Community Development Service is a very important programme for all Corp members to be part of. 
                            These registration platform is one of its first kind.
                            
                            Community Development Service is a very important programme for all Corp members to be part of. 
                            These registration platform is one of its first kind.
                            
                            Community Development Service is a very important programme for all Corp members to be part of. 
                            These registration platform is one of its first kind.
                            
                            Community Development Service is a very important programme for all Corp members to be part of. 
                            These registration platform is one of its first kind.
                        </p>

                    </section>
                    
                </div>

                <div class="w3-col m6 l6">
                    <div id="box2" class="w3-container">
                        <h3 style="color: grey; font-variant:small-caps; margin:50px auto; text-align:center">Register CDS!</h3 style="color: white; text-transform: uppercase;">
                        <form method="POST" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
                            <input type="text" name="surname" class="w3-input" placeholder="Surname" required> <br>
                            <input type="text" name="firstname" class="w3-input" placeholder="Firstname" required> <br>
                            <input type="text" name="lastname" class="w3-input" placeholder="Lastname" required> <br>
                            <input type="text" name="statecode" class="w3-input" value= <?php echo $_SESSION['statecode']; ?> readonly> <br>
                            <input type="email" name="email" class="w3-input" placeholder="Email" required="required"> <br>
                            <input type="text" name="phonenumber" class="w3-input" placeholder="Phone Number" required> <br>
                            <select class="w3-select" style="width: 40%;height: 20px;" name="cds" required="required">
                                <option value="disabled selected">Select CDS Unit</option>
                                <option value="ict">ICT</option>
                                <option value="rivgreen">RIV-GREEN</option>
                                <option value="fishery">FISHERY</option>
                                <option value="poultry">POULTRY</option>
                                <option value="efcc">EFCC</option>
                                <option value="ndlea">NDLEA</option>
                                <option value="roadsafety">ROAD SAFETY</option>
                                <option value="roadsafety">ANTI-HIV</option>
                                <option value="roadsafety">CHARITY</option>
                            </select>
                            <br><br>
                            <input type="submit" name="register_btn" id="btn2" class="w3-btn w3-red w3-ripple" value="Register"> <br><br>
                        </form>

                        <!--
                            Form Validation
                        -->
                        <?php
                            if(isset($_POST['register_btn']))
                            {
                                $surname = $_POST['surname'];
                                $firstname = $_POST['firstname'];
                                $lastname = $_POST['lastname'];
                                $statecode = $_POST['statecode'];
                                $email = $_POST['email'];
                                $phonenumber = $_POST['phonenumber'];
                                $cds = $_POST['cds'];

                                if ($statecode == $_SESSION['statecode']) 
                                {
                                    $query = "select * FROM cds_tbl WHERE statecode = '$statecode'";
                                    $query_run = mysqli_query($conn, $query);

                                    if (mysqli_num_rows($query_run)>0) 
                                    {
                                        echo '<script>alert("You have already registered :(")</script>';
                                    }
                                    else
                                    {
                                        $query = "insert into cds_tbl values ('','$surname','$firstname','$lastname','$statecode','$email','$phonenumber','$cds')";
                                        $query_run = mysqli_query($conn,$query);

                                        if ($query_run) 
                                        {
                                            echo '<script>alert("Registration Successfull :)")</script>';
                                        }
                                        else
                                        {
                                            echo '<script>alert("Error!!! :(")</script>';
                                        }
                                    }
                                }
                                else
                                {
                                    echo '<script>alert("Kindly Register CDS with:(")</script>';
                                }
                            }
                        ?>
                    </div>
                    
                </div>
            </div>

        </div>

    </div>
    
</body>
</html>