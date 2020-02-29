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
        <?php
            if(isset($_POST['nome']) && empty($_POST['nome']) == false){
                $nome = addslashes($_POST['nome']);
                $cpf =  md5(addslashes($_POST['cpf']));
                $datanascimento = addslashes($_POST['datanascimento']);
                $cep = addslashes($_POST['cep']);
                $endereco = addslashes($_POST['endereco']);
                $estado = addslashes($_POST['estado']);
                $celular = addslashes($_POST['celular']);
                $telefone = addslashes($_POST['telefone']);
                $email = addslashes($_POST['email']);
                $plano = addslashes($_POST['plano']);

                $sql = "INSERT INTO associados SET nome = :nome, cpf = :cpf, datanascimento = :datanascimento,
                                                   cep = :cep, endereco = :endereco, estado = :estado, 
                                                   celular = :celular, telefone = :telefone, email = :email, plano = :plano";
               
                $sql = $pdo->prepare($sql);
                $sql->bindValue(':nome',$nome);
                $sql->bindValue(':cpf',$cpf);
                $sql->bindValue(':datanascimento',$datanascimento);
                $sql->bindValue(':cep',$cep);
                $sql->bindValue(':endereco',$endereco);
                $sql->bindValue(':estado',$estado);
                $sql->bindValue(':celular',$celular);
                $sql->bindValue(':telefone',$telefone);
                $sql->bindValue(':email',$email);
                $sql->bindValue(':plano',$plano);
                $sql->execute();


                header("Location: sistema.php");

            }else{
                echo "Deu erro praga";
            }
        ?>
        <br/><br/>
        <div class="container">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4>Cadastro de Associado</h4>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="nome">Nome completo: </label>
                            <input type="text" class="form-control" id="nome" name="nome" required="" placeholder="Nome completo" />
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF:</label>  
                            <input id="cpf"  placeholder="Apenas números" class="form-control" name="cpf" required="" type="text" maxlength="11" pattern="[0-9]+$">
                        </div>
                        <div class="form-group">
                            <label for="datanascimento">Nascimento:</label>
                            <input id="datanascimento" placeholder="DD/MM/AAAA" class="form-control" name="datanascimento" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                        </div>
                        <div class="form-group">
                            <label for="cep">CEP:</label>  
                            <input id="cep"  placeholder="Apenas números" class="form-control" name="cep" required="" type="text">
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereço completo: </label>
                            <input type="text" class="form-control" id="endereco" name="endereco" required="" placeholder="Endereço completo" />
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado:</label>  
                            <input id="estado"  placeholder="Apenas a sigla" class="form-control" name="estado" required="" type="text" maxlength="2">
                        </div>
                        <div class="form-group">
                            <label for="celular">Celular:</label>
                            <input id="celular" class="form-control" placeholder="XX XXXXX-XXXX" name= "celular" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                            OnKeyPress="formatar('## #####-####', this)">
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone fixo:</label>
                            <input id="telefone"  class="form-control" placeholder="XX XXXX-XXXX" name="telefone" type="text" maxlength="12" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                            OnKeyPress="formatar('## ####-####', this)">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail: </label>
                            <input type="text" class="form-control" id="email" name="email" required="" placeholder="Endereço de e-mail" />
                        </div>
                        <div class="form-group">
                            <label for="plano">Plano adquirido: </label>
                            <input type="text" class="form-control" id="plano" name="plano" required="" placeholder="Nome completo" />
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