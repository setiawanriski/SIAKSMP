<form name="formsekolah" id="formsekolah">
<center>
<p><h2>Management Data Sekolah </h2></p> 
 <table width="502" height="567" border="0">
 <?php
  $rw=mysqli_query($koneksi,"Select * from sekolah");
  while($s=mysqli_fetch_array($rw))
  {
  ?>
    <tr>
      <td width="174" height="25">Nama Sekolah </td>
      <td width="22">:</td>
      <td width="292"><?php echo $s['nama']; ?></td>
    </tr>
    <tr>
      <td height="29">NSS</td>
      <td>:</td>
      <td><?php echo $s['nss']; ?></td>
    </tr>
    <tr>
      <td height="30">NIS</td>
      <td>:</td>
      <td><?php echo $s['nis']; ?></td>
    </tr>
    <tr>
      <td height="24">NTSN</td>
      <td>:</td>
      <td><?php echo $s['ntsn']; ?></td>
    </tr>
    <tr>
      <td height="30">SKPD</td>
      <td>:</td>
      <td><?php echo $s['skpd']; ?></td>
    </tr>
    <tr>
      <td height="25">Alamat</td>
      <td>:</td>
      <td><?php echo $s['alamat']; ?></td>
    </tr>
    <tr>
      <td height="24">Nomor Telepon </td>
      <td>:</td>
      <td><?php echo $s['nomor']; ?></td>
    </tr>
    <tr>
      <td height="30">Fax</td>
      <td>:</td>
      <td><?php echo $s['fax']; ?></td>
    </tr>
    <tr>
      <td height="24">Email</td>
      <td>:</td>
      <td><?php echo $s['email']; ?></td>
    </tr>
    <tr>
      <td height="30">Profile</td>
      <td>:</td>
      <td><?php echo $s['profile']; ?></td>
    </tr>
    <tr>
      <td height="30">Tahun Ajaran Aktif </td>
      <td>:</td>
      <td><?php echo $s['tahun']; ?></td>
    </tr>
	<tr>
      <td height="30">Semester</td>
      <td>:</td>
      <td><?php echo $s['semester']; ?></td>
    </tr>
	<tr>
      <td height="30"></td>
      <td>&nbsp;</td>
      <td><a href="?page=sekolahedit&id_sekolah=<?php echo sha1($s['nama']); ?>" class="form-edit"><strong>Edit</strong></a></td>
    </tr>
	<?php
  }
  ?>
  </table>
  </center>
</form>