<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Kas Warga</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>
<?php include('../dasbor/data-index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th>#</th>
      <th>Jumlah Kas</th>
      <th>Tanggal Update</th>
      
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php foreach ($data_kas as $kas) : ?>
    <tr>
      <td><?php echo $nomor++ ?>.</td>
      <td>Rp <?php echo $kas['kas_nominal'] ?></td>
      <td><?php echo $kas['kas_update'] ?></td>
  
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

<br><br>



<?php include('../_partials/bottom.php') ?>
