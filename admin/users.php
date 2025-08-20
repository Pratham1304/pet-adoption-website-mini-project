<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data Report</title>
</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 50px;
    }

    th,
    td {
        padding: 15px;
        border: 1px solid #ddd;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
</style>

<body>
    <?php require('admin-nav.php'); ?>
    <div class="container2">
        <h2>User Data Report</h2>
        <table>
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Mobile No.</th>
                <th>Registration Date & Time</th>
            </tr>
            <?php
            // Include your database connection file
            include '../dbconn.php';

            // Execute the SQL query
            $query = "SELECT * FROM users";
            $result = mysqli_query($con, $query);

            // Check if query was successful
            if ($result) {
                // Fetch data and display in table rows
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$row['user_id']}</td>";
                    echo "<td>{$row['username']}</td>";
                    echo "<td>{$row['mob']}</td>";
                    echo "<td>{$row['registration_date-time']}</td>";
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