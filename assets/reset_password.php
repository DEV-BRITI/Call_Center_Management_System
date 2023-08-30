<!-- <!DOCTYPE html>
<html>
<head>
  <title>Reset Password</title>
  
</head>
<body>
  <div class="container">
    <h2>Reset Password</h2>
    <form method="POST" action="process_reset_password.php">
      <div class="form-group">
        <p>New Password:</p>
        <input type="password" name="new_password" required>
      </div>

      <div class="form-group">
        <p>Confirm New Password:</p>
        <input type="password" name="confirm_password" required>
      </div>

      <div class="form-group">
        <input type="submit" name="submit" value="Reset">
      </div>
    </form>

    
  </div>
</body>
</html> -->


<!DOCTYPE html>
<html>
<head>
  <title>Reset Password</title>
  <style>
    body {
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    h2 {
      text-align: center;
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

    .form-group input[type="text"],
    .form-group input[type="password"] {
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
      padding: 10px 20px;
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
    <h2>Reset Password</h2>
    <?php
    require_once "database.php"; // Assuming you have the database connection in this file
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Handle the password reset form submission here
        $resetToken = $_POST["reset_token"];

        // Check the reset token/code in the database
        $currentTime = time();
        $sql = "SELECT * FROM password_reset_tokens WHERE token = '$resetToken' AND expiry_time >= '$currentTime'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            // Reset token/code is valid and not expired, proceed to display and handle the form submission
            if (isset($_POST["submit"])) {
                // Password reset form submission logic
                $newPassword = $_POST["new_password"];
                $confirmPassword = $_POST["confirm_password"];
                
                // Add password validation checks and update password in the database
                if ($newPassword === $confirmPassword) {
                    $email = $row["email"];
                    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                    $updatePasswordQuery = "UPDATE users SET password = '$hashedPassword' WHERE email = '$email'";
                    mysqli_query($conn, $updatePasswordQuery);

                    // Delete the used reset token/code from the password_reset_tokens table to ensure it cannot be used again
                    $deleteTokenQuery = "DELETE FROM password_reset_tokens WHERE token = '$resetToken'";
                    mysqli_query($conn, $deleteTokenQuery);

                    echo "<p class='success'>Password successfully reset. You can now login with your new password.</p>";
                } else {
                    echo "<p class='error'>Passwords do not match.</p>";
                }
            }
        } else {
            // Invalid or expired reset token/code
            echo "<p class='error'>Invalid or expired reset token/code. Please try again.</p>";
        }
    }
    ?>
    <form method="POST" action="reset_password.php">
      <div class="form-group">
        <p>Reset Token/Code:</p>
        <input type="text" name="reset_token" required>
      </div>
      <div class="form-group">
        <p>New Password:</p>
        <input type="password" name="new_password" required>
      </div>
      <div class="form-group">
        <p>Confirm New Password:</p>
        <input type="password" name="confirm_password" required>
      </div>
      <div class="form-group">
        <input type="submit" name="submit" value="Reset Password">
      </div>
    </form>
  </div>
</body>
</html>




<!-- Rest of your HTML code for the "Reset Password" page -->
