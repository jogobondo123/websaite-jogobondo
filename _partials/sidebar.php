<?php
function is_active($page) {
  $uri = "$_SERVER[REQUEST_URI]";
  if (strpos($uri, $page)) {
    echo 'active';
  }
}
?>

<ul class="nav nav-sidebar">
  <li class="<?php is_active('dasbor'); ?>">
    <a href="../dasbor"><i class="glyphicon glyphicon-home"></i> Dasbor</a>
  </li>
</ul>

<ul class="nav nav-sidebar">
  <li class="<?php is_active('warga'); ?>">
    <a href="../warga"><i class="glyphicon glyphicon-book"></i> Data Warga</a>
  </li>
</ul>

<ul class="nav nav-sidebar">
  <li class="<?php is_active('kas'); ?>">
    <a href="../kas"><i class="glyphicon glyphicon-book"></i> Data Kas</a>
  </li>
  <li class="<?php is_active('transaksi'); ?>">
    <a href="../transaksi"><i class="glyphicon glyphicon-inbox"></i> Data Transaksi</a>
  </li>
</ul>


<?php if ($_SESSION['user']['status_user'] != 'RW'): ?>
<ul class="nav nav-sidebar">
  <li class="<?php is_active('user'); ?>">
    <a href="../user"><i class="glyphicon glyphicon-user"></i> User</a>
  </li>
</ul>
<?php endif; ?>
