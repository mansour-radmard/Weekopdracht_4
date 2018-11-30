<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Important meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Title -->
  <title>Blog</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="#">

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:300i,400,400i,700,700i,800,800i|PT+Sans:400,700,700i" rel="stylesheet">

  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="../../vendors/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
  <link rel="stylesheet" type="text/css" href="../../public/css/login.css">
  <link rel="stylesheet" type="text/css" href="../../public/css/queries.css">

</head>

<body>
<header>
   <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top nav-custom">
      <div class="container">
        <a class="navbar-brand" href="#">
          Blog <i class="fab fa-blogger"></i> </a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link smooth-scroll" href="../../index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link smooth-scroll" href="#">Login <i class="fas fa-user-lock"></i></a>
                </li>
              </ul>
            </div>
      </div>
    </nav>
</header>

<div class="container">
   <div class="row">
      <div class="col-md-4 offset-md-4">
         <div class="item-box no-shad">
            <div class="login-form">
               <div class="panel">
                  <i class="fas fa-sign-in-alt"></i>
                  <h2>Sign In</h2>
                  <p>Please enter your username and password</p>
               </div>
               <form id="login" action="../lib/login.php" method="POST">
                  <div class="form-group">
                     <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                     <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="forgot">
                     <a href="#">Forgot password?</a>
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary">Login</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- Custom JS -->
<script src="resources/js/custom.js"></script>

</body>

</html>
