<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Daftar Komik</h1>
</div>
</div>
</div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
<!-- /.card-header -->
<div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Volume</th>
                  <th>Pengarang</th>
                  <th>Tahun</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                </tr>
                </thead>
                <tbody>
<?php foreach ($data['komik'] as $row) :?>
<tr>
<td><?= $row['nama'];?></td>
<td><?= $row['volume'];?></td>
<td><?= $row['pengarang'];?></td>
<td><?= $row['tahun'];?></td>
<td><?= $row['nama_kategori'];?></td>
<td><?= $row['harga'];?></td> 
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
<!-- Default box -->
</div>
<!-- /.card-footer-->
</div>
<!-- /.card -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->