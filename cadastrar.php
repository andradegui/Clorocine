<?php include 'header.php'; ?>

<body>
    <nav class="nav-extended purple lighten-3">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">Galeria</a></li>
                <li class="active"><a href="cadastrar.php">Cadastrar</a></li>
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
        <form class="col s12" action="inserirFilme.php" method="POST">
            <div class="col s6 offset-s3">
                <div class="card">
                    <div class="card-content white-text">
                        <span class="card-title">Cadastrar Filme</span>
                        <!-- Titulo -->
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="titulo" name="titulo" type="text" class="validate" require>
                                <label for="titulo">Título do filme</label>
                            </div>
                        </div>
                        <!-- Sinopse -->
                        <div class="row">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="sinopse" name="sinopse" class="materialize-textarea"></textarea>
                                    <label for="sinopse">Sinopse</label>
                                </div>
                            </div>
                        </div>
                        <!-- nota -->
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="nota" name="nota" type="number" step=".1" min=0 max=10 class="validate" require>
                                <label for="nota">Nota</label>
                            </div>
                        </div>
                        <!-- Capa -->
                        <div class="file-field input-field">
                            <div class="btn purple lighten-2 black-text">
                                <span>Capa</span>
                                <input class="file-path validate" type="text">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" name="poster">
                            </div>
                        </div>
                    </div>
                    <!-- Botões -->
                    <div class="card-action">
                        <a class="btn waves-effect waves-light grey" href="galeria.php">Cancelar</a>
                        <button type="submit" class="btn waves-effect waves-light purple">Confirmar</button>
                    </div>
                </div>
            </div>

        </form>
    </div>

</body>

</html>