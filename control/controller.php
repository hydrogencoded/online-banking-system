<?php
include "../dbconnect.php";
// Login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare statement
    $stmt = $conn->prepare("SELECT * FROM control_panel WHERE admin=? AND access_code=?");
    $stmt->bind_param("ss", $username, $password);

    // Execute statement
    $stmt->execute();

    // Get result
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Login successful
        session_start();
        $_SESSION['username'] = $username;
        header("location: dashboard.php"); // Redirect to welcome page
    } else {
        // Login failed
        echo "<script> alert('invalid Username or password') </script>" ;
        // $error = "Invalid username or password";    

    }

    // Close statement
    $stmt->close();
}

?>