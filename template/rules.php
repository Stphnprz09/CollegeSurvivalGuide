<?php
include('models.php');

// function for inserting new data for user creation
function insertData($name, $email, $password)
{
    global $conn;
    $insertSql = $conn->prepare("INSERT INTO tblUser (name, email, password) VALUES (?, ?, ?)");
    $insertSql->bind_param("sss", $name, $email, $password);

    if ($insertSql->execute()) {
        echo "already registed";
        header('location: login.php');
        exit();
    } else {
        echo $conn->error;
    }
}

// function for inserting the users credentials
function userLogin($email, $password)
{
    global $conn;
    $selectSql = "SELECT email, password FROM tblUser WHERE email = '$email' AND password = '$password'";

    $result = $conn->query($selectSql);
    if (!empty($email) && !empty($password)) {
        if ($result->num_rows == 1) {

            header('Location: Home.html');
            exit();
        } else {
            return 'incorrect email or password';
        }
    }
}

function userContact($name, $email, $message)
{
    global $conn;
    $insertSql = $conn->prepare("INSERT into contact (name,email,message)VALUES (?,?,?)");
    $insertSql->bind_param("sss", $name, $email, $message);

    if ($insertSql->execute()) {
        header('location: contactus.html');
        exit();
    } else {
        echo $conn->error;
    }
}
