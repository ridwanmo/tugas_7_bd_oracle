<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_pembeli = $_POST['id_pembeli'];
  $nama_pembeli= $_POST['nama_pembeli'];
  $nama_barang= $_POST['nama_barang'];
  $tgl_transaksi= $_POST['tgl_transaksi'];
  
$query = "INSERT INTO LAPORAN (ID_PEMBELI,NAMA_PEMBELI,NAMA_BARANG,TGL_TRANSAKSI,) VALUES ('".$id_pembeli."','".$nama_pembeli."','".$nama_barang."','".$tgl_transaksi."')";
  $statement = oci_parse($con,$query);
  $r = oci_execute($statement,OCI_DEFAULT);
   $res = oci_commit($con);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Berhasil ditambahkan'); 
  window.location.href='laporan.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Gagal ditambahkan');
  window.location.href='laporan.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: laporan.php'); 
}