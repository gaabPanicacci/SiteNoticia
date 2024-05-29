<?php
$usuario = "root";
$senha = "";
$url = "localhost";
$database = "SiteNoticia";

$conexao = mysqli_connect($url, $usuario,$senha,$database);

if (!$conexao)
{
    echo ("Não conectou");
}
?>