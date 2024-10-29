<h1 class="text-center my-4"><b>Fasilitas Hotel</b></h1>

 <div class="container">
    <div class="row justify-content-center align-item-center text-center">
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
        <div class="col-md-4" style="margin-bottom: 30px;">
            <div class="pop-up">
            <a class="card card-light" href="room.php">
                <div class="card-header text-center">
                    <b><?php echo $nf ; ?></b>
                </div>
                <div class="card-body p-0">
                    <img class="img-fluid h-auto" src="<?php echo $gambar ; ?>" alt="Gambar">
                    <p><?php echo $ket ; ?> </p>
                </div>
            </a>
            </div>
        </div>
                            <?php 
                      }
                    }
                    ?>
    </div>
</div>

<br>
<br>

<h1 class="text-center my-4"><b>Jenis Kamar</b></h1>

<div class="container">
    <div class="row justify-content-center align-item-center text-center">
                  <?php
     $sql = "SELECT * FROM tb_fasilitas_kamar ORDER BY id DESC LIMIT 5";
      $result = $conn->query($sql);
       if ($result->num_rows > 0) {
       //membaca data pada baris tabel
        while($row = $result->fetch_assoc()) {
         $idk= $row["id_kamar"];
         $gambar= $row["gambar"];
         $fas = $row["fasilitas"];

         $sql2    = "SELECT nama_kamar FROM tb_kamar WHERE id_kamar= '$idk'";
         $sql3    = "SELECT total_kamar FROM tb_kamar WHERE id_kamar= '$idk'";
         $result2 = $conn->query($sql2);
         $result3 = $conn->query($sql3);
         $row2    = $result2->fetch_assoc();
         $row3    = $result3->fetch_assoc();
   ?>
        <div class="col-md-5" style="margin-bottom: 30px;">
            <div class="card">
            <a class="card-light" data-bs-toggle="collapse" href="#collapseX<?php echo $idk; ?>" role="button" aria-expanded="false" aria-controls="collapseX<?php echo $idk; ?>">
                <div class="card-header text-center">
                    <b><?php echo $row2["nama_kamar"]; ?> :</b>
                </div>
                <div class="card-body p-0">
                    <img class="img-fluid h-auto" src="<?php echo $gambar; ?>" alt="Card image">
                </div>
            </a>
                        <div class="collapse multi-collapse" id="collapseX<?php echo $idk; ?>">
                        <div class="card card-body">
                            <?php echo "Jumlah Kamar : " . $row3["total_kamar"];?>
                            <hr>
                            <h6>Fasilitas</h6>
                            <div>
                                <?php echo $fas; ?>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
                            <?php 
                      }
                    }
                    ?>
    </div>
</div>