<?php
session_start();
if (!isset($_SESSION['user'])) {
 header("Location: start.php");
} else if(isset($_SESSION['user'])!="") {
 header("Location: user.php");
}
if (!isset($_SESSION['admin'])) {
 header("Location: start.php");
} else if(isset($_SESSION['user'])!="") {
 header("Location: index.php");
}
if (isset($_GET['logout'])) {
 unset($_SESSION['admin']);
 unset($_SESSION['user']);
 session_unset();
 session_destroy();
 header("Location: start.php");
 exit;
}
?>