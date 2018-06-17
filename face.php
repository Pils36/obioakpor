    <?php
        session_start();
        require 'dbconfig/config.php';
        #session_destroy();
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

    <!--
        JavaScript Picture Preview
    -->
    <script type="text/javascript">

        function PreviewImage() {
        var reader = new FileReader();
        reader.onload = function() {
        var uploadPreview = document.getElementById("uploadPreview");
        uploadPreview.src = reader.result;
    };
        reader.readAsDataURL(document.getElementById("imglink").files[0]);
    };
    </script> 

    <style>
        body{
            background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url("img/book_a.jpg");
            background-position: center; background-repeat:no-repeat;
            background-size: cover; background-attachment: fixed;
            color:grey;
        }
        p{
            color:whitesmoke;
            font-size:1em;
        }
        .w3-select{
            background-color: rgba(245, 244, 244, 0.8);
            color:black;
            width:25%;
        }
        form{
            width: 100%;
            margin: 30px auto;
            text-align: justify;
        }
        #datereg{
            background-color: rgba(245, 244, 244, 0.8);
            color:black; font-size: 14px;
            width:23ch; height:40px;
            text-transform: uppercase;
            margin:2px;
        }
        .btn{
            background-color:rgba(88, 190, 88, 0.7);
            width: 25%; border-radius: 5px;
            font-variant: small-caps; font-size:1em;
            font-weight: bold; color:white;
        }
        .btn:hover{
            background-color:rgba(87, 202, 187, 0.8);
            color:green;
        }
        #uploadPreview{
            border-radius:50px;
        }
        #imglink{
            color:white;
            border-radius:10px;
            width:30%;
            font-family:"Candara"; font-size:12px;
        }
        input[type="file"]{
            background-color:rgba(87, 202, 187, 0.8);
            font-family:"Candara";
        }
        section.content {
            width: 100%;
            margin: 30px auto;
            text-align: justify;
            line-height: 30px;
        }
    </style>
