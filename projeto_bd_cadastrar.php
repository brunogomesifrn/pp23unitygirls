<?php 
$email = $_POST["email"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];
$apelido = $_POST["apelido"];

include "banco/conexao.php";

$sql = "INSERT INTO usuario
(email, senha, nome, apelido)
VALUES ('$email', '$senha', '$nome', '$apelido');";

$result = $conn->query($sql);
if($result){
    $conn->close();
    header("Location: autenticacao_ug_temp.php");
    die();
}
?>