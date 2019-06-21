<?php
include 'conexao.php';

$sql = "SELECT * From PRODUTO";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
</head>
<body>
    <a href='http://localhost/projPHP/projeto-php/ATIVIDADE/form.php'> <button>Cadastrar Banda</button> </a><br><br>
    <table border=1>
        <thead>
            <th>COD</th>
            <th>Nome</th>
            <th>Data cadastro</th>
            <th>Valor</th>
            
        </thead>
        <?php while($dados = $result->fetch_assoc()) { 
            $id = $dados['COD_PRODUTO'];    
        ?>
        <tbody>
            <td><?php echo $dados['COD_PRODUTO']; ?></td>
            <td><?php echo $dados['NOM_PRODUTO']; ?></td>
            <td><?php echo $dados['DATA_CADASTRO']; ?></td>
            <td><?php echo $dados['VALOR']; ?></td>
        </tbody>
        <?php } ?>
    </table>    

</body>
</html>
