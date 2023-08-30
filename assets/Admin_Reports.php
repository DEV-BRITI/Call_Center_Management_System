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
    <title>REPORTS</title>

    <!--Rowdies Font-->
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet">

    <!--Material Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!--CUSTOM CSS-->
    <link rel="stylesheet" href="css_admin/reports_admin.css">

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
                        <a href="Index_Admin.php">
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
                        <a href="#">
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
            <P><h1>REPORTS</h1></P>
            
            <div class="charts">
                <div class="charts-card">
                    <p class="chart-title">ISSUES RESOLVED vs PENDING PROBLEMS</p>
                    <div id="area2-chart"></div>
                </div>
                <div class="charts-card">
                    <p class="chart-title">ACTIVITY</p>
                    <div id="doughnut-chart">
                        <canvas id="doughChart"></canvas>
                    </div>
                </div>
                <div class="charts-card">
                    <p class="chart-title">MONTHLY CALL DATA</p>
                    <div id="bar-chart"></div>
                </div>
                <div class="charts-card">
                    <p class="chart-title">MONTHLY TOTAL CALLS & PENDING PROBLEMS</p>
                    <div id="area-chart"></div>
                </div>
                <div class="charts-card">
                    <p class="chart-title">WORK STRENGTH</p>
                    <div id="pie-chart">
                        <canvas id="pieChart"></canvas>
                    </div>
                </div>
                <div class="charts-card">
                    <p class="chart-title">YEARLY CALL DATA</p>
                    <div id="bar2-chart"></div>
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

     <!--CHARTS.JS-->
     <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.3/dist/chart.umd.min.js"></script>

    <!--CUSTOM JS-->    
    <script src="js_admin/reports_admin.js"></script>  

</body>
</html>