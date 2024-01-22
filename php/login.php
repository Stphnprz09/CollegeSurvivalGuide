<?php
include_once 'php_server.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['txtUserName'];
    $password = $_POST['txtPassword'];

    $sql = "SELECT email, password FROM tblUser WHERE email = '$email' AND password = '$password'";

    $result = $conn->query($sql);

    if ($email !== null || $password !== null) {
        if ($result->num_rows == 1) {

            header("Location: ../html/home.html");
            exit();
        } else {
            $error[] = 'incorrent email or password';

            session_reset();
        }
    }
}

$conn->close();
