<?php
include_once "config.php";

if (isset($_GET['submit'])) {

   // blog id, title, content to be edited
   $id = $_GET['id'];
   $edit_title = htmlentities($_GET['edit-title']);
   $edit_content = html_entity_decode($_GET['edit-post']);

   // edit blog query
   $sql = "UPDATE posts SET title='$edit_title', content='$edit_content' WHERE id ='$id'";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header('Location: ../../index.php');
   } else {
      echo "not inserted";
   }
}
