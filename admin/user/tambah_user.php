<?php
 //print_r($_POST);
 include "../../includes/koneksi.php"; 
 $nama      = $_POST['nama'];
 $password    = md5($_POST['password']);
 $usname    = $_POST['usname'];
 $role    = $_POST['role'];


  $sql = "INSERT INTO tb_user (username, password, tipe, usname) 
			        VALUES ('$nama','$password','$role','$usname')";					
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