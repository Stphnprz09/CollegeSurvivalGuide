<?php
include_once 'php_server.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['txtUserName'];
    $password = $_POST['txtPassword'];

    $sql = "SELECT email, password FROM tblUser WHERE email = '$email' AND password = '$password'";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        header("Location: ../html/home.html");
        exit();
    } else {
        echo "Error";
        exit();
    }
}

$conn->close();
