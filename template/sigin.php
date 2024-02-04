<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include('dbconfig.php');
include('rules.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['create_acc'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    insertData($name, $email, $password);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signin.css">
    <link rel="shortcut icon" href="../Images/finalLogo.png" type="image/x-icon">
    <title>Sign up</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>
    <div class="container">

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="header">Create an Account</div>

            <!--NAME INPUT-->
            <div class="inputs">
                <label>Name</label>
                <input type="text" name="name" placeholder="What should we call you?">
            </div>

            <!--EMAIL INPUT-->
            <div class="inputs">
                <label>Email</label>
                <input type="email" name="email" placeholder="you@domain.com" autocomplete="off">
            </div>

            <!--PASSWORD INPUT-->
            <div class="inputs">
                <label>Password</label>
                <input type="password" id="password" name="password" placeholder="Must be at least 8 characters">
                <div class="togglePassword" onclick="togglePassword()">
                    <i id="togglePassword" class="fa-regular fa-eye-slash"></i>
                    <span>Hide</span>
                </div>
            </div>

            <!--CREATE BUTTON-->
            <button type="submit" name="create_acc" class="create-btn">Create account</button>

            <!--LOGIN DIRECTORY-->
            <div class="login-link">
                Already have an account?
                <a href="login.php">Log In</a>
            </div>
        </form>

    </div>
</body>
<script src="../js/togglePassword.js"></script>

</html>