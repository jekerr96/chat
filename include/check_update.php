<?
	include 'db_connect.php';
	$time = 60;
	$result = mysqli_query($link, "SELECT unix_timestamp(last) as last FROM last_update where id=1");
	$row = mysqli_fetch_assoc($result);
	if(time() > $row['last'] + $time)
	{
		mysqli_query($link, "DELETE FROM online");
		mysqli_query($link, "ALTER TABLE online AUTO_INCREMENT=1");
		mysqli_query($link, "UPDATE last_update SET last=NOW() where id=1");
		echo $row['last'];
	}
	else echo "1";
	mysqli_free_result($result);
?>