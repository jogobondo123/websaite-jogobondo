<?php include('data-index.php') ?>

<center><h1>Data Kas Warga</h1></center><br>
<table class="table " border="1" width="100%" cellspacing="0" >
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

<script type="text/javascript">
  window.print();
</script>