<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "church";

$con = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!($con)){
    echo "Erro ao conectar o banco de dados: ".mysqli_error();
}

?>
