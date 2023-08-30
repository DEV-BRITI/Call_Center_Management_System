<?php
session_start();
if (isset($_SESSION["user"])) {
   if ($_SESSION["usertype"] === "user") {
      header("Location: Index_Emp.php");
   } elseif ($_SESSION["usertype"] === "admin") {
      header("Location: Index_Admin.php");
   }
   exit(); // Make sure to exit after setting the header location to prevent further execution of the script.
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    body {
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    h2 {
      text-align: center;
      font-weight: bold;
    }

    .container {
      max-width: 400px;
      margin: 20px auto;
      background-color: #ffffff;
      padding: 40px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group p {
      margin: 0;
      font-weight: bold;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 4px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    .form-group input[type="submit"] {
      background-color: #FF6347;
      color: #ffffff;
      cursor: pointer;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      font-size: 20px; 
      font-weight: bold; 
      padding: 10px 20px; 
      border: none; 
      border-radius: 5px; 
    }

    .form-group input[type="submit"]:hover {
      background-color: #FF4500;
    }

    .form-group.checkbox-group {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .forgot-password-link {
      text-align: right;
    }

    .forgot-password-link a {
      color: #555555;
      text-decoration: underline;
    }

    .forgot-password-link a:hover {
      color: #000000;
    }

    .register-link {
      text-align: center;
      margin-top: 20px;
    }

    .register-link p {
      margin: 0;
      padding-top: 10px;
    }

    .register-link a {
      color: #555555;
      text-decoration: underline;
    }

    .register-link a:hover {
      color: #000000;
    }

    /* Additional CSS for the new Remember Me checkbox */
    .remember-me-container {
      display: flex;
      align-items: center;
    }

    .remember-me-container label {
      margin-left: 5px;
    }

    .remember-me-container label:first-child {
      margin-left: 0;
    }

    /* Responsive CSS */
    @media only screen and (max-width: 500px) {
      .container {
        max-width: 90%;
      }
    }
  </style>
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
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #01c5fb;">
      <div class="logo">
          <img src="logo.png" alt="CCMate Logo">
      </div>
  </nav>
  <div class="container">
    <?php
    if (isset($_POST["login"])) {
      $email = $_POST["email"];
      $password = $_POST["password"];
      require_once "database.php";
      $sql = "SELECT * FROM users WHERE email = '$email'";
      $result = mysqli_query($conn, $sql);
      $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
      if ($user) {
          if (password_verify($password, $user["password"])) {
              session_start();
              $_SESSION["user"] = "yes";
              $_SESSION["usertype"] = $user["usertype"]; // Store the usertype in the session.
              if ($user["usertype"] === "user") {
                  header("Location: Index_Emp.php");
              } elseif ($user["usertype"] === "admin") {
                  header("Location: Index_Admin.php");
              }
              exit(); // Make sure to exit after setting the header location to prevent further execution of the script.
          } else {
              echo "<div class='alert alert-danger'>Password does not match</div>";
          }
      } else {
          echo "<div class='alert alert-danger'>Email does not match</div>";
      }
    }
    ?>
    
    <h2>Login Here</h2>
    <form method="POST" action="login_form.php">
      <div class="form-group">
        <p>Email:</p>
        <input type="text" name="email" required>
      </div>

      <div class="form-group">
        <p>Password:</p>
        <input type="password" name="password" required>
      </div>

      <div class="form-group checkbox-group">
        <div class="remember-me-container">
          <input type="checkbox" name="remember_me" id="remember_me">
          <label for="remember_me">Remember</label><label for="remember_me">Me</label>
        </div>
        <div class="forgot-password-link">
          <a href="forgot_password.php">Forgot Password?</a>
        </div>
      </div>


      <div class="form-group">
        <input type="submit" name="login" value="Login">
      </div>
    </form>

    <div class="register-link">
      <p>New Member? <a href="Registration_form.php">SignUp Now</a></p>
    </div>
  </div>
</body>
</html>
