<?
error_reporting(E_ALL); ini_set('display_errors', 1);
# alterar a variavel abaixo colocando o seu email

$destinatario = "matheuslink18@hotmail.com.br";

$nome = $_REQUEST['name'];
$email = $_REQUEST['email'];
$mensagem = $_REQUEST['message'];

 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "FALE CONOSCO - TESTE COMPROVATIVO" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $nome , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:home.html");


?>
