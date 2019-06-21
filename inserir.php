<?php
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$dt_cad = $_POST['dt_cad'];
$qtd_part = $_POST['qtd_part'];

$sql = "INSERT into PRODUTO(COD_PRODUTO,NOM_PRODUTO,DATA_CADASTRO,VALOR) values($id,'$nome','$dt_cad',$qtd_part)";
var_dump($sql);
$result = $conn->query($sql);

header('Location: http://localhost/projPHP/projeto-php/ATIVIDADE/index.php');