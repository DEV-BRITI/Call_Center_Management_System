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
    <title>HOME</title>

    <!--Rowdies Font-->
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet">

    <!--Material Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!--CUSTOM CSS-->
    <link rel="stylesheet" href="css_admin/styles_admin.css">

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
                        <a href="#">
                            <span class="material-icons-outlined">home</span>HOME
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="Admin_Dashboard.php">
                            <span class="material-icons-outlined">dashboard</span>DASHBOARD
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="index.php">
                            <span class="material-icons-outlined">badge</span>EMPLOYEE
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="Admin_Reports.php">
                            <span class="material-icons-outlined">poll</span>REPORTS
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
                </ul>
            </div>
            <div class="header-right">
            </div>
        </header>
        <!--End Header-->

        <!--Main-->
        <main class="main-container">
            <P><h2>Welcome,<br>ADMIN</h2></P>
            <div class="grid-container">
                <div class="main">
                    <ul class="pic3">
                        <img src="pic3.jpg" height="700" width="1400">
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
                </p>
                <h2>FAQs</h2>
                <p style="color: rgb(0, 0, 0);">
                    What software do call centers use?<br>
                    Call-centers generally use an end-to-end call-center management software or a CRM or use individual software for support and ticketing.
                    CRM software, designed for call-center-based sales, is gaining popularity recently.<br>
                    What is call-center management?<br>
                    Call center management involves handling the daily operations of the call center. 
                    It includes sales forecasting, scheduling appointments/meetings, employee training, reporting, and managing customer interactions.
                    The modern-day solutions also include remote workforce management or work from home accessibility.
                </p>
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
    <script src="js_admin/scripts_admin.js"></script>  
</body>
</html>