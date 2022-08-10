<div class="mt-5 mr-5 ml-5 mb-5">
    <h1 class="mb-5">Bem-Vindo(a) ao seu carrinho, <?= $_SESSION['nome'] ?></h1>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Produto</th>
          <th>Preço</th>
          <th>Quantidade</th>
          <th>Total</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($this->selectW() as $value) { ?>
          <tr>
            <td><?= $value['prodnome'] ?></td>
            <td><?= $value['preco'] ?></td>
            <td><input id_carrinho="<?= $value['id'] ?>" preco="<?= $value['preco'] ?>"  class="key" type="number" name="quantity" min="1" max="100" value="<?= $value['qntd'] ?>"></td>
            <td class="c<?= $value['id'] ?>"><?= $value['preco'] * $value['qntd'] ?></td>
            <td><button id_carrinho="<?= $value['id'] ?>" type="button" class="btn btn-danger">Remover produto</button></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <a href="<?= url ?>"><button type="button" class="btn btn-default border">Adicionar outro produto</button></a>
    <a href="<?= url ?>pagamento"><button type="button" class="btn btn-success">Efetuar pagamento</button></a>
</div>
<script src="<?= url ?>public/js/carrinho.js"></script>
