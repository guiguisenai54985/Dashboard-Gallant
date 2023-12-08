<?php
$joias_id = $_GET['id'];
require_once "C:/xampp/htdocs/backend/functions.php";
dbcon();
$resultado = $conexao->query("SELECT `id`,`codigo`, `nomeJoia`, `fabricacao`, `genero`, `marca`, `garantia`, `preco`, `precoVenda`, `quantidade`, `fornecedor`, `modelo`, `material`, `tamanho`, `parcelamento`,`linkImagem` 
FROM cadastro de joias WHERE id = '$joias_id' ");

$joias = mysqli_fetch_assoc($resultado);
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastrado de Joias</h1>
    </div>
    <div class="">
        <form id="edit_joias" name="edit_joias" action="" method="post" class="form-control">
            <input id="id" name="id" value="<?=$joias['id']?>" type="hidden">
            <legend>Dados</legend>
            <div class="row">
                <div class="col-md-5">
                    <label for="codigo">Código:</label>
                    <input class="form-control" type="text" name="codigo" id="codigo" value= " <?= $joias['codigo'] ?>"></input>
                </div>
                <div class="col-md-5">
                    <label for="nomeJoia">Nome:</label>
                    <input class="form-control" type="text" name="nomeJoia" id="nomeJoia" value= "<?= $joias['nomeJoia'] ?>"></input>
                </div>
                <div class="col-md-2">
                    <label for="fabricacao">Fabricação:</label>
                    <input class="form-control" type="date" name="fabricacao" id="fabricacao" value= "<?= $joias['fabricacao'] ?>"></input>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-3">
                    <label for="genero">Gênero:</label>
                    <input class="form-control" type="text" name="genero" id="genero" value="<?= $joias['genero'] ?>"></input>
                </div>
                <div class="col-md-3">
                    <label for="cpf">Cpf:</label>
                    <input class="form-control" type="text" name="cpf" id="cpf" value="">
                </div>
                <div class="col-md-6">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" name="email" id="email" value="">
                </div>
            </div>
            <legend class="mt-2">Endereço:</legend>
            <div class="row">
                <div class="col-md-2">
                    <label for="cep">CEP:</label>
                    <input class="form-control" type="text" name="cep" id="cep" value="">
                </div>
                <div class="col-md-4">
                    <label for="rua">Rua:</label>
                    <input class="form-control" type="text" name="rua" id="rua" value="">
                </div>
                <div class="col-md-3">
                    <label for="numero">Numero:</label>
                    <input class="form-control" type="text" name="numero" id="numero" value="">
                </div>
                <div class="col-md-3">
                    <label for="bairro">Bairro:</label>
                    <input class="form-control" type="text" name="bairro" id="bairro" value="">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-3">
                    <label for="cidade">Cidade:</label>
                    <input class="form-control" type="text" name="cidade" id="cidade" value="">
                </div>
                <div class="col-md-3">
                    <label for="estado">Estado:</label>
                    <input class="form-control" type="text" name="estado" id="estado" value="">
                </div>
                <div class="col-md-3">
                    <label for="pais">Pais:</label>
                    <input class="form-control" type="text" name="pais" id="pais" value="">
                </div>
                <div class="col-md-3">
                    <label for="ibge">IBGE:</label>
                    <input class="form-control" type="text" name="ibge" id="ibge" value="">
                </div>
            </div>
            <div class="row mt-2 mb-2">
                <div class="input-group">
                    <span class="input-group-text">Observações</span>
                    <textarea id="obsevacao" name="observacao" class="form-control" aria-label="Observações"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <button class="btn btn-dark" type="submit">
                        <i class="bi bi-database-up me-1"></i>
                        Editar
                    </button>
                </div>
            </div>
        </form>
    </div>
</main>