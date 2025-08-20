<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '../dbconn.php';
   
    $admin = $_POST["admin"];
    $password = $_POST["password"];
    $sql = "Select * from admin where admin_name='$admin' AND password='$password'";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['admin'] = $row["admin_name"];
        header("location: users.php");
    }
    else{
        echo "
                <script>
                    alert('Invalid Admin name or Password ');
                    window.location.href='login.php';
                </script>
                ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form action="login.php" method="post">
                <label for="username">Admin Name:</label>
                <input type="text" id="username" name="admin" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            <button type="submit" class="btn-login">Login</button>
        </form>
    </div>
</body>
</html>