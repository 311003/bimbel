<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <input type="submit" value="Login">
    </form>

    <?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once "config.php";

        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);

        $sql = "SELECT id, password FROM users WHERE username = ?";
        if ($stmt = mysqli_prepare($link, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $id, $hashed_password);
                mysqli_stmt_fetch($stmt);
                if (password_verify($password, $hashed_password)) {
                    $_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $id;
                    $_SESSION["username"] = $username;
                    header("location: welcome.php");
                } else {
                    echo "Invalid password.";
                }
            } else {
                echo "No account found with that username.";
            }
            mysqli_stmt_close($stmt);
        }
        mysqli_close($link);
    }
    ?>
</body>
</html>