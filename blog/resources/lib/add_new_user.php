<?php
// Server and database configuration
include_once "config.php";

// If new post is submitted and fields are not empty
if (isset($_POST["submit"])) {

   $first_name = mysqli_real_escape_string($conn, $_POST["first_name"]);
   $last_name = mysqli_real_escape_string($conn, $_POST["last_name"]);
   $username = mysqli_real_escape_string($conn, $_POST["username"]);
   $email = mysqli_real_escape_string($conn, $_POST["email"]);
   $password = mysqli_real_escape_string($conn, $_POST["password"]);
   $role = mysqli_real_escape_string($conn, $_POST["role"]);

   $query = "INSERT INTO users (`first_name`, `last_name`, `username`, `email`, `password`, `role`) VALUES ('$first_name', '$last_name', '$username', '$email', '$password', '$role')";

   // perfoms the mysql query on databse with given database and server configuration
   $result = mysqli_query($conn, $query);

    // In case new post inserted into the database redirect back to the index
   if ($result) {
      header('Location: ../views/admin.php');
   } else {
      echo 'Not inserted';
   }
}
