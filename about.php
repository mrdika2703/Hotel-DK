<?php
  include "includes/koneksi.php";
  include "action/hotel_name.php";
  include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $_SESSION['hotel_judul'] ?></title>
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
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="room.php" id="">Booking</a></li>
        <li class="nav-item active"><a class="nav-link js-scroll-trigger" href="about.php" id="">About</a></li>      
      </ul>
    </div>
  </div>
</nav>
<?php 
        include 'banner.php';
?>

    <br>

    <div class="container content">
        <div class="card mb-5">
            <div class="card-body">
                <div class="text-center">
                    <p>HotelDK adalah hotel berfasiitas premium yang memiliki harga terjangkau untuk anda yang ingin bersinggah sekaligus berliburan. Dengan 10 menit anda bisa menuju ke pantai yang indah atau kami juga menyediakan kolam renang mewah dengan kedalaman sampai 3M dan untuk anak-anak juga terdapat kolam renang khusus.</p>

                    <p>Dengan harga terjangkau anda bisa mendapatkan fasilitas kamar yang memanjakan anda. Mulai dari sarapan gratis, akses internet 24 jam dengan kecepatan sampai 1GBps, Restaurant mewah dengan pemandangan sunrise yang indah. Jangan takut kehabisan karena kami memiliki 200 kamar dengan fasilitas unggul yang bisa anda nikmati 24 jam.</p>

                    <p>HotelDK terbuka untuk anda 24 jam dan siap melayani anda kapan pun selama anda berada di HotelDK. Untuk anda yang berkeluarga jangan takut karena kami memiliki 4 jenis kamar, Deluxe siap melayani secara istimewa, Family menyediakan kasur yang besar, Twin dengan 2 kasur, dan Single dengan harga terjangkau dan fasilitas yang memanjakan. Segera pesan hotel anda dan buat diri anda termanjakan.</p>
                </div>
            </div>
        </div>
    </div>

    <br>
    <h1 class="text-center">Perkenal kan CEO kami</h1>
    <br>    
    <div class="container p-0">
        <div class="card">
        <div class="card-body">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-2 col-lg-3">
                <img src="assets/images/CEO.jpg" class="img-fluid h-auto" />
                    </div>
            <div class="col-md-2 col-lg-4 team-Info-agileits">
                <h4>Wahyu Adam Anandika</h4>
                <span>XII RPL</span>
                <p>Saya berencana kuliah di ITS dan memilih Jurusan Teknik Informatika karena saya masih minat pada jurusan di SMK yaitu RPL. Saya tinggal di Dsn. Juwet Ds. Dukuhdimoro Kec. Mojoagung. Kab. Jombang Jawa Timur.</p>
                <br>
                <br>
                <div class="footer">
                        <a href="https://www.instagram.com/wahyu_adam_dk" class="btn btn-warning bi-instagram"></a>
                        <a href="https://www.facebook.com/Fairerandika.Gaming" class="btn btn-primary bi-facebook"></a>
                        <a href="https://twitter.com/Fairerandika1" class="btn btn-info bi-twitter"></a>
                </div>                          
            </div>
            </div>
        </div>
        </div>    
        </div>
    </div>

<?php include 'footer.php'; ?>

</body>
</html>








<!-- <p> <b>Hotel Anaya</b> terkenal dengan keramahan kelas dunia, desain hotel yang mengagumkan dan standar layanan yang tak tertandingi di Bali dan Jakarta, AYANA adalah resort bintang lima yang pertama di Pantai Waecicu, Pulau Flores, hanya dengan satu jam penerbangan dari Pulau Bali yang sangat indah.
        AYANA Komodo Resort, Waecicu Beach memiliki 13 suites dan 192 kamar tamu yang premium. Terinspirasi dengan cahaya, kenyamanan dan ruang terbuka, setiap kamar yang kontemporer menawarkan pemandangan laut yang menawan dengan jendela besar untuk menikmati cahaya keemasan dari matahari yang terbenam di belakang Pulau Kukusan.
        
        Berlokasi di salah satu pulau berbukit dan indah dari kepulauan Indonesia, terdapat beragam agama, bahasa dan pemandangan yang luar biasa yang berpadu dengan laut berwarna biru kristal dan pantai dengan pasir putih yang asli.
    </p> -->