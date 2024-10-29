<?php
 //print_r($_POST);
 include "../../includes/koneksi.php";

          $id  = isset($_GET['idp']) ? $_GET['idp'] : NULL;
          $sql="SELECT * FROM tb_user WHERE id= $id";
          $result= $conn->query($sql);
          $row = $result->fetch_assoc();
          $username = $row["username"];
          $password = $row["password"];
          $role = $row["tipe"];
          $usname = $row["usname"];
?>
 <table class="table table-striped" style="width:100%">

  <tbody>
     <tr>
       <td>Username </td>
       <td>: <?php echo $username; ?> </td>
     </tr>
     <tr>
       <td>Password </td>
       <td>: <?php echo $password; ?> </td>
     </tr>
     <tr>
       <td>Nama </td>
       <td>: <?php echo $usname; ?> </td>
     </tr>
     <tr>
       <td>Role </td>
       <td>: <?php echo $role; ?> </td>
     </tr>

  </tbody>

 </table>

