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
    <title>Login</title>
    </head>
    <body>
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
        <?php
            if(isset($_POST['email']) && empty($_POST['email']) == false){
                $email = addslashes($_POST['email']);
                $senha = md5(addslashes($_POST['senha']));

                $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
                
                $sql = $pdo->prepare($sql);
                $sql->bindValue(':email', $email);
                $sql->bindValue(':senha', $senha);
                $sql->execute();

                if($sql->rowCount() > 0){
                    $dado = $sql->fetch();
                    $_SESSION['id'] = $dado['id'];
                    header("Location: sistema.php");
                }
            }
        ?>
        <div class="container areadelogin">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="card text-center card  bg-default mb-3">
                        <div class="card-header">
                            LOGIN
                        </div>
                        <form method="POST">
                            <div class="card-body">
                                <input type="text" name="email" class="form-control input-sm chat-input" placeholder="Digite seu e-mail..." />
                                </br>
                                <input type="password" name="senha" class="form-control input-sm chat-input" placeholder="Digite sua senha..." />
                            </div>
                            <div class="card-footer text-muted">
                            <input type="submit" value="Entrar"class="btn btn-secondary"/>
                            </div>
                        </form>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>