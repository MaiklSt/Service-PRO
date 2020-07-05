<?php

$to   	= 'servicepro.org.ua@gmail.com';//replace with your email
$fio = $_POST['name'];
$email = $_POST['subject'];
$message = $_POST['message'];

//$fio = htmlspecialchars($fio);
//$email = htmlspecialchars($email);
//$fio = urldecode($fio);
//$email = urldecode($email);
//$fio = trim($fio);
//$email = trim($email);
//header('Content-type: text/html; charset=utf-8');
//$headers = "Content-type: text/plain; charset=iso-8859-1";
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("servicepro.org.ua@gmail.com", "Заявка с сайта", "ФИО: ".$fio.",   Телефон: ".$email. "	Проблема: ".$message, "From: maykstuglas@gmail.com \r\n"))
	{
		mail($to, $fio, $email);
		include('sending.html');
	//	$filename="index.html";
//		$data=file_get_contents($filename);
	} 	else {
    echo "Errors! Problemm";
	
	
}
