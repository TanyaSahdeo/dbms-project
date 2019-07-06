<?php
session_start();
echo "welcome".$_SESSION['user'];
echo "<br/>Your profile is".$_SESSION['profile'];
?>