 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top " style="background-color: #a070df;" >
    <div class="container-fluid">
      <a class="foto">
        <img src="carousel/logo.png" width="80px" height="70px">
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
          <li class="nav-item">
            <a class="nav-link active" href="#">Ações</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-disabled="true">Artigos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-disabled="true">Login</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>
</head>
<body>
    <div class="form">
    <center>
        <h1>Cadastro:</h1>    
    <form action="projeto_bd_cadastrar.php" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome"/>
        </p>
        <p>
            <label for="data">CPF:</label>
            <input type="text" name="data" id="data"/>
        </p>
        <p>
            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email" />
        </p>
        <p> <input type="submit" value="Cadastrar"></p>
    </form>
</center>
</div>
<footer class="container rodape">
    <p class="float-end"><a href="#">Back to top</a></p>
    <center>
        <div class="rodape">
      <a >&copy; Projeto Unity Girl's</a>
      <a >IFRN - Campus Canguaretama</a>
     </div>
     </center>
      <nav class="icons">
          <ul>
              <li><a href="#"><img src="carousel/whats.png" width="40px"></a></li>
              <li><a href="#"><img src="carousel/instagram.png" width="40px"></a></li>
              <li><a href="#"><img src="carousel/telegram.png" width="40px"></a></li>
              <li><a href="#"><img src="carousel/youtube.png" width="40px"></a></li>
              <li><a href="#"><img src="carousel/twitter.png" width="40px"></a></li>
          </ul>
      </nav>
  </footer>
  
</body>
</html>