<?php
$name = $_POST['name'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$name = htmlspecialchars($name);
$lname = htmlspecialchars($lname);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$message = htmlspecialchars($message);
$name = urldecode($name);
$lname = urldecode($lname);
$email = urldecode($email);
$phone = urldecode($phone);
$message = urldecode($message);
$name = trim($name);
$lname = trim($lname);
$email = trim($email);
$phone = trim($phone);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("tchinchaev@bk.ru",
         "Заявка с сайта",
          "ФИО:".$name. ".$lname"."\n".
           "E-mail:".$email."\n".
           "Phone:".$phone ,
            "From: example2@mail.ru \r\n"))
 {     
    echo ("сообщение успешно отправлено");
} 
else {
    echo ("при отправке сообщения возникли ошибки");
}
?>