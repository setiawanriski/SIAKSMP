<?php
include "conn.php";
mysqli_query($koneksi,"Delete from tbl_jwalikelas where id_jwalikelas='$_GET[id_jwalikelas]'");

include "jadwal_walikelas.php";
?>