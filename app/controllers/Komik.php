<?php
class Komik extends Controller {
    public function __construct()
{
if($_SESSION['session_login'] != 'sudah_login') {
Flasher::setMessage('Login','Tidak ditemukan.','danger');
header('location: '. base_url . '/login');
exit;
}
}

public function index(){
    $data['title'] = 'Data Komik';
    $data['komik'] = $this->model('KomikModel')->getAllKomik();
    $this->view('templates/header', $data);
    $this->view('templates/sidebar', $data);
    $this->view('komik/index', $data);
    $this->view('templates/footer');
}

public function tambah(){
    $data['title'] = 'Tambah Komik';
    $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
    $this->view('templates/header', $data);
    $this->view('templates/sidebar', $data);
    $this->view('komik/create', $data);
    $this->view('templates/footer');
}

public function simpanKomik(){
if($this->model('KomikModel')->tambahKomik($_POST) > 0 ) {
    Flasher::setMessage('Berhasil','ditambahkan','success');
    header('location: '. base_url . '/komik');
    exit;
}else{
    Flasher::setMessage('Gagal','ditambahkan','danger');
    header('location: '. base_url . '/komik');
    exit;
}
}

public function edit($id) {
    $data['title'] = 'Detail Komik';
    $data['kategori'] = $this->model('KategoriModel') ->getAllKategori();
    $data['komik'] = $this->model('KomikModel')->getKomikById($id);
    $this->view('templates/header', $data);
    $this->view('templates/sidebar', $data);
    $this->view('komik/edit', $data) ;
    $this->view('templates/footer');
}

public function updateKomik(){
    if($this->model('KomikModel')->updateDataKomik($_POST) > 0 ) {
    Flasher::setMessage('Berhasil', 'diupdate', 'success');
    header('location: '. base_url . '/Komik');
    exit;
    }else{
    Flasher::setMessage('Gagal', 'diupdate', 'danger');
    header('location : '. base_url . '/Komik');
    exit;
    }
}

public function hapus ($id) {
    if($this->model('KomikModel')->deleteKomik($id) > 0 ) {
    Flasher::setMessage('Berhasil','dihapus','success');
    header('location: '. base_url . '/komik');
    exit;
    }else{
    Flasher::setMessage('Gagal','dihapus','danger');
    header('location : '. base_url . '/komik');
    exit;
    }
    }

public function cari(){
    $data['title'] = 'Data Komik';
    $data['komik'] = $this->model('KomikModel')->cariKomik();
    $data['key'] = $_POST['key'];
    $this->view('templates/header', $data);
    $this->view('templates/sidebar', $data);
    $this->view('komik/index', $data);
    $this->view('templates/footer');
}

public function lihatlaporan()
{
    $data['title'] = 'Data Laporan Komik';
    $data['komik'] = $this->model('KomikModel')->getAllKomik();
    $this->view('komik/lihatlaporan', $data);
}

public function laporan()
{
    $data['komik'] = $this->model('KomikModel')->getAllKomik();
    $pdf = new FPDF('p','mm','A4');
    // membuat halaman baru
    $pdf->AddPage();
    // setting jenis font yang akan digunakan
    $pdf->SetFont('Arial','B',14);
    // mencetak string
    $pdf->Cell(190,7,'LAPORAN BUKU',0,1,'C');
    // Memberikan space kebawah agar tidak terlalu rapat
    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(85,6,'JUDUL',1);
    $pdf->Cell(30,6,'VOLUME',1);
    $pdf->Cell(30,6,'PENGARANG',1);
    $pdf->Cell(15,6,'TAHUN',1);
    $pdf->Cell(25,6,'KATEGORI',1);
    $pdf->Ln();
    $pdf->SetFont('Arial','',10);
    foreach($data['komik'] as $row) {
    $pdf->Cell(85,6,$row['nama'],1);
    $pdf->Cell(30,6,$row['volume'],1);
    $pdf->Cell(30,6,$row['pengarang'],1);
    $pdf->Cell(15,6,$row['tahun'],1);
    $pdf->Cell(25,6,$row['nama_kategori'],1);
    $pdf->Ln();
}
    $pdf->Output('D', 'Laporan Komik.pdf', true);

}
}