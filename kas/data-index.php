<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM tbl_kas";

$hasil = mysqli_query($db, $query);

$data_kas = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_kas[] = $row;
}
