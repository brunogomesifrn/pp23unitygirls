<!DOCTYPE html>
<html lang="en"data-bs-theme="auto">
  <head><script src="src/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Carousel Template · Bootstrap v5.3</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
<link href="src/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> 
  <style>
      

    }
.rodape{
    padding-bottom: 20px;
    text-align: center
    }
  

</style>

<body>
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>
<header data-bs-theme="dark">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top " style="background-color: #a070df;" >
    <div class="container-fluid">
      <a class="foto">
        <img src="src/img/logo.png" width="80px" height="70px">
    </a>
      <a class="navbar-brand" href="#">Unity Girls</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Início</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ações
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Eventos</a></li>
              <li><a class="dropdown-item" href="#">Grupos</a></li>
              <li><a class="dropdown-item" href="#">Premiações</a></li>
              <li><a class="dropdown-item" href="#">Projetos</a></li>
              <li><a class="dropdown-item" href="#">Mídias</a></li>
              <li><a class="dropdown-item" href="#">Personalidades</a></li>
              <li><a class="dropdown-item" href="#">Notícias</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Artigos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Novidades</a></li>
              <li><a class="dropdown-item" href="#">Profissões</a></li>
              <li><a class="dropdown-item" href="#">Cursos</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Tecnologia</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-disabled="true">Login</a>
          </li>
        </ul>
        <form class="d-flex" role="procurar">
          <input class="form-control me-2" type="procurar" placeholder="procurar" aria-label="procurar">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>
</header>
<div class="form">
    <center>
        <h1>Autenticação:</h1>    
    <form action="projeto_bd_cadastrar.php" method="post">
        <p>
            <label for="nome">Primeiro nome:</label>
            <input type="text" name="nome" id="nome"/>
        </p>
        <p>
            <label for="data">Sobrenome:</label>
            <input type="text" name="data" id="data"/>
        </p>
        <p>
            <label for="data">Nome de usuário:</label>
            <input type="text" name="data" id="data"/>
        </p>
        <label for="estados" class="estados">Estado/UF:</label>
    <select class="estados" id="estados" required>
      <option selected disabled value="">Procure seu estado...</option>
      <option>Acre</option>
      <option>Amazonas</option>
      <option>Amapá</option>
      <option>Alagoas</option>
      <option>Bahia</option>
      <option>Ceará</option>
      <option>Espírito Santo</option>
      <option>Goiás</option>
      <option>Mato Grosso</option>
      <option>Mato Grosso do Sul</option>
      <option>Maranhão</option>
      <option>Paraná</option>
      <option>Paraíba</option>
      <option>Pernambuco</option>
      <option>Pará</option>
      <option>Piauí</option>
      <option>Rio de Janeiro</option>
      <option>Rio Grande do Norte</option>
      <option>Rio Grande do Sul</option>
      <option>Roraima</option>
      <option>Rondônia</option>
      <option>Santa Catarina</option>
      <option>Sergipe</option>
      <option>São Paulo</option>
      <option>Tocantins</option>

    </select>
        <p>
            <label for="email">Cidade:</label>
            <input type="text" name="email" id="email">
        </p>
        <p> <input type="submit" value="Enviar"></p>
       </form>
       <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <footer class="container-fluid rodape">
    <p class="float-end"><a href="#">Voltar ao início</a></p>
    <div class="rodape">
      <a >&copy; Projeto Unity Girl's</a>
      <a >IFRN - Campus Canguaretama</a>
     </div>
      <nav class="icons">
          <ul>
              <li><a href="#"><img src="src/img/whats.png" width="40px"></a></li>
              <li><a href="#"><img src="src/img/instagram.png" width="40px"></a></li>
              <li><a href="#"><img src="src/img/telegram.png" width="40px"></a></li>
              <li><a href="#"><img src="src/img/youtube.png" width="40px"></a></li>
              <li><a href="#"><img src="src/img/twitter.png" width="40px"></a></li>
          </ul>
      </nav>
  </footer>
  <script src="src/js/bootstrap.bundle.min.js"></script>
</center>
</body>