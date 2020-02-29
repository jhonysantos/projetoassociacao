<?php
require 'config.php';
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <link rel="stylesheet" type="text/css" href="assets/css/vegas.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/vegas.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
    <title>Associação</title>
    </head>
    <body>
    <br/><br/>
        <div class="container  botao card">
            <div class="row justify-content-around align-items-center">
                <div class="col-4">
                    <a href="cadastroassociado.php" class="btn btn-secondary">Cadastro de Associados</a>
                </div>
                <div class="col-4">
                    <a href="listadeassociados.php" class="btn btn-secondary">Lista de Associados</a>
                </div>
                <div class="col-4">
                    <a href="cadastrofuncionario.php" class="btn btn-secondary">Cadastro de funcionário</a>
                </div>
            </div>
        </div>
    </body>
</html>