<main class="form-signin mt-5 mb-5">
    <section class="card-cadastro">
      <form name="cadastroUser" method="post">
        <img class="mb-4" src="<?= url ?>public/img/logo.png" alt="" width="200" height="200" style="border-radius: 25px;">
        <h1 class="h3 mb-3 fw-normal">Realize o seu cadastro</h1>
        <label for="inputEmail" class="visually-hidden">Email</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Digite seu email aqui"
          required="" autofocus="" style="width: 300px;">
        <label for="inputPassword" class="visually-hidden">nome</label>
        <input type="text" id="inputPassword" name="nome" class="form-control" placeholder="Digite sue nome aqui"
          required="" style="width: 300px;">
        <label for="psw-repeat"><b>senha</b></label>
        <input type="password" class="form-control" placeholder="Repita sua senha" name="psw" required>
        <label for="inputAddress"><b>Endereço</b></label>
        <input type="text" class="form-control" placeholder="Digite seu endereço" name="endereço" required>
        <label for="inputAddress"><b>Telefone</b></label>
        <input type="number" class="form-control" placeholder="Digite seu número" name="telefone" required>
        <div class="checkbox mb-3">
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Finalizar</button>
      </form>
    </section>
  </main>