<?php
//error_reporting(E_ERROR ^ E_WARNING);
require_once "C:/xampp/htdocs/Dashboard-Gallant/admin/backend/functions.php";

dbcon();
$id = $_POST['id'];


echo $id;
$salvar = $conexao -> query("DELETE FROM relogio WHERE id = '$id' ");
?>
