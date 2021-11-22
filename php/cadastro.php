<?php

include_once './connection.php';

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$dt_nasc = filter_input(INPUT_POST, 'dt_nasc', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);

$result = " INSERT INTO cliente (nome, dt_nasc,sexo,email,telefone,cep,rua,numero,complemento,cidade,estado) VALUES ('$nome','$dt_nasc','$sexo','$email','$telefone','$cep','$rua','$numero','$complemento','$cidade', '$estado') ";
$resultado = mysqli_query($conexao, $result);

include '../pages/cadastro.html';

?>