<?php
$joias_id = $_GET['id'];
require_once "C:/xampp\htdocs\Dashboard-Gallant\admin\backend/functions.php";
dbcon();
$resultado = $conexao->query("SELECT `id`, `codigo`, `nomeJoia`, `fabricacao`, `genero`, `marca`, `garantia`, `preco`, `precoVenda`, `quant`, `fornecedor`, `modelo`, `material`, `tamanho`, `parcela`, `linkImagem` FROM `joia` WHERE id = '$joias_id' ");

$joias = mysqli_fetch_assoc($resultado);
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastrado de Joias</h1>
    </div>
    <div class="">
        <form id="edit_joia" name="edit_joia" action="" method="post" class="form-control">
            <input id="id" name="id" value="<?=$joias['id']?>" type="hidden">
            <legend>Dados Pessoais</legend>
            <div class="row">
                <div class="col-md-2">
                    <label for="codigo">Código:</label>
                    <input class="form-control" type="text" name="codigo" id="codigo"
                        value="<?= $joias['codigo'] ?>"></input>
                </div>
                <div class="col-md-5">
                    <label for="nomeJoia">Nome da joia:</label>
                    <input class="form-control" type="text" name="nomeJoia" id="nomeJoia"
                        value="<?= $joias['nomeJoia'] ?>"></input>
                </div>
                <div class="col-md-2">
                    <label for="fabricacao">Ano de fabricação:</label>
                    <input class="form-control" type="date" name="fabricacao" id="fabricacao"
                        value="<?= $joias['fabricacao'] ?>"></input>
                </div>
                <div class="col-md-2">
                    <label for="genero">Gênero:</label>
                    <input class="form-control" type="text" name="genero" id="genero"
                        value="<?= $joias['genero'] ?>"></input>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <label for="marca">Marca da relógio:</label>
                    <input class="form-control" type="text" name="marca" id="marca"
                        value="<?= $joias['marca'] ?>"></input>
                </div>
                <div class="col-md-2">
                    <label for="garantia">Garantia:</label>
                    <input class="form-control" type="text" name="garantia" id="garantia"
                        value="<?= $joias['garantia'] ?>"></input>
                </div>
                <div class="col-md-3">
                    <label for="preco">Preço:</label>
                    <input class="form-control" type="text" name="preco" id="preco"
                        value="<?= $joias['preco'] ?>"></input>
                </div>
                <div class="col-md-3">
                    <label for="precoVenda">Preço de venda:</label>
                    <input class="form-control" type="text" name="precoVenda" id="precoVenda"
                        value="<?= $joias['precoVenda'] ?>"></input>
                </div>
                <div class="col-md-2">
                    <label for="quant">Quantidade:</label>
                    <input class="form-control" type="text" name="quant" id="quant"
                        value="<?= $joias['quant'] ?>"></input>
                </div>
                <div class="col-md-3">
                    <label for="fornecedor">Fornecedor:</label>
                    <input class="form-control" type="text" name="forencedor" id="fornecedor"
                        value="<?= $joias['fornecedor'] ?>"></input>
                </div>
                <div class="col-md-3">
                    <label for="modelo">Modelo:</label>
                    <input class="form-control" type="text" name="modelo" id="modelo"
                        value="<?= $joias['modelo'] ?>"></input>
                </div>
                <div class="col-md-3">
                    <label for="material">Material:</label>
                    <input class="form-control" type="text" name="material" id="material"
                        value="<?= $joias['material'] ?>"></input>
                </div>
                <div class="col-md-3">
                    <label for="tamanho">Tamanho:</label>
                    <input class="form-control" type="text" name="tamanho" id="tamanho"
                        value="<?= $joias['tamanho'] ?>"></input>
                </div>
                <div class="col-md-3">
                    <label for="parcela">Parcelamento:</label>
                    <input class="form-control" type="text" name="parcela" id="parcela"
                        value="<?= $joias['parcela'] ?>"></input>
                </div>
                <div class="col-md-3">
                    <label for="linkImagem">Link da imagem:</label>
                    <input class="form-control" type="text" name="linkImagem" id="linkImagem"
                        value="<?= $joias['linkImagem'] ?>"></input>
                </div>
                <div class="row mt-2">
                    <div class="col-md-3">
                        <button class="btn btn-dark" type="submit">
                            <i class="bi bi-database-up me-1"></i>
                            Editar Relógio
                        </button>
                    </div>
                    <div class="col-md-2">
                        <a href="http://localhost/Dashboard-Gallant/admin/listarJoias.php" class="btn btn-dark">
                            <i class="bi bi-arrow-left-circle"></i>
                            Voltar
                        </a>
                    </div>
                </div>
        </form>




    </div>
</main>