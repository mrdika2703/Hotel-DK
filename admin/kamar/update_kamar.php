<?php
 //print_r($_POST);
 include "../../includes/koneksi.php";
 
 $idk       = $_POST['idk'];
 $nama      = $_POST['nama'];
 $jkamar    = $_POST['jkamar'];
 $harga     = $_POST['hkamar'];

 $sql = "UPDATE tb_kamar SET nama_kamar ='$nama', total_kamar='$jkamar', harga='$harga' 
         WHERE (id_kamar = '$idk')";
				
            if($conn->query($sql) == 1)
            {
             $data = "OK";
             echo $data;               
			}
			else
			{
			 $data = "ERROR";
			 echo $data;
			}
?>