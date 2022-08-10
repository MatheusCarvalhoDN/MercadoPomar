<main class="form-signin mt-5 mb-5">
    <section class="card-cadastro">
      <form method="post">
        <img class="mb-4" src="<?= url ?>img/logo.png" alt="" width="200" height="200" style="border-radius: 25px;">
        <h1 class="h3 mb-3 fw-normal">Realize o login</h1>
        <label for="inputEmail" class="visually-hidden">Email</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Digite seu email aqui" required=""
          autofocus="" style="width: 300px;">
        <label for="inputPassword" class="visually-hidden">Senha</label>
        <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Digite sua senha aqui" required=""
          style="width: 300px;">
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Relembre-me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
      </form>
    </section>
  </main>