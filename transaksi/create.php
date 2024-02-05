<?php include('../_partials/top.php') ?>
<?php include('data-index.php') ?>
<h1 class="page-header">Data TX</h1>
<?php include('_partials/menu.php') ?>

<form action="store.php" method="post">
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nama Warga</th>
    <td width="1%">:</td>
    <td><select class="form-control" name="warga">
        <?php foreach ($dtx as $key => $value) {?>
          <option value="<?=$value['id_warga']?>"><?=$value['nama_warga']?></option>
       <?php } ?>

    </select></td>
  </tr>
  <tr>
    <th>Tgl Transaksi</th>
    <td>:</td>
    <td> <input type="text" class="form-control datepicker" name="tgl_tx" required></td>
  </tr>
  <tr>
    <th>Jenis TX</th>
    <td>:</td>
    <td> <select class="form-control selectpicker" name="jenis" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="masuk">Masuk</option>
        <option value="keluar">Keluar</option>
      </select></td>
  </tr>
  <tr>
    <th>Nominal</th>
    <td>:</td>
    <td><input type="NUMBER" class="form-control" name="nominal" required></td>
  </tr>
  <tr>
    <th>Keterangan</th>
    <td>:</td>
    <td>
    <TEXTAREA class='form-control' name='ket'></TEXTAREA>
    </td>
  </tr>
</table>


<button type="submit" class="btn btn-primary btn-lg">
  <i class="glyphicon glyphicon-floppy-save"></i> Simpan
</button>
</form>

<?php include('../_partials/bottom.php') ?>
