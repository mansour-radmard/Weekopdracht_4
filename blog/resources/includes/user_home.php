<?php
session_start();
include_once "../lib/config.php";
?>

<button class="btn btn-primary btn-pri-custom" onclick="goUserpage(<?php echo $_SESSION['id'] ?>)">My Blogs <span class="badge badge-light"><i class="fas fa-home"></i></span>

<script>

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
