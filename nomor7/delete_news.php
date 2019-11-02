<?php
// include database connection file
include 'include/config.php';

// Get id from URL to delete that user
$id = $_GET['id_news'];

// Delete user row from table based on given id
$result = mysqli_query($config, "DELETE FROM news WHERE id_news=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>