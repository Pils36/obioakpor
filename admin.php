<?php
    require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="img/jpg" href="img/nysc_icon.jpg">
    <link rel="stylesheet" href="bootstrap-4.1.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/w3.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <title>Admin</title>

    <style>
        .container{
            position: relative;
            width: 100%;
        }
        .jumbotron{
            width: 100%;
            height: 100%;
            position: relative;
            margin: 10px auto;
            background: none;
        }
        .main{
            width: 70%;
            height: 100%;
            margin: auto;
            border: 2px solid rgb(59, 179, 59);
            position: relative;
            border-radius: 20px;
            padding-top: 40px;
            padding-bottom: 40px;
        }
        h1{
            color: rgb(0, 0, 0);
            text-align: center;
            margin-top: 15px;
        }
        h1 img{
            width: 5%;
            border-radius: 50%;
        }
        .box{
            width: 50%;
            margin: auto;
        }
        .form-control{
            padding-left: 40px;
            font-family: "Candara", sans-serif;
            margin-top: 10px;
            border-radius: 30px;
            cursor: pointer;
            background: rgba(69, 139, 107, 0.5)
        }
        .fa{
            position: absolute;
            margin-top: 10px;
            margin-left: 15px;
            font-size: 18px;
            text-align: center;
            color: rgb(59, 179, 59);
        }
        .btn{
            width: 25%;
            margin: auto;
            font-family: "Candara", sans-serif;
            text-transform: uppercase;
        }
        
        
    </style>
</head>
<body>
    <header class="w3-container green">
            <h1 class="w3-center" style="color:#fff"> NYSC OBIO/AKPOR LOCAL GOVERNMENT</h1>
    </header>

        <div class="w3-container w3-color light-grey w3-center w3-animate-zoom">
            <h1>NYSC Obio/Akpor Local Government Admin</h1> 
        </div>
    <div class="container">
    
        <div class="jumbotron">
                <h1>
                    <img src="img/nysc_icon.jpg" alt="nysc_icon">
                    Authentication
                </h1>
            <div class="main">
                <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-group">
                    <div class="box">
                        <i class="fa fa-user"></i>
                        <input type="text" class="form-control" name="username" id="user" placeholder="Username" required>
                    </div>
                    <div class="box">
                            <i class="fa fa-lock"></i>
                            <input type="password" class="form-control" name="password" id="pass" placeholder="Password" required>
                    </div> <br>
                    <center>
                    
                    <button type="submit" name="login_btn" class="btn btn-success" onclick="this.innerHTML = 'Please Wait...'">Login</button>
                    <a href="portal.php" class="btn btn-danger" role="button" onclick="this.innerHTML = 'BYE...'">Back</a>
                    </center>
                </form>
                    
                <?php
                    if(isset($_POST["login_btn"]))
                    {
                        $username = $_POST["username"];
                        $password = $_POST["password"];

                        $query = "select * from admin_tbl WHERE username = '$username' AND password = '$password'";
                        $query_run = mysqli_query($conn,$query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            $_SESSION["username"] = $username;
                            header("location: facelist.php");
                        }
                        else
                            {
                                echo '<script type="text/javascript">alert("Invalid Username or Password")</script>';
                            }
                    }

                    
                ?>
            </div>
        </div>        
    </div>
</body>
</html>