<?php
error_reporting(E_ERROR ^ E_WARNING);
require_once "C:/xampp\htdocs\Dashboard-Gallant\admin\backend/functions.php";

dbcon();
$id = $_POST['id'];
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

$salvar = $conexao -> query("UPDATE `relogio` SET `codigo`='$codigo', `nomeRelogio`='$nomeRelogio',`fabricacao`='$fabricacao',`genero`='$genero',`marca`='$marca',`garantia`='$garantia',`preco`='$preco',`precoVenda`='$precoVenda',`quant`='$quant',`fornecedor`='$fornecedor',`modelo`='$modelo',`material`='$material',`tamanho`='$tamanho',`parcela`='$parcela', `resistencia`= '$resistencia', `linkImagem`='$linkImagem' WHERE id = '$id' ");
?>