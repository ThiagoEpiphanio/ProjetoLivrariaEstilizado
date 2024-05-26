<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">

  </head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Selecione uma opção</font></font></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Alternar de navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Cadastrar
              </font></font></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="cadastro\cadastro_livro.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Livros</font></font></a></li>
                <li><a class="dropdown-item" href="cadastro\cadastro_autor.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Autores</font></font></a></li>
                <li><a class="dropdown-item" href="cadastro\cadastro_genero.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gêneros</font></font></a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Consultar
              </font></font></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="consulta/consulta.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Consulta Geral</font></font></a></li>                
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Busca por Código
              </font></font></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="consulta/consultaid.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Livros</font></font></a></li>
                <li><a class="dropdown-item" href="consulta/consultaidautor.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Autores</font></font></a></li>
                <li><a class="dropdown-item" href="consulta/consultaidgenero.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gênero</font></font></a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Busca por Nome
              </font></font></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="consulta/consultanomelivro.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Livro</font></font></a></li>
                <li><a class="dropdown-item" href="consulta/consultanomeautor.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Autor</font></font></a></li>
                <li><a class="dropdown-item" href="consulta/consultanomegenero.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gênero</font></font></a></li>
              </ul>
            </li>
            
          </ul>
          
        </div>
      </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-label="Slide 1" aria-current="true"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/pexels-enginakyurt-2767814.jpg" class="d-block w-100" alt="First slide">
            <div class="carousel-caption bottom-caption">
                <h5>Cadastre como quiser</h5>
                <p>Utilize nossa plataforma para fazer cadastro de livros, autores e gêneros</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/pexels-element5-1370298.jpg" class="d-block w-100" alt="Second slide">
            <div class="carousel-caption bottom-caption">
                <h5>Consulte seu livro preferido</h5>
                <p>Faça buscas por ID ou nome do livro, autor ou gênero</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/pexels-olenkabohovyk-3646172.jpg" class="d-block w-100" alt="Third slide">
            <div class="carousel-caption bottom-caption">
                <h5>Edite e exclua seus cadastros</h5>
                <p>Você tem total liberdade para efetuar os ajustes necessários, bem como excluir o que não utiliza mais</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<style>
.carousel-item img {
    width: 100%;
    height: auto; 
    object-fit: cover;
    max-height: 400px; 
}

.carousel-caption.bottom-caption {
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.65);
    padding: 1rem;
    text-align: center;
}

</style>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

<br><br>

<p  class="mencao">Projeto desenvolvido por Thiago Epiphanio da Silva e Vitor de Melo Souza</p>
<p  class="mencao">FATEC Franco da Rocha</p>
<p  class="mencao">Disciplina Linguagens de Programação</p:>
<p  class="mencao">Professor Rovílson de Freitas</p>


<footer class="rodape">
                <ul class="rodape__lista">
                    <li class="lista__link">
                        <a href="https://fatecfrancodarocha.edu.br" target="blank">Fatec de Franco da Rocha</a>
                    </li>
                    <br>
                    <li class="lista__link">
                        <a href="https://www.linkedin.com/in/thiago-epiphanio-da-silva-18319396/" target="blank">Thiago Epiphanio da Silva</a>
                    </li>
                    <br>
                    <li class="lista__link">
                        <a href="#" target="blank">Vitor de Melo Souza</a>
                    </li>                    
                </ul>
                <p class="rodape__texto">® Thiago Epiphanio da Silva e Vitor de Melo Souza.<br>Todos os direitos reservados.</p>
                
</footer>

</html>