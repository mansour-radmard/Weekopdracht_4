<?php
session_start();
?>

 <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Blog <i class="fab fa-blogger"></i> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/blog/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <?php if ($_SESSION['logged']) {?>
          <li class="nav-item">
            <a class="nav-link" onclick="logout()" >Logout <i class="fas fa-sign-out-alt"></i></a>
          </li>
          <?php } else {?>
          <li class="nav-item">
            <a class="nav-link" href="/blog/resources/views/login_page.php">Login <i class="fas fa-user-lock"></i></a>
          </li>
          <?php }?>
        </ul>
      </div>
    </div>
  </nav>

  <script>
    function logout() {
      location.href = "/blog/resources/lib/logout.php"
    }
  </script>
