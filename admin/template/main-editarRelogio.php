<?php
$relogio_id = $_GET['id'];
require_once "C:/xampp/htdocs/backend/functions.php";
dbcon();
$resultado = $conexao->query("SELECT `id`, `codigo`, `nome`, `fabricacao`, `marca`, `garantia`, `preco`, `precoVenda`, `quantidade`, `fornecedor`, `modelo`, `material`, `tamanho`, `resitencia`, `parcelamento`, `imagem` 
FROM relogio WHERE id = '$relogio_id' ");

$relogio = mysqli_fetch_assoc($resultado);
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastrar Relógio</h1>
    </div>
    <div class="">
        <form id="edit_relogio" name="edit_relogio" action="" method="post" class="form-control">
            <input id="id" name="id" value="<?=$relogio['id']?>" type="hidden">
            <legend>Dados Pessoais</legend>
            <div class="row">
            <div class="col-md-2">
          <label for = "codigo">Código:</label>
          <input class = "form-control" type = "text" name = "codigo" id="codigo" value = "<?= $relogio['codigo'] ?>"></input>
        </div>
        <div class="col-md-5">
          <label for = "nomerelogio">Nome do relógio:</label>
          <input class = "form-control" type = "text" name = "nomerelogio" id="nomerelogio" value = "<?= $relogio['nome'] ?>"></input>
        </div>
        <div class="col-md-2">
          <label for = "genero">Gênero:</label>
          <input class = "form-control" type = "text" name = "genero" id="genero" value = "<?= $relogio['genero'] ?>"></input>
        </div>
        <div class="col-md-2">
          <label for = "fabricacao">Ano de fabricação:</label>
          <input class = "form-control" type = "date" name = "fabricacao" id="fabricacao" value = "<?= $relogio['fabricacao'] ?>"></input>
        </div>
      </div>
      <div class = "row mt-2">
        <div class="col-md-4">
          <label for = "marca">Marca da relógio:</label>
          <input class = "form-control" type = "text" name = "marca" id="marca" value = "<?= $relogio['marca'] ?>"></input>
        </div>
        <div class="col-md-2">
          <label for = "garantia">Garantia:</label>
          <input class = "form-control" type = "text" name = "garantia" id="garantia" value = "<?= $relogio['garantia'] ?>"></input>
        </div>
        <div class="col-md-3">
          <label for = "preco">Preço:</label>
          <input class = "form-control" type = "text" name = "preco" id="preco" value = "<?= $relogio['preco'] ?>"></input>
        </div>
        <div class="col-md-3">
          <label for = "precoVenda">Preço de venda:</label>
          <input class = "form-control" type = "text" name = "precovenda" id="precovenda" value = "<?= $relogio['precoVenda'] ?>"></input>
        </div>
        <div class="col-md-2">
          <label for = "quantidade">Quantidade:</label>
          <input class = "form-control" type = "text" name = "quantidade" id="quantidade" value = "<?= $relogio['quantidade'] ?>"></input>
        </div>
        <div class="col-md-3">
          <label for = "fornecedor">Fornecedor:</label>
          <input class = "form-control" type = "text" name = "foencedor" id="fonecedor" value = "<?= $relogio['fornecedor'] ?>"></input>
        </div>
        <div class="col-md-3">
          <label for = "modelo">Modelo:</label>
          <input class = "form-control" type = "text" name = "modelo" id="modelo" value = "<?= $relogio['modelo'] ?>"></input>
        </div>
        <div class="col-md-3">
          <label for = "material">Material:</label>
          <input class = "form-control" type = "text" name = "material" id="material" value = "<?= $relogio['material'] ?>"></input>
        </div>
        <div class="col-md-3">
          <label for = "tamanho">Tamanho:</label>
          <input class = "form-control" type = "text" name = "tamanho" id="tamanho" value = "<?= $relogio['tamanho'] ?>"></input>
        </div>
        <div class="col-md-3">
          <label for = "resistencia">Resistência:</label>
          <input class = "form-control" type = "text" name = "resistencia" id="resistencia" value = "<?= $relogio['resistencia'] ?>"></input>
        </div>
        <div class="col-md-3">
          <label for = "parcelamento">Parcelamento:</label>
          <input class = "form-control" type = "text" name = "parcelamento" id="parcelamento" value = "<?= $relogio['parcelamento'] ?>"></input>
        </div>
        <div class="col-md-3">
          <label for = "imagem">Link da imagem:</label>
          <input class = "form-control" type = "text" name = "imagem" id="imagem" value = "<?= $relogio['imagem'] ?>"></input>
        </div>
            <div class="row">
                <div class="col-md-3">
                    <button class="btn btn-dark" type="submit">
                        <i class="bi bi-database-up me-1"></i>
                        Editar Relógio
                    </button>
                </div>
            </div>
        </form>




    </div>
</main>