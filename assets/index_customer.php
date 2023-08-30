<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

     <!--Font Awesome-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
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
      <title>New Customer</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #01c5fb;">
        <div class="logo">
            <img src="logo.png" alt="CCMate Logo">
        </div>
    </nav>

    <div class="container">
        <?php
        if(isset($_GET['msg'])){
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>
        <a href="add_customer.php" class="btn btn-dark mb-3">Add Customer</a>
        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                <th scope="col">SL_NO</th>
                <th scope="col">First_Name</th>
                <th scope="col">Middle_Name</th>
                <th scope="col">Last_Name</th>
                <th scope="col">Mobile_No</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Issue</th>
                <th scope="col">Issue_Countered_On</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "db_conn.php";

                    $sql = "SELECT * FROM `customers`";
                    $result = mysqli_query($conn, $sql);
                    if (!$result) {
                        die("Error executing the query: " . mysqli_error($conn));
                    }
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['ID']?></td>
                            <td><?php echo $row['firstname']?></td>
                            <td><?php echo $row['middlename']?></td>
                            <td><?php echo $row['lastname']?></td>
                            <td><?php echo $row['mobile']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['address']?></td>
                            <td><?php echo $row['issue']?></td>
                            <td><?php echo $row['issuecounteredonandfrom']?></td>
                            <td><?php echo $row['status']?></td>
                            
                            
                            <td>
                                <a href="edit_customer.php?id=<?php echo $row['ID']?>" class="link-dark"><i class="fa-solid fa-pen-to-square f-5 me-2"></i></a>
                                <a href="delete_customer.php?id=<?php echo $row['ID']?>" class="link-dark"><i class="fa-solid fa-trash f-5"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>

    </div>
   <!--Bootstrap-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> 
</body>
</html>