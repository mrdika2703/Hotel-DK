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
      <a href="" id="" class="nav-link active">
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
      <a href="../checkin" id="" class="nav-link">
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

<div class="content-wrapper"> 
   <section class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h1>DATA FASILITAS HOTEL</h1>
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
            <h3 class="card-title">Data Table Fasilitas Hotels</h3>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-between d-flex flex-row-reverse">
              <div class="form-floating mb-2 mt-3 ">
                <input type="text" class="form-control" id="cari_fasilitas_umum"  name="cari_fasilitas_umum">
                <label for="cari_fasilitas_umum">Cari Fasilitas Umum</label>
               </div> 
               <div class="form-floating mb-2 mt-3">
                  <button type="button" onclick="add_modal_fasilitas_umum()" class="btn btn-block btn-dark">Tambah Data</button>
              </div>
            </div>
            <div id="cari_nama" style="overflow-x:auto;">
             <table id="tb_kamar" class="table table-striped" style="width:100%">
              <thead>
                <tr>
                    <th>Nama Fasilitasr</th>
                    <th class="text-center">Keterangan</th>
                    <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $sql="SELECT * FROM tb_fasilitas_umum ORDER BY id DESC LIMIT 5";
                  $result= $conn->query($sql);
                  if ($result->num_rows > 0 ) {
                    while ($row = $result->fetch_assoc())
                    {
                      
                    ?>
                <tr>
                    <td><?php echo $row["nama_fasilitas"]; ?></td>
                    <td class="text-center"><?php echo $row["keterangan"]; ?></td>
                    <td class="text-center">
                      <a href="#" data-id="" class="btn btn-success" onClick="show_modal_fasilitas_umum(this.id,1)" id="<?php echo $row["id"]; ?>">Lihat</a> 
                      <a href="#" data-id="" class="btn btn-primary" onClick="show_modal_fasilitas_umum(this.id,0)" id="<?php echo $row["id"]; ?>">Edit</a>
                      <a href="#" data-id="" class="btn btn-danger" onClick="delete_fasilitas_umum(this.id)" id="<?php echo $row["id"]; ?>">Delete</a>
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
  </section>s
</div>

<!-- SCRIPT FOOTER -->

  <?php include '../bar/footer.php'; ?>
  
</div>

<!------------------------------ Script Awal Modal Tambah Fasilitas Umum ------------------------------ -->
<div class="modal fade" id="modal_tambah_fasilitas_umum">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Data Fasilitas Umum - TAMBAH</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form id="form_fu">
          <div class="mb-3 mt-3 form-floating">
            <input type="text" class="form-control" id="nama_fasilitas_umum" name="nama_fasilitas_umum">
            <label for="nama_fasilitas_umum">Nama Fasilitas</label>
          </div>
          <div class="mb-3 mt-3 form-floating">
            <textarea class="form-control" rows="9" id="ket" name="ket"></textarea>
            <label for="tipe_fasilitas">Ketrangan Fasilitas</label>
          </div>
          <div class="mb-3 mt-3">
            <label for="upload_fasilitas">Pilih Gambar :</label>
            <input type="file" class="form-control" name="upload_fasilitas" id="upload_fasilitas">        
          </div>
        </form>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="add_fasilitas_umum">Simpan</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!------------------------------ Script Akhir Modal Tambah Fasilitas Umum------------------------------ -->

<!----------------------------- Script Awal Modal Lihat Data Fasilitas Umum -------------------------------- -->
<div class="modal fade" id="lihat_data_fasilitas_umum">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Fasilitas Umum</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div id="tampil_fasilitas_umum" class="modal-body">
        
      </div>
    </div>
  </div>
</div>
<!-- SCRIPT JAVASCRIPT -->
<script src="../../assets/adminlte/plugins/jquery/jquery.min.js"></script>
<script src="../../assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/adminlte/dist/js/adminlte.min.js?v=3.2.0"></script>
<script src="../../js/jquery.min.js"></script>
<script src="../../js/bootstrap5.0.1.bundle.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){

 if (window.location.href.indexOf('index.php?id=fasilitas_kamar') > -1) {
   load_fasilitas_kamar();
 } else
 if (window.location.href.indexOf('index.php?id=fasilitas_umum') > -1) {
   load_fasilitas_umum();
 } else
 if ( (window.location.href.indexOf('index.php?id=kamar') > -1) ||
     (window.location.href.indexOf('/') > -1) ) {
 load_kamar();
 }

  /*tombol tambah(+) fasilitas*/
    $("#add_fasilitas").click(function() {
    $("#modal_tambah_fasilitas").modal('show');
  });

  /*tombol tambah(+) fasilitas umum*/
    $("#add_fasilitas_umum").click(function() {
    $("#modal_tambah_fasilitas_umum").modal('show');
  });
  
  /*Saat klik tombol Menu Kamar*/
    $("#tombol_kamar").click(function() {
    load_kamar();
  });

  /*Saat klik tombol Menu Fasilitas kamar*/
  $("#tombol_fasilitas").click(function() {
    load_fasilitas_kamar();
  });

  /*Saat klik tombol Menu Fasilitas Umum*/
  $("#tombol_fasilitas_umum").click(function() {
    load_fasilitas_umum();
  });
    
   $("#show_kamar").click(function() {
   $("#lihat_data_kamar").modal("show");
   });

   $("#show_fasilitas").click(function() {
   $("#lihat_data_fasilitas").modal("show");
   });

   $("#show_fasilitas_umum").click(function() {
   $("#lihat_data_fasilitas_umum").modal("show");
   });


function load_kamar() 
{
 var id=0;
 $.ajax({
    url: "load_kamar.php",
    method: "POST",
    data:{ids:id},
         success: function(data)
         {
           //alert(data);return;
           $("#data").html(data).refresh;
         }
       });
 }

function load_fasilitas_kamar() 
{
 var id=0;
 $.ajax({
    url: "load_fasilitas.php",
    method: "POST",
    data:{ids:id},
         success: function(data)
         {
           //alert(data);return;
           $("#data").html(data).refresh;
         }
       });
 }

function load_fasilitas_umum() 
{
 var id=0;
 $.ajax({
    url: "load_fasilitas_umum.php",
    method: "POST",
    data:{ids:id},
         success: function(data)
         {
           //alert(data);return;
           $("#data").html(data).refresh;
         }
       });
 }

});
 function add_modal_fasilitas_umum()
  {
    $("#modal_tambah_fasilitas_umum").modal('toggle');
  }

  function show_modal_fasilitas_umum(id,cek)
  {
    $("#lihat_data_fasilitas_umum").modal('toggle');
    $.ajax({
     url: "tampil_fasilitas_umum.php",
     method: "GET",
     data:{
       idp:id, cek:cek
        },
     success: function(data)
      {
        $("#tampil_fasilitas_umum").html(data).refresh;
      }
    });
  }
