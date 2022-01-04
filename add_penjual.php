<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_penjual = $_POST['id_penjual'];
  $kode_penjual= $_POST['kode_penjual'];
  $nama= $_POST['nama'];
  $alamat= $_POST['alamat'];
  $no_hp= $_POST['no_hp'];

$query = "INSERT INTO PENJUAL_WARUNG_KOPI (ID_PENJUAL,KODE_PENJUAL,NAMA,ALAMAT,NO_HP) VALUES ('".$id_penjual."','".$kode_penjual."','".$nama."','".$alamat."','".$no_hp."')";
  $statement = oci_parse($con,$query);
  $r = oci_execute($statement,OCI_DEFAULT);
   $res = oci_commit($con);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Berhasil ditambahkan'); 
  window.location.href='penjual.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Gagal ditambahkan');
  window.location.href='penjual.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: penjual.php'); 
}