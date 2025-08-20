<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets Data Report</title>
</head>
<style>
    table {
        width: 98%;
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
</style>

<body>
    <?php require('admin-nav.php'); ?>
    <div class="container2">
        <h2>Adoption Form Data Report</h2>
        <table>
            <tr>
                <th>Form ID</th>
                <th>User ID</th>
                <th>Pet ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Mobile No.</th>
                <th>Address</th>
                <th>Other Pets</th>
                <th>Adoption Reason</th>
                <th>Budget For Care</th>
                <th>Comments</th>
                <th>Submission Date</th>
            </tr>
            <?php
            // Include your database connection file
            include '../dbconn.php';

            // Execute the SQL query
            $query = "SELECT * FROM adoption_form";
            $result = mysqli_query($con, $query);

            // Check if query was successful
            if ($result) {
                // Fetch data and display in table rows
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['user_id']}</td>";
                    echo "<td>{$row['pet_id']}</td>";
                    echo "<td>{$row['fullName']}</td>";
                    echo "<td>{$row['email']}</td>";
                    echo "<td>{$row['phone']}</td>";
                    echo "<td>{$row['address']}</td>";
                    echo "<td>{$row['otherPets']}</td>";
                    echo "<td>{$row['adoptionMotivation']}</td>";
                    echo "<td>{$row['budgetForCare']}</td>";
                    echo "<td>{$row['comments']}</td>";
                    echo "<td>{$row['submissionDate']}</td>";
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