<?php
error_reporting(E_ERROR ^ E_WARNING);
require_once "C:/xampp/htdocs/Dashboard-Gallant/admin/backend/functions.php";

dbcon();

$codigo = $_POST['codigo'];
$nomeJoia = $_POST['nomeJoia'];
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
$linkImagem = $_POST['linkImagem'];

$salvar = $conexao -> query("INSERT INTO `joia`(`codigo`, `nomeJoia`, `fabricacao`, `genero`, `marca`, `garantia`, `preco`, `precoVenda`, `quant`, `fornecedor`, `modelo`, `material`, `tamanho`, `parcela`, `linkImagem`) VALUES ('$codigo','$nomeJoia','$fabricacao','$genero','$marca','$garantia','$preco','$precoVenda','$quant','$fornecedor','$modelo','$material',''$tamanho,'$parcela','$linkImagem')");
?>