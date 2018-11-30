<?php
include_once "config.php"; // Server and database configuration

$id = $_POST['delete_id']; // id of the user to be deleted

$deleteSql = "DELETE FROM users WHERE id='$id'"; // Delete user mysql query

// perfoms the mysql query on databse with given database and server configuration
$result = mysqli_query($conn, $deleteSql);
