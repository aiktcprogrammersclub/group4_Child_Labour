
<?php
session_start();
unset($_SESSION['adname']);
session_destroy();
header('location:admin.php');
?>