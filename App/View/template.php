<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/footer.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado Pomar</title>
    <link rel="stylesheet" href="<?= url ?>public/css/style.css">
    <link rel="stylesheet" href="<?= url ?>public/css/footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
            <a class="navbar-brand" href="<?= url ?>"><img src="<?= url ?>public/img/logo-nobg.png" width="50" height="30" alt="">Mercado Pomar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                <a class="nav-link" href="<?= url ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Categorias
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?= url ?>alimentos">Alimentos</a>
                    <a class="dropdown-item" href="<?= url ?>bebidas">Bebidas</a>
                    <a class="dropdown-item" href="<?= url ?>beleza">Beleza e perfumaria</a>
                    <a class="dropdown-item" href="<?= url ?>limpeza">Limpeza</a>
                    <a class="dropdown-item" href="<?= url ?>petshop">Petshop</a>
                </div>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#footer-id">Fale Conosco</a>
                </li>
            </ul>
            </div>
            <form class="form-inline">
            <ul class="navbar-nav">
                <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
                <li class="nav-item">
                <a class="btn btn-outline-success bg-light" href="<?= url ?>carrinho"><i
                    class="bi bi-cart-fill pr-1"></i>Carrinho</a>
                </li>
                <?php if (isset($_SESSION['login'])){?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url ?>pedidos"><i class="bi bi-person-fill px-1"></i>Meus pedidos</a>
                    </li>
                    <li class="nav-item">
                        <p class="nav-link"><i class="bi bi-person-fill px-1"></i><?= $_SESSION['nome'] ?></p>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url ?>sair"><i class="bi bi-box-arrow-in-right px-1"></i>sair</a>
                    </li>
                <?php }else {?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url ?>cadastro"><i class="bi bi-person-fill px-1"></i>Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url ?>login"><i class="bi bi-box-arrow-in-right px-1"></i>Entrar</a>
                    </li>
                <?php } ?>
            </ul>
            </form>
        </nav>
    </header>
    <?php
        $this->content();
    ?>
    <footer class="footer-class pr-5 pl-5">
        <div class="container-fluid bg-grey pt-4" id="footer-id">
            <div class="row ">
            <div class="col-sm-5">
                <p>Caso precise de suporte, contate-nos, retornaremos o mais breve possível .</p>
                <p><span class=""></span><i class="bi bi-geo-alt-fill"></i> Bahia, BR </p>
                <p><span class=""></span><i class="bi bi-telephone-fill"></i> +55 (71)3232-3232</p>
                <p><span class=""></span><i class="bi bi-envelope-fill"></i> mercado.pomar@gmail.com</p>
            </div>
            <div class="col-sm-7">
                <h3 class="text-center">FORMULÁRIO DE CONTATO</h3>
                <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Nome" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Insira sua dúvida ou sugestão aqui"
                rows="5"></textarea><br>
                <div class="row">
                <div class="col-sm-12 form-group">
                    <button class="btn btn-light btn-block float-right" type="submit">Enviar</button>
                </div>
                </div>
            </div>
            </div>
        </div>
    </footer>
</body>
</html>