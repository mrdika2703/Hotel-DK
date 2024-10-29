<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user"></i><?php echo "  " . " " . $_SESSION['usname']?>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-item">
              <?php 
                if($_SESSION['role'] =="resepsionis"){
                  echo "Resepsionis"; 
                  }else{
                    echo "Administrator";
                  }
              ?>
          </div>
        <div class="dropdown-divider"></div>
          <a href="../action/logout.php" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i> Keluar
          </a>
        </div>
      </li>
    </ul>
  </nav>