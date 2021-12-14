<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="container">  
  <form id="contact" action="resultado.php" method="post">
    <h3>Contato</h3>
    <h4><?php
    //Verificar se a url está sendo acessada com o parametro "nome"
    //index.php?nome=???
    if(isset($_GET['nome'])){
      echo"Olá,{$_GET['nome']}!";
    }
    ?> Entre em contato conosco pelo formulário abaixo:</h4> 
    <fieldset>
      <input name="nome" placeholder="Nome" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input name="email" placeholder="E-mail" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input name="telefone" placeholder="Telefone" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea name="mensagem" placeholder="Digite sua mensagem" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="Enviando...">Enviar</button>
    </fieldset>
  </form>
</div>
</body>
</html>

<!-- <?=$_GET['nome'];?> -->