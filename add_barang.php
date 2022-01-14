<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $tgl_barang= $_POST['tgl_barang'];
  $id_barang= $_POST['id_barang'];
  $nama_barang= $_POST['nama_barang'];
  $jumlah= $_POST['jumlah'];

$query = "INSERT INTO BARANG (TGL_BARANG,ID_BARANG,NAMA_BARANG,JUMLAH) VALUES ('".$tgl_barang."','".$id_barang."','".$nama_barang."','".$jumlah."')";
  $statement = oci_parse($con,$query);
  $r = oci_execute($statement,OCI_DEFAULT);
   $res = oci_commit($con);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Berhasil ditambahkan'); 
  window.location.href='barang.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Gagal ditambahkan');
  window.location.href='barang.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: barang.php'); 
}