<?php
error_reporting(E_ERROR ^ E_WARNING);
require_once "C:/xampp\htdocs\Gallant\admin\backend/functions.php";

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
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];
$modelo = $_POST['modelo'];
$material = $_POST['material'];
$tamanho = $_POST['tamanho'];
$resistencia = $_POST['resistencia'];
$parcelamento = $_POST['parcelamento'];
$linkImagem = $_POST['linkImagem'];

$salvar = $conexao -> query("UPDATE `cadastro de relogios` SET `codigo`='$codigo' `nomeRelogio`='$nomeRelogio',`fabricacao`='$fabricacao',`genero`='$genero',`marca`='$marca',`garantia`='$garantia',`preco`='$preco',`precoVenda`='$precoVenda',`quantidade`='$quantidade',`fornecedor`='$fornecedor',`modelo`='$modelo',`material`='$material',`tamanho`='$tamanho',`resistencia`= '$resistencia',`parcelamento`='$parcelamento', `linkImagem`='$linkImagem' WHERE id = 'id' ");
?>