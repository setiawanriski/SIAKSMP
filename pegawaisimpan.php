<?php
if(isset($_GET['act']))

$cekdata="select namapegawai from pegawai where namapegawai='".$_POST['namapegawai']."'";
$ada=mysqli_query($koneksi,$cekdata) or die(mysqli_error());

if(mysqli_num_rows($ada)>0) {
	echo '<script>
	alert("NAMA GOLONGAN SUDAH TERDAFTAR !!!"); window.location="?page=pegawaiinput"; </script>';
exit();}

else if ((!$_POST['namapegawai'])||(!$_POST['pengertian'])) {
	echo '<script> 
	alert("Ada data yang masih kosong. Harap cek ulang !!!!"); window.location="?page=pegawaiinput"; </script>';
exit();}

else

{
	
	$rs=mysqli_query($koneksi,"Insert into pegawai (`namapegawai`,`pengertian`) values ('".$_POST['namapegawai']."','".$_POST['pengertian']."')") or die(mysqli_error());
	if($rs)
	{
		echo "<script>window.location='?page=pegawaitampil'</script>";
	}
}
?>