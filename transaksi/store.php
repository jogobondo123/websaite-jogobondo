<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$warga = htmlspecialchars($_POST['warga']);
$tgl_tx = htmlspecialchars($_POST['tgl_tx']);
$jenis = htmlspecialchars($_POST['jenis']);
$nominal = htmlspecialchars($_POST['nominal']);
$ket = htmlspecialchars($_POST['ket']);
$day=date('Y-m-d');

// masukkan ke database

$query = "INSERT INTO `tbl_transaksi`(`warga_id`, `tx_tgl`, `tx_jenis`, `tx_nominal`, `tx_ket`, `tx_update`) VALUES ('$warga','$tgl_tx','$jenis','$nominal','$ket','$day');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {

	$cq="SELECT*FROM tbl_kas";
	$data_cq = mysqli_query($db, $cq);

	$uy=mysqli_fetch_array($data_cq);

	$kasmu=$uy['kas_nominal'];
	$tambah=$kasmu+$nominal;
	$kurang=$kasmu-$nominal;

	if($jenis=='masuk'){
		$qu= "UPDATE `tbl_kas` SET `kas_nominal`='$tambah',`kas_update`='$day'";
		$oc=mysqli_query($db, $qu);
		if($oc==true){
			echo "<script>window.alert('Tambah Tx Berhasil'); window.location.href='../transaksi/create.php'</script>";
		}else{
			echo "<script>window.alert('Tambah Tx Gagal'); window.location.href='../transaksi/create.php'</script>";
		}
	}else{
		$qu= "UPDATE `tbl_kas` SET `kas_nominal`='$kurang',`kas_update`='$day'";
		$oc=mysqli_query($db, $qu);
		if($oc==true){
			echo "<script>window.alert('Tambah Tx Berhasil'); window.location.href='../transaksi/create.php'</script>";
		}else{
			echo "<script>window.alert('Tambah Tx Gagal'); window.location.href='../transaksi/create.php'</script>";
		}
	}

  
} else {
  echo "<script>window.alert('Tambahnya gagal!'); window.location.href='../transaksi/create.php'</script>";
}
