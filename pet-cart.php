<?php
session_start();

include 'dbconn.php';

$user_id = $_SESSION['user_id'];
$pet_id_query = "SELECT pet_id FROM adoption_form WHERE user_id = '$user_id'";
$result = mysqli_query($con, $pet_id_query);

$pets = [];
while ($row = mysqli_fetch_assoc($result)) {
    $pet_id = $row['pet_id'];
    $pet_query = "SELECT p.*, u.mob AS owner_phone FROM pets p 
                JOIN users u ON p.user_id = u.user_id
                WHERE p.pet_id = '$pet_id'";;
    $pet_result = mysqli_query($con, $pet_query);
    $pet = mysqli_fetch_assoc($pet_result);
    if ($pet) {
        $pets[] = $pet;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <style>
        header {
            background-color: #008080;
            color: white;
            text-align: center;
            padding: 20px;
            border-top: 1px solid #004d4d;
        }

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
    </style>
</head>

<body>
    <?php require('header.php'); ?>

    <header>
        <h2>Your Adopted pets</h2>
    </header>

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
                <strong>Owner's Contact No. : </strong>
                <?php echo $pet['owner_phone']; ?><br>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</body>

</html>