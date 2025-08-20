<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
   
</head>

<body>
    <nav class="navbar">
        <div class="logo"><a href="index.php"><img src="img/logo.png" alt="logo"></a></div>
        <ul>
            <li><a href="index.php" class="line">HOME</a></li>
            <li> <a href="adoption.php" class="line">ADOPTION</a></li>
            <li><a href="accessories.php" class="line">ACCESSORIES</a></li>
            <li><a href="donate.php" class="line">DONATE</a></li>
            <li><a href="resources.php" class="line">PET CARE</a></li>
            <li><a href="about.php" class="line">ABOUT</a></li>
        </ul>

        <?php
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
            {
               echo " <a href='pet-cart.php'> <img class='cart' src='img/cartn.png'></a>";
               echo " <a href='profile.php'> <img class='pro' src='img/add_pet1.png'></a>";
               echo " <div class='logout'><button onclick=\"document.location='logout.php'\">LOGOUT</button></div>";
            }
            else
            {
                echo " <div class='login'><button onclick=\"document.getElementById('signInModal').style.display='block'\">LOGIN</button></div>";

            }
        ?>
     </nav>

     <?php require('signup.php'); ?>
     <?php require('login.php'); ?>
</body>

</html>