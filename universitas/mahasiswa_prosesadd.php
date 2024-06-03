<?php
include('includes/config.php');
$nim	= $_POST['nim'];
$nama	= $_POST['nama'];
$tgl_lahir	= $_POST['tgl_lahir'];
$no_tlp	= $_POST['no_tlp'];
$prodi	= $_POST['prodi'];
$sql 	= "INSERT INTO mahasiswa (nim,nama,tgl_lahir,no_tlp,prodi) VALUES ('$nim','$nama','$tgl_lahir','$no_tlp','$prodi')";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil tambah data mahasiswa.'); 
			document.location = 'index.php'; 
		</script>";

}else {
	echo "<script type='text/javascript'>
			alert('Data belum berhasil di Input, silahkan coba lagi!.');
			document.location = 'mahasiswa_formadd.php?nip=$nim'; 
		</script>";
}
?>