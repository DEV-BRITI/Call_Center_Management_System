<!DOCTYPE html>
<html>
<head>
  <title>Reset Password</title>
  <style>
    body {
      font-family: Arial, sans-serif;
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

    .form-group input[type="password"] {
      width: 100%;
      padding: 8px;
      font-size: 16px;
      border-radius: 4px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    .form-group input[type="submit"] {
      background-color: #4caf50;
      color: #ffffff;
      cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
      background-color: #45a049;
    }

    .error {
      color: red;
    }

    .success {
      color: green;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Reset Password</h2>

    <?php
      // Check if the form is submitted
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the submitted new password and confirm password
        $newPassword = $_POST["new_password"];
        $confirmPassword = $_POST["confirm_password"];

        // Validate the new password and confirm password
        if ($newPassword === $confirmPassword) {
          // Passwords match, perform the password reset
          // Add your password reset logic here

          // Display success message
          echo "<p class='success'>Password reset successful!</p>";
        } else {
          // Passwords don't match, display error message
          echo "<p class='error'>Passwords do not match.</p>";
        }
      }
    ?>

    <div class="form-group">
      <p>New Password:</p>
      <input type="password" disabled>
    </div>

    <div class="form-group">
      <p>Confirm New Password:</p>
      <input type="password" disabled>
    </div>

    <div class="form-group">
      <input type="submit" value="Reset" disabled>
    </div>
  </div>
</body>
</html>
