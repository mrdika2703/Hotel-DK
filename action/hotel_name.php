<?php  

  include "includes/koneksi.php";

    $query = $conn->query("SELECT * FROM setting_name limit 1")->fetch_array();
    foreach ($query as $key => $value) {
    if(!is_numeric($key))
      $_SESSION['hotel_'.$key] = $value;
  }
?>