/*BAGIAN DELETE */
function delete_fasilitas_umum(id)
  {
    $.ajax({
     url: "delete_fasilitas_umum.php",
     method: "POST",
     data:{
            idp:id
          },
        success: function(data)
        {
        if (data=="OK") 
         {
          alert("Data Berhasil dihapus!");
          window.location.href="index.php?id=fasilitas_umum";
         } 
          if (data=="ERROR") 
           {
            alert("Data Gagal dihapus!");
           }
        }
    });
  }

  /*BAGIAN ADD */
$(function(){ 
   $("#add_fasilitas_umum").on('click', function(){
     var namafu       = $("#nama_fasilitas_umum").val();
     var ketfu        = $("#ket").val();
     var gambarfu     = $("#upload_fasilitas").val();
     var form_datafu  = new FormData(); 


   if ( (namafu=="") || (ketfu==""))
   {
        alert("Terjadi kesalahan. Ada data yang kosong!");
        return;
   }
   if (gambarfu=="")
    {
    alert("Terjadi kesalahan. Gambar kosong!");
       return;
    }
   
   var oFReader = new FileReader();
   oFReader.readAsDataURL(document.getElementById("upload_fasilitas").files[0]);
   var f = document.getElementById("upload_fasilitas").files[0];
   var fsize = f.size||f.fileSize;
   if(fsize > 2000000)
   {
    alert("Terjadi kesalahan. Gambar Besar!");
    return;
   }
   else
   {
      form_datafu.append("namafu",namafu);
      form_datafu.append("fotofu",  document.getElementById('upload_fasilitas').files[0]);
      form_datafu.append("ketfu",ketfu);
      form_datafu.append("gambarfu",gambarfu);
   
     $.ajax({
     url: "tambah_fasilitas_umum.php",
     method: "POST",
     data: form_datafu,
     contentType: false,
     cache: false,
     processData: false,
     success: function(data)
      {
        //alert(data);return;
        if (data=="OK") 
         {
          alert("Data Tersimpan!");
          document.getElementById("form_fu").reset();
          window.location.href="index.php?id=fasilitas_umum";
         } 
          if (data=="ERROR") 
           {
            alert("Data TIDAK tersimpan!");
           }
       } 

      }); 
    } 
  });
  
});

</script>

<!-- END BODY -->
</body>
</html>
