<?php
include_once 'cabecalho.php';
?>

<div class="row g-0">
<form action = 'adiciona_cliente.php' class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nome</label>
    <input type="text" class="form-control" id="txtnome" name="txtnome">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Sobrenome</label>
    <input type="text" class="form-control" id="txtsobrenome" name="txtsobrenome">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="txtemail" name="txtemail">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Senha</label>
    <input type="password" class="form-control" id="txtsenha" name="txtsenha">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">CPF</label>
    <input type="text" class="form-control" id="txtcpf" placeholder="000.000.000/00" name="txtcpf">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Endereço</label>
    <input type="text" class="form-control" id="txtendereco" placeholder="Rua, Numero, Bairro, Cidade, Estado" name="txtendereco">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Data de Nascimento</label>
    <input type="date" class="form-control" id="txtdatanasc" name="txtdatanasc">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">telefone</label>
    <input type="text" class="form-control" id="txtfone" name="txtfone">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Receber notícias e promoções por e-mail?
      </label>
    </div>
  </div>
  <div class="col-12">
    <button id="btncadastrar" name="btncadastrar" type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</div>