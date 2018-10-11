<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" name="viewport" content="width=device-width">

<title>Mirror Fashion</title>

<link rel="stylesheet" href="css/reset.css">
<!-- <link rel="stylesheet" href="css/estilos.css"> -->
<link rel="stylesheet/less" href="less/estilos.less">
<link rel="stylesheet" href="css/banner.css">
<link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script'
	rel='stylesheet'>

</head>
<body>

	<?php
     	$cabecalho_title = "Home Mirror Fashion";
     	include("cabecalho.php");
	 ?>


	<div class="container destaque">

		<section class="busca">
			<h2>Busca</h2>

			<form>
				<input type="search">
				<button>Buscar</button>
			</form>
		</section>
		<!-- fim .busca -->

		<section class="menu-departamentos">
			<h2>Departamentos</h2>

			<nav>
				<ul>
					<li><a href="#">Blusas e Camisas</a>
						<ul>
							<li><a href="#">Manga curta</a></li>
							<li><a href="#">Manga comprida</a></li>
							<li><a href="#">Camisa social</a></li>
							<li><a href="#">Camisa casual</a></li>
						</ul></li>
					<li><a href="#">Calças</a></li>
					<li><a href="#">Saias</a></li>
					<li><a href="#">Vestidos</a></li>
					<li><a href="#">Sapatos</a></li>
					<li><a href="#">Bolsas e Carteiras</a></li>
					<li><a href="#">Acessórios</a></li>
				</ul>

			</nav>
		</section>


		<!-- fim .menu-departamentos -->

		<section class="banner-destaque">
			<figure>
				<img src="img/destaque-home.jpg" alt="Promoção: Big City Night">
				<a href="#" class="pause"></a>

			</figure>
		</section>
		<!-- fim .banner-destaque -->
	</div>



	<!-- fim .container .destaque -->



	<div class="container paineis">
		<section class="painel novidades ">
			<h2>Novidades</h2>
			<ol>
				<?php
    				 	$conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
    					 $dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY data DESC LIMIT 0, 12");
     					while ($produto = mysqli_fetch_array($dados)):?>

				<li><a href="produto.php?id=<?= $produto['id'] ?>">
						<figure>
							<img src="img/produtos/miniatura<?= $produto['id'] ?>.jpg"
								alt="<?= $produto['nome'] ?>">
							<figcaption>
								<?= $produto['nome'] ?>
								por
								<?= $produto['preco'] ?>
							</figcaption>
						</figure>
				</a></li>

				<?php endwhile; ?>
			</ol>

			<button type="button">Mostrar mais</button>

		</section>


		<section class="painel mais-vendidos">
			<h2>Mais Vendidos</h2>

			<ol>
				<?php
    				 	$conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
    					 $dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY vendas DESC LIMIT 0, 12");
     					while ($produto = mysqli_fetch_array($dados)):?>

				<li><a href="produto.php?id=<?= $produto['id'] ?>">
						<figure>
							<img src="img/produtos/miniatura<?= $produto['id'] ?>.jpg"
								alt="<?= $produto['nome'] ?>">
							<figcaption>
								<?= $produto['nome'] ?>
								por
								<?= $produto['preco'] ?>
							</figcaption>
						</figure>
				</a></li>

				<?php endwhile; ?>
			</ol>

			<button type="button">Mostrar mais</button>

		</section>



		<?php include("rodape.php"); ?>

	</div>
	<!-- fim .container .paineis -->


	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/home.js"></script>
	<script type="text/javascript" src="js/banner.js"></script>
	<script src="js/less.js"></script>

</body>
</html>