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
            body{
                background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url("img/view_profile_b.jpg");
                background-position: center; background-repeat: no-repeat;
                background-size: cover; background-attachment: fixed;
                color:white;
            }
            footer p.courtesy{
                font-size:14px; font-family:"Consolas";
                float:right; color:white;
            }
            .jumbotron{
                background : linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url("img/view_profile_b.jpg") no-repeat;
                background-position: center;
                background-size: cover;
                background-attachment: fixed;
                margin-top:20px;
                border-radius: 10px;
                height: 100%;
            }
            div .w3-card-8{
                /*border:2px solid grey;*/
                background-color:rgba(25,25,25,0.7);
                width:50%;
                height:100%;
                /*background: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url("img/nysc_icon.jpg") no-repeat;*/
                /*background-position:center; background-size:cover;*/
                border-radius:10px;
                margin-top:10px; padding:10px;
                position:relative;
            }
            a{
                text-decoration: none; color:white
            }
            p{
                font-variant:small-caps;
                font-size:1.5em;
            }
            a p.textblock1{
                text-align:center;
                background-color:black; color:white;
                padding:10px;
                margin-top:20px;
                width:48.5%;
                border-radius:10px;
            }
            p.textblock1:hover{
                background-color:#fff;
                color:green;
                transition: all 0.5s ease-in;
            }
           /* a p.textblock1:hover{
                opacity:0.8;
            }
            a p.textblock2{
                position:absolute;text-align:center;
                top:188px; right:170px;
                background-color:black; color:white;
                padding:10;width:48.5%;
            }
            a p.textblock3{
                position:absolute;text-align:center;
                top:160px; right:170px;
                background-color:black; color:white;
                padding:10;width:48.25%;
            }*/
            a img{
                margin-top:20px;
            }
            a.event:hover{
                text-decoration:none;
                color:green;
            }
            a img.image1:hover{
                opacity:0.7;
            }
            a img.image2:hover{
                opacity:0.7;
            }
            a img.image3:hover{
                opacity:0.7;
            }
            .tabBlock{
            background-color: transparent;
            border:solid 0px #ffa54f;
            border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;
            max-width:200px;
            width:100%;
            overflow:hidden; display:block;
        }
        .clock{
            vertical-align: middle;
            font-family: "Orbitron";
            font-size:40px;
            font-weight: normal;
            color:#85b84f;
            padding: 0 10px;
        }
        .clocklg{
            vertical-align:middle;
            font-family: "Orbitron";
            font-size: 20px;
            font-weight: normal;
            color:#fff;
        }
        </style>

    </head>
    <body onload="digitized();">
        <div id="main">
            <!-- 
                MAIN HEADER WITH SIDE NAV
            -->
            <nav class="w3-sidenav white w3-card-2" style="display:none">
                <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-small white">
                <img class="w3-circle" id="img" src="img/nysc_icon.jpg" alt="nysc" width="50px" >
                <i class="fa fa-window-close" style="font-size:16px; color:red;" aria-hidden="true"></i></a>
                <a href="welcome.php"class="w3-color green"><i class="fa fa-user"></i> Hello <?php echo $_SESSION['statecode'];  ?> </a>		
                <a href="about.php" class="w3-color blue"><i class="fa fa-question-circle"></i> Need Help?</a>		
                <a href="logout.php" class="w3-color red"><i class="fa fa-sign-out"></i> Logout</a>		
                <a href="home.php" target="_blank" class="w3-color green"><i class="fa fa-globe"></i> Main Page</a>
            </nav>

            <!-- 
                HEADING
             -->
            <header class="w3-container green">
                <h2><i class="material-icons w3-opennav" onclick="w3_open()">menu</i> NYSC OBIO/AKPOR LOCAL GOVERNMENT
                </h2>
            </header>
            <!-- 
                CONTAINER FOR RECORD KEEPING
            -->
            <div class="w3-container">
                <div class="jumbotron">
                    <center>
                        <div class="w3-row">
                        <p align="center">Welcome! <?php echo $_SESSION['statecode']; ?></p>
                            <!--
                                Digital Clock
                            -->
                            <div>
                                    <table class="tabBlock" align="right" cellspacing="0" cell-padding="0" border="0">
                                        <tr>
                                            <td class="clock" id="dc"></td> <!--Digital clock-->
                                            <td>
                                                <table cellpadding="0" cellspacing="0" border="0">
                                            
                                                    <!--Hour in AM and PM-->
                                                    <tr><td class="clocklg" id="dc-hour"></td></tr>

                                                    <!--Hour in AM and PM-->
                                                    <tr><td class="clocklg" id="dc-second"></td></tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                            </div>

                            <!--
                                REG Form
                            -->
                            <div class="w3-card-8">
                                <a class="event" href="face.php">
                                    <img class="image1" src="img/book_a.jpg" alt="Facebook Reg" style="border-radius:5px; width:50%"/>
                                    <p class="textblock1">Open your Facebook File</p>
                                </a> <hr>

                                <a class="event" href="cds.php">
                                    <img class="image2" src="img/cds_a.jpg" alt="CDS Reg" style="border-radius:5px; width:50%"/>
                                    <p class="textblock1">Register for CDS</p>
                                </a>
                            </div>

                            <!--div class="w3-card-8">
                                <a class="event" href="profile.php">
                                    <img class="image3" src="img/view_profile_a.gif" alt="View Profile" style="border-radius:5px; width:50%"/>
                                    <p class="textblock3">View Profile</p>
                                </a>
                            </div-->
                        </div>
                    </center>
                </div>

            </div>
        </div>
        <!--
            FOOTER DIVISION
        -->
        <footer class="w3-footer">
            

        </footer>

        </div>
    </body>
<!--
    Clock Set
-->
<script>
        function digitized(){
            var dt = new Date();
            var hrs = dt.getHours();
            var min = dt.getMinutes();
            var sec = dt.getSeconds();

            min = Ticking(min);
            sec = Ticking(sec);

            document.getElementById('dc').innerHTML = hrs + ":" + min;
            document.getElementById('dc-second').innerHTML = sec;

            if(hrs > 11){
                document.getElementById('dc-hour').innerHTML ='PM';
            }
            else{
                document.getElementById('dc-hour').innerHTML = 'AM';
            }

            //Call function every 1 sec
            var time;
            time = setInterval('digitized()', 1000);
        }
        function Ticking(ticVal){
                if(ticVal < 10){
                    ticVal = "0" + ticVal;
                }
                return ticVal;
            }
    </script>    
</html>
