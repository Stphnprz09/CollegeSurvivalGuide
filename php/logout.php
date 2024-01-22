<?php
include_once 'php_server.php';

session_start();
session_unset();
session_destroy();
header("Location: login.php");
