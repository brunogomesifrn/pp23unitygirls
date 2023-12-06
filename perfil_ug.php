<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
  <?php include 'bases/head.php' ?>
  </head>
  <body>
  <?php include 'bases/menu.php' ?>
<main>
<h2>
    Nome do usuário 
    <small class="text-muted">usuário</small>
  </h2>
  <br>
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" value="mands@gmail.com" required>
    </div>
  </div>
  <div class="form-group col-md-6">
      <label for="inputEmail4">Endereço</label>
      <input type="email" class="form-control" id="inputEndereco" placeholder="Endereco" value="rua jardim florido" required>
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
</main>
<?php include 'bases/rodape.php' ?>
<script src="src/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
