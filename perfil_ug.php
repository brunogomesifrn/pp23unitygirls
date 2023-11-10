<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <title>Unity Girls</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="p-3 m-0 border-0 bd-example">


  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="pag inicial.html">Unity Girls</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="pag inicial.html">Início</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">Usuário</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="perfil.html">Perfil</a></li>
              <li><a class="dropdown-item" href="cadastro_usuario.html">Cadastro</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <h2>
    Nome do usuário |
    <small class="text-muted">usuário</small>
  </h2>
  <br>
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" value="mands@gmail.com" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Senha" value="123***" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Endereço</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0" value="..." required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="inputCity" value="Natal" required>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade/Estado</label>
      <input type="text" class="form-control" id="inputestado" value="Natal/RN" required>
    </div>
   
    <div class="form-group col-md-2">
      <label for="inputCEP">CEP</label>
      <input type="text" class="form-control" id="inputCEP">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Clique aqui
      </label>
    </div>
  </div>
  <button type="button" class="btn btn-light">Entrar</button>
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
    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: purple;">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: CTA -->
        <section class="">
          <p class="d-flex justify-content-center align-items-center" >
            <span class="me-3">Todos os direitos reservados a INFO 2020.1</span>
          </p>
        </section>
        <!-- Section: CTA -->
      </div>
      <!-- Grid container -->
  
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: purple;">
        © 2023 Copyright:
        <a class="text-white" href="https://instagram.com/info2020.01?igshid=OGQ2MjdiOTE=">INFO 2020.1</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </section>
</body>
</html>