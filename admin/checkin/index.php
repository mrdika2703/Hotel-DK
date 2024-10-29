<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../../assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/adminlte/dist/css/adminlte.min.css?v=3.2.0">
  <script nonce="61bd59ad-7e7a-4398-b900-881e8d6e9e0d">(function(w,d){!function(a,e,t,r,z){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]};var s=e.getElementsByTagName("title")[0];s&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.dataLayer=a.dataLayer||[],a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.dataLayer.push({"zaraz.start":(new Date).getTime()}),a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r);z.defer=!0,z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);
  </script>
  <link rel="shortcut icon" type="image/x-icon" href="../../image/favicon.ico" />
  <link href="../../css/bootstrap5.0.1.min.css" rel="stylesheet">
      <?php
        session_start();
        include '../../includes/koneksi.php';
        if($_SESSION['status'] != "admin_login"){
            header("location:../../login.php?alert=belum_login");
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

  <?php include '../bar/navbar2.php'; ?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="#" class="brand-link">
    <img src="../../image/hotel.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
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
      <a href="../" id="" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="../kamar" id="" class="nav-link">
        <i class="nav-icon fas fa-bed"></i>
        <p>Kamar</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="../fasilitas-kamar" id="" class="nav-link">
        <i class="nav-icon fas fa-door-closed"></i>
        <p>Fasilitas Kamar</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="../fasilitas-umum" id="" class="nav-link">
        <i class="nav-icon fas fa-hotel"></i>
        <p>Fasilitas Hotel</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="../booking" id="" class="nav-link">
        <i class="nav-icon fas fa-address-book"></i>
        <p>Booking</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="" id="" class="nav-link active">
        <i class="nav-icon fas fa-user-check"></i>
        <p>Checkin</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="../checkout" id="" class="nav-link">
        <i class="nav-icon fas fa-money-check"></i>
        <p>Checkout</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="../user" id="" class="nav-link">
        <i class="nav-icon fas fa-users"></i>
        <p>User</p>
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
           <h1>DATA BOOKING</h1>
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
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Table Booking Kamar</h3>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-between d-flex flex-row-reverse">
             <div class="form-floating mb-2 mt-3 ">
                <input type="text" class="form-control" id="carinama"  name="carinama">
                <label for="carinama">Cari Nama Pemesan</label>
              </div> 
              <div class="form-floating mb-2 mt-3">
                <input type="date" class="form-control" id="tgl"  name="tgl">
                <label for="tgl">Cari Tanggal Checkin</label>
             </div>
            </div>
            <br>
            <div id="cari_nama" style="overflow-x:auto;">
             <table id="tb_kamar" class="table table-striped" style="width:100%">
              <thead>
                <tr>
                    <th>Status</th>
                    <th>Nama Tamu</th>
                    <th>Tanngal Pesan</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Kamar</th>
                    <th>Jumlah Kamar</th>
                    <th class="text-center">Pembayaran</th>
                    <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $sql="SELECT * FROM tb_pelanggan JOIN tb_kamar ON tb_pelanggan.id_kamar = tb_kamar.id_kamar WHERE status= '1' ORDER BY tb_pelanggan.tgl_pesan DESC LIMIT 20";
                  $result= $conn->query($sql);
                  if ($result->num_rows > 0 ) {
                    while ($row = $result->fetch_assoc())
                    {
                      if ($row["status"]=="1"){
                        $status="Selesai Checkin"; $warna="badge bg-info";
                        } if ($row["status"]=="0"){
                          $status="Dalam Proses"; $warna="badge bg-warning";
                        } if ($row["status"]=="2"){
                          $status="Checkout"; $warna="badge bg-success";
                            } else if ($row["status"]==""){$status="Batal"; $warna="badge bg-danger";}
                ?>
                <tr>
                    <td><span class="<?php echo $warna; ?>"><?php echo $status;  ?></span></td>
                    <td><?php echo $row["nama_tamu"]; ?></td>
                    <td><?php echo $row["tgl_pesan"]; ?></td>
                    <td><?php echo $row["checkin"]; ?></td>
                    <td><?php echo $row["checkout"]; ?></td>
                    <td><?php echo $row["nama_kamar"]; ?></td>
                    <td class="text-center"><?php echo $row["jml_kamar"]; ?></td>
                    <td class="text-center"><?php echo $row["payments"]; ?></td>
                    <td><a href="#" data-id="" class="btn btn-success" onClick="show_modal_reservasi(this.id)" id="<?php echo $row["id"]; ?>">Lihat</a> 
                        <a href="#" data-id="" class="btn btn-primary" onClick="check_modal_reservasi(this.id)" id="<?php echo $row["id"]; ?>">Proses</a>
                    </td>
                </tr>
                <?php
                    }
                  } 
                ?>
              </tbody>
             </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!------------------------------ Script Awal Modal Lihat Reservasi------------------------------ -->
<div class="modal fade" id="modal_lihat_reservasi">
  <div class="modal-dialog">
    <div class="modal-content">
       <input type="text" id="idpelanggan" value="3" hidden>   
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title text-center">Data Tamu</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div id="pelanngan" class="modal-body">
      
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <p class="text-center">Design by <?php echo $judul ?></p>
      </div>

    </div>
  </div>
</div>
<!------------------------------ Script Akhir Modal Lihat Reservasi ------------------------------ -->

<!----------------------------- Script Awal Modal Check Reservasi -------------------------------- -->
<div class="modal fade" id="modal_check_reservasi">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Reservasi</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-floating mt-2 mb-2">
         <select class="form-select mt-3" id="proses" name="proses">
           <option value="2"> Checkout </option> 
           <option value="3"> Batal </option>   
          </select>
           <label for="idkamar">Proses</label>
         </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="id_proses" >Proses</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!----------------------------- Script Akhir Modal Check Reservasi -------------------------------- -->


<!-- SCRIPT FOOTER -->
  
  <?php include '../bar/footer.php'; ?>

</div>

<!-- SCRIPT JAVASCRIPT -->
<script src="../../assets/adminlte/plugins/jquery/jquery.min.js"></script>
<script src="../../assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/adminlte/dist/js/adminlte.min.js?v=3.2.0"></script>
<script src="../../js/jquery.min.js"></script>
<script src="../../js/bootstrap5.0.1.bundle.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
 load_table();

 function load_table() 
 {
  var id=0;
  $.ajax({
     url: "load_table.php",
     method: "POST",
     data:{ids:id},
          success: function(data)
          {
            //alert(data);return;
            $("#data_table").html(data).refresh;
          }
        });
  }

  $("#id_proses").click(function(){
    var proses    = $("#proses").val();
    var idproses  = $("#id_proses").val();

     $.ajax({
     url: "proses_check.php",
     method: "POST",
     data:{ids:idproses, proses:proses},
          success: function(data)
          {
           if (data=="OK") 
            {
              alert("BERHASIL DIUBAH!");
              window.location.href="index.php";
            } 
             if (data=="ERROR") 
              {
               alert("GAGAL DIUBAH!")
              }
          }
        });
  });

});


