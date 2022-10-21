<?php
include "koneksi.php";
?>
<div id="content">
	<h2>Data Pegawai</h2>
	<table  id="tabel">
	<tr>
		<th width="5%">No</td>
		<th width="10%">NIP</td>
		<th width="20%">Nama</td>
		<th width="15%">Tgl Lahir</td>
		<th width="20%">Jenis Kelamin</td>
		<th width="30%">Alamat</td>
		<th>Action</td>
	</tr>
	<?php
	$no = 1;
	$query = "SELECT nip, nama, tgllahir, jenkel, alamat
			  FROM tbpegawai ORDER BY nip";
	$sql = mysqli_query($con,$query);
	while ($hasil = mysqli_fetch_array($sql)) {
		$nip = $hasil['nip'];
		$nama = stripslashes ($hasil['nama']);
		$jenkel = ($hasil['jenkel']==0)?"Laki-laki" : "Wanita";
		$tgllhr = stripslashes ($hasil['tgllahir']);
		$alamat = stripslashes ($hasil['alamat']);
		$warna = ($no%2==1)?"#ffffff":"#efefef";
		//
		//tampilkan data pegawai
	?>
		<tr bgcolor="<?php echo$warna?>">
			<td><?php echo $no?></td>
			<td><?php echo $nip?></td>
			<td><?php echo $nama?></td>
			<td><?php echo $tgllhr?></td>
			<td><?php echo $jenkel?></td>
			<td><?php echo $alamat?></td>
			<td>
			<a href="index.php?page=foto&nip=<?php echo $nip?>">Foto</a><br/> 
			<a href="index.php?page=edit&nip=<?php echo $nip?>">Edit</a><br/>
			<a href="index.php?page=delete&nip=<?php echo $nip?>">Delete</a></td>
		</tr>	
	<?php $no++; }?>
	</table>
</div>