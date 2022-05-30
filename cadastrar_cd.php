<?php
    require("connect.php");

    $descricao =$_POST['c_descricao'];
    $autor = $_POST['c_autor'];
    $quantidade = $_POST['c_quantidade'];
    $tipo_capa = $_POST['tipo_capa'];
    $categoria_livro = $_POST['categoria_livro'];
    $termo = $_POST['c_termo'];
    $data_nascimento = $_POST['data_nascimento'];

    $sql = "INSERT INTO `item`(`quantidade`, `descricao`, `autor`,`tipo_capa`,`categoria_livro`, `termo`,`data_nascimento`) VALUES ('$quantidade', '$descricao', '$autor', '$tipo_capa', '$categoria_livro', '$termo', '$data_nascimento')";

    $resultado = mysqli_query($conexao, $sql);

    echo "inserido com sucesso";
?>
<p><a href="form_cadastrar_livro.html">Voltar</a