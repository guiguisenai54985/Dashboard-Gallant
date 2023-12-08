<?php
error_reporting(E_ERROR ^ E_WARNING);
require_once "C:/xampp/htdocs/Gallant/backend/functions.php";

dbcon();

$id = $_POST['id'];
$codigo = $_POST['codigo'];
$nomeJoia = $_POST['nomeJoia'];
$fabricacao = $_POST['fabricacao'];
$genero = $_POST['genero'];
$marca = $_POST['marca'];
$garantia = $_POST['garantia'];
$preco = $_POST['preco'];
$precoVenda = $_POST['precoVenda'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];
$modelo = $_POST['modelo'];
$material = $_POST['material'];
$tamanho = $_POST['tamanho'];
$parcelamento = $_POST['parcelamento'];
$linkImagem = $_POST['linkImagem'];

$salvar = $conexao -> query("INSERT INTO `cadastro de joias `(`codigo`, `nomeJoia`, `fabricacao`, `genero`, `marca`, `garantia`, `preco`,`precoVenda`, `quantidade`, `fornecedor`, `modelo`, `material`, `tamanho`, `parcelamento`,`linkImagem`");
VALUES ('$codigo', '$nomeJoia', '$fabricacao', '$genero', '$marca', '$garantia',  '$preco', '$precoVenda', '$quantidade', '$fornecedor', '$modelo', '$material', '$tamanho', '$parcelamento', '$linkImagem')");
?>