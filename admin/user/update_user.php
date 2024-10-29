<?php
 //print_r($_POST);
 include "../../includes/koneksi.php";
 
 $idk       = $_POST['idk'];
 $nama      = $_POST['nama'];
 $password  = $_POST['password'];   
 $usname    = $_POST['usname'];
 $role      = $_POST['role'];

 $sql = "UPDATE tb_user SET username ='$nama', password='$password', tipe='$role', usname='$usname' 
         WHERE (id = '$idk')";
				
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