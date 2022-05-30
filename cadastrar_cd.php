<?php
    require("connect.php");

    $titulo =$_POST['c_titulo'];
    $faixas = $_POST['c_faixas'];
    $termo = $_POST['c_termo'];
    $data_lancamento = $_POST['c_ano'];

    $sql = "INSERT INTO `item`(`titulo`, `faixas`, `data`,`termo`) VALUES ('$titulo', '$faixas','$data_lancamento', '$termo')";

    $resultado = mysqli_query($conexao, $sql);

    echo "inserido com sucesso";
?>
<p><a href="form_cadastrar_cd.html">Voltar</a