<?php

use App\Alura\Contato;
use App\Alura\Usuario;

require 'autoload.php';

$usuario = new Usuario($_POST['nome'], $_POST['senha'], $_POST['genero']);
$contato = new Contato($_POST['email'], $_POST['endereco'], $_POST['cep'], $_POST['telefone']);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Curso Strings</title>
</head>

<body>

    <div class="mx-5 my-5">
        <h1>Cadastro feito com sucesso.</h1>
        <p> <?php echo htmlspecialchars($usuario->getTratamento()); ?>, seguem os dados de sua conta:</p>
        <ul class="list-group">
            <li class="list-group-item">Primeiro nome: <?= htmlspecialchars($usuario->getNome()); ?></li class="list-group-item">
            <li class="list-group-item">Sobrenome: <?= htmlspecialchars($usuario->getSobrenome()); ?></li class="list-group-item">
            <li class="list-group-item">Usuário: <?= htmlspecialchars($contato->getUsuario()); ?></li class="list-group-item">
            <li class="list-group-item">Senha: <?= htmlspecialchars($usuario->getSenha()); ?></li class="list-group-item">
            <li class="list-group-item">Telefone: <?= htmlspecialchars($contato->getTelefone()); ?></li class="list-group-item">
            <li class="list-group-item">Email: <?= htmlspecialchars($contato->getEmail()); ?></li class="list-group-item">
            <li class="list-group-item">Endereço: <?= htmlspecialchars($contato->getEnderecoCep()); ?></li class="list-group-item">
        </ul>
    </div>
</body>

</html>