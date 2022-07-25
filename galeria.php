<?php include 'header.php'; ?>

<?php

$bd = new SQLite3('filmes.db');
$sql = "SELECT * from filmes";
$filmes = $bd->query($sql);

$filme1 = [
  "titulo" => "Vingadores 1",
  "nota" => 8.6,
  "sinopse" => "Mussum Ipsum, cacilds vidis litro abertis. Casamentiss faiz malandris se pirulitá. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.",
  "poster" => "https://www.themoviedb.org/t/p/original/u49fzmIJHkb1H4oGFTXtBGgaUS1.jpg"
];

$filme2 = [
  "titulo" => "Thor: Love And Thunder",
  "nota" => 10,
  "sinopse" => "Mussum Ipsum, cacilds vidis litro abertis. Per aumento de cachacis, eu reclamis. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! Suco de cevadiss deixa as pessoas mais interessantis. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per. Mé faiz elementum girarzis, nisi eros vermeio. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Nec orci ornare consequat.",
  "poster" => "https://www.themoviedb.org/t/p/original/6OEBp0Gqv6DsOgi8diPUslT2kbA.jpg"
];

$filme3 = [
  "titulo" => "Peaky Blinders",
  "nota" => 9.8,
  "sinopse" => "Mussum Ipsum, cacilds vidis litro abertis. Per aumento de cachacis, eu reclamis. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! Suco de cevadiss deixa as pessoas mais interessantis. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per. Mé faiz elementum girarzis, nisi eros vermeio.",
  "poster" => "https://www.themoviedb.org/t/p/original/i0uajcHH9yogXMfDHpOXexIukG9.jpg"
];

// $filmes = [$filme1, $filme2, $filme3];

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

    <?php while($filme = $filmes->fetchArray()) : ?>

      <div class="col s3">
        <div class="card hoverable">
          <div class="card-image">
            <img src="<?= $filme['poster'] ?>">
            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
          </div>
          <div class="card-content">
            <p class="valign-wrapper">
              <i class="material-icons amber-text">star</i> <?= $filme['nota'] ?>
            </p>
            <span class="card-title"><?= $filme['titulo'] ?></span>
            <p><?= $filme['sinopse'] ?></p>
          </div>
        </div>
      </div>

    <?php endwhile ?>

  </div>


</body>

</html>