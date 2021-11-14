<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Komik</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $data['title']; ?>s</li>
            </ol>
          </div>
        </div>
<!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
<div class="row">
<div class="col-sm-12">
<?php
Flasher::Message();
?>
</div>
</div>
<!-- Default box -->
<div class="card card-yellow">
<div class="card-header">
<h3 class="card-title"></h3> <div class="btn-group float-right">
    <a href="<?= base_url; ?>/komik/tambah" class="btn float-right btn-xs btn btn-primary text-white">Tambah Komik</a>
    <a href="<?= base_url; ?>/komik/laporan" class="btn float-right btn-xs btn btn-primary text-white">Laporan Komik</a>
    <a href="<?= base_url; ?>/komik/lihatlaporan" class="btn float-right btn-xs btn btn-primary text-white">Lihat Laporan Komik</a>
    </div>
</div>
<div class="card-body">
<form action="<?= base_url; ?>/komik/cari" method="post">
    <div class="row mb-2">
        <div class="col-lg-5">
            <div class="input-group">
            <input type="text" class="form-control" placeholder="" name="key" >
        <div class="input-group-append">
        <button class="btn btn-outline-primary" type="submit">Cari</button>
        <a class="btn btn-outline-danger" href="<?= base_url; ?>/komik" >Reset</a>
        </div>
        </div>
    </div>
</div>
</form>
<table class="table table-bordered">
<thead>
<tr>
<th style="width: 10px">#</th>
<th>Nama</th>
<th>Volume</th>
<th>Pengarang</th>
<th>Tahun</th>
<th>Kategori</th>
<th>Harga</th>
<th style="width: 150px">Action</th>
</tr>
</thead>
<tbody>
<?php $no=1; ?>
<?php foreach ($data['komik'] as $row) :?>
<tr>
<td><?= $no; ?></td>
<td><?= $row['nama'];?></td>
<td><?= $row['volume'];?></td>
<td><?= $row['pengarang'];?></td>
<td><?= $row['tahun'];?></td>
<td><?= $row['nama_kategori'];?></td>
<td><?= $row['harga'];?></td>
<td>

<a href="<?= base_url; ?>/komik/edit/<?= $row['id'] ?>" class="badge badge-info">Edit</a> <a href="<?= base_url; ?>/komik/hapus/<?= $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>

</td>
</tr>
<?php $no++; endforeach; ?>
</tbody>
</table>
</div>
<!-- /.card-body -->
<div class="card-footer">

</div>
<!-- /.card-footer-->
</div>
<!-- /.card -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->