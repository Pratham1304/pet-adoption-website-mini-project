<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: index.php");
    exit;
}

include 'dbconn.php';

$user_id = $_SESSION['user_id'];
$pets_query = "SELECT * FROM pets WHERE user_id = '$user_id'";
$result = mysqli_query($con, $pets_query);
$pets = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        .pet-list {
            display: flex;
            flex-wrap: wrap;
            align-content: flex-start;
            justify-content: center;
            margin-bottom: 50px;
        }

        .pet-profile {
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 #000000a4;
            transition: 0.3s;
            margin: 25px;
        }

        .pro-desc {
            padding: 10px 20px;
        }

        .pet-profile:hover {
            box-shadow: 0 16px 32px 0 #000000a4;
        }

        .pet-profile img {
            width: 100%;
            max-height: 250px;
            object-fit: cover;
        }

        .remove-pet-btn {
            background-color: #008080;
            padding: 5px 10px;
            margin-top: 10px;
            margin-bottom: 5px;
            color: white;
            border: none;
            border-radius: 5px;
            transition: 0.3s;
        }

        .remove-pet-btn:hover {
            background-color: rgb(246, 158, 100);
            color: black;
            font-weight: 500;
        }


        .section-heading {
            text-align: center;
            padding-top: 10px;
        }

        .form{
            max-width: 750px;
            border: 1px solid #c0c0c0;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 #000000a4;
            margin: 0 auto;
            margin-bottom: 40px;
        }
        .form h2{
            text-align: center;
            color: white;
            background-color: #008080;
            padding: 25px;
        }

        .add-pet {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px 50px;
            background-color: #fff;
        }

        .form-label {
            display: block;
            margin-top: 20px;
        }

        .form-input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #000000e0;
            border-radius: 6px;
            background-color: white;
        }

        .submit-btn {
            background-color: #008080;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 6px;
            margin-top: 20px;
            margin-bottom: 20px;
            transition: 0.3s;
        }

        .submit-btn:hover {
            background-color: #006666;
        }
    </style>
</head>

<body>

    <?php require('header.php'); ?>

    <h2 class="section-heading">Welcome,
        <?php echo $_SESSION['username']; ?>!
    </h2>

    <h3 class="section-heading">Your Pets Available for Adoption:</h3>
    <div class="pet-list">
        <?php foreach ($pets as $pet) : ?>
        <div class="pet-profile">
            <img src="<?php echo $pet['pet_img']; ?>">
            <div class="pro-desc">
                <strong>Pet Name : </strong>
                <?php echo $pet['pet_name']; ?><br>
                <strong>Pet Type : </strong>
                <?php echo $pet['pet_type']; ?><br>
                <strong>Gender : </strong>
                <?php echo $pet['gender']; ?><br>
                <strong>Breed : </strong>
                <?php echo $pet['breed']; ?><br>
                <strong>Age : </strong>
                <?php echo $pet['age']; ?><br>
                <strong>Vaccination : </strong>
                <?php echo $pet['vaccination']; ?><br>
                <strong>Good with kids : </strong>
                <?php echo $pet['good_with_kids']; ?><br>
                <strong>Adoption status : </strong>
                <?php echo $pet['adoption_status']; ?><br>
                <form action="remove_pet.php" method="post" class="remove-pet-form">
                    <input type="hidden" name="pet_id" value="<?php echo $pet['pet_id']; ?>">
                    <center><button type="submit" name="submit-remove" class="remove-pet-btn">Remove Pet</button></center>
                </form>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="form">
        
    <h2>Find Loving Homes for Your Pets</h2>
    <form action="add_pet.php" method="post" enctype="multipart/form-data" class="add-pet">
    
        <label for="pet_name" class="form-label">Pet Name:</label>
        <input type="text" id="pet_name" name="pet_name" class="form-input" required>

        <label for="pet_img" class="form-label">Upload Pet Image:</label>
        <input type="file" id="pet_img" name="pet_img" class="form-input" required>

        <label for="pet_type" class="form-label">Pet Type:</label>
        <select id="pet_type" name="pet_type" class="form-input" required>
            <option value="Dog">Dog</option>
            <option value="Cat">Cat</option>
        </select>

        <label for="gender" class="form-label">Gender:</label>
        <select id="gender" name="gender" class="form-input" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label for="breed" class="form-label">Breed:</label>
        <input type="text" id="breed" name="breed" class="form-input" required>

        <label for="age" class="form-label">Age:</label>
        <input type="text" id="age" name="age" class="form-input" required>

        <label for="vaccination" class="form-label">Pet Vaccination:</label>
        <select id="vaccination" name="vaccination" class="form-input" required>
            <option value="Vaccinated">Vaccinated</option>
            <option value="Not Vaccinated">Not Vaccinated</option>
        </select>

        <label for="good_with_kids" class="form-label">Pet is good with kids?</label>
        <select id="good_with_kids" name="good_with_kids" class="form-input" required>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>

        <button type="submit" name="submit-add" class="submit-btn">Add Pet</button>
    
    </form>
</div>

</body>

</html>