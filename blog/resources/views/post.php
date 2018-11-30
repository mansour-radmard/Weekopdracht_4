<?php
session_start();
include "../lib/config.php";

$sql = "SELECT * FROM categories ORDER BY id ASC";

$result = mysqli_query($conn, $sql);

$resultCheck = mysqli_num_rows($result);

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
        <h1 class="my-4">Blog / <small>CodeGorilla / Add new blog</small> </h1>
        <form action="../lib/send_post.php" method="post">
            <input name="id" value="<?php echo $_SESSION['id']; ?>" hidden>
            <div class="form-group">
               <label for="title">Blog title</label>
               <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
               <label for="new-post">Post</label>
               <textarea class="form-control textarea-new-post" type="text" id="new-post" name="new-post"></textarea>
            </div>
            <div class="form-check">
            <h6>Select category</h6>
               <div class="row">
            <?php
               if ($resultCheck > 0) {
                  while ($row = mysqli_fetch_assoc($result)) { ?>
                  <div class="col-lg-6">
                     <ul class="list-unstyled mb-0">
                        <li>
                           <input type="checkbox" class="form-check-input" id="cat_name" name="cat_name[]" value="<?php echo $row['id']; ?>">
                           <label class="form-check-label" for="cat_name"><?php echo $row['name']; ?></label>
                        </li>
                     </ul>
                  </div>
                  <?php
                  }
               }
            ?>
               </div>
            </div>
               <button type="submit" class="btn btn-info btn-space-top" name="submit">Submit</button>
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
</div><br />
<?php include "../includes/footer.php";?>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- TinyMCE rich text editor -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.0/tinymce.min.js"></script>
<!-- Custom JS -->
<script src="../../public/js/custom.js"></script>

<script>
   // logout function
   function logout() {
      location.href = "/blog/resources/lib/logout.php"
   }
</script>

</body>

</html>
