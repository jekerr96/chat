<?
	include 'db_connect.php';
	$ip = $_SERVER['REMOTE_ADDR'];
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$result = mysqli_query($link, "SELECT * FROM stat WHERE ip='$ip'");
	if(mysqli_num_rows($result) == 0)
	{
		mysqli_query($link, "INSERT INTO stat(ip) VALUES ('$ip')");
		mysqli_free_result($result);

  $to = "jekerr96@gmail.com"; //Кому
  $from = "Анонимный чат <jekerr@anon-chat.ru>"; //От кого
  $subject = "Новый посититель"; //Тема
  $message = "IP - $ip <br> User-Agent - $user_agent"; //Текст письма
  $boundary = "---"; //Разделитель
  /* Заголовки */
  $headers = "From: $from\nReply-To: $from\n";
  $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"";
  $body = "--$boundary\n";
  /* Присоединяем текстовое сообщение */
  $body .= "Content-type: text/html; charset='utf-8'\n";
  $body .= "Content-Transfer-Encoding: quoted-printablenn";
  $body .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode($filename)."?=\n\n";
  $body .= $message."\n";
  $body .= "--$boundary\n";
  //mail($to, $subject, $body, $headers); //Отправляем письмо

	}
?>