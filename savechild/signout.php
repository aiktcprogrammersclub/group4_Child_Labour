<?php
include 'h2.php';
session_start();
unset($_SESSION['name']);
session_destroy();
header('location:home.php');
?>