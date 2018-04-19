<?
header('Content-type: image/jpg');
readfile("../images/fon1.jpg");
include 'db_connect.php';
		$result = mysqli_query($link, "INSERT INTO email(date_open) VALUES (NOW())");
		mysqli_free_result($result);
?>