<?php 
require_once "dbkoneksi.php";
// tangkap iddel dari url
$delete = $_GET["iddel"];
// bikin query hapus data 
$sql = "DELETE FROM pelanggan WHERE id=?";
// prepare query
$st = $dbh->prepare($sql);
// jalanin query nya
$st->execute([$delete]);

// pindahin ke hal lis_pelanggan
header("location:List_pelanggan.php");

?>