<?php

if (isset($_POST["submit-sign"])) {
    include 'dbconn.php';
    //create new accout 
    $nusername = $_POST["newUsername"];
    $npassword = $_POST["newPassword"];
    $mob = $_POST["mob"];
    //check whether this username exists
    $existSql = "SELECT * FROM `users` WHERE username = '$nusername'";
    $result= mysqli_query($con, $existSql);
    $numExistRow = mysqli_num_rows($result);
    if($numExistRow > 0){
        echo "
                <script>
                    alert('Username already exists. Please use a different username');
                    window.location.href='index.php';
                </script>
                ";
    }
    else{
            $sql = "INSERT INTO `users` (`username`, `password`, `mob`) VALUES ( '$nusername', '$npassword', '$mob')";
            $result = mysqli_query($con, $sql);
            if($result){
                echo "
                <script>
                    alert('Your account has been created successfully');
                    window.location.href='index.php';
                </script>
                ";
             }
        
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

        /* Style for modal content */
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

    <!-- Create Account Modal -->
    <div id="createAccountModal" class="modal">
   
        <div class="modal-content">
            <span class="close"
                onclick="document.getElementById('createAccountModal').style.display='none'">&times;</span>
                <h2>Create Account</h2>
            <form action="signup.php" method="post">
                <!-- Your signup form fields here -->
                <label for="newUsername">New Username:</label>
                <input type="text" id="newUsername" name="newUsername" required>
                
                <label for="mob">Mobile No:</label>
                <input type="tel" id="mob" name="mob" required>

                <label for="newPassword">New Password:</label>
                <input type="password" id="newPassword" name="newPassword" required>

                <button type="submit" name="submit-sign">Create Account</button>
            </form>
        </div>
    </div>

    
    <script>

        // Open the Create Account modal
        function openCreateAccountModal() {
            document.getElementById('createAccountModal').style.display = 'block';
            document.getElementById('signInModal').style.display = 'none';
        }
    </script>
</body>

</html>