<?php
error_reporting(E_ERROR ^ E_WARNING);
require_once "C:/xampp/htdocs/Dashboard-Gallant/admin/backend/functions.php";
dbcon();

var_dump($_POST);

$codigo = $_POST['codigo'];
$nomeRelogio = $_POST['nomeRelogio'];
$fabricacao = $_POST['fabricacao'];
$genero = $_POST['genero'];
$marca = $_POST['marca'];
$garantia = $_POST['garantia'];
$preco = $_POST['preco'];
$precoVenda = $_POST['precoVenda'];
$quant = $_POST['quant'];
$fornecedor = $_POST['fornecedor'];
$modelo = $_POST['modelo'];
$material = $_POST['material'];
$tamanho = $_POST['tamanho'];
$parcela = $_POST['parcela'];
$resistencia = $_POST['resistencia'];
$linkImagem = $_POST['linkImagem'];

$salvar = $conexao -> query("INSERT INTO `relogio`(`codigo`, `nomeRelogio`, `fabricacao`, `genero`, `marca`, `garantia`, `preco`, `precoVenda`, `quant`, `fornecedor`, `modelo`, `material`, `tamanho`, `parcela`, `resistencia`, `linkImagem`)
VALUES ('$codigo', 
'$nomeRelogio', 
'$fabricacao', 
'$genero', 
'$marca', 
'$garantia', 
'$preco', 
'$precoVenda', 
'$quant', 
'$fornecedor', 
'$modelo', 
'$material', 
'$tamanho',
'$parcela', 
'$resistencia',
'$linkImagem')");
?>