<?php

$usuario = "root";
$senha = "";
$servidor = "localhost";
$porta = "3306";
$nome_banco = "bd_barbearia";

$conexao = mysqli_connect($servidor, $usuario, $senha, $nome_banco, $porta);
echo "<h1>Arquivo de conexão</h1>";

?>