<?php
include('includes/config.php');
$id		= $_POST['id'];
$kode	= $_POST['kode'];
$nama	= $_POST['nama'];
$golongan = $_POST['golongan'];
$stok	= $_POST['stok'];
$harga	= $_POST['harga'];
$sql 	= "UPDATE obat SET kode='$kode', nama='$nama', golongan='$golongan', stok='$stok', harga='$harga' WHERE id='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil edit data.'); 
			document.location = 'index2.php'; 
		</script>";

}else {
	echo "<script type='text/javascript'>
			alert('Data belum berhasil di Update, silahkan coba lagi!.'); 
			document.location = 'obat_formedit.php?kode=$kode'; 
		</script>";

}
?>