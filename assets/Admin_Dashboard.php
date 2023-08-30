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
    <title>DASHBOARD</title>

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
                        <a href="Index_Admin.php">
                            <span class="material-icons-outlined">home</span>HOME
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="#">
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
            <P><h1>DASHBOARD</h1></P>
            <div class="main-cards">
                <!-- 1st CARD -->
                <div class="card">
                    <div class="card-inner">
                        <p>EMPLOYEE</p>
                        <div class="icon icon-shape background-blue text-primary">
                            <span class="material-icons-outlined">badge</span>
                        </div>
                    </div>
                    <?php
                    require_once "database.php";
                    $dash_emp_query = "SELECT * from users";
                    $dash_emp_query_run = mysqli_query($conn,$dash_emp_query);

                    if($emp_total = mysqli_num_rows($dash_emp_query_run)){
                        echo '<span class="text-blue">'.$emp_total.'</span>';
                    }
                    else{
                        echo '<span class="text-blue"> 0 </span>';
                    }
                    ?>
                </div>  
                <!-- 2nd CARD -->
                <div class="card">
                    <div class="card-inner">
                        <p>TOTAL CALLS</p>
                        <div class="icon icon-shape background-orange text-primary">
                            <span class="material-icons-outlined">call</span>
                        </div>
                    </div>
                    <?php
                    require_once "database.php";
                    $dash_cust_query = "SELECT * from customers";
                    $dash_cust_query_run = mysqli_query($conn,$dash_cust_query);

                    if($cust_total = mysqli_num_rows($dash_cust_query_run)){
                        echo '<span class="text-orange">'.$cust_total.'</span>';
                    }
                    else{
                        echo '<span class="text-orange"> 0 </span>';
                    }
                    ?>
                </div>  
                <!-- 3rd CARD -->
                <div class="card">
                    <div class="card-inner">
                        <p>ISSUES SOLVED</p>
                        <div class="icon icon-shape background-green text-primary">
                            <span class="material-icons-outlined">checklist</span>
                        </div>
                    </div>
                    <?php
                    require_once "database.php";
                    $dash_solved_query = "SELECT * from customers WHERE status = 'solved'";
                    $dash_solved_query_run = mysqli_query($conn,$dash_solved_query);

                    if($solved_total = mysqli_num_rows($dash_solved_query_run)){
                        echo '<span class="text-green">'.$solved_total.'</span>';
                    }
                    else{
                        echo '<span class="text-green"> 0 </span>';
                    }
                    ?>
                </div>
                <!-- 4th CARD -->
                <div class="card">
                    <div class="card-inner">
                        <p>PENDING PROBLEM</p>
                        <div class="icon icon-shape background-red text-primary">
                            <a href="index_customer.php">
                                <span class="material-icons-outlined">pending_actions</span>
                            </a>
                        </div>
                    </div>
                    <?php
                    require_once "database.php";
                    $dash_pending_query = "SELECT * from customers WHERE status = 'pending'";
                    $dash_pending_query_run = mysqli_query($conn,$dash_pending_query);

                    if($pending_total = mysqli_num_rows($dash_pending_query_run)){
                        echo '<span class="text-red">'.$pending_total.'</span>';
                    }
                    else{
                        echo '<span class="text-red"> 0 </span>';
                    }
                    ?>
                </div>


            </div>

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