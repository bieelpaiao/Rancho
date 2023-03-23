<?php
$msg = htmlspecialchars($_POST['mensagem']);
$entrada = htmlspecialchars($_POST['data-entrada']);
$saida = htmlspecialchars($_POST['data-saida']);
$cliente = htmlspecialchars($_POST['nome']);
$email = htmlspecialchars($_POST['email']);

$encoded_msg = str_replace("+", "%20", urlencode($msg));

$datas_msg = "[RESERVA RANCHO CIA DA PESCA 🐟] \n👤 CLIENTE: ".$cliente."\n📧 E-MAIL: ".$email." \n📆 ENTRADA EM: ".$entrada."  \n📆 SAÍDA EM: ".$saida."\n\n📝 MENSAGEM: ";

$original = array("%40, @");
$substituir = array("+, %20");

$encoded_datas_msg = str_replace($original, $substituir, urlencode($datas_msg));

$href = "https://api.whatsapp.com/send/?phone=5518998124063&text=".$encoded_datas_msg.$encoded_msg;

header("Location: ".$href);
?>