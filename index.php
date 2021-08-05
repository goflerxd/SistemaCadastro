<?php
include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP com BD</title>
</head>
<body>
<h3>Fórmulário de Acesso e Informações</h3>
<form method = 'POST' action='salvar.php'>
       Id: <input type = "text" name = "id" ><br>
       Nome:<input type = "text" name = "nome"><br>
       CPF: <input type = "text" name = "cpf" > <br>
       Função: <input type = "text" name = "funcao" > <br>
            <input type = "submit" value = "Salvar Dados">    
</form>
      <table border="1">
        <tr><th>ID</th><th>Nome</th><th>CPF</th><th>Funçao</th>
            <th>Editar</th><th>Excluir</th>
        </tr>

    <?php
        $sql = "'SELECT * FROM 'tb_pessoas'";

        $resultados = mysqli_query($conexao, $sql);
        while($linha = $resultados->fetch_assoc()){
            echo "<tr>
            <td>".$linha['pes_id']."</td>
            <td>".$linha['pes_nome']."</td>
            <td>".$linha['pes_CPF']."</td>
            <td>".$linha['pes_funcao']."</td>
            <td><img src='imagens/edit.png' width='32px'></td>
            <td><img src='imagens/delete.png' width='32px'></td>
                </tr>";
        }
    ?>
</table>
</body>
</html>   