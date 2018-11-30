<?php
// Server and database configuration
include_once "config.php";

// When new post is submitted and fields are not empty
if (isset($_POST["submit"]) && !empty($_POST["title"]) && !empty($_POST["new-post"]) && !empty($_POST["cat_name"])) {

   $title = mysqli_real_escape_string($conn, $_POST["title"]);
   $new_post = mysqli_real_escape_string($conn, $_POST["new-post"]);
   $id = $_POST["id"];
   $cat_ids = $_POST["cat_name"];

   $query = "INSERT INTO posts (`title`, `content`, `user_id`) VALUES ('$title', '$new_post', '$id')";

   $result = mysqli_query($conn, $query);

   // Get the ID of inserted blog post
   $last_id = $conn->insert_id;

   // Loop through each array item or category id's received from checkboxes
   foreach ($cat_ids as $cat_id) {

      // insert query to link new post with the categories to which it belongs
      $sql = "INSERT INTO posts_categories (`post_id`, `category_id`) VALUES ('$last_id', $cat_id)";

      $insert = mysqli_query($conn, $sql);

         if ($insert) {
            echo 'inserted';
         } else {
            echo 'Not inserted';
         }
   }

    // In case new post inserted into the database redirect back to the index
   if ($result) {
      header('Location: ../../index.php');
   } else {
      echo 'Not inserted';
   }
}
