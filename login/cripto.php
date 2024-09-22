<?php

$array_usuarios = array(
    md5("fbamuniz"),
    md5("luiscastellain"),
    md5("adm")
);

$array_senhas = array(md5("123456"));

if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    $usuario = md5(strtolower(trim($_POST['usuario'])));
    $senha = md5(strtolower(trim($_POST['senha'])));

    // Verifica o estado de usuário e senha
    $usuario_correto = in_array($usuario, $array_usuarios);
    $senha_correta = in_array($senha, $array_senhas);

    if ($usuario_correto && $senha_correta) {
        header("Location: array.php");
        exit();
    }

    $mensagem = !$usuario_correto && !$senha_correta
        ? 'Usuário e Senha incorretos!'
        : (!$usuario_correto ? 'Usuário incorreto!' : 'Senha incorreta!');

    echo "<script>
            alert('$mensagem');
            window.location.href = 'login.php';
          </script>";
    exit();
}

?>
