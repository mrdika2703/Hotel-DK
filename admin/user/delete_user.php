<?php
 include "../../includes/koneksi.php"; 
    $id   = $_POST['idp'];
    $sql = "DELETE FROM tb_user WHERE id = '$id'";        
            if ( ($conn->query($sql)==1) )
            {
             $data = "OK";
             echo $data;
		    }
		    else{
            $data = "ERROR";
            echo $data;
        }
?>