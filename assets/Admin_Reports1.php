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

    <!-- <style>
        .print-button {
            position: fixed;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
        }

        #printBtn {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #ff5722;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #printBtn:hover {
            background-color: #f44336;
        }
    </style>
    <style media="print">
        /* Set up styles for printing */
        @media print {
            body {
                margin: 0;
            }
    
            .main {
                /* Enhance styles for printing the main content */
                border: 1px solid #ddd;
                padding: 20px;
                background-color: #fff;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .header, .footer, .print-button {
                display: none;
            }
        }

    </style> -->
    <!-- <link rel="stylesheet" href="print.css" media="print"> -->
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
            </div>
        </header>
        <!--End Header-->

        <!--Main-->
        <main class="main-container">
            <P><h1>REPORTS</h1></P>
            
            <div class="charts">
                <div class="charts-card">
                    <p class="chart-title">TOTAL CALL vs ISSUES SOLVED</p>
                    <div id="bar-chart"></div>
                </div>
                <div class="charts-card">
                    <p class="chart-title">TOTAL CALL vs PENDING PROBLEM</p>
                    <div id="area-chart"></div>
                </div>

            </div>
            <!-- <div class="print-button">
                <button id="printBtn">Unleash the Print Magic</button>
            </div> -->
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

    <!-- <script>
        document.getElementById("printBtn").addEventListener("click", function() {
            alert("Get ready to see the magic on paper!");
            window.print();
        });
    </script> -->
</body>
</html>