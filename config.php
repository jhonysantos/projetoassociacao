<?php
$dsn = "mysql:dbname=associacao;host=127.0.0.1";
$dbuser = "root";
$dbpass = "c@m1nh0d3luz";

try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);

}catch(PDOException $e){
    echo "Falhou a conexão: ".$e->getMessage();

}

?>