function check_modal_reservasi(id)
  {
    document.getElementById("id_proses").value=id;
    $("#modal_check_reservasi").modal("show");
  }

  function show_modal_reservasi(id)
  {
    $("#modal_lihat_reservasi").modal('toggle');
    $.ajax({
     url: "tampil_pelanngan.php",
     method: "GET",
     data:{
       idp:id
        },
     success: function(data)
      {
        //alert(data);return;
        $("#pelanngan").html(data).refresh;
        //$("#modal_show_reservasi").modal("show");
      }
    });
  }

  $('#carinama').keyup(function(){
  var kata = $("#carinama").val();
  $.ajax({
     url: "cari_nama.php",
     method: "POST",
     data:{kata:kata},
          success: function(data)
          {
            //alert(data);return;
            $("#cari_nama").html(data).refresh;
          }
        });
});

$(document).ready(function(){
    var tgl = document.getElementById('tgl');     
        tgl.valueAsDate = new Date();
        
        $("#tgl").on("change",function(){
            tanggal = tgl.value;
            //console.log(this.value);
            $.ajax({
            url: "cari_tanggal.php",
            method: "POST",
            data:{tanggal:tanggal},
              success: function(data)
              {
                //alert(data);return;
                $("#cari_nama").html(data).refresh;
              }
            });
        });
});
</script>

<!-- END BODY -->
</body>
</html>
