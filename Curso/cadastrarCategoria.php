<!DOCTYPE html>
<html>
<head>
	<title>Atualização de Categoria</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



	<style type="text/css">
		#botao{
			background-color: #FF9999; /*cor do fundo*/
			color: #ffffff; /* cor da letra*/
		}
	</style>

</head>
<body>

	<div class="container" style="margin-top: 100px">
		<h4 style="text-align: center;">Formulário para cadastrar categoria</h4>
		<form action="inserirCategoria.php" method="post">
			<label>Categoria</label>
			<div class="form-group">
				<input type="text" name="nomecategoria" class = "form-control" placeholder="Informe a categoria" autocomplete="off">
			</div>

			<div style="text-align: right;">
				<a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
				<button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
			</div>

		</form>
	</div>






	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>