<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
  header("location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
    <style>
        .container {
            display: flex;
            align-items: center;
            height: 100vh;
        }

        .donation-form {
            padding: 30px;
            border: 1px solid #c0c0c0;
            border-radius: 5px;
            background-color: #fff;
        }

        h1 {
            color: #008080;
        }

        .desc {
            color: #555;
        }
        
        .img{
            margin-left: 190px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
        }

        input,
        textarea {
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
            width: 100%;
        }

        button {
            background-color: #008080;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #006666;
        }
    </style>
</head>

<body>
    <?php require('header.php'); ?>

    <div class="container">
        <div class="img">
            <img src="img/donate.png" alt="donate">
        </div>
        <div class="donation-form">
            <h1>Make a Donation</h1>
            <p class="desc">Your support helps us care for more pets in need. Thank you for your generosity!</p>

            <form action="process_donation.php" method="post">
                <label for="amount">Donation Amount:</label>
                <input type="text" id="amount" name="amount" placeholder="Enter amount">

                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" placeholder="Your full name">

                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" placeholder="Your email address">

                <label for="message">Leave a Message (optional):</label>
                <textarea id="message" name="message" placeholder="Your message"></textarea>

                <button type="submit">Donate Now</button>
            </form>
        </div>
    </div>

    <?php require('footer.php'); ?>
</body>

</html>