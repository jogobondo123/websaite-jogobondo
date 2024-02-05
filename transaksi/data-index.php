<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM tbl_transaksi JOIN warga on tbl_transaksi.warga_id=warga.id_warga order by tx_tgl DESC";

$hasil = mysqli_query($db, $query);

$data = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data[] = $row;
}


$qw = "SELECT * FROM warga";

$hw = mysqli_query($db, $qw);

$dtx = array();

while ($row = mysqli_fetch_assoc($hw)) {
  $dtx[] = $row;
}