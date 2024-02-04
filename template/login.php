<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('dbconfig.php');
include('rules.php');

$error = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login_acc'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $loginError = userLogin($email, $password);

    if ($loginError) {
        $error[] = $loginError;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="shortcut icon" href="../Images/finalLogo.png" type="image/x-icon">
    <title>CSGuide | Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>
    <div class="container">

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="header">Log In</div>

            <!--EMAIL INPUT-->
            <div class="inputs">
                <label>Email</label>
                <input type="email" name="email" placeholder="you@domain.com" autocomplete="off">
            </div>

            <!--PASSWORD INPUT-->
            <div class="inputs">
                <label>Password</label>
                <input type="password" id="password" name="password" placeholder="******">
                <div class="togglePassword" onclick="togglePassword()">
                    <i id="togglePassword" class="fa-regular fa-eye-slash"></i>
                    <span>Hide</span>
                </div>
            </div>
            <!-- error message -->
            <?php
            if (!empty($error)) {
                foreach ($error as $errorMsg) {
                    echo '<div class="error-class"><span class="error-mgs">' . $errorMsg . '</span></div>';
                }
            }
            ?>

            <!--CREATE BUTTON-->
            <button type="submit" name="login_acc" class="create-btn">Log In</button>

            <!--LOGIN DIRECTORY-->
            <div class="login-link">
                Don't have an account?
                <a href="sigin.php">Sign In</a>
            </div>
        </form>
    </div>
</body>
<script src="../js/togglePassword.js"></script>

</html>