<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info shadow">
  <div class="container">
    <a class="navbar-brand h1 js-scroll-trigge" href="./">
      <img src="assets/images/logo.jpg" width="30" height="30" class="d-inline-block align-top img-circle" alt="Logo">
        <?php echo $_SESSION['hotel_judul'] ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="room.php" id="">Booking</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="about.php" id="">About</a></li>      
      </ul>
    </div>
  </div>
</nav>