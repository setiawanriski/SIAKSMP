<?php
include "conn.php";
mysqli_query($koneksi,"Delete from tbl_jadwal where id_jadwal='$_GET[id_jadwal]'");

include "jadwal_pengajaran.php";
?>