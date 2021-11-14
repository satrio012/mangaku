<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1><?= $data['title']; ?></h1>
</div>
</div>
</div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title"><?= $data['title']; ?></h3>
</div>
<!-- /.card-header -->
<!-- form start -->
<form role="form" action="<?= base_url; ?>/komik/updateKomik" method="POST"
enctype="multipart/form-data">
<input type="hidden" name="id" value="<?= $data['komik']['id']; ?>">
<div class="card-body">
<div class="form-group">
<label >nama</label>
<input type="text" class="form-control" placeholder="masukkan nama komik..."
name="nama" value="<?= $data['komik']['nama'];?>">
</div>
<div class="form-group">
<label >volume</label>
<input type="text" class="form-control" placeholder="masukkan volume komik..."
name="volume" value="<?= $data['komik']['volume'];?>">
</div>
<div class="form-group">
<label >Pengarang</label>
<input type="text" class="form-control" placeholder="masukkan pengarang
komik..." name="pengarang" value="<?= $data['komik']['pengarang'];?>">
</div>
<div class="form-group">
<label >Tahun</label>
<input type="text" class="form-control" placeholder="masukkan tahun komik..."
name="tahun" value="<?= $data['komik']['tahun'];?>">
</div>
<div class="form-group">
<label >Kategori</label>
<select class="form-control" name="kategori_id">
<option value="">Pilih</option>
<?php foreach ($data['kategori'] as $row) :?>
<option value="<?= $row['id']; ?>" <?php if($data['komik']['kategori_id'] ==
$row['id']) { echo "selected"; } ?>><?= $row['nama_kategori']; ?></option>
<?php endforeach; ?>
</select>
</div>
<div class="form-group">
<label >Harga</label>
<input type="text" class="form-control" placeholder="masukkan harga komik..."
name="harga" value="<?= $data['komik']['harga'];?>">
</div>
</div>
<div class="card-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</section>
<!-- /.content -->
</div>