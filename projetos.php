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
		<div class="containerprojeto container-fluid ">
			<div class="projetomaquinario">
				<div class="tituloprojeto">
					<h2>PROJETO MECANIZAÇÃO E PRODUÇÃO:</h2>
					<h4>PARA O HOMEM NO CAMPO DAS COMUNIDADES RURAIS DO P. A PRESIDENTE</h4>
					<br/>
				</div>
				<div class="conteudoprojeto">
					<h4>Objetivo Geral</h4>
					Contribuir na construção de um conjunto de ações e ideia que ajuda no
					desenvolvimento territorial do assentamento. Nesse contexto apoiar o desenvolvimento
					sustentável no Município é uma forma de ajudar nas condições Produtivas da
					Agricultura Familiar das famílias que vivem do campo.<br/><br/>

					<h4>Objetivos específicos</h4>
					<ul>
						<li>Adesão de maquinários;</li>
						<li>Mecanização da terra;</li>
						<li>Recuperação de solo;</li>
						<li>Organização da cadeia produtiva do leite;</li>
						<li>Organização da cadeia de fruticultura;</li>
						<li>Organização da cadeia produtiva do processamento de mandioca;</li>
						<li>Incentivo na apicultura.</li>
					</ul><br/>

					<h4>Resultados esperados</h4>
					Ao concluir o Projeto espera-se que o problema de mecanização e recuperação
					do solo promova a estimulação da comunidade assistida pela P.A Presidente sob a
					temática discutida e requerida a secretaria de agricultura familiar, Órgão competente do
					Governo de Mato Grosso. A credita-se que a escola são João como parceira na
					contribuição de informações busca:<br/><br/>
					<ul>
						<li>Melhor produção de alimentos dentro do assentamento;</li>
						<li>O aumento da renda familiar com técnica de preservação do solo;</li>
						<li>Recuperação do solo;</li>
						<li>Adesão de maquinários como alternativa de produção;</li>
						<li>Permanência do homem no campo.</li>
					</ul><br/><br/>
				</div>
			</div>
			<footer>Criado por Comunic Tecnologia</footer>
		</div>
	</div>
		
</body>
</html>