<?php
session_start();

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php
        if (isset($_SESSION['message'])) {
            // Display message
            echo '<div class="alert alert-primary mt-5" role="alert" style="width:50%; margin:auto;">' . $_SESSION['message'] . ' </div>';
            // Unset message so it doesn't show up again on page refresh
            unset($_SESSION['message']);
        }
        ?>

        <div class="row mt-5" style="width:50%; margin:auto; border: 1px solid #ccc; padding:5px">
            <h3 class="mt-5 text-center">Login Form</h3>
            <form method="POST" action="check-login.php">
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                
                <button type="submit" class="btn btn-warning mt-2 mb-3">Login</button>  
                  <span>Not a regesterd? <a href="registration.php">Register Now</a></span>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>