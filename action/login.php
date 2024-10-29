

<?php

include '../includes/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM tb_user WHERE username ='$username' AND password ='$password'";

$login = mysqli_query($conn, $sql);

$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($login);

    session_start();
    $_SESSION['id'] = $data['id'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['usname'] = $data['usname'];
    $_SESSION['role'] = $data['tipe'];

    if($data['tipe'] == "admin"){
        header("location:../admin/");
        $_SESSION['status'] = "admin_login";
    }else if($data['tipe'] == "resepsionis"){
        header("location:../resepsionis/");
        $_SESSION['status'] = "resepsionis_login";
    }else{
        header("location:../login.php?alert=gagal");
    }

}else{
    
    header("location:../login.php?alert=gagal_userpass");
}
?>
