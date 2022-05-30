<?php
    require("connect.php");

    $codigo_livro = $_POST['c_codigo'];

    $sql = "DELETE FROM `item` where codigo_item = $codigo_livro";

    $resultado = mysqli_query($conexao, $sql);

    echo "Livro excluido com sucesso";

?>
<p> <a href="form_cadastrar_livro.html">Voltar</a>