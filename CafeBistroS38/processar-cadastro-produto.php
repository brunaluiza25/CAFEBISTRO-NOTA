<?php
require_once "conexao.php";

// ...
$tipo = $_POST["tipo"];
$nome = $_POST["nome"];
$descricao = $_GET["descricao"];
$preco = $_POST["preco"];
$imagem = $_POST["imagem"];


if ($senha === $confirmarsenha) {
    // Inserir os dados na tabela 'usuario'
    $sql = "INSERT INTO produtos (tipo, nome, descricao, preco, imagem) VALUES 
    ('$tipo', '$nome', $descricao, $preco, $imagem)";

    if ($conn->query($sql) === TRUE) {
        header("Location: cadastrar-produto-sucesso.php");
        exit();
    } else {
        header("Location: cadastrar-produto.php?erro=2");
        exit();
    }
    $conn->close();
}else{
    header("Location: cadastrar-produto.php?erro=1");
    exit();
}
