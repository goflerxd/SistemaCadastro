<?php
include 'conexao.php';

/// recebendo dados do usuário

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$funcao = $_POST['funcao'];

/// inserir os dados preenchidos no banco de dados

$sql = "INSERT INTO 'tb_pessoas' ('pes_id', 'pes_nomes', 'pes_CP', 'pes_funcao') VALUES (null, '$nome', '$cpf', '$funcao');";
echo $sql;

////mysqli_query($conexao, $sql);

/// Execute o comando
mysqli_query($conexao, $banco);

?>
<script type = "text/javascript">
alert("Salvo com sucesso");
window.location.href="index.php";
 </script>
