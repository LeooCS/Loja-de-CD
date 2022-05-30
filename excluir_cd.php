<?php
    require("connect.php");

    $codigo_cd = $_POST['c_codigo'];

    $sql = "DELETE FROM `item` where codigo_cd = $codigo_cd";

    $resultado = mysqli_query($conexao, $sql);

    echo "Album excluido com sucesso";

?>
<p> <a href="form_cadastrar_livro.html">Voltar</a>