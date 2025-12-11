<?php
session_start(); //para iniciar a seção
require 'conexao.php'; //chamando a classe de conexao


if (isset($_POST['create-user'])) { //se o botão estiver setado

    /*pegando os dados do campo e setando na variável */

    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $data_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_nascimento']));
    $senha = isset($_POST['senha']) ? mysqli_real_escape_string($conexao, password_hash(trim($_POST['senha']), PASSWORD_DEFAULT)) : '';
    $perfil = mysqli_real_escape_string($conexao, trim($_POST['perfil']));

    $sql = "INSERT INTO usuario (nome, email, data_nascimento, senha, perfil) VALUES ('$nome', '$email', '$data_nascimento', '$senha', '$perfil')";

    // echo $sql;
    // exit;

    /*executando a instrução sql */
    mysqli_query($conexao, $sql);

    /*verificando se o usuário foi criado ou nao */
    if (mysqli_affected_rows($conexao) > 0) {

        $_SESSION["mensagem"] = "Usuário criado com sucesso.";
        header('Location: index.php'); //manda o usuário para a index
        exit;
    } else {
        $_SESSION["mensagem"] = "Usuário não foi criado.";
        header('Location: index.php'); //manda o usuário para a index
        exit;
    }
}
