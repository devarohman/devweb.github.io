<?php
include "koneksi.php";

if (isset($_GET['nip'])) {
	$nip = $_GET['nip'];
} else {
	die ("Error. No nip Selected! ");	
}
?>
<div id="content">
	<?php
	//proses delete berita
	if (!empty($nip) && $nip != "") {
		
		$query = "DELETE FROM tbpegawai WHERE nip='$nip'";
		$sql = mysqli_query ($con, $query);
		if ($sql) {
			echo "<h2><font color=blue>Data Pegawai telah berhasil dihapus</font></h2>";	
		} else {
			echo "<h2><font color=red>Data pegawai gagal dihapus</font></h2>";	
		}
		echo "Klik <a href='index.php?page=tampil'>di sini</a> untuk kembali ke halaman data pegawai";
	} else {
		die ("Access Denied");	
	}
	?>
</div>