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
        <br/>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Associado</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th>Plano</th>
                    </tr>
                </thead>
            </table>
            <a href="sistema.php" class="btn btn-danger">Voltar</a>
            <br/>
        </div>
    </body>
</html>