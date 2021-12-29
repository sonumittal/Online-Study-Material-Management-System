<?php
include_once('connection.php');
session_start();
if(isset($_SESSION['SuperAdmin'])&& $_SESSION['SuperAdmin']=='true')
 {
$_SESSION['SuperAdmin']=='false';
session_destroy();
// closing connection
mysqli_close($connection);
echo "<script>window.location.replace('Login.php?user_type=Super Admin');</script>";
}
?>