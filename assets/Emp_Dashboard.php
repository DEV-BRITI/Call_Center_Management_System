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
                        <a href="#">
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
                        <a href="About_Emp.php">
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
            <P><h1>DASHBOARD</h1></P>
            <div class="main-cards">
                <!-- 1st CARD -->
                <div class="card">
                    <div class="card-inner">
                        <p>TODAY'S TOTAL CALLS</p>
                        <div class="icon icon-shape background-blue text-primary">
                            <span class="material-icons-outlined">call</span>
                        </div>
                    </div>
                    <!-- <span class="text-blue">2</span> -->
                    <?php
                    require_once "database.php";
                    $dash_today_query = "SELECT * from customers WHERE DATE(issuecounteredonandfrom) = CURDATE()";
                    $dash_today_query_run = mysqli_query($conn,$dash_today_query);

                    if($today_total = mysqli_num_rows($dash_today_query_run)){
                        echo '<span class="text-blue">'.$today_total.'</span>';
                    }
                    else{
                        echo '<span class="text-blue"> 0 </span>';
                    }
                    ?> 
                </div>  
                <!-- 2nd CARD -->
                <div class="card">
                    <div class="card-inner">
                        <p>ISSUES RESOLVED</p>
                        <div class="icon icon-shape background-orange text-primary">
                            <span class="material-icons-outlined">checklist</span>
                        </div>
                    </div>
                    <?php
                    require_once "database.php";
                    $dash_solved_query = "SELECT * from customers WHERE status = 'solved'";
                    $dash_solved_query_run = mysqli_query($conn,$dash_solved_query);

                    if($solved_total = mysqli_num_rows($dash_solved_query_run)){
                        echo '<span class="text-orange">'.$solved_total.'</span>';
                    }
                    else{
                        echo '<span class="text-orange"> 0 </span>';
                    }
                    ?> 
                </div>  
                <!-- 3rd CARD -->
                <div class="card">
                    <div class="card-inner">
                        <p>ISSUES TRANSFERED</p>
                        <div class="icon icon-shape background-green text-primary">
                            <span class="material-icons-outlined">move_up</span>
                        </div>
                    </div>
                    <?php
                    require_once "database.php";
                    $dash_forward_query = "SELECT * from customers WHERE status = 'forwarded'";
                    $dash_forward_query_run = mysqli_query($conn,$dash_forward_query);

                    if($forward_total = mysqli_num_rows($dash_forward_query_run)){
                        echo '<span class="text-green">'.$forward_total.'</span>';
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
                    <p class="chart-title">DAILY ACTIVITY DATA</p>
                    <div id="bar-chart"></div>
                </div>
                <div class="charts-card">
                    <p class="chart-title">ISSUES RESOLVED vs PENDING PROBLEMS</p>
                    <div id="area2-chart"></div>
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
    <script src="js_emp/scripts_emp.js"></script>

</body>
</html>