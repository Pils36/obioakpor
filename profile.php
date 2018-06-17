<?php 
    include 'header.php';
?>  
   
    <div id="main">
        <nav class="w3-sidenav white w3-card-2" style="display: none;">
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-small">
                <img class="w3-circle" id="img" src="img/nysc_icon.jpg" alt="NYSC Logo" width="50px">
            </a>
            <a class="w3-color green" href=""><i class="fa fa-user"></i> Hello <?php echo $_SESSION['statecode']; ?></a>
            <a class="w3-color grey" href="#"><i class="fa fa-question-circle-o"></i> Need Help?</a>
            <a class="w3-color white" href="face.php"><i class="fa fa-user-plus"></i> Facebook File</a>
            <a class="w3-color grey" href="cds.php"><i class="fa fa-user-plus"></i> Register CDS</a>
            <a class="w3-color red" href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
            <a class="w3-color green" href="home.php" target="_blank"><i class="fa fa-globe"></i> Main Page</a>
        </nav>

        <!--
            HEADER
        -->
        <header class="w3-container w3-color green">
            <h2><i class="material-icons w3-opennav" onclick="w3_open()">menu</i>NYSC OBIO/AKPOR LOCAL GOVERNMENT</h2>
        </header>


            <!--
                Digital Clock
            -->
            <div class="w3-container w3-color light-grey w3-center w3-animate-zoom">
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
                            <h1>Profile - <span style="color: green"><?php echo $_SESSION['statecode']; ?></span> </h1>
            </div>

            <!--
                Body Design
            -->
        
                <div class="container">
                    <div class="jumbotron">
                        <div class="row main" style="font-family:'Candara', sans-serif;">
                            <div class="col-sm-3">
                                <img src="img/upload.jpg" alt="Upload" style="width:100%; border-radius:50%;">
                            </div>

                            <div class="col-sm-9">
                                <div class="details">
                                    <div>
                                        <label>Surname:</label>
                                        <input  type="text" name="surname">
                                    </div>

                                    <div>
                                        <label>Firstname:</label>
                                        <input  type="text" name="firstname">
                                    </div>

                                    <div>
                                        <label>Lastname:</label>
                                        <input  type="text" name="lastname">
                                    </div>

                                    <div>
                                        <label>Call-Up:</label>
                                        <input  type="text" name="callup">
                                    </div>

                                    <div>
                                        <label>Registration Date:</label>
                                        <input  type="date" name="date_of_reg">
                                    </div>

                                    <div>
                                        <label>Discipline:</label>
                                        <input  type="text" name="course">
                                    </div>

                                    <div>
                                        <label>Qualification:</label>
                                        <input  type="text" name="course">
                                    </div>

                                    <div>
                                        <label>Gender:</label>
                                        <input  type="text" name="gender">
                                    </div>

                                    <div>
                                        <label>Bank Name:</label>
                                        <input  type="text" name="bank">
                                    </div>

                                    <div>
                                        <label>Account Number:</label>
                                        <input  type="text" name="acctnum">
                                    </div>

                                    <div>
                                        <label>State of Origin:</label>
                                        <input  type="text" name="state">
                                    </div>

                                    <div>
                                        <label>Institution:</label>
                                        <input  type="text" name="institution">
                                    </div>

                                    <div>
                                        <label>Place of Primary Assignment:</label>
                                        <input  type="text" name="ppa">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>         

    </div>

<?php include 'footer.php';