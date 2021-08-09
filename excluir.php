<?php
include 'conexao.php';

/// recebendo dados do usuário

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$funcao = $_POST['funcao'];

/// inserir os dados preenchidos no banco de dados

$sql =  "DELETE FROM `tb_pessoas` WHERE `tb_pessoas`.`pes_id` = $linha";
echo $sql;



/// Executar o comando SQL
mysqli_query($conexao, $sql);
/// Fechar conexão
mysqli_close($conexao);



?>
<script type = "text/javascript">
alert("Deletado com sucesso");
window.location.href="index.php";
 </script>
