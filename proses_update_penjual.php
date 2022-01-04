<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_penjual = $_POST['id_penjual'];
  $kode_penjual= $_POST['kode_penjual'];
  $nama= $_POST['nama'];
  $alamat= $_POST['alamat'];
  $no_hp= $_POST['no_hp'];

 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  penjual_warung_kopi  SET  KODE_PENJUAL ='".$kode_penjual."', NAMA  = '".$nama."', ALAMAT  = '".$alamat."', NO_HP  = '".$no_hp."' WHERE ID_PENJUAL ='".$id_penjual."'";
	$statement = oci_parse($con,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($con) ;
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data berhasil diubah'); window.location.href='penjual.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data gagal diubah'); window.location.href='penjual.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: penjual.php'); 
}