<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar</h2>

<form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="customer['name']" value="<?php echo $customer['name']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CPF</label>
      <input type="text" class="form-control" name="customer['cpf']" value="<?php echo $customer['cpf']; ?>">
    </div>

  </div>
  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">E-mail</label>
      <input type="text" class="form-control" name="customer['email']" value="<?php echo $customer['email']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Senha</label>
      <input type="text" class="form-control" name="customer['senha']" value="<?php echo $customer['senha']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Login</label>
      <input type="text" class="form-control" name="customer['login']" value="<?php echo $customer['login']; ?>">
    </div>
  </div>
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>