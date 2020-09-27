<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];

	if (mail("uvarkin77@gmail.com", "Звонок с сайта", "Имя:".$name .". Телефон: ".$phone ,"From: example2@mail.ru \r\n"))
 	{     
 		echo "сообщение успешно отправлено";
	} 
	else 
	{
    echo "при отправке сообщения возникли ошибки";
  }


	
?>