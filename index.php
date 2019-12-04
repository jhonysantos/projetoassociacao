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
	<script type="text/javascript">
		window.onload = function () {
		document.querySelector(".menumobile").addEventListener("click", function(){
		if(document.querySelector(".menu nav ul").style.display == 'flex'){
			document.querySelector(".menu nav ul").style.display = 'none';
		} else{
			document.querySelector(".menu nav ul").style.display = 'flex';
		}
	});
};
	</script>
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
				<div class="titulo">
						<a href="index.php"><img src="assets/images/titulo.png" class="img-fluid rounded mx-auto d-block" /></a>
				</div>	
					
				<div class="menumobile">
					<img src="assets/images/menu.png" />
				</div>
				<br/>
			</div>
				<div class="containermenu">
					<div class=" row menu justify-content-center">
						<nav>
							<ul>
								<li class="col"><a href="index.php">HOME</a></li>
								<li class="col"><a href="projetos.php">PROJETOS</a></li>
								<li class="col"><a href="galeria.php">GALERIA</a></li>
								<li class="col"><a href="estatuto.php">ESTATUTO</a></li>
								<li class="col"><a href="sejamembro.php">ASSOCIADO</a></li>
							</ul>
						</nav>
					</div>
				</div>
					
		</header><br/><br/>
		<div class="containercorpo row align-items-end">
				<div class="col"><img src="assets/images/frase.png" class=" img-fluid rounded mx-auto d-block" /></div>
		</div>
	</div>
		<footer class="footerindex container-fluid">Criado por Comunic Tecnologia</footer>
</body>
</html>