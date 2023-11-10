<!DOCTYPE html>
<html lang="en">
<head>
  <center>
<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Primeiro nome:</label>
    <input type="text" class="form-control" id="validationCustom01" value="" required>
    <div class="valid-feedback">
    </div>
    <br>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Sobrenome:</label>
    <input type="text" class="form-control" id="validationCustom02" value="" required>
    <div class="valid-feedback">
      <br>
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Nome de usuário:</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
      Coloque um nome de usuário
      </div>
      <br>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Por favor insira uma cidade
    </div>
    <br>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Estado/UF</label>
    <select class="form-select" id="validationCustom04" required>
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
      <option></option>

    </select>
    <div class="invalid-feedback">
      Por favor selecione um estado
    </div>
    <br>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">CEP</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
     Por favor insira o CEP
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Concordo com os termos e condições
      </label>
      <div class="invalid-feedback">
      </div>
      <br>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar</button>
  </div>
</form>
</center>
</body>
</html>