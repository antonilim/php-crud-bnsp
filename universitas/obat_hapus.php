<?php
session_start();
include('includes/config.php');
if(isset($_GET['id'])){
	$id	= $_GET['id'];
	$mySql	= "DELETE FROM obat WHERE id='$id'";
	$myQry	= mysqli_query($koneksidb, $mySql);
	echo "<script type='text/javascript'>
			alert('Data berhasil dihapus.'); 
			document.location = 'index2.php'; 
		</script>";
}else {
	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'index2.php'; 
		</script>";
}
?>