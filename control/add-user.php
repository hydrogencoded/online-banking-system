<?php
include "inc/header.php"
?>
<?php

// Handle form submission

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $current_amount = $_POST['current_amount'];
    $level = $_POST['level'];

    // Check if user already exists (in case of editing)
    if (isset($_POST['user_id'])) {
        $user_id = $_POST['user_id'];
        $sql = "UPDATE user SET name='$name', email='$email', username='$username', password='$password', current_amount='$current_amount', level='$level' WHERE id='$user_id'";
    } else {
        // Insert new user
        $sql = "INSERT INTO user (name, email, username, password, current_amount, level, date_registered) VALUES ('$name', '$email', '$username', '$password', '$current_amount', '$level', NOW())";
    }

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('User Added Succesfully'); window.location.href = 'users.php';</script>";
    }
}
?>


<div class="container">
    <h2>Add New User </h2>
    <form method="post" action="process_user.php">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="current_amount">Current Balance:</label>
            <input type="number" class="form-control" id="current_amount" name="current_amount" required>
        </div>

        <div class="form-group">
            <label for="current_amount">PARD LEVEL:</label>
            <input type="number" class="form-control" id="level" name="level" required>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>

<?php
include "inc/footer.php";
?>