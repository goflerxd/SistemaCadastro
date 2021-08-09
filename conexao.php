<?php

/// atributos básicos para uma conexão com banco MySQL

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "cadastrosuece";

/// realizando a conexão 

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
if (mysqli_set_charset($conexao, 'UTF8')) {
  $id= "Não conseguiu encontrar charset";
};

?>
