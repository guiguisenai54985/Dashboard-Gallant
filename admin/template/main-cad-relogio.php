<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Cadastrar Relógio</h1>
    </div>
  <div class="container">
    <form id="relogio" name="relogio" action="" method="post" class = "form-control">
      <legend>Dados do Produto</legend>
      <div class = "row">
        <div class="col-md-2">
          <label for = "codigo">Código:</label>
          <input class = "form-control" type = "text" name = "codigo" id="codigo" value = ""></input>
        </div>
        <div class="col-md-5">
          <label for = "nomeRelogio">Nome do relógio:</label>
          <input class = "form-control" type = "text" name = "nomeRelogio" id="nomeRelogio" value = ""></input>
        </div>
        <div class="col-md-2">
          <label for = "fabricacao">Ano de fabricação:</label>
          <input class = "form-control" type = "date" name = "fabricacao" id="fabricacao" value = ""></input>
        </div>
        <div class="col-md-2">
          <label for = "genero">Gênero:</label>
          <input class = "form-control" type = "text" name = "genero" id="genero" value = ""></input>
        </div>
      </div>
      <div class = "row mt-2">
        <div class="col-md-4">
          <label for = "marca">Marca:</label>
          <input class = "form-control" type = "text" name = "marca" id="marca" value = ""></input>
        </div>
        <div class="col-md-2">
          <label for = "garantia">Garantia:</label>
          <input class = "form-control" type = "text" name = "garantia" id="garantia" value = ""></input>
        </div>
        <div class="col-md-3">
          <label for = "preco">Preço:</label>
          <input class = "form-control" type = "text" name = "preco" id="preco" value = ""></input>
        </div>
        <div class="col-md-3">
          <label for = "precoVenda">Preço de venda:</label>
          <input class = "form-control" type = "text" name = "precoVenda" id="precoVenda" value = ""></input>
        </div>
        <div class="col-md-2">
          <label for = "quant">Quantidade:</label>
          <input class = "form-control" type = "text" name = "quant" id="quant" value = ""></input>
        </div>
        <div class="col-md-3">
          <label for = "fornecedor">Fornecedor:</label>
          <input class = "form-control" type = "text" name = "fornecedor" id="fornecedor" value = ""></input>
        </div>
        <div class="col-md-3">
          <label for = "modelo">Modelo:</label>
          <input class = "form-control" type = "text" name = "modelo" id="modelo" value = ""></input>
        </div>
        <div class="col-md-3">
          <label for = "material">Material:</label>
          <input class = "form-control" type = "text" name = "material" id="material" value = ""></input>
        </div>
        <div class="col-md-3">
          <label for = "tamanho">Tamanho:</label>
          <input class = "form-control" type = "text" name = "tamanho" id="tamanho" value = ""></input>
        </div>
        <div class="col-md-3">
          <label for = "parcela">Parcelamento:</label>
          <input class = "form-control" type = "text" name = "parcela" id="parcela" value = ""></input>
        </div>
        <div class="col-md-3">
          <label for = "resistencia">Resistência:</label>
          <input class = "form-control" type = "text" name = "resistencia" id="resistencia" value = ""></input>
        </div>
        <div class="col-md-3">
          <label for = "linkImagem">Link da imagem:</label>
          <input class = "form-control" type = "text" name = "linkImagem" id="linkImagem" value = ""></input>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-3">
          <button class="btn btn-dark" type="submit"><i class="bi bi-check-lg"></i>Cadastrar produto</button>
        </div>
      </div>
    </form>
  </div>
</main>   