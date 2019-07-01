<?php

require_once(__DIR__.'/../../src/Admin/loginPhp.php');


?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Ecran de connexion</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        html,
        body {
        height: 100%;
        }

        body {
        display: -ms-flexbox;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
        }

        .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
        }
        .form-signin .checkbox {
        font-weight: 400;
        }
        .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
        }
        .form-signin .form-control:focus {
        z-index: 2;
        }
        .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        }


      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>
<body class="text-center">
  <div class="container">
    <div class="alert alert-warning" role="alert">
      <?= $message ?>
    </div> 
  </div>
  <div class="container">
    <form novalidate="novalidate" action="#" method="POST"class="form-signin">
        <img class="mb-4" src="data:image/png;base64,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" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Connexion :</h1>
        <label for="inputEmail" class="sr-only">Adress Email</label>
        <input name= "email" type="text" id="inputEmail" class="form-control" placeholder="Adresse Email" required autofocus>
        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input name= "password" type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrer</button>
    </form>
  </div>




</body>
</html>