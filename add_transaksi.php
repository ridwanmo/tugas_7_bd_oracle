<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $tgl_transaksi= $_POST['tgl_transaksi'];
  $id_transaksi= $_POST['id_transaksi'];
  $total_beli= $_POST['total_beli'];
  $total_bayar= $_POST['total_bayar'];

$query = "INSERT INTO TRANSAKSI (TGL_TRANSAKSI,ID_TRANSAKSI,TOTAL_BELI,TOTAL_BAYAR) VALUES ('".$TGL_TRANSAKSI."','".$ID_TRANSAKSI."','".$TOTAL_BELI."','".$TOTAL_BAYAR."')";
  $statement = oci_parse($con,$query);
  $r = oci_execute($statement,OCI_DEFAULT);
   $res = oci_commit($con);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Berhasil ditambahkan'); 
  window.location.href='transaksi.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Gagal ditambahkan');
  window.location.href='transaksi.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: transaksi.php'); 
}