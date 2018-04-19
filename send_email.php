<?php
$handle = @fopen("baza.txt", "r");
$flag = false;
$count = 0;
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
    	if(substr($buffer, -8, 7) == "mail.ru"){
        $to = $buffer; //Кому
  $from = "Анонимный чат<jekerr@anon-chat.ru>"; //От кого
  $subject = "=?utf-8?B?". base64_encode("Новый анонимный чат"). "?="; //Тема
  $message = "<html>
<body>
	<div style='text-align: center; width: 600px;''>
<div style='text-align: justify; color: white; font-family: Comic Sans MS; padding: 10px; background: url(https://anon-chat.ru/include/email_image.php);'' ><span>	
Тебе надоели старые, неказистые чаты с онанистами? Неадекватные люди выбешивают, когда ты пытаешься найти хорошего собеседника? Мы нашли выход, сделать свой чат, с дружелюбной атмосферой, добросовестной модерацией и приятным дизайном. Для удобства мы предлагаем вам эргономичный фильтр поиска собеседника. Наслаждайся общением в новом качестве.

</span>
  <div style='text-align: center;'>
	<a href='https://anon-chat.ru?from=email' class='btn' style='
	display: inline-block;
	text-decoration: none;
	text-align: center;
	font-family: Comic Sans MS;
    margin-top: 20px;
    padding: 5px;
    color: white;
    cursor: pointer;
    user-select: none;
    transition: all 0.1s ease-in-out;
    border-radius: 5px;
    border: 1px solid rgb(70, 33, 93);
background: rgb(67, 130, 173);
    border-bottom: 3px solid rgb(70, 33, 93);
    width: 160px;
    border-width: 1px 1px 3px;
    border-style: solid;
    border-color: #152c3e;
    font-size: 21px;
    border-image: initial;'>Наслаждаться</a></div></div>
  </div>
</body>
</html>"; //Текст письма
  $boundary = "---"; //Разделитель
  /* Заголовки */
  $headers = "From: $from\nReply-To: $from\n";
  $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"";
  $body = "--$boundary\n";
  /* Присоединяем текстовое сообщение */
  $body.="Content-type: text/html; charset=\"UTF-8\"\n";
  $body.="Content-Transfer-Encoding: 8bit\n\n";
  $body .= $message."\n";
  $body .= "--$boundary\n";
  mail($to, $subject, $body, $headers); //Отправляем письмо
  $count++;
}
    }
    if (!feof($handle)) {
        echo "Ошибка: fgets() неожиданно потерпел неудачу\n";
    }
    fclose($handle);
    header("charset='utf-8");
    echo "send $count email";
}
?>