<?php
require 'config.php';
session_start();

if(isset($_SESSION['id']) && empty($_SESSION['id']) == false){

}else{
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <title>Associação</title>
    </head>
    <body>
    <div class="container">
        <h1>Área restrita...</h1>
    </div>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    </body>
</html>