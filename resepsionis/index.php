<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../assets/adminlte/dist/css/adminlte.min.css?v=3.2.0">
    <script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
  <script nonce="61bd59ad-7e7a-4398-b900-881e8d6e9e0d">(function(w,d){!function(a,e,t,r,z){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]};var s=e.getElementsByTagName("title")[0];s&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.dataLayer=a.dataLayer||[],a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.dataLayer.push({"zaraz.start":(new Date).getTime()}),a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r);z.defer=!0,z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);
  </script>
  
  <link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico" />
  <link href="../css/bootstrap5.0.1.min.css" rel="stylesheet">
      <?php
        session_start();
        include '../includes/koneksi.php';
        if($_SESSION['status'] != "resepsionis_login"){
            header("location:../login.php?alert=belum_login");
        }
        $sql = "SELECT * FROM setting_name ORDER BY id DESC LIMIT 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $judul= $row["judul"];
        ?>

    <title>Admin - <?php echo $judul ?></title>

        
</head>
<body class="sidebar-mini" style="height: auto;">
<div class="wrapper">

  <?php include 'bar/navbar.php'; ?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="#" class="brand-link">
    <img src="../image/hotel.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"><b><?php echo $judul ?></b></span>
  </a>
<?php 
  }
    }
?>
<div class="sidebar">
<nav class="mt-3">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
      <a href="" id="" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="booking" id="" class="nav-link">
        <i class="nav-icon fas fa-address-book"></i>
        <p>Booking</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="checkin" id="" class="nav-link">
        <i class="nav-icon fas fa-user-check"></i>
        <p>Checkin</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="checkout" id="" class="nav-link">
        <i class="nav-icon fas fa-money-check"></i>
        <p>Checkout</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="fasilitas-kamar" id="" class="nav-link">
        <i class="nav-icon fas fa-door-closed"></i>
        <p>Fasilitas Kamar</p>
      </a>
    </li>
</ul>
</nav>

</div>

</aside>

<div class="content-wrapper" id=""> 
    <section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1>STATISTIK HOTEL</h1>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><?php echo $judul ?></li>
           </ol>
         </div>
       </div>
     </div>
   </section>
  
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>
                <?php
                $jumlah_teknik = mysqli_query($conn,"select * from tb_pelanggan");
                echo mysqli_num_rows($jumlah_teknik);
                ?>
              </h3>
              <p>Booking</p>
            </div>
            <div class="icon">
              <i class="fas fa-address-book">
                
              </i>
            </div>
            <a href="booking" class="small-box-footer">
              Cek Selengkapnya
              <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>
                <?php
                $jumlah_teknik = mysqli_query($conn,"select * from tb_kamar");
                echo mysqli_num_rows($jumlah_teknik);
                ?>
              </h3>
              <p>Jenis Kamar</p>
            </div>
            <div class="icon">
              <i class="fas fa-bed">
                
              </i>
            </div>
            <a href="kamar" class="small-box-footer">
              Cek Selengkapnya
              <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>
                <?php
                $jumlah_teknik = mysqli_query($conn,"select * from tb_fasilitas_umum");
                echo mysqli_num_rows($jumlah_teknik);
                ?>
              </h3>
              <p>Fasilitas Hotel</p>
            </div>
            <div class="icon">
              <i class="fas fa-hotel">
              </i>
            </div>
            <a href="" class="small-box-footer">
              Admin
              <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
      </div>

      <section class="content-header">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1>STATISTIK BOOKING</h1>
         </div>
       </div>
      </section>

      <div class="row col-md-12">
        <div class="col-sm-6">
          <canvas id="pieChart" style="width:100%;max-width:700px"></canvas>
        </div>
        <div class="col-sm-6">
          <canvas id="barChart" style="width:100%;max-width:700px"></canvas>
        </div>
      </div>

    </div>
  </section>
</div>

<!-- SCRIPT FOOTER -->

  <?php include 'bar/footer.php'; ?>
  
</div>

<script>
  var ctx = document.getElementById("pieChart").getContext('2d');
  var pieChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["Belum Checkin", "Sudah Checkin", "Checkout"],
      datasets: [{
        label: 'Statistic Booking',
        data: [
        <?php 
        $jumlah_teknik = mysqli_query($conn,"select * from tb_pelanggan where status='0'");
        echo mysqli_num_rows($jumlah_teknik);
        ?>, 
        <?php 
        $jumlah_ekonomi = mysqli_query($conn,"select * from tb_pelanggan where status='1'");
        echo mysqli_num_rows($jumlah_ekonomi);
        ?>, 
        <?php 
        $jumlah_fisip = mysqli_query($conn,"select * from tb_pelanggan where status='2'");
        echo mysqli_num_rows($jumlah_fisip);
        ?>, 
        <?php 
        ?>
        ],
        backgroundColor: [
        '#dc3545',
        '#17a2b8',
        '#28a745'
        ],
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true
          }
        }]
      }
    }
  });

  var ctx = document.getElementById("barChart").getContext('2d');
  var barChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Belum Checkin", "Sudah Checkin", "Checkout"],
      datasets: [{
        label: 'Statistic Booking',
        data: [
        <?php 
        $jumlah_teknik = mysqli_query($conn,"select * from tb_pelanggan where status='0'");
        echo mysqli_num_rows($jumlah_teknik);
        ?>, 
        <?php 
        $jumlah_ekonomi = mysqli_query($conn,"select * from tb_pelanggan where status='1'");
        echo mysqli_num_rows($jumlah_ekonomi);
        ?>, 
        <?php 
        $jumlah_fisip = mysqli_query($conn,"select * from tb_pelanggan where status='2'");
        echo mysqli_num_rows($jumlah_fisip);
        ?>, 
        <?php 
        ?>
        ],
        backgroundColor: [
        '#dc3545',
        '#17a2b8',
        '#28a745'
        ],
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true
          }
        }]
      }
    }
  });

</script>
<script src="../assets/adminlte/plugins/jquery/jquery.min.js"></script>
<script src="../assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/adminlte/dist/js/adminlte.min.js?v=3.2.0"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap5.0.1.bundle.min.js"></script>

</body>
</html>
