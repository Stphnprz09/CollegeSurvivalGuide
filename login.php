<?php
include_once 'dbconfig.php';
session_start();
$error = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['txtUserName'];
    $password = $_POST['txtPassword'];

    $sql = "SELECT email, password FROM tblUser WHERE email = '$email' AND password = '$password'";

    $result = $conn->query($sql);

    if (!empty($email) && !empty($password)) {
        if ($result->num_rows == 1) {

            header('Location: Home.html');
            exit();
        } else {
            $error[] = 'incorrent email or password';
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="Images/logo1.png" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">
    <title>Login | CS Guide</title>
</head>

<body>
    <main>
        <form action="" method="post">
            <form class="form" action="../php/login.php" method="post">
                <div class="container">
                    <!-- Log in -->
                    <h2>Log in</h2>
                    <div class="button-container">
                        <button class="btn-google"><i id="google" class="fa-brands fa-google"></i>Continue with Google</button>
                    </div>
                    <!-- or between -->
                    <div class="or">
                        <p>Or</p>
                    </div>

                    <!-- email -->
                    <div class="input-group">
                        <label>Email</label>
                        <input type="text" name="txtUserName" class="form-control" placeholder="example@gmail.com" required>
                    </div>

                    <!-- password -->
                    <div class="input-group">
                        <div class="labels">
                            <div class="label">
                                <label>Password</label>
                            </div>
                            <!-- hide -->
                            <div class="label2">
                                <button type="button" id="btnToggle" class="eye" onclick="togglePassword()">
                                    <i id="togglePassword" class="fa-regular fa-eye-slash"></i>
                                </button>
                            </div>
                            <div class="label3">
                                <p>Hide</p>
                            </div>
                        </div>
                        <input type="password" id="password" name="txtPassword" class="form-control" placeholder="••••••••" required>
                    </div>
                    <!-- span for error -->
                    <div class="error-class">
                        <?php
                        if (!empty($error)) {
                            foreach ($error as $errorMsg) {
                                echo '<span class="error-mgs">' . $errorMsg . '</span>';
                            }
                        }
                        ?>
                    </div>
                    <button class="btn" type="submit">Log in</button>
                    <div class="below">
                        <div class="first">
                            <p>Don’t have an account? </p>
                        </div>
                        <div class="second">
                            <a href="#">Create now</a>
                        </div>
                    </div>
                </div>
            </form>
    </main>
</body>
<script src="js/togglePassword.js"></script>

</html>