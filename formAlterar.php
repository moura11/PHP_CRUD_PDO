<!DOCTYPE html>
<html>

<head>

	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilo.css">
	<title>TPI-1 - PHP</title>

</head>

<body>

	<div class="container sombra">

		<div class="topo"><img src=""></div>

		<?php

			require_once 'Conexao.php';
			require_once 'CRUDAluno.php';
			require_once 'menu.php';

			$codigo = $_GET['cod'];
			$crud = new CRUDAluno(Conexao::getInstance());
			$aluno = $crud->selecionarCriterio($codigo);

			foreach ($aluno as $dado) {

		?>

			<div class="content_titulo">CADASTRO DE ALUNOS - ALTERAÇÃO</div>

			<div class="content">

				<form action="processaAlteracao.php" method="POST">

					<input type="hidden" name="txt_codigo" value="<?php echo $dado->COD_ALUNO; ?>">

					<label>NOME: </label>
					<input type="text" name="txt_nome" value="<?php echo $dado->NOME; ?>">

					<br>
					<br>

					<label>SOBRENOME: </label>
					<input type="text" name="txt_sobrenome" value="<?php echo $dado->SOBRENOME; ?>">

					<br>
					<br>

					<label>IDADE: </label>
					<input type="text" name="txt_idade" value="<?php echo $dado->IDADE; ?>">

					<br>
					<br>

					<label>E-MAIL: </label>
					<input type="text" name="txt_email" value="<?php echo $dado->EMAIL; ?>">

					<br>
					<br>

					<label>TELEFONE: </label>
					<input type="text" name="txt_telefone" value="<?php echo $dado->TELEFONE; ?>">

					<br>
					<br>

					<input type="submit" value="ALTERAR">

				</form>

				<?php } ?>

			</div>

	</div>

</body>

</html>
