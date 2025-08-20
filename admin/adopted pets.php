<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets Data Report</title>
</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 10px;
    }

    th,
    td {
        padding: 6px;
        border: 1px solid #ddd;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }

    img{
        width: 100%;
        max-height: 150px;
    }
</style>

<body>
    <?php require('admin-nav.php'); ?>
    <div class="container2">
        <h2>Adopted Pets Data Report</h2>
        <table>
            <tr>
                <th>Pet ID</th>
                <th>Pet Image</th>
                <th>User ID</th>
                <th>Pet Name</th>
                <th>Pet Type</th>
                <th>Breed</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Vaccination</th>
                <th>Good With Kids</th>
                <th>Adoption Status</th>
                <th>Date</th>
            </tr>
            <?php
            // Include your database connection file
            include '../dbconn.php';

            // Execute the SQL query
            $query = "SELECT * FROM pets where adoption_status = 'Adopted'";
            $result = mysqli_query($con, $query);

            // Check if query was successful
            if ($result) {
                // Fetch data and display in table rows
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$row['pet_id']}</td>";
                    echo "<td><img src='../{$row["pet_img"]}'></td>";
                    echo "<td>{$row['user_id']}</td>";
                    echo "<td>{$row['pet_name']}</td>";
                    echo "<td>{$row['pet_type']}</td>";
                    echo "<td>{$row['breed']}</td>";
                    echo "<td>{$row['gender']}</td>";
                    echo "<td>{$row['age']}</td>";
                    echo "<td>{$row['vaccination']}</td>";
                    echo "<td>{$row['good_with_kids']}</td>";
                    echo "<td>{$row['adoption_status']}</td>";
                    echo "<td>{$row['date']}</td>";
                    echo "</tr>";
                }
            } else {
                // Display error message if query fails
                echo "<tr><td colspan='5'>Error fetching user data</td></tr>";
            }

            // Close the database connection
            mysqli_close($con);
            ?>
        </table>
    </div>
</body>

</html>
