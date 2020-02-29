<?php
require 'config.php';
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
    <title>Associação</title>
    </head>
    <body>
        <br/><br/>
        <div class="container">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4>Cadastro de Funcionário</h4>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="nomecompleto">Nome completo: </label>
                            <input type="text" class="form-control" id="nomecompleto" placeholder="Nome completo" />
                        </div>
                        <div class="form-group">
                            <label for="atuacao">Área de atuação: </label>
                            <input type="text" class="form-control" id="atuacao" placeholder="Área de atuação" />
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF:</label>  
                            <input id="cpf"  placeholder="Apenas números" class="form-control" required="" type="text" maxlength="11" pattern="[0-9]+$">
                        </div>
                        <div class="form-group">
                            <label for="nascimento">Nascimento:</label>
                            <input id="nascimento" placeholder="DD/MM/AAAA" class="form-control" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                        </div>
                        <div class="form-group">
                            <label for="cep">CEP:</label>  
                            <input id="cep"  placeholder="Apenas números" class="form-control" required="" type="text">
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereço completo: </label>
                            <input type="text" class="form-control" id="endereco" placeholder="Endereço completo" />
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado:</label>  
                            <input id="estado"  placeholder="Apenas a sigla" class="form-control" required="" type="text" maxlength="2">
                        </div>
                        <div class="form-group">
                            <label for="celular">Celular:</label>
                            <input id="celular" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                            OnKeyPress="formatar('## #####-####', this)">
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone fixo:</label>
                            <input id="telefone"  class="form-control" placeholder="XX XXXX-XXXX" required="" type="text" maxlength="12" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                            OnKeyPress="formatar('## ####-####', this)">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail: </label>
                            <input type="text" class="form-control" id="email" placeholder="Endereço de e-mail" />
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha: </label>
                            <input type="password" id="senha" class="form-control input-sm chat-input" placeholder="Digite sua senha..." />
                        </div>
                        <br/>
                        <div class="form-group" style="text-align: center;">
                            <input type="submit" value="Cadastrar"class="btn btn-success"/>
                            <a href="sistema.php" class="btn btn-danger">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
            <br/>
        </div>
    </body>
</html>