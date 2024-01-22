<?php
include_once 'php_server.php';

session_start();
unset($_SESSION['email']);
header("Location: login.php");
