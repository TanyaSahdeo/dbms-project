<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['profile']);
echo"Destroyed:".$_SESSION['user'];
echo"Destroyed:".$_SESSION['profile'];
?>