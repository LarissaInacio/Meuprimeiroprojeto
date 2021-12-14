<?php
//Atribuir os valores vindos do post em variáveis:
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

//Mostrar informações
echo "Olá, {$nome} <br> Recebemos a seguinte mensagem que você enviou:<br>";
echo "{$mensagem}<br>";
echo "Assim que possível iremos responder para o e-mail {$email} ou telefone {$telefone}<br>";
echo "Obrigado!";
?>
