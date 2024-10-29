<?php
  include "includes/koneksi.php";
  include "action/hotel_name.php";
  include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $_SESSION['hotel_judul'] ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico" />
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info shadow">
  <div class="container">
    <a class="navbar-brand h1 js-scroll-trigge" href="./">
      <img src="hotel.png" width="30" height="30" class="d-inline-block align-top img-circle" alt="Logo">
        <?php echo $_SESSION['hotel_judul'] ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a class="nav-link js-scroll-trigger" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="room.php" id="">Booking</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="about.php" id="">About</a></li>      
      </ul>
    </div>
  </div>
</nav>

<?php include 'banner.php'; ?>

<?php include 'home_content.php'; ?>

<?php include 'footer.php'; ?>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap5.0.1.bundle.min.js"></script>
<script src="crud_js/pesan.js"></script>

<!------------------------------ AWAL KONDISI CODING JAVASCRIPT-------------------------------- -->
<script>

</script>
<!------------------------------ AWAL KONDISI CODING JAVASCRIPT-------------------------------- -->

</body>
<!-- END BODY -->
</html>
