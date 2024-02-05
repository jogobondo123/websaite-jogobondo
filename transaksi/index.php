<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Transaksi Kas Warga</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>
<?php include('../dasbor/data-index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th>#</th>
      <th>Nama Warga</th>
      <th>Tanggal</th>
      <th>Jenis Tx</th>
      <th>Nominal</th>
      <th>Keterangan</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php foreach ($data as $value) : ?>
    <tr>
      <td><?php echo $nomor++ ?>.</td>
      <td>Rp <?php echo $value['nama_warga'] ?></td>
      <td><?php echo $value['tx_tgl'] ?></td>
      <td><?php echo $value['tx_jenis'] ?></td>
      <td><?php echo $value['tx_nominal'] ?></td>
      <td><?php echo nl2br($value['tx_ket']) ?></td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            
            <?php if ($_SESSION['user']['status_user'] != 'RW'): ?>
            <li class="divider"></li>
            <li>
              <a href="edit.php?id=<?php echo $value['tx_id'] ?>"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
            </li>
            
            <li class="divider"></li>
            <li>
              <a href="delete.php?id=<?php echo $value['tx_id'] ?>" onclick="return confirm('Yakin hapus data ini?')">
                <i class="glyphicon glyphicon-trash"></i> Hapus
              </a>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

<br><br>



<?php include('../_partials/bottom.php') ?>
