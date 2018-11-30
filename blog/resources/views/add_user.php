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

<div class="container contain-admin">
   <div class="row text-center row-bottom-space">
      <div class="col-md-12">
         <h6 id="name"><br/>
         Add new user</h6>
         <h6 id="date">Fill new user data</h6>
      </b/>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6 offset-md-3">
         <form action="../lib/add_new_user.php" method="post" id="add-user">
            <div class="row row-space">
               <div class="col-md-2">
                  <label for="first_name">Firstname</label>
               </div>
               <div class="col-md-10">
                   <input type="text" class="form-control" id="first_name" name="first_name">
               </div>
            </div>
            <div class="row row-space">
               <div class="col-md-2">
                  <label for="last_name">Lastname</label>
               </div>
               <div class="col-md-10">
                   <input type="text" class="form-control" id="last_name" name="last_name">
               </div>
            </div>
            <div class="row row-space">
               <div class="col-md-2">
                  <label for="username">Username</label>
               </div>
               <div class="col-md-10">
                   <input type="text" class="form-control" id="username" name="username">
               </div>
            </div>
            <div class="row row-space">
               <div class="col-md-2">
                  <label for="email">Email</label>
               </div>
               <div class="col-md-10">
                   <input type="email" class="form-control" id="email" name="email">
               </div>
            </div>
            <div class="row row-space">
               <div class="col-md-2">
                  <label for="password">Password</label>
               </div>
               <div class="col-md-10">
                   <input type="password" class="form-control" id="password" name="password">
               </div>
            </div>
            <div class="row row-space">
               <div class="col-md-2">
                  <label for="role">Role</label>
               </div>
               <div class="col-md-10">
                   <input type="text" class="form-control" id="role" name="role">
               </div>
            </div>
           <div class="row">
             <div class="col-md-12">
                <button type="submit" class="btn btn-info custom-info" name="submit">Submit</button>
             </div>
           </div>
         </form>
      </div>
   </div>
</div>
<?php include "../includes/footer.php";?>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- Custom JS -->
<script src="resources/js/custom.js"></script>

</body>

</html>
