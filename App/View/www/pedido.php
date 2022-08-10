<div class="mt-5 mr-5 ml-5 mb-5">
    <h1 class="mb-5">Meus Pedidos</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
            <th>Produto</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->select() as $value) { ?>
                <tr>
                    <td><?= $value['prodnome'] ?></td>
                    <td><?= $value['preco'] ?></td>
                    <td><span><?= $value['qntd'] ?></span></td>
                    <td><?= $value['preco'] * $value['qntd'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <p><strong>Status da sua compra:</strong> Comprados </p>
    <br>
    <a href="<?= url ?>"><button type="button" class="btn btn-success">Voltar a tela inicial</button></a>
</div>