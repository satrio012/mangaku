<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $data['title']; ?>s</li>
            </ol>
          </div>
        </div>
</div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
<div class="row">
<div class="col-sm-12">
<?php Flasher::Message(); ?>
</div>
</div>
<!-- Default box -->
<div class="card card-yellow">
<div class="card-header">
<h3 class="card-title text-white"><?= $data['title'] ?></h3> <a href="<?= base_url;
?>/kategori/tambah" class="btn float-right btn-xs btn btn-primary text-white">Tambah Kategori</a>
</div>
<div class="card-body">
<form action="<?= base_url; ?>/kategori/cari" method="post">
<div class="row mb-3">
<div class="col-lg-6">
<div class="input-group">
<input type="text" class="form-control" placeholder="" name="key" >
<div class="input-group-append">
<button class="btn btn-outline-primary" type="submit">Cari Data</button>
<a class="btn btn-outline-danger" href="<?= base_url; ?>/kategori" >Reset</a>
</div>
</div>
</div>
</div>
</form>
<table class="table table-bordered">
<thead>
<tr>
<th style="width: 10px">#</th>
<th>Kategori</th>
<th style="width: 150px">Action</th>
</tr>
</thead>
<tbody>
<?php $no=1; ?>
<?php foreach ($data['kategori'] as $row) :?>
<tr>
<td><?= $no; ?></td>
<td><?= $row['nama_kategori'];?></td>
<td>

<a href="<?= base_url; ?>/kategori/edit/<?= $row['id'] ?>" class="badge badge-info">Edit</a> <a href="<?= base_url; ?>/kategori/hapus/<?= $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>
</td>
</tr>
<?php $no++; endforeach; ?>
</tbody>
</table>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->