<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
$tgl_barang= $_POST['tgl_barang'];
$id_barang= $_POST['id_barang'];
$nama_barang= $_POST['nama_barang'];
$jumlah= $_POST['jumlah'];

 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  barang  SET  TGL_BARANG = '".$tgl_barang."', NAMA_BARANG  = '".$nama_barang."', JUMLAH  = '".$jumlah."' WHERE ID_BARANG ='".$id_barang."'";
	$statement = oci_parse($con,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($con) ;
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data transaksi berhasil diubah'); window.location.href='barang.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data transaksi gagal diubah'); window.location.href='barang.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: barang.php'); 
}