<?php
    require("connect.php");

    $titulo_album = $_POST['c_titulo_cd'];

    $sql = "SELECT `codigo_cd` FROM `item` WHERE titulo = '$titulo_album'";

    $resultado = mysqli_query($conexao, $sql);

    $quantidade = mysqli_num_rows($resultado);

    echo "Existem ".$quantidade."de album(s) cadastrado(s) com o nome de ".$titulo_album;

?>
<p><a href="form_pesquisar_cd.html">Voltar</a