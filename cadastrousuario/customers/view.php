<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Cliente <?php echo $customer['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $customer['name']; ?></dd>

	<dt>CPF:</dt>
	<dd><?php echo $customer['cpf']; ?></dd>

	<dt>E-mail:</dt>
	<dd><?php echo $customer['email']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Login:</dt>
	<dd><?php echo $customer['login']; ?></dd>

	<dt>Senha:</dt>
	<dd><?php echo $customer['senha']; ?></dd>
</dl>


<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>