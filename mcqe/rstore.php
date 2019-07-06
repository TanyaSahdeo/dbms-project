<?php
session_start();

// initializing variables
$rating = "";
$review = "";


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'mcqe');
if (isset($_POST['RStore'])) {
	  $rating = mysqli_real_escape_string($db, $_POST['rating']);
	  $review = mysqli_real_escape_string($db, $_POST['Review']);
	  $sql = "UPDATE `r_r` SET `r_data`='$review' WHERE 1";
	  $result = mysqli_query($db, $sql);
	  $_SESSION['success1'] = "Done!";
	  header('location: moviedetail.php');
}
?>