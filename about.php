<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/material_icon.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
        a.readmore{
            text-decoration: none;color:blue;
            font-family: "Consolas";
            font-size: 14px;font-weight:50;
        }
        a.readmore:hover{
            color:white;
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
        .tabBlock{
            background-color: transparent;
            border:solid 0px #ffa54f;
            border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;
            max-width:150px;
            width:100%;
            overflow:hidden; display:block;
        }
        .clock{
            vertical-align: middle;
            font-family: "Orbitron";
            font-size:40px;
            font-weight: normal;
            color:black;
            padding: 0 10px;
        }
        .clocklg{
            vertical-align:middle;
            font-family: "Orbitron";
            font-size: 20px;
            font-weight: normal;
            color:red;
        }
        section.content {
            max-width: 900px;
            width:100%;
            margin: 30px auto;
            text-align: justify;
            line-height: 30px;
        }
        .footer{
                width:100%;
                height:100%;
                margin:0px auto;
                background-color: black;
            }
            ul li{
                list-style:none;
                text-decoration:none;
                display: inline;
                line-height: 2px;
                margin-right: 10px;
            }
            .icon{
                color: #fff;
                font-size: 22px;
                padding: 50px;
            }
            .icon li{
	            text-align: center;
	            cursor: pointer;
            }
            .icon .fa-facebook{
	            background-color: #3b5997;
	            padding: 10px 20px 10px 20px;
            }
            .icon .fa-facebook:hover{
                background-color: #fff;
                color: #3b5997;
                transition: all 0.9s ease-out;
            }
            .icon .fa-instagram{
	            background-color: #993300;
                padding: 10px 20px 10px 20px;
            }
            .icon .fa-instagram:hover{
                background-color: #fff;
                color: #993300;
                transition: all 0.9s ease-out;
            }
            .icon .fa-whatsapp{
	            background-color: #4aae52;
                padding: 10px 20px 10px 20px;
            }
            .icon .fa-whatsapp:hover{
                background-color: #fff;
                color: #4aae52;
                transition: all 0.9s ease-out;
            }
            .icon .fa-telegram{
	            background-color: #097bb3;
                padding: 10px 20px 10px 20px;
            }
            .icon .fa-telegram:hover{
                background-color: #fff;
                color: #097bb3;
                transition: all 0.9s ease-out;
            }
            .icon .fa-twitter{
	            background-color: #56aceb;
                padding: 10px 20px 10px 20px;
            }
            .icon .fa-twitter:hover{
                background-color: #fff;
                color: #56aceb;
                transition: all 0.9s ease-out;
            }
            .brand{
                color:#fff;
                text-align: center;
            }
</style>

</head>
<body onload="digitized();">

<div id="main">
<nav class="w3-sidenav white w3-card-2" style="display:none">
  <a href="javascript:void(0)" 
  onclick="w3_close()"
  class="w3-closenav w3-small white"><img class="w3-circle" id="img" src="img/nysc_icon.jpg" alt="nysc" width="50px" ><i class="fa fa-window-close" style="font-size:16px; color:red;" aria-hidden="true"></i></a>
          <a href="home.php" class="w3-color green"><i class="fa fa-home"></i> Home</a>     
          <a href="about.php" class="w3-color blue"><i class="fa fa-address-book-o"></i> About</a>      
          <a href="portal.php" target="_blank" class="w3-color red"><i class="fa fa-user"></i> Portal</a>       
          <a href="http://www.nysc.gov.ng" target="_blank" class="w3-color green"><i class="fa fa-globe"></i> Main Site</a>		
</nav>

<header class="w3-container green">
<h2><i class="material-icons w3-opennav" onclick="w3_open()">menu</i> 
NYSC Obio/Akpor Local Government</h2>     
</header>
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
<div class="w3-container w3-color light-grey w3-center w3-animate-zoom">
    <h1>Welcome to NYSC Obio/Akpor Local Government</h1>

</div>

    <div class="w3-main">
        <div class="w3-row">
            <section class="w3-container w3-text-black content">

                <h1 style="color: #9da483">About Us</h1>
            
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </section>
        </div>

    </div>

            <footer class="footer container-fluid text-center">
                <div class="social-icon">
                    <ul class="icon">
                        <li>
                            <i class="fa fa-facebook"></i>
                        </li>
                        <li>    
                            <i class="fa fa-instagram"></i>
                        </li> 
                        <li>   
                            <i class="fa fa-whatsapp"></i>
                        </li>
                        <li>    
                            <i class="fa fa-telegram"></i>
                        </li>
                        <li>  
                            <i class="fa fa-twitter"></i>
                        </li>
                    </ul>

                    <div class="menu">
                        <p class="brand">&copy; 2018 All Right Reserved. ICT CDS BATCH A 2017</p>
                    </div>

                </div>
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