<?
	include 'db_connect.php';
	$ip = $_SERVER['REMOTE_ADDR'];
	$result = mysqli_query($link, "SELECT * FROM online WHERE ip='$ip'");
	if(mysqli_num_rows($result) == 0)
	{
		mysqli_query($link, "INSERT INTO online(ip) VALUES ('$ip')");
	}
	mysqli_free_result($result);
	$result = mysqli_query($link, "SELECT COUNT(*) as count FROM online");
	$row = mysqli_fetch_assoc($result);
	echo $row['count'];
	mysqli_free_result($result);
?>