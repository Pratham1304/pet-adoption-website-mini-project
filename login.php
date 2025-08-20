<?php

if (isset($_POST["submit-login"])) {
    include 'dbconn.php';
   
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "Select * from users where username='$username' AND password='$password'";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
 
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['user_id'] = $row["user_id"];
        $_SESSION['username'] = $username;   
        header("location: index.php");
    }
    else{
        echo "
                <script>
                    alert('Invalid username or password ');
                    window.location.href='index.php';
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
    <title>PetCare</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        .form-container {
            max-width: 400px;
            margin: auto;
        }

        .modal-content form {
            display: flex;
            flex-direction: column;
        }

        .modal-content label {
            margin-bottom: 8px;
        }

        .modal-content input {
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .modal-content button {
            background-color: #008080;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .modal-content button:hover {
            background-color: #006666;
        }

        /* Style for modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
        }

        .modal-content h2{
            text-align: center;
        }

        /* Style for modal close button */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: red;
        }

        /* Style for create account link */
        .create-account-link {
            color: #008080;
            cursor: pointer;
            text-decoration: underline;
        }

        .create-account-link:hover {
            color: #006666;
        }
    </style>
</head>

<body>

    <div id="signInModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="document.getElementById('signInModal').style.display='none'">&times;</span>
            <h2>Login</h2>
            <form action="login.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit" name="submit-login">Login</button>
            </form>
            <p>If you don't have an account, <span class="create-account-link" onclick="openCreateAccountModal()">create
                    one</span>!</p>
        </div>
    </div>

    <script>
        function openCreateAccountModal() {
            document.getElementById('createAccountModal').style.display = 'block';
            document.getElementById('signInModal').style.display = 'none';
        }
    </script>
</body>

</html>