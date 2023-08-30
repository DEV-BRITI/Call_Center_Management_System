<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login_form.php");
   exit();
}

var_dump($_SESSION["user"]);

require_once "db_conn.php"; // Assuming you have the database connection in this file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle password change form submission
    $currentPassword = $_POST["current_password"];
    $newPassword = $_POST["new_password"];
    $confirmPassword = $_POST["confirm_password"];

    // Add password validation checks and update password in the database
    if ($newPassword === $confirmPassword) {
        $userId = $_SESSION["user"]; // Assuming the user ID is stored in $_SESSION["user"]

        // Fetch the user's current password from the database
        $sql = "SELECT password FROM users WHERE ID = $userId";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if ($row && password_verify($currentPassword, $row["password"])) {
            // Current password matches, update the password
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $updatePasswordQuery = "UPDATE users SET password = '$hashedPassword' WHERE ID = $userId";
            mysqli_query($conn, $updatePasswordQuery);

            // Redirect to the dashboard with a success message
            header("Location: dashboard.php?msg=success");
            exit();
        } else {
            $error = "Invalid current password.";
        }
    } else {
        $error = "New passwords do not match.";
    }
}
?>                                                                                                                               

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Change Password</title>
</head>
<body>
    <div class="container">
        <h1>Change Password</h1>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <?php if (isset($success)): ?>
            <div class="alert alert-success"><?php echo $success; ?></div>
        <?php endif; ?>
        <form method="POST">
            <div class="mb-3">
                <label for="current_password" class="form-label">Current Password</label>
                <input type="password" class="form-control" id="current_password" name="current_password" required>
            </div>
            <div class="mb-3">
                <label for="new_password" class="form-label">New Password</label>
                <input type="password" class="form-control" id="new_password" name="new_password" required>
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm New Password</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Change Password</button>
        </form>
    </div>
</body>
</html>
