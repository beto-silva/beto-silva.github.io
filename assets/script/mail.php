<?php
$name = $_POST['nome'];
$assunto = $_POST['assunto'];
$email = $_POST['email'];
$textarea = $_POST['mensagem'];
$submit = $_POST['submit'];
$mensagem="From: $name \n Mensagem: $mensagem";
$mailheader ="From: $email \r\n";
$to = "jrs_robert@hotmail.com";

if (!$_POST['name']) 
{
	$errName = 'Digite seu nome'
}

if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
{
	$errEmail = 'Digite um email valido';
}

if (!$_POST['mensagem']) 
{
	$errName = 'Digite sua mensagem'
}
mail($to, $assunto, $mensagem, $mailheader) or die ("Error!");
echo "Thank you";
?>