<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password</title>
  <style>
    body {
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 400px;
      margin: 100px auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group p {
      font-weight: bold;
      margin: 0;
    }

    .form-group input[type="email"] {
      width: 100%;
      padding: 8px;
      font-size: 16px;
      border-radius: 4px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    .form-group input[type="submit"] {
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      font-size: 16px;
      background-color: #FF6347;
      color: #ffffff;
      cursor: pointer;
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
    }

    .form-group input[type="submit"]:hover {
      background-color: #FF4500;
    }

    .error {
      color: red;
    }

    .success {
      color: green;
      font-weight: bold;
    }

    .login-link {
      text-align: center;
      margin-top: 20px;
    }

    .login-link a {
      color: #555555;
      text-decoration: underline;
    }

    .login-link a:hover {
      color: #000000;
    }

    .reset-password-link {
      text-align: center;
      margin-top: 10px;
    }

    .reset-password-link a {
      color: #555555;
      text-decoration: underline;
    }

    .reset-password-link a:hover {
      color: #000000;
    }

    .logo {
            display: flex;
            align-items: center;
        }
    
    .logo img {
        width: 200px;
        margin-left: 45%;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #01c5fb;">
    <div class="logo" style="align-items: center;">
        <img src="logo.png" alt="CCMate Logo">
    </div>
  </nav>
  <div class="container">
    <h2>Forgot Password</h2>
    <form method="POST" action="forgot_password.php">
      <div class="form-group">
        <p>Email:</p>
        <input type="email" name="email" required>
      </div>

      <div class="form-group">
        <input type="submit" name="submit" value="Send Reset Code">
      </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        // Check if the email exists in the database (you may need to customize this part)
        // Assuming you have a database connection established
        require_once "database.php";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if ($user) {
            // Generate a random reset token
            $resetToken = bin2hex(random_bytes(32));

            // Set the reset token and expiry time in the database
            $expiryTime = time() + 3600; // One hour expiry time (you can adjust this as needed)
            $insertTokenQuery = "INSERT INTO password_reset_tokens (email, token, expiry_time) VALUES ('$email', '$resetToken', '$expiryTime')";
            mysqli_query($conn, $insertTokenQuery);

            // Display the reset link or code to the user
            echo "<p class='success'>Password reset code:</p>";
            echo "<input type='text' value='$resetToken' readonly='readonly' style='width: 100%; padding: 8px; font-size: 16px; border-radius: 4px; border: 1px solid #ccc; box-sizing: border-box; margin-bottom: 10px;'>";

            echo "<p class='success'>Please use this code to reset your password.</p>";
        } else {
            echo "<p class='error'>Email not found. Please enter a valid email address.</p>";
        }
    }
    ?>

    <div class="login-link">
      <p>Remember your password? <a href="login_form.php">Login</a></p>
    </div>
    <div class="reset-password-link">
      <p>Have you received the reset code? <a href="reset_password.php">Reset Password</a></p>
    </div>
  </div>
</body>
</html>
