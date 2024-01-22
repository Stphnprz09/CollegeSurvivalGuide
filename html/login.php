<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>CSGuide | Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </style>
</head>

<body>
    <main>
        <form class="form" action="../php/login.php" method="post">
            <div class="container">
                <h2>Log in</h2>
                <div class="button-container">

                    <button class="btn-google"><i id="google" class="fa-brands fa-google"></i>Continue with Google</button>

                </div>
                <div class="or">
                    <p>Or</p>
                </div>

                <div class="input-group">
                    <label>Email</label>
                    <input type="text" name="txtUserName" class="form-control" placeholder="example@gmail.com" required>

                </div>
                <div class="input-group">
                    <div class="labels">
                        <div class="label">
                            <label>Password</label>
                        </div>
                        <div class="label2">

                            <button type="button" id="btnToggle" class="eye">
                                <i id="togglePassword" class="fa-regular fa-eye-slash"></i>
                            </button>
                        </div>
                        <div class="label3">
                            <p>Hide</p>
                        </div>
                    </div>
                    <input type="password" id="password" name="txtPassword" class="form-control" placeholder="••••••••">
                </div>
                <button class="btn" type="submit">Log in</button>
                <div class="below">
                    <div class="first">
                        <p>Don’t have an account? </p>
                    </div>
                    <div class="second">
                        <a href="SignUp.html">Create now</a>
                    </div>
                </div>

        </form>
        </div>


    </main>
    <script>
        const passwordInput = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
        });
    </script>
</body>

</html>