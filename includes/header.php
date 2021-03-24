<?php

use \App\Session\Login;

$userLogged = Login::getUserLogged();
//echo "<pre>"; print_r($userLogged); echo "</pre>"; exit;

$user = $userLogged ? 
        $userLogged['name'].' <a href="logout.php" class="text-light font-weight-bold ml-2">Sair</a>' : 
        'Visitante <a href="login.php" class="text-light font-weight-bold ml-2">Entrar</a>';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Mais Vagas</title>
  </head>
  <body class="bg-dark text-ligth">

    <div class="container text-light">

        <div class="jumbotron bg-danger text-light">
            <h1> Mais Vagas</h1>
            <p>Muitas vagas novas todos os dias</p>
            
            <hr class="border-light">

            <div class="d-flex justify-content-start">
              <?=$user?>
            </div>
        </div>

    