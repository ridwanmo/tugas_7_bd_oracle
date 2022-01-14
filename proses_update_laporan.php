<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
$id_pembeli = $_POST['id_pembeli'];
$nama_pembeli= $_POST['nama_pembeli'];
$nama_barang= $_POST['nama_barang'];
$tgl_transaksi= $_POST['tgl_transaksi'];
  

 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  laporan  SET  NAMA_PEMBELI = '".$nama_pembeli."', NAMA_BARANG  = '".$nama_barang."', TGL_TRANSAKSI  = '".$tgl_transaksi."' WHERE ID_PEMBELI ='".$id_pembeli."'";
	$statement = oci_parse($con,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($con) ;
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data berhasil diubah'); window.location.href='laporan.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data gagal diubah'); window.location.href='laporan.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: laporan.php'); 
}