<?php
include('includes/config.php');
$id		= $_POST['id'];
$nim	= $_POST['nim'];
$nama	= $_POST['nama'];
$tgl_lahir	= $_POST['tgl_lahir'];
$no_tlp	= $_POST['no_tlp'];
$prodi	= $_POST['prodi'];
$sql 	= "UPDATE mahasiswa SET nim='$nim', nama='$nama', tgl_lahir='$tgl_lahir', no_tlp='$no_tlp', prodi='$prodi' WHERE id='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil edit data.'); 
			document.location = 'index.php'; 
		</script>";

}else {
	echo "<script type='text/javascript'>
			alert('Data belum berhasil di Update, silahkan coba lagi!.'); 
			document.location = 'mahasiswa_formedit.php?nim=$nim'; 
		</script>";

}
?>