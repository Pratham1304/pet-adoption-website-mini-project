<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
  header("location: index.php");
  exit;
}

include 'dbconn.php';

$pet_type = "Pet";

$pets_query = "SELECT * FROM pets WHERE adoption_status = 'Available'";
$result = mysqli_query($con, $pets_query);
$pets = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (isset($_POST["submit-fill"])) {
    include 'dbconn.php';

    $conditions = array();

    $pet_type = isset($_POST["pet_type"]) ? $_POST["pet_type"] : '';
    if (!empty($pet_type)) {
        $conditions[] = "pet_type = '$pet_type'";
    }

    $gender = isset($_POST["gender"]) ? $_POST["gender"] : '';
    if (!empty($gender)) {
        $conditions[] = "gender = '$gender'";
        if (empty($pet_type)){
            $pet_type = "Pet";
        }
    }

    $breed = isset($_POST["breed"]) ? $_POST["breed"] : '';
    if (!empty($breed)) {
        $conditions[] = "breed = '$breed'";
        if (empty($pet_type)){
            $pet_type = "Pet";
        }
    }

    $age = isset($_POST["age"]) ? $_POST["age"] : '';
    if (!empty($age)) {
        $conditions[] = "age = '$age'";
        if (empty($pet_type)){
            $pet_type = "Pet";
        }
    }

    $vaccination = isset($_POST["vaccination"]) ? $_POST["vaccination"] : '';
    if (!empty($vaccination)) {
        $conditions[] = "vaccination = '$vaccination'";
        if (empty($pet_type)){
            $pet_type = "Pet";
        }
    }

    $good_with_kids = isset($_POST["good_with_kids"]) ? $_POST["good_with_kids"] : '';
    if (!empty($good_with_kids)) {
        $conditions[] = "good_with_kids = '$good_with_kids'";
        if (empty($pet_type)){
            $pet_type = "Pet";
        }
    }

    $conditions_str = implode(' AND ', $conditions);

    if (!empty($conditions_str)) {
        $pets_query = "SELECT * FROM pets WHERE $conditions_str";
        $result = mysqli_query($con, $pets_query);
        $pets = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption</title>
    <link rel="stylesheet" href="css/adoption-style.css">
</head>

<body>
    <?php require('header.php'); ?>

    <header>
        <h1>Pet Adoption</h1>
        <p>Find your new furry friend!</p>
    </header>

    <div class="container-a">
        <div class="pet-filters">
            <h3>Filters</h3>
            <div class="f-1">
                <form action="adoption.php" method="POST">
                    <label class="f-h">Choose a Pet Type</label>
                    <select id="pet_type" name="pet_type" class="form-input">
                        <option value="">Any</option>
                        <option value="Dog">Dog</option>
                        <option value="Cat">Cat</option>
                    </select>

                    <label class="f-h">Choose Gender:</label>
                    <select id="gender" name="gender" class="form-input">
                        <option value="">Any</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <!-- Add more options based on your gender types -->
                    </select>

                    <label class="f-h">Choose Breed:</label>
                    <input type="text" id="breed" name="breed" class="form-input">

                    <label class="f-h">Choose Age:</label>
                    <input type="text" id="age" name="age" class="form-input">

                    <label class="f-h">Vaccination Status:</label>
                    <select id="vaccination" name="vaccination" class="form-input">
                        <option value="">Any</option>
                        <option value="Vaccinated">Vaccinated</option>
                        <option value="Not Vaccinated">Not Vaccinated</option>
                    </select>
                    <input type="submit" name="submit-fill" class="app-fil" value="Apply Filter">
                </form>
            </div>
        </div>

        <div class="container-b">
            <h2 class="h2">
                <?php echo $pet_type ?>s Available for Adoption
            </h2>

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
                        <strong>Adoption status : </strong>
                        <?php echo $pet['adoption_status']; ?><br>
                        <center><button id="adoptNowButton" data-petid="<?php echo $pet['pet_id']; ?>">Adopt Now</button></center>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>


    <?php require('footer.php'); ?>
    <script>
        document.querySelectorAll("#adoptNowButton").forEach(function (button) {
            button.addEventListener("click", function () {
                var petId = button.getAttribute("data-petid");
                window.location.href = "adoption form.php?pet_id=" + petId;
            });
        });
    </script>
</body>

</html>