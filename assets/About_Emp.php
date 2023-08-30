<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login_form.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT</title>

    <!--Rowdies Font-->
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet">

    <!--Material Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!--CUSTOM CSS-->
    <link rel="stylesheet" href="css_emp/styles_emp.css">

    <style>
        .logo {
            display: flex;
            align-items: center;
        }
    
        .logo img {
            width: 180px;
            margin-right: 10px;
        }
    </style>

</head>
<body>

    <div class="grid-container">
        <!--Header-->
        <header class="header">
            <div class="logo">
                <img src="logo.png" alt="CCMate Logo">
            </div>
            <div class="header-left">
                <ul class="list">
                    <li class="list-item">
                        <a href="Index_Emp.php">
                            <span class="material-icons-outlined">home</span>HOME
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="Emp_Dashboard.php">
                            <span class="material-icons-outlined">dashboard</span>DASHBOARD
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="index_customer.php">
                            <span class="material-icons-outlined">group</span>CUSTOMER
                        </a>
                    </li>
                    <!-- <li class="list-item">
                        <a href="#">
                            <span class="material-icons-outlined">lock</span>CHANGE PASSWORD
                        </a>
                    </li> -->
                    <li class="list-item">
                        <a href="logout.php">
                            <span class="material-icons-outlined">logout</span>LOGOUT
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="#">
                            <span class="material-icons-outlined">info</span>ABOUT
                        </a>
                    </li>
                </ul>
            </div>

            <div class="header-right">
                CONTACT US ON : <br>
                <a href="#">
                    <span class="material-icons-outlined">email</span>c.c@mate.com
                </a>
                <a href="#">
                    <span class="material-icons-outlined">call</span>+91 9000000000
                </a>
            </div>
        </header>
        <!--End Header-->

        <!--Main-->
        <main class="main-container">
            <P><h1>ABOUT</h1></P>
            <div class="grid-container">
                <div class="main">
                    <ul class="pic4_about">
                        <img src="pic4_about.jpg" height="700" width="1400">
                    </ul>
                </div>
            </div>
            <div>
                <h2>CALL CENTER MANAGEMENT SYSTEM</h2>
                    <p style="color: rgb(0, 0, 0);">
                        Call center management is the ongoing process of developing, implementing, monitoring, and refining strategies for optimal day-to-day call center operations.

                        Effective call center management evaluates agent and customer experience, internal and external communication
                    </p>
                <h2>CCMATE</h2>
                    <p style="color: rgb(0, 0, 0);">
                        Any business with a high volume of outgoing and/or incoming phone calls can use contact center solutions to improve the quality of their phone support service while decreasing ongoing operating costs.

                        For example, automating call-handling processes can significantly reduce the frequency and impact of human error while also lessening agent burnout.
                    </p>
                <h2> WHO SHOULD USE OUR SERVICE</h2>
                <p style="color: rgb(0, 0, 0);">
                    Call center software isn’t necessarily industry-specific. Customer service and sales teams may use call center phone systems in these industries: <br>
                        *Healthcare
                        <br>*Financial services<br>*Ecommerce<br>*Retail<br>*Technology<br>*Business process outsourcing<br>*Consulting
                        <br>*Business services<br>*Many industries use call center software, but depending on the call volume you receive, you may or may not need it.
            </div>
            <div class="grid-container">
                <div class="main">
                    <ul class="contact_us">
                        <img src="contact_us.png" height="800" width="1350">
                    </ul>
                </div>
            </div>
        </main>
        <!--End Main-->

        <!--Footer-->
        <footer class="footer">
                <h2>&copy CCMate 2023</h2>
                <br><h3>All Rights Are Reserved</h3> 
        </footer>
              
            
        <!--End Footer-->
    </div>


    <!--ApexCharts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.41.0/apexcharts.min.js"></script>

    <!--CUSTOM JS-->    
    <script src="js_emp/scripts.js"></script>  

</body>
</html>