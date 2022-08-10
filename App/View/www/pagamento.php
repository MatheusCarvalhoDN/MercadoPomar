<main class="form-signin">
    <section class="card-cadastro">
        <form method="POST">
            <img class="mb-4" src="<?= url ?>public/img/logo.png" alt="" width="200" height="200" style="border-radius: 25px;">
            <h1 class="h3 mb-3 fw-normal">Efetue o pagamento</h1>
            <br>

            <label for="inputEmail" class="visually-hidden">Nome no cartão</label>
            <input required type="text" id="inputEmail" class="form-control mb-2" placeholder="Digite o nome aqui" required=""
            autofocus="" style="width: 300px;">
            <label for="inputPassword" class="visually-hidden">Número no cartão</label>
            <input required  type="text" id="inputPassword" class="form-control mb-2" placeholder="Digite o número aqui" required=""
            style="width: 300px;">

            <label for="inputPassword" class="visually-hidden">Data de validade</label>
            <input required  type="month" id="inputPassword" class="form-control mb-2" required="" style="width: 300px;">
            
            <label for="inputPassword" class="visually-hidden">CVV</label>
            <input required  type="text" id="inputPassword" class="form-control mb-2" placeholder="Digite o código aqui" required=""
            style="width: 300px;">
            <br>
            <button class="btn btn-primary">Efetuar pagamento</button>
        </form>
    </section>
</main>