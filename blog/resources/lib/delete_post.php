<?php
include_once "config.php"; // Server and database configuration

$id = $_POST['delete_id']; // id of the post to be deleted

$deleteSqlCat = "DELETE FROM posts_categories WHERE post_id='$id'";

$resultCat = mysqli_query($conn, $deleteSqlCat);

$deleteSql = "DELETE FROM posts WHERE id='$id'"; // Delete post mysql query

// perfoms the mysql query on databse with given database and server configuration
$result = mysqli_query($conn, $deleteSql);

// Check if the post was deleted, if not give error
if ($result && $resultCat) {
   echo "Post was deleted";
} else {
   echo "Coud not delete the post";
}
