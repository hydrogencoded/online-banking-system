<?php
include "inc/header.php"
?>


<?php
 // Retrieve user data based on username
  if (isset($_GET['username'])) {
    $username = $_GET['username'];
    $sql = "SELECT * FROM user WHERE username='$username'";
    $result = $conn->query($sql);

    if (isset($_POST['submit'])) {
      $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $current_amount = $_POST['current_amount'];
        $level = $_POST['level'];
    
        // Update user information
        $sql = "UPDATE user SET name='$name', email='$email', username='$username', password='$password', current_amount='$current_amount', level='$level' WHERE username='$username'";
    
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('User Account Updated'); window.location.href = 'users.php';</script>";
        }
    }



    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <div class="container">
    <h2>Update User Info </h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" required>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo $row['username']; ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo $row['password']; ?>" required>
            </div>
            <div class="form-group">
                <label for="current_amount">Current Amount:</label>
                <input type="number" class="form-control" id="current_amount" name="current_amount" value="<?php echo $row['current_amount']; ?>" required>
            </div>
            <div class="form-group">
            <label for="current_amount">PARD LEVEL:</label>
            <input type="number" class="form-control" id="level" name="level" value="<?php echo $row['level']; ?>" required>
        </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
        <?php
    } else {
        echo "User not found.";
    }
}
?>
    </form>
</div>

<?php
include "inc/footer.php";
?>