<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Famous - Shop</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <!-- Bootstrap CSS -->
  <link href="/template/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="/template/css/mdb.min.css" rel="stylesheet">
  <!-- Сustom styles (optional) -->
  <link href="/template/css/style.css" rel="stylesheet">
  </head>
<body>
<header>
  <nav class="navbar navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">
        <a href="/" class="navbar-brand waves-effect">
          <strong class="blue-text">Famous</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a href="/" class="nav-link waves-effect">Home</a>
            </li>
            <li class="nav-item">
                <a href="/catalog/" class="nav-link waves-effect">Products</a>
              </li>
              <li class="nav-item">
                  <a href="/about/" class="nav-link waves-effect">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="/blog/" class="nav-link waves-effect">Blog</a>
                  </li>
                  <li class="nav-item">
                      <a href="/contacts/" class="nav-link waves-effect">Contacts</a>
                    </li>
          </ul>
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a href="/cart/" class="nav-link waves-effect">
                <span class="badge red z-depth-1 mr-1">12</span>
                <i class="fa fa-shopping-cart"></i>
                <span class="clearfix d-none d-sm-inline-block">Cart</span>
              </a>
              <li class="nav-item">
              <a href="/cabinet/" class="nav-link waves-effect">
                <i class="fas fa-user-alt"></i>
                <span class="clearfix d-none d-sm-inline-block">Account</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="/user/login/" class="nav-link waves-effect">
                <i class="fas fa-lock"></i>
                <span class="clearfix d-none d-sm-inline-block">Sing In</span>
              </a>
            </li>
            <li class="nav-item">
                <a href="https://github.com/famousdev" class="nav-link waves-effect">
                    <i class="fab fa-github fa-2x"></i>
                </a>
              </li>
              <li class="nav-item">
                  <a href="facebook.com" class="nav-link waves-effect">
                    <i class="fab fa-facebook fa-2x"></i>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="youtube.com" class="nav-link border border-light rounded waves-effect">
                      <i class="fab fa-youtube fa-2x"></i>
                    </a>
                  </li> 
          </ul>
        </div>
    </div>
  </nav>
<section>
    <div class="container justify-content-center">
    <h1>Кабинет</h1>
        <div class="row">
                <ul>
                    <li><a href="/user/edit">Редактировать свои данные</a></li>
                    <li><a href="/user/history">Список Ваших покупок</a></li>
                </ul>
        </div>
    </div>
</section>


<?php include ROOT . '/views/layouts/footer.php'; ?>