<?php   
    //Importando o arquivo de conexão com o BD(connect)//
	require("connect.php");

    //Obtendo os valores dos campos//
	$nome_antigo = $_POST['c_titulo_antigo'];
    $nome_novo = $_POST['c_titulo_novo'];
   	
    //Salvando a SQL em uma variavel
	$sql = "UPDATE `item` SET `titulo`='$nome_novo' WHERE `titulo` = '$nome_antigo'";	
    
    //executando a SQL que esta na variavel
    $resultado = mysqli_query($conexao, $sql);
    
    echo "Album alterado com sucesso";      
?>
<p><a href="form_atualizar_cd.html">Voltar</a