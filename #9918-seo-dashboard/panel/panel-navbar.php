<nav class="navbar navbar-expand-lg navbar-dark " id="navbar2cms">
  <div class="panel-navbar-header">
    <h2>Panel Menü</h2>
  </div>
  
    <div class="toggle-pos ms-auto">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavCMS"  aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        </div>
  <div class="collapse navbar-collapse" id="navbarNavCMS">
    <ul class="navbar-nav">
      <li class="nav-item<?php if($file == 'dashboard_blog.php') {echo ' active';} ?>">
        <a class="nav-link" href="dashboard_blog.php">Blog Yöneticisi</a>
      </li>
      <li class="nav-item<?php if($file == 'dashboard.php') {echo ' active';} ?>">
        <a class="nav-link" href="dashboard.php">Kullanicilar</a>
      </li>
      <li class="nav-item<?php if($file == 'dashboard_comments.php') {echo ' active';} ?>">
        <a class="nav-link" href="dashboard_comments.php">Yorumlar</a>
      </li>
      </ul>
      <ul class="navbar-nav ms-auto">
      <li class="nav-item<?php if($file == 'index.phpp') {echo ' active';} ?>">
        <a class="nav-link" href="index.php">Panel Giriş</a>
      </li>
    </ul>
  </div>
</nav>