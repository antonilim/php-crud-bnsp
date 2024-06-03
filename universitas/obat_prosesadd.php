<?php
include('includes/config.php');
$kode	= $_POST['kode'];
$nama	= $_POST['nama'];
$golongan	= $_POST['golongan'];
$stok	= $_POST['stok'];
$harga	= $_POST['harga'];
$sql 	= "INSERT INTO obat (kode,nama,golongan,stok,harga) VALUES ('$kode','$nama','$golongan','$stok','$harga')";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil tambah data obat.'); 
			document.location = 'index2.php'; 
		</script>";

}else {
	echo "<script type='text/javascript'>
			alert('Data belum berhasil di Input, silahkan coba lagi!.');
			document.location = 'obat_formadd.php?nip=$kode'; 
		</script>";
}
?>