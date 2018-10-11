<?php
     $conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
     $dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
     $produto = mysqli_fetch_array($dados);
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">


<title><?= $produto['nome'] ?></title>

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/produto.css">
<link rel="stylesheet" href="css/bootstrap.css">

</head>

<body>

	<?php
     $cabecalho_title = "Home Mirror Fashion";
     include("cabecalho.php");
 ?>

	<div class="produto-back">
		<!-- envolvendo a div.produto pela nova div.container -->
		<div class="container">
			<div class="produto">
				<h1>
					<?= $produto['nome'] ?>
				</h1>
				<p>
					por apenas
					<?= $produto['preco'] ?>
				</p>

				<form action="checkout.php?id=<?= $produto['id'] ?>" method="POST">

					<fieldset class="cores">
						<legend>Escolha a cor:</legend>

						<input type="radio" name="cor" value="verde" id="verde" checked>
						<label for="verde"> <img
							src="img/produtos/foto<?= $produto['id'] ?>-verde.jpg">

						</label> <input type="radio" name="cor" value="rosa" id="rosa"> <label
							for="rosa"> <img
							src="img/produtos/foto<?= $produto['id'] ?>-rosa.jpg">

						</label> <input type="radio" name="cor" value="azul" id="azul"> <label
							for="azul"> <img
							src="img/produtos/foto<?= $produto['id'] ?>-azul.jpg">
						</label>
					</fieldset>

					<fieldset class="tamanhos">
						<legend>Escolha o tamanho:</legend>

						<input type="range" min="36" max="46" value="42" step="2"
							name="tamanho" id="tamanho">
						<output for="tamanho" name="valortamanho">42</output>

					</fieldset>

					<button class="comprar">Comprar</button>
				</form>
			</div>

			<div class="detalhes">
				<h2>Detalhes do produto</h2>

				<p>
					<?= $produto['descricao'] ?>
				</p>


				<table>
					<thead>
						<tr>
							<th>Característica</th>
							<th>Detalhe</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Modelo</td>
							<td>Cardigã 7845</td>
						</tr>
						<tr>
							<td>Material</td>
							<td>Algodão e poliester</td>
						</tr>
						<tr>
							<td>Cores</td>
							<td>Azul, Rosa e Verde</td>
						</tr>
						<tr>
							<td>Lavagem</td>
							<td>Lavar a mão</td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>


	</div>

	<?php include("rodape.php"); ?>

	<script type="text/javascript" src="js/produto.js"></script>
</body>
</html>