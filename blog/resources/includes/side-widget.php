<?php
session_start();
?>

<!-- Admin / user panel -->
<div class="card my-4">
   <h5 class="card-header">
   <?php if ($_SESSION['logged'] && $_SESSION['role'] == $row = 'admin') {
            echo "Admin panel";
         } else {
            echo "User panel";
         }
   ?>
   </h5>
   <div class="card-body user-panel">
   <?php if ($_SESSION['logged']) { ?>
            <h6 id="name">
               <i class="fas fa-user"></i> <?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?>
            </h6>
         <?php
         }
   ?>
   <h6 id="date">
      <i class="far fa-calendar-alt"></i> <?php echo "Today is" . " " . date("d F Y"); ?>
   </h6>
   <?php if ($_SESSION['logged']) { ?>
            <h6>
               <a href="/blog/resources/views/post.php"><i class="fas fa-plus-circle"></i> Add new post </a>
            </h6>
         <?php
         }
   ?>
   <?php if ($_SESSION['logged']) {?>
            <h6>
               <a href="/blog/resources/views/new_cat.php"><i class="fas fa-plus-square"></i> Add new category </a>
            </h6>
         <?php
         }
   ?>
   <?php if ($_SESSION['logged'] && $_SESSION['role'] == $row = 'admin') { ?>
            <h6>
               <a href="/blog/resources/views/admin.php"><i class="fas fa-users"></i>Blog users </a>
            </h6>
         <?php
         }
   ?>
   </div>
</div>
