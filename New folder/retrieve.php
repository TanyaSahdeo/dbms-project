<?php
session_start();
echo "Welcome".$_SESSION['user'];
echo "<br/>Your Profile is".$_SESSION['profile'];
?>
