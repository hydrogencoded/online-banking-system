<?php
include "inc/header.php"
?>

<div class="container">


    <h2>View All Users</h2>
    <a href="add-user.php" class="btn btn-primary">Add New User</a> <!-- Button to add new user -->

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <!-- <th>Email</th> -->
                <th>Username</th>
                <th>Balance</th>
                <th>Level</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Fetch all users
            $sql = "SELECT * FROM user";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    // echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['current_amount'] . "</td>";
                    echo "<td>" . $row['level'] . "</td>";
                    echo "<td><a href='edit_user.php?username=" . $row['username'] . "' class='btn btn-primary'>Edit</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No users found</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</div>



<?php
include "inc/footer.php";
?>