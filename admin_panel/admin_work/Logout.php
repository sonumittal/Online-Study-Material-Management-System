<?php
include_once('../connection.php');
session_start();
if(isset($_SESSION['Admin'])&& $_SESSION['Admin']=='true')
 {
$_SESSION['Admin']=='false';
// closing connection
mysqli_close($connection);
session_destroy();
echo "<script>window.location.replace('../Login.php?user_type=Admin');</script>";
}
?>