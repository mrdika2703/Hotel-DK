<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"  data-ride="carousel">
    <!-- INDIKATOR CAROUSEL -->
   <div class="carousel-inner">
        <?php
            $aktif="active";
            $sql = "SELECT * FROM tb_fasilitas_umum ORDER BY id DESC LIMIT 5";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              //membaca data pada baris tabel
              while($row = $result->fetch_assoc()) {
                $nf= $row["nama_fasilitas"];
                $gambar= $row["gambar"];
                $ket = $row["keterangan"];
        ?>
              <div class="carousel-item <?php echo $aktif;?> ">
                <img src="<?php echo $gambar; ?>" class="img-fluid h-auto" style="width:100%">
                  <div class="carousel-caption">
                    <h3><?php echo $nf; ?></h3>
                    <p><?php echo $ket; ?></p>
                  </div>
              </div>
            
        <?php
            $aktif="";
              }
            } 
        ?>

   </div>
</div>