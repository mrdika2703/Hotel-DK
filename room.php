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
        <li class="nav-item active"><a class="nav-link js-scroll-trigger" href="room.php" id="">Booking</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="about.php" id="">About</a></li>      
      </ul>
    </div>
  </div>
</nav>

<?php 
    include 'banner.php'; 
?>
<div class="container">
    <form class="row bg-white py-4 px-2 form-pesan border shadow">
        <div class="col-md">
            <div class="input-group">
                <div class="input-group-prepend">
                    <label for="masuk" class="input-group-text bg-white border-0"> Check In</label>
                </div>
                <input type="date" id="masuk" name="masuk" class="form-control rounded" placeholder="Check In">
            </div>
        </div>
        <div class="col-md">
            <div class="input-group">
                <div class="input-group-prepend">
                    <label for="keluar" class="input-group-text bg-white border-0"> Check Out</label>
                </div>
                <input type="date" id="keluar" name="keluar" class="form-control rounded" placeholder="Check Out">
            </div>
        </div>
        <div class="col-md-3">
            <div class="input-group">
                <div class="input-group-prepend">
                    <label for="jkamar" class="input-group-text bg-white border-0">Jumlah Kamar</label>
                </div>
                <input type="number" id="jkamar" value="1" name="jkamar" class="form-control rounded" maxlength="3">
            </div>
        </div>
    </form>
</div>

<br>

<div class="container">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Silahkan Memesan Kamar Anda</h3>
        </div>
        <form id="form_pesan">
        <div class="card-body">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" id="nama"  name="nama" placeholder="Nama Lengkap Sesuai KTP">
            </div>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-bookmark"></i></span>
                </div>
                <input type="number" class="form-control" id="nik"  name="nik" placeholder="NIK Sesuai KTP">
            </div>
            <br>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                </div>
                <input type="number" class="form-control" id="hp" name="hp" placeholder="Nomor Telepon">
            </div>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="tamu" name="tamu" placeholder="Nama Pemesan">
            </div>
            <div class="form-group">
                <label>Pilih Jenis Kamar Anda</label>
                <select class="form-control" id="idkamar" name="idkamar">
                    <?php
                    $sql = "SELECT * FROM tb_kamar";
                    $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                      //membaca data pada baris tabel
                      while($row = $result->fetch_assoc()) {
                  ?>
                    <option value="<?php echo $row["id_kamar"]; ?>"> <?php echo $row["nama_kamar"]; ?> | <?php echo "Rp. " . (number_format($row["harga"])) . " Per hari"; ?></option>                 
                  <?php 
                    }
                   }
                  ?>
                </select>
            </div>
            <div class="form-group">
                <label>Pilih Jenis Pembayaran</label>
                <select class="form-control" id="payments" name="payments">
                 
                    <option value="Bayar di Tempat"> Bayar Di Tempat </option> 
                    <option value="Transfer"> Transfer </option>                

                </select>
            </div>
            <br> 
            <button type="button" id="konfirmasi" class="btn btn-info">Konfirmasi Pemesanan</button>
        </div>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap5.0.1.bundle.min.js"></script>
<script src="crud_js/pesan.js"></script>
<script>


</script>
</body>
</html>