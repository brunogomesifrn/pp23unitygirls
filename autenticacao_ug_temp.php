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
    <?php include 'bases/menu.php' ?>
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
<?php include 'bases/rodape.php' ?>
  <script src="src/js/bootstrap.bundle.min.js"></script>
</center>
</body>