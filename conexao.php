<?php
$bdServidor = 'localhost';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'album';

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if (mysqli_connect_errno()) {
    echo "Problemas para conectar no banco. Erro: " . mysqli_connect_error();
    die();
}
?>
