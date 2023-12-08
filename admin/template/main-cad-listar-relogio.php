<?php
require_once "C:/xampp/htdocs/Dashboard-Gallant/admin/backend/functions.php";
dbcon();
$resultado = $conexao->query("SELECT  `id`, `codigo`, `nomeRelogio`, `fabricacao`, `genero`, `marca`, `garantia`, `preco`, `precoVenda`, `quant`, `fornecedor`, `modelo`, `material`, `tamanho`, `parcela`, `resistencia`, `linkImagem` FROM `relogio`");
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Listar Relógios</h1>
  </div>
  <div class="table-responsive">
    <table class="table table-primary table-bordered">
      <thead>
        <tr>
          <th class="table-info"scope="col">Cod.</th>
          <th class="table-info"scope="col">Nome</th>
          <th class="table-info"scope="col">Ano de fabricação</th>
          <th class="table-info"scope="col">Genêro</th>
          <th class="table-info"scope="col">Marca</th>
          <th class="table-info"scope="col">Garantia</th>
          <th class="table-info"scope="col">Preço</th>
          <th class="table-info"scope="col">Preço de venda</th>
          <th class="table-info"scope="col">Quant.</th>
          <th class="table-info"scope="col">Fornecedor</th>
          <th class="table-info"scope="col">Modelo</th>
          <th class="table-info"scope="col">Material</th>
          <th class="table-info"scope="col">Tamanho</th>
          <th class="table-info"scope="col">Parcelamento</th>
          <th class="table-info"scope="col">Resistencia</th>
          <th class="table-info"scope="col">Imagem</th>
          <th class="table-info"scope="col">Opções</th>
        </tr>
      </thead>
      <tbody id="tabela-produto">
      <?php
    foreach ($resultado as $dados){
?>
    <tr>
        <td><?=$dados['codigo']?></td>
       <td><?=$dados['nomeRelogio']?></td>
       <td><?=$dados['fabricacao']?></td>
       <td><?=$dados['genero']?></td>
       <td><?=$dados['marca']?></td>
       <td><?=$dados['garantia']?></td>
       <td><?=$dados['preco']?>
       <td><?=$dados['precoVenda']?></td>
       <td><?=$dados['quant']?></td>
       <td><?=$dados['fornecedor']?></td>
       <td><?=$dados['modelo']?></td>
       <td><?=$dados['material']?></td>
       <td><?=$dados['tamanho']?></td>
       <td><?=$dados['parcela']?>
       <td><?=$dados['resistencia']?>
       <td><?=$dados['linkImagem']?>
       <td><a href="http://localhost/Dashboard-Gallant/admin/listarJoias.php?id=<?=$dados['id']?>" class ="bi bi-pencil-square"></a>
       <a class ="ms-1 bi bi-trash"></a>
    </td>
 </tr>;

<?php
    }
?>

      </tbody>
    </table>
  </div>
</main>