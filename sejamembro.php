<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Associação</title>
	<meta name="viewport" content="whidth=device-width, initial-scale=1,shrimk-to-fit=no" />
	<link rel="stylesheet" type="text/css" href="assets/css/vegas.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/vegas.min.js"></script>
</head>
<body >
	<script>
		$("body").vegas({
		  overlay: true,
		  timer: false,
		  transition: 'fade2', 
		  transitionDuration: 5000,
		  delay: 20000,
		  animation: 'random',
		  animationDuration: 25000,
	    slides: [
	        { src: "assets/images/bk01.JPG" },
	        { src: "assets/images/bk02.JPG" },
	        { src: "assets/images/bk03.JPG" },
	        { src: "assets/images/bk04.JPG" },
	        { src: "assets/images/bk05.JPG" },
	        { src: "assets/images/bk06.JPG" }
	    ]
		});
	</script>

	<div class="container-fluid">
		<header>
			<br/>
			<div class="cabecalho">
					<div class="botaoentrar">
						<button type="button" class="btn btn-outline-light">ENTRAR</button>
					</div>
					<div class="titulo">
						<a href="index.php"><img src="assets/images/titulo.png" class="img-fluid rounded mx-auto d-block" /></a>
					</div>	
			</div>
			<br/>
			<div class="containermenu">
				<div class=" row menu justify-content-center">
					<nav>
						<ul>
							<li class="col"><a href="index.php">HOME</a></li>
							<li class="col"><a href="projetos.php">PROJETOS</a></li>
							<li class="col"><a href="galeria.php">GALERIA</a></li>
							<li class="col"><a href="estatuto.php">ESTATUTO</a></li>
							<li class="col-3"><a href="sejamembro.php">SEJA MEMBRO</a></li>
						</ul>
					</nav>
				</div>
			</div>			
		</header><br/><br/>
		<div class="containerestatuto container-fluid ">
			<div class="associado">
				<div class="titulosejamembro">
					<h2>SEJA UM ASSOCIADO</h2>
					<h6>Escolha abaixo o tipo de associação que deseja fazer.<br/>
						A diferença entre eles é na periodicidade da cobrança.</h6>
					<br/><br/>
				</div>
				<div class="conteudosejamembro justify-content-around">
					<div class="planoassociado border">
						<h4>Pagamento Mensal</h4> <h6>renovação automatica</h6>
						R$10,00/mês + taxa de R$50,00 <br/>na adesão do plano.
					</div>
					<div class="planoassociado border">
						<h4>Pagamento Anual</h4> <h6>renovação automatica</h6>
						R$120,00/mês + taxa de R$50,00 na adesão do plano.
					</div>

				</div>
				<br/><br/>
			</div>
			<footer>Criado por Comunic Tecnologia</footer>
		</div>
	</div>
		
</body>
</html>