<?php
    require 'dbconfig/config.php';
?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Facebook Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="img/jpg" href="img/nysc_icon.jpg">
    <link rel="stylesheet" href="bootstrap-4.1.1-dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        
    <style>
        tr:nth-child(even){
            background-color: green;
            color: white;
        }
            
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <a class="navbar-brand" href="#">
                <span style="color:green">NYSC</span>
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="nav-link active">Home</a>
            </li>
            <li class="nav-item">
                <a href="cdslist.php" class="nav-link">CDS List</a>
            </li>
            <li class="nav-item">
                <a href="admin.php" class="nav-link">Back</a>
            </li>
        </ul>

    </nav>
    <div class="container-fluid">
    <header>
            <h1 class="text-center" style="color:#fff; background-color:green;"> NYSC OBIO/AKPOR LOCAL GOVERNMENT</h1>
    </header>

        <div class="jumbotron">
                <h1 class="text-center">Corper's Data</h1>
            <table width="100%" border="2" cellpadding="2" cellspacing="3">
                <tr class="text-center">
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>CallUp</th>
                    <th>State Code</th>
                    <th>Phone</th>
                    <th>Date Reg</th>
                    <th>Course</th>
                    <th>Qualification</th>
                    <th>Gender</th>
                    <th>Bank</th>
                    <th>Account No</th>
                    <th>State</th>
                    <th>UNI</th>
                    <th>PPA</th>
                    <th>Image</th>
            </tr>
            <?php
                $query = "select * from profile;";
                $result = mysqli_query($conn,$query);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr style='text-align:center; font-size:11px; text-transform:capitalize;'>";

                    echo "<td>".$row['surname']."</td>";
                    echo "<td>".$row['firstname']."</td>";
                    echo "<td>".$row['lastname']."</td>";
                    echo "<td>".$row['callup']."</td>";
                    echo "<td>".$row['statecode']."</td>";
                    echo "<td>".$row['phonenumber']."</td>";
                    echo "<td>".$row['date_of_reg']."</td>";
                    echo "<td>".$row['course']."</td>";
                    echo "<td style='text-transform:uppercase; font-weight:bold'>".$row['qualification']."</td>";
                    echo "<td>".$row['gender']."</td>";
                    echo "<td>".$row["bank"]."</td>";
                    echo "<td>".$row['acctnum']."</td>";
                    echo "<td>".$row['state']."</td>";
                    echo "<td>".$row['institution']."</td>";
                    echo "<td>".$row['ppa']."</td>";
                    echo "<td>".$row['imglink']."</td>";

                    echo "</tr>";
                }
            }
            ?>

            </table>
        </div>
    </div>
</body>
</html>