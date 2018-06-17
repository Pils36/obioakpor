<?php
    session_start();
    require 'dbconfig/config.php';
    include 'dbconfig/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="img/jpg" href="img/nysc_icon.jpg">
    <link rel="stylesheet" href="css/awesome.min.css">
    <link rel="stylesheet" href="css/material_icon.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap-4.1.1-dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <title>NYSC | Obio/Akpor LGA</title>

    <style>
        body{
            background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url('img/nysc_icon.jpg');
            background-attachment: fixed; background-position: center; background-size: cover;
            background-repeat: no-repeat;
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
        table tr{
            text-transform: uppercase;
            font-family: "Candara";
            color: white;
        }

    </style>

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
            document.getElementById("main").style.marginLeft = "0%";
            document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
            document.getElementsByClassName("w3-opennav")[0].style.display = "inline-block";
        }
    </script>

</head>
<body onload="digitized();">