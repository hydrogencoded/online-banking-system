<?php
include "dbconnect.php";
// Login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare statement
    $stmt = $conn->prepare("SELECT * FROM user WHERE username=? AND password=?");
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intez</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="@@class">

<div id="preloader">
    <i>.</i>
    <i>.</i>
    <i>.</i>
</div>

<div class="authincation section-padding">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-xl-5 col-md-6">
                
                <div class="auth-form card">
                    <div class="mini-logo text-center my-4">
                        <a href="#"><img src="images/web-mag.png" width="200" alt=""></a>
                        <h4 class="card-title mt-5">Sign in to your DCU Account </h4>
                    </div>
                    <div class="card-body">
                        <form method="post"  class="signin_validate row g-3" action="">
                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" placeholder="John Doe"
                                    name="username">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <div class="col-6">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Remember
                                        me</label>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <a href="reset.html">Forgot Password?</a>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </form>
                        <p class="mt-3 mb-0">© 2024 Digital Federal Credit Union   |   v7.3.0 <a class="text-primary" href="signup.html">Sign
                                up</a></p>
                    </div>

                </div>
                <!-- <div class="privacy-link">
                    <a href="signup.html"> © 2024 Digital Federal Credit Union   |   v7.3.0</a>
                    <br />
                    <a href="signup.html">Privacy Policy</a>
                </div> -->
            </div>
        </div>
    </div>
</div>



<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="js/scripts.js"></script>


</body>
</html>