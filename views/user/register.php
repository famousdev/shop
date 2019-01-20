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
              <a href="/user/register/" class="nav-link waves-effect">
                <i class="fas fa-user-alt"></i>
                <span class="clearfix d-none d-sm-inline-block">Login</span>
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
<!-- Material form register -->
<div class="container justify-content-center">

        <?php if(isset($err) && is_array($err)):?>
        <ul>
            <?php foreach ($err as $error): ?>
            <li>- <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
            <?php endif;?>

<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Регистрация</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form action="#" method="post" class="text-center" style="color: #757575;">

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" class="form-control" name="name" 
                        value="<?php echo $name; ?>">
                        <label for="materialRegisterFormFirstName">Name</label>
                    </div>
                </div>
            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
                <input type="email" id="materialRegisterFormEmail" class="form-control" name="email" 
                        value="<?php echo $email; ?>">
                <label for="materialRegisterFormEmail">E-mail</label>
            </div>

            <!-- Password -->
            <div class="md-form">
                <input type="password" name="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock"
                 value="<?php echo $password; ?>">
                <label for="materialRegisterFormPassword">Password</label>
                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">

                </small>
            </div>

            <!-- Sign up button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="submit">Sign in</button>

            <!-- Social register -->
            <p>войти с помощью:</p>

            <a type="button" class="btn-floating btn-fb btn-sm">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a type="button" class="btn-floating btn-tw btn-sm">
                <i class="fab fa-twitter"></i>
            </a>
            <a type="button" class="btn-floating btn-li btn-sm">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a type="button" class="btn-floating btn-git btn-sm">
                <i class="fab fa-github"></i>
            </a>

            <hr>

            <!-- Terms of service -->
            <p>By clicking
                <em>Sign up</em> you agree to our
                <a href="" target="_blank">terms of service</a>

            </form>
        <!-- Form -->

        </div>

    </div>

</div>
<!-- Material form register -->

<?php include ROOT . '/views/layouts/footer.php'; ?>