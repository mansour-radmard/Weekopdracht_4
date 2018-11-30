<?php
// Server and database configuration
include_once "config.php";

// When new post is submitted and fields are not empty
if (isset($_POST["submit"]) && !empty($_POST["new_cat"])) {

   $cat = mysqli_real_escape_string($conn, $_POST["new_cat"]);

   $query = "INSERT INTO categories (`name`) VALUES ('$cat')";

    // perfoms the mysql query on databse with given database and server configuration
   $result = mysqli_query($conn, $query);

    // In case new post inserted into the database redirect back to the index
   if ($result) {
        header('Location: ../../index.php');
   } else {
        echo 'Not inserted';
   }
}
