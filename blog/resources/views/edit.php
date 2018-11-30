<?php
include_once "../lib/config.php";

// the id title and content of the post to be edited passed through function from user page
$id = $_GET['edit_id'];
$title = $_GET['edit_title'];
$content = $_GET['edit_content'];

$editSql = "SELECT * FROM posts WHERE id='$id'";

$result = mysqli_query($conn, $editSql);

$row = mysqli_fetch_array($result);

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
        <h1 class="my-4">Blog / <small>CodeGorilla / Edit blog</small> </h1>
        <button class="btn btn-primary btn-pri-custom" onclick="goUserpage(<?php echo $_SESSION['id'] ?>)">My Blogs <span class="badge badge-light"><i class="fas fa-home"></i></span></button>
        <form action="../lib/edit_post.php" method="GET">
          <input name="id" style="display: none;" value="<?php echo $row['id']; ?>"/>
          <div class="card mb-4">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
              <label for="title">Update title</label>
              <input type="text" class="form-control" id="edit-title" name="edit-title" value="<?php echo $row['title']; ?>">
              <div class="card-details text-muted">
              </div>
              <p class="card-text">
                <label for="new-post">Update post</label>
               <textarea class="form-control textarea-update" type="text" id="edit-post" name="edit-post" value=""><?php echo $row['content']; ?></textarea>
              </p>
            </div>
            <div class="text-center btn-sub">
              <button type="submit" class="btn btn-info btn-custom-info" name="submit">Update</button>
            </div>
            <div class="card-footer text-muted">
            </div>
          </div>
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
   // User page function
   function goUserpage(id) {
     $.ajax({
        type: 'POST',
        url: '/blog/resources/views/user_page.php',
        data: {
        user_id: id,
        }
     });
     window.location.href = '/blog/resources/views/user_page.php?user_id=' + id;
   }
</script>


</body>

</html>
