<?php
session_start();
include_once "../lib/config.php";

$id = $_GET['user_id'];

$query = "SELECT posts.id, posts.title,
         posts.content, posts.user_id, posts.date, categories.name, users.first_name, users.last_name
         FROM posts
         JOIN posts_categories
         ON posts.id = posts_categories.post_id
         JOIN users
         ON  posts.user_id = users.id
         JOIN categories
         ON posts_categories.category_id = categories.id
         WHERE posts.user_id ='$id' ORDER BY posts.date DESC;
         ";

// perfoms the mysql query on databse with given database and server configuration
$result = mysqli_query($conn, $query);

$blogs = [];

// push topics result in one array
while ($row = $result->fetch_assoc()) {
   $blogId = $row['id'];

   if (array_key_exists($blogId, $blogs)) {
      $blogs[$blogId]['categories'][] = $row['name'];
   } else {
      $blogs[$blogId] = $row;
      $blogs[$blogId]['categories'][] = $row['name'];
   }
}

// Check number of rows received from database
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
  <!-- Navigation -->
<?php include "../includes/navbar.php"?>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1 class="my-4">Blog / <small>CodeGorilla / My blogs</small> </h1><button class="btn btn-primary btn-pri-custom" onclick="goUserpage(<?php echo $_SESSION['id'] ?>)">My Blogs <span class="badge badge-light"><i class="fas fa-home"></i></span></button>
<?php
   foreach ($blogs as $key => $val) {
       ?>
      <div class="card mb-4">
         <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
         <div class="card-body">
            <h2 class="card-title"><?php echo $val['title']; ?> </h2>
            <div class="card-details text-muted">
               Posted on <?php echo $val['date']; ?> by: <?php echo $val['first_name'] . " " . $val['last_name']; ?>
            </div>
            <div class="category"> Topic:
         <?php
            foreach ($val['categories'] as $key => $value) {?>
               <div class="badge badge-pill badge-info"> <?php echo $value . " "; ?> </div>
            <?php
            }
         ?>
            </div>
            <p class="card-text"><?php echo $val['content']; ?></p>
               <?php if ($_SESSION['logged']) {?>
               <button class="btn btn-warning btn-custom" onclick="editBlog(<?php echo $val['id']; ?>, '<?php echo htmlspecialchars($val['title']); ?>', '<?php echo htmlspecialchars($val['content']); ?>')">Edit</button>
               <button class="btn btn-danger btn-custom" onclick="deleteBlog(<?php echo $val['id']; ?>)">Delete</button>
            <?php }?>
          </div>
          <div class="card-footer text-muted">
            Author: <?php echo $val['first_name'] . " " . $val['last_name']; ?>
          </div>
        </div>
   <?php
   }
?>
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
<!-- Custom JS -->
<script src="public/js/custom.js"></script>

<!-- Ajax call function to delete a blog post-->
<script>
    // Ajax call function, calls php delete script with the id of the post as a parameter in the function
   function deleteBlog(id) {
      if (confirm('Are you sure to delete this blog?')) {
         $.ajax({
            type: 'POST',
            url: '/blog/resources/lib/delete_post.php',
            data: {
               delete_id: id
            }
         });
      }
      location.reload(); // reload the page after delete is completed
   }

   // Edit blog post function
   function editBlog(id, title, content) {
      $.ajax({
         type: 'POST',
         url: '/blog/resources/views/edit.php',
         data: {
            edit_id: id,
            edit_title: title,
            edit_content: content,
         }
      });
      window.location.href = '/blog/resources/views/edit.php?edit_id=' + id;
    }

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
