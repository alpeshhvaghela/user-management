<?php
ini_set("display_errors", true);
include("connection.php");
$id = $_GET['id'];
$sql = "DELETE FROM `trip_kachh` WHERE `trip_kachh`.`id` = $id;";
$result = mysqli_query($con, $sql);
if ($result == true) {
	header("Location: index.php?message=Deleted successfully");
}
?>
<!DOCTYPE html>