<div class="container mb-5">
  <div class="container mb-5">
    <h2
      style="text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 100px;">
      Promoções da semana</h2>
    <!--Carrossel-->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?= url ?>public/img/ofertas/OfertaArranhador.jpeg" alt="Los Angeles" style="width:100%;">
        </div>
        <div class="carousel-item">
          <img src="<?= url ?>public/img/ofertas/OfertaLysoform.jpeg" alt="Chicago" style="width:100%;">
        </div>
        <div class="carousel-item">
          <img src="<?= url ?>public/img/ofertas/OfertaPringles.jpeg" alt="New york" style="width:100%;">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <!--Catálogo-->
  <!-- Alimentos -->
  <div class="container" id="alimentos">
    <h2>Alimentos</h2>
    <div class="row mb-4">
      <?php foreach ($this->selectWP('Alimentos') as $value) { ?>
        <div class="col-sm-4 border p-3">
          <div class="panel panel-primary">
            <div class="panel-body"><img src="<?= url ?>public/Uploads/<?= $value['img'] ?>" class="img-responsive"
                style="width:100%; height: 300px;" alt="Image"></div>
            <div class="panel-footer" style="text-align: center;"><?= $value['nome'] ?> <br>Preço: <?= $value['preco'] ?> <br> <button
                type="button" id_produto="<?= $value['id'] ?>" class="btn btn-primary mt-3">Adicionar ao carrinho</button></div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <!-- Bebidas -->
  <div class="container" id="bebidas">
    <h2>Bebidas</h2>
    <div class="row mb-4">
        <?php foreach ($this->selectWP('Bebidas') as $value) { ?>
          <div class="col-sm-4 border p-3">
            <div class="panel panel-primary">
              <div class="panel-body"><img src="<?= url ?>public/Uploads/<?= $value['img'] ?>" class="img-responsive"
                  style="width:100%; height: 300px;" alt="Image"></div>
              <div class="panel-footer" style="text-align: center;"><?= $value['nome'] ?> <br>Preço: <?= $value['preco'] ?> <br> <button
                  type="button" id_produto="<?= $value['id'] ?>" class="btn btn-primary mt-3">Adicionar ao carrinho</button></div>
            </div>
          </div>
        <?php } ?>
    </div>
  </div>

  <!-- Beleza e Perfumaria -->
  <div class="container" id="beleza">
    <h2>Beleza e Perfumaria</h2>
    <div class="row mb-4">
    <?php foreach ($this->selectWP('Beleza e Perfumaria') as $value) { ?>
          <div class="col-sm-4 border p-3">
            <div class="panel panel-primary">
              <div class="panel-body"><img src="<?= url ?>public/Uploads/<?= $value['img'] ?>" class="img-responsive"
                  style="width:100%; height: 300px;" alt="Image"></div>
              <div class="panel-footer" style="text-align: center;"><?= $value['nome'] ?> <br>Preço: <?= $value['preco'] ?> <br> <button
                  type="button" id_produto="<?= $value['id'] ?>" class="btn btn-primary mt-3">Adicionar ao carrinho</button></div>
            </div>
          </div>
        <?php } ?>
    </div>
  </div>

  <!-- Limpeza -->
  <div class="container" id="limpeza">
    <h2>Limpeza</h2>
    <div class="row mb-4">
    <?php foreach ($this->selectWP('Limpeza') as $value) { ?>
          <div class="col-sm-4 border p-3">
            <div class="panel panel-primary">
              <div class="panel-body"><img src="<?= url ?>public/Uploads/<?= $value['img'] ?>" class="img-responsive"
                  style="width:100%; height: 300px;" alt="Image"></div>
              <div class="panel-footer" style="text-align: center;"><?= $value['nome'] ?> <br>Preço: <?= $value['preco'] ?> <br> <button
                  type="button" id_produto="<?= $value['id'] ?>" class="btn btn-primary mt-3">Adicionar ao carrinho</button></div>
            </div>
          </div>
        <?php } ?>
    </div>
  </div>

  <!-- Petshop -->
  <div class="container" id="petshop">
    <h2>Petshop</h2>
    <div class="row mb-4">
        <?php foreach ($this->selectWP('Petshop') as $value) { ?>
          <div class="col-sm-4 border p-3">
            <div class="panel panel-primary">
              <div class="panel-body"><img src="<?= url ?>public/Uploads/<?= $value['img'] ?>" class="img-responsive"
                  style="width:100%; height: 300px;" alt="Image"></div>
              <div class="panel-footer" style="text-align: center;"><?= $value['nome'] ?> <br>Preço: <?= $value['preco'] ?> <br> 
              <button id_produto="<?= $value['id'] ?>" class="btn btn-primary mt-3">Adicionar ao carrinho</button></div>
            </div>
          </div>
        <?php } ?>
    </div>
  </div>
</div>
<script src="<?= url ?>public/js/addCarrinho.js"></script>
