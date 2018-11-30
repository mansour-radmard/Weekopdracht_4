<?php
session_start();
?>

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
  <link rel="stylesheet" type="text/css" href="../../public/css/queries.css">

</head>

<body>
<?php include "../includes/navbar.php"?>

<div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1 class="my-4">Blog / <small>CodeGorilla / Add new category</small> </h1>
        <form action="../lib/send_new_cat.php" method="post">
          <div class="form-group">
            <label for="title">New category</label>
            <input type="text" class="form-control" id="new_cat" name="new_cat">
            </div>
            <button type="submit" class="btn btn-info" name="submit">Submit</button>
        </form>
      </div>
      <div class="col-md-4 space-top">
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
        <?php include "../includes/categories.php";?>
        <?php include "../includes/side-widget.php";?>
      </div>
    </div>
  </div>
<?php include "resources/includes/footer.php";?>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- Custom JS -->
<script src="resources/js/custom.js"></script>

<script>
   // logout function
   function logout() {
      location.href = "resources/lib/logout.php"
   }
</script>

</body>

</html>
