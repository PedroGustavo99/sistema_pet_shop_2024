<?php
error_reporting(0);
include "conexao.php";
$idcliente = $_POST['idcliente'];
$idpessoa = $_POST['idpessoa'];
$cpf_cnpj = $_POST['cpf_cnpj'];

$inserir = mysql_query("INSERT INTO orcamento 
                (idcliente,idpessoa,cpf_cnpj) 
		        VALUES('$idcliente','$idpessoa','$cpf_cnpj')") or die(mysql_error());
mysql_close($db);
?>