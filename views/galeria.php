<?php include 'header.php'; ?>

<?php

session_start();
require "./utils/mensagem.php";

$controller = new FilmesController();
$filmes = $controller->index();

?>

<body>
  <nav class="nav-extended purple lighten-3">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li class="active"><a href="/">Galeria</a></li>
        <li><a href="/novo">Cadastrar</a></li>
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

  <div class="container">
    <div class="row">

      <?php foreach ($filmes as $filme) : ?>

        <div class="col s12 m6 l3">
          <div class="card hoverable">
            <div class="card-image">
              <img src="<?= $filme->poster ?>">
              <a class="btn-fav btn-floating halfway-fab waves-effect waves-light red" data-id="<?= $filme->id ?>">
                <i class="material-icons"><?= ($filme->favorito) ? "favorite" : "favorite_border" ?></i>
              </a>
            </div>
            <div class="card-content">
              <p class="valign-wrapper">
                <i class="material-icons amber-text">star</i> <?= $filme->nota ?>
              </p>
              <span class="card-title"><?= $filme->titulo ?></span>
              <p><?= $filme->sinopse ?></p>
            </div>
          </div>
        </div>

      <?php endforeach ?>

    </div>
  </div>

  <?= Mensagem::mostrar(); ?>

  <script>
    //Pego todos os botões que tem essa classe
    document.querySelectorAll(".btn-fav").forEach(btn => {
      //Configuro o evento de click
      btn.addEventListener("click", (e) => {
        //Pego id do botão que foi clicado
        const id = btn.getAttribute("data-id");
        //Faço uma solicitação p/ essa URL
        fetch(`/favoritar/${id}`)
          //Quando eu tiver a resposta, converto p/ json
          .then(response => response.json())
          //Quando houver a conversão, verifico se o atributo success é === "ok", caso for "ok" faço a troca dos botões
          .then(response => {
            if (response.success === "ok") {
              if (btn.querySelector("i").innerHTML === "favorite") {
                btn.querySelector("i").innerHTML = "favorite_border";
              } else {
                btn.querySelector("i").innerHTML = "favorite";
              }
            }
          })
          //Caso o atributo não for "ok", retorno uma mensagem pro usuário de erro ao favoritar
          .catch(error => {
            M.toast({
              html: 'Erro ao favoritar'
            });
          })

      });
    });
  </script>

</body>

</html>