</head>
<body>
    <!-- 
        MENU WRAPPER 
    -->
    <div id="main">
        <nav class="w3-sidenav white w3-card-2" style="display:none">
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-small">
                <img class="w3-circle" id="img" src="img/nysc_icon.jpg" alt="NYSC Logo" width="50px">
                <i class="fa fa-window-close" style="font-size:16px; color:red;" aria-hidden="true"></i>
            </a>
            <a class="w3-color green" href=""><i class="fa fa-user"></i> Hello <?php echo $_SESSION['statecode']; ?></a>
            <a class="w3-color grey" href="#"><i class="fa fa-question-circle"></i> Need Help?</a>
            <a class="w3-color white" href="cds.php"><i class="fa fa-user-plus"></i> Register CDS</a>
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

        <div class="w3-row">
            <div class="w3-container">
                <div class="w3-col m6 l6">
                    <section class="w3-half w3-container content">
                        <h1 style="text-align:center;">E-Facebook Register...</h1>
                        <p style="text-align:right; color:grey;">Service and Humility...</p> <br>

                        <p style="text-align:justify;">
                            e-Facebook Developed Service is a very new development in the local government division. first of its kind.
                            e-Facebook Developed Service is a very new development in the local government division. first of its kind.
                            e-Facebook Developed Service is a very new development in the local government division. first of its kind.
                            e-Facebook Developed Service is a very new development in the local government division. first of its kind.
                            e-Facebook Developed Service is a very new development in the local government division. first of its kind.
                            e-Facebook Developed Service is a very new development in the local government division. first of its kind.
                            e-Facebook Developed Service is a very new development in the local government division. first of its kind.
                            e-Facebook Developed Service is a very new development in the local government division. first of its kind.
                            e-Facebook Developed Service is a very new development in the local government division. first of its kind.
                        </p> 
                    </section>
                    
                </div>
        
        <!--
            FORM DATA
        -->
                <div class="w3-col m6 l6">
                
                    <h1 style="margin:50px auto; text-align:right; font-size:2em">Hi <?php echo $_SESSION['statecode']; ?>,</h1>
                    <p style="margin:50px auto; text-align:justify; font-variant:small-caps; font-size:1.5em">Thank you for visiting our platform. Kindly fill your details below</p>                
                    <div id="box2" class="w3-container">
                        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                        <center>
                            <img src="img/upload.jpg" alt="Upload" width="30%" id="uploadPreview"> <br>
                            <input type="file" name="imglink" accept=".jpg, .jpeg, .png" id="imglink" onchange="PreviewImage();" required="required">
                        </center>    
                            <input type="text" class="w3-input" name="surname" placeholder="Surname" required="required" />
                            <input type="text" class="w3-input" name="firstname" placeholder="Firstname" required="required"/>
                            <input type="text" class="w3-input" name="lastname" placeholder="Lastname" required="required"/>
                            <input type="text" class="w3-input" name="callup" placeholder="Call-Up Number" required="required"/>
                            <input type="text" class="w3-input" name="statecode" value= <?php echo $_SESSION['statecode']; ?> readonly/>
                            <input type="text" class="w3-input" name="phonenumber" placeholder="Phone Number" required="required"/>

                            <label>Date of Registration: <input type="date" class="w3-input" id="datereg" name="date_of_reg"/></label>
                            <input type="text" class="w3-input" name="course" placeholder="Course Of Study" required="required"/>
                            <select name="qualification" class="w3-select">
                                <option value="disabled selected">Choose Degree</option>
                                <option value="bsc">B.Sc</option>
                                <option value="bedu">B.Edu</option>
                                <option value="ba">B.A</option>
                                <option value="beng">B.Eng</option>
                                <option value="btech">B.Tech</option>
                                <option value="bds">B.Ds</option>
                                <option value="bpharm">B.Pharm</option>
                                <option value="hnd">HND</option>
                                <option value="mbbs">MBBS</option>
                            </select>
                            <select name="gender" class="w3-select" >
                                    <option value="disabled selected">Choose Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                            </select>
                            <input type="text" class="w3-input" name="bank" placeholder="Bank Name" required="required"/>
                            <input type="text" class="w3-input" name="acctnum" placeholder="Account Number" required="required"/>
                            <select name="state" class="w3-select">
                                <option value="disabled selected">Select State of Origin</option>
                                <option value="abia">Abia</option>
                                <option value="adamawa">Adamawa</option>
                                <option value="akwaibom">Akwa-Ibom</option>
                                <option value="anambra">Anambra</option>
                                <option value="bauchi">Bauchi</option>
                                <option value="bayelsa">Bayelsa</option>
                                <option value="benue">Benue</option>
                                <option value="Bornu">Bornu</option>
                                <option value="crossriver">Cross-River</option>
                                <option value="delta">Delta</option>
                                <option value="ebonyi">Ebonyi</option>
                                <option value="Edo">Edo</option>
                                <option value="enugu">Enugu</option>
                                <option value="gombe">Gombe</option>
                                <option value="imo">Imo</option>
                                <option value="jigawa">Jigawa</option>
                                <option value="kaduna">Kaduna</option>
                                <option value="kano">Kano</option>
                                <option value="katsina">Katsina</option>
                                <option value="kebbi">Kebbi</option>
                                <option value="kogi">Kogi</option>
                                <option value="kwara">Kwara</option>
                                <option value="lagos">Lagos</option>
                                <option value="nasarawa">Nasarawa</option>
                                <option value="niger">Niger</option>
                                <option value="ogun">Ogun</option>
                                <option value="ondo">Ondo</option>
                                <option value="osun">Osun</option>
                                <option value="oyo">Oyo</option>
                                <option value="plateau">Plateau</option>
                                <option value="rivers">Rivers</option>
                                <option value="sokoto">Sokoto</option>
                                <option value="taraba">Taraba</option>
                                <option value="yobe">Yobe</option>
                                <option value="zamfara">Zamfara</option>
                            </select>
                            <input type="text" class="w3-input" name="institution" placeholder="Instituition" required="required"/>
                            <input type="text" class="w3-input" name="ppa" placeholder="Place of Primary Assignment" required="required"/>
                            <button type="submit" name="submit_btn" class="btn w3-green w3-ripple"><i class="fa fa-save"></i> Save </button>
                        </form>
                        
                        <!--
                            SAVE Records
                        -->
                       <?php
                           if(isset($_POST['submit_btn'])){
                                //echo '<script>alert("Button Clicked")</script>';
                                $surname=$_POST['surname'];
                                $firstname=$_POST['firstname'];
                                $lastname=$_POST['lastname'];
                                $callup=$_POST['callup'];
                                $statecode=$_POST['statecode'];
                                $phonenumber=$_POST['phonenumber'];
                                $date_of_reg=$_POST['date_of_reg'];
                                $course=$_POST['course'];
                                $qualification=$_POST['qualification'];
                                $gender=$_POST['gender'];
                                $bank=$_POST['bank'];
                                $acctnum=$_POST['acctnum'];
                                $state=$_POST['state'];
                                $institution=$_POST['institution'];
                                $ppa=$_POST['ppa'];

                                $img_name=$_FILES['imglink']['name'];
                                $img_size=$_FILES['imglink']['size'];
                                $img_tmp=$_FILES['imglink']['tmp_name'];

                                $directory="uploads/";
                                $target_file=$directory.$img_name;

                                        $query="select * from profile WHERE callup='$callup'";
                                        $query_run=mysqli_query($conn,$query);

                                        if(mysqli_num_rows($query_run)>0)
                                            {
                                                /*$_SESSION['surname'] = $surname;
                                                $_SESSION['firstname'] = $firstname;
                                                $_SESSION['lastname'] = $lastname;
                                                $_SESSION['callup'] = $callup;
                                                $_SESSION['phonenumber'] = $phonenumber;
                                                $_SESSION['date_of_reg'] = $date_of_reg;
                                                $_SESSION['course'] = $course;
                                                $_SESSION['qualification'] = $qualification;
                                                $_SESSION['gender'] = $gender;
                                                $_SESSION['bank'] = $bank;
                                                $_SESSION['acctnum'] = $acctnum;
                                                $_SESSION['state'] = $state;
                                                $_SESSION['institution'] = $institution;
                                                $_SESSION['ppa'] = $ppa;
                                                $_SESSION['imglink'] = $imglink;

                                                header('location:profile.php');*/


                                                //There is an already registered user with Call Up Number
                                                echo '<script>alert("User Already Registered with Call-Up Number")</script>';
                                            }
                                            else if(file_exists($target_file))
                                            {
                                                
                                                echo '<script>
                                                        alert("This Image is already saved");
                                                        alert("Ensure image name is saved with state code");
                                                    </script>';
                                            }
                                            else if($img_size > 2097152)
                                            {
                                                //Image file lager than 2MB
                                                echo '<script>alert("File larger than 2MB... Try lesser image")</script>';
                                            }
                                        else
                                        {
                                            //Upload Data to database
                                            move_uploaded_file($img_tmp,$target_file);
                                            $query="insert into profile values ('','$surname','$firstname','$lastname','$callup','$statecode','$phonenumber',
                                            '$date_of_reg','$course','$qualification','$gender','$bank','$acctnum','$state','$institution','$ppa',
                                            '$target_file')";
                                            $query_run=mysqli_query($conn,$query);

                                            if($query_run)
                                            {
                                                echo '<script>
                                                        alert("Saved Successfully...");
                                                        alert("Proceed to register your CDS");
                                                    </script>';
                                            }
                                            else
                                            {
                                                echo '<script>alert("Error submitting file.")</script>';
                                            }
                                        }
                            }
                        ?>
                    </div>    
                </div>    
            </div>

        </div>
    </div>

    <!--
        FOOTER
    -->
    <footer class="w3-footer">

    </footer>
</body>
</html>