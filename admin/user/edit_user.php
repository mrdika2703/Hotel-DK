<?php
 //print_r($_POST);
 include "../../includes/koneksi.php";

          $id  = isset($_GET['idp']) ? $_GET['idp'] : NULL;
          $sql="SELECT * FROM tb_user WHERE id = $id";
          $result= $conn->query($sql);
          $row = $result->fetch_assoc();          
          $username= $row["username"];
          $password= $row["password"];
          $tipe= $row["tipe"];
          $usname= $row["usname"];

?>
<form id="form_ke">
  <input type="text" id="idk" value="<?php echo $id; ?>" hidden>
          <div class="mb-3 mt-3 form-floating">
            <input value="<?php echo $username; ?>" type="text" class="form-control" id="enama_user" name="enama_user">
            <label for="nama">Username</label>
          </div>
          <div class="mb-3 mt-3 form-floating">
            <input value="<?php echo $password; ?>" type="text" class="form-control" id="epassword" name="epassword">
            <label for="password">Password</label>
          </div>
          <div class="mb-3 mt-3 form-floating">
            <input value="<?php echo $usname; ?>" type="text" class="form-control" id="eusname" name="eusname">
            <label for="usname">Nama</label>
          </div>
          <div class="mb-3 mt-3 form-floating">
            <!-- <input value="<?php echo $tipe; ?>" type="text" class="form-control" id="erole" name="erole"> -->
            <select class="form-select mt-3" id="erole" name="erole">
              <option value="admin">Admin</option>
              <option value="resepsionis">Resepsionis</option>
            </select>
            <label for="role">Role</label>
          </div>

 </form>

