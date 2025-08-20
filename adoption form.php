<?php
session_start();
include 'dbconn.php'; 



    if (isset($_POST["submit-form"])) {

        $user_id = $_SESSION['user_id'];
        $pet_id = $_POST['pet_id'];
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $otherPets = $_POST['otherPets'];
        $adoptionMotivation = $_POST['adoptionMotivation'];
        $budgetForCare = $_POST['budgetForCare'];
        $comments = $_POST['comments'];

        $insert_query = "INSERT INTO adoption_form (`user_id`,`pet_id`, `fullName`, `email`, `phone`, `address`, `otherPets`, `adoptionMotivation`, `budgetForCare`, `comments`) VALUES ('$user_id', '$pet_id', '$fullName', '$email', '$phone', '$address', '$otherPets', '$adoptionMotivation', '$budgetForCare', '$comments')";
        $result = mysqli_query($con, $insert_query);
    

        if ($result) {
            $update_query = "UPDATE pets SET adoption_status = 'Adopted' WHERE pet_id = '$pet_id'";
            mysqli_query($con, $update_query);
            echo "<script>alert('Pet adopted successfully');</script>";
            header("location: adoption.php");
            exit;
        }
     }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Adoption Form</title>

    <style>
        form {
            max-width: 600px;
            margin: 0 auto; 
        }

        h2 {
            background-color: #008080;
            /* Teal or Petal Blue */
            color: white;
            text-align: center;
            padding: 20px;
            border-top: 1px solid #004d4d;
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        .form-input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #555555e0;
            border-radius: 6px;
            background-color: white;
        }

        .submit {
            background-color: #008080;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 6px;
            margin-bottom: 30px;
            transition: 0.3s;
        }

        .submit:hover {
            background-color: #006666;
        }

       

    </style>
</head>

<body>

    <?php require('header.php'); ?>
 
    <h2>Pet Adoption Form</h2>
    <form action="adoption form.php" method="post">
        <!-- Contact Information -->
        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName" class="form-input" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-input" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" class="form-input" required>

        <!-- Residence Information -->
        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="3" class="form-input" required></textarea>

        <label for="otherPets">Other Pets in the Household:</label>
        <textarea id="otherPets" name="otherPets" rows="3" class="form-input" ></textarea>

        <!-- Adoption Motivation -->
        <label for="adoptionMotivation">Why You Wants to Adopt Pet:</label>
        <textarea id="adoptionMotivation" name="adoptionMotivation" rows="4" class="form-input" ></textarea>

        <label for="budgetForCare">Budget for Pet Care:</label>
        <input type="text" id="budgetForCare" name="budgetForCare" class="form-input" >


        <!-- Additional Comments or Questions -->
        <label for="comments">Additional Comments or Questions:</label>
        <textarea id="comments" name="comments" rows="4" class="form-input" ></textarea>

        <input type="hidden" name="pet_id" value="<?php echo isset($_GET['pet_id']) ? $_GET['pet_id'] : ''; ?>">

        <!-- Submit Button -->
        <button class="submit" type="submit" name="submit-form">Submit Application</button>
    </form>

    <?php require('footer.php'); ?>
</body>

</html>