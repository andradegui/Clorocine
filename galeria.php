<?php include 'header.php'; ?>

<?php

$filme1 = [
  "titulo" => "Vingadores 1",
  "nota" => 8.6,
  "sinopse" => "Mussum Ipsum, cacilds vidis litro abertis. Casamentiss faiz malandris se pirulitá. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.",
  "poster" => "https://www.themoviedb.org/t/p/original/u49fzmIJHkb1H4oGFTXtBGgaUS1.jpg"
];

?>

<body>
  <nav class="nav-extended purple lighten-3">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li class="active"><a href="galeria.php">Galeria</a></li>
        <li><a href="cadastrar.php">Cadastrar</a></li>
      </ul>
    </div>
    <div class="nav-header center">
      <h1>CLOROCINE</h1>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent purple darken-1">
        <li class="tab"><a class="active" href="#test1">Todos</a></li>
        <li class="tab"><a href="#test2">Assistidos</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav>

  <div class="row">
    <div class="col s3">
      <div class="card hoverable">
        <div class="card-image">
          <img src="<?= $filme1['poster'] ?>">

          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
        </div>
        <div class="card-content">
          <p class="valign-wrapper">
            <i class="material-icons amber-text">star</i> <?= $filme1['nota'] ?>
          </p>
          <span class="card-title"><?= $filme1['titulo'] ?></span>
          <p><?= $filme1['sinopse'] ?></p>
        </div>
      </div>
    </div>

    <div class="col s3">
      <div class="card hoverable">
        <div class="card-image">
          <img src="https://www.themoviedb.org/t/p/original/qhcwrnnCnN8NE1N6XXKHFmveJR9.jpg">

          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
        </div>
        <div class="card-content">
          <p class="valign-wrapper">
            <i class="material-icons amber-text">star</i>10
          </p>
          <span class="card-title">Umbrella Academy</span>
          <p>Mussum Ipsum, cacilds vidis litro abertis. Mauris nec dolor in eros commodo tempor.</p>
        </div>
      </div>
    </div>

  </div>


</body>

</html>