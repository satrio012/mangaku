<?php
class KomikModel {   
    private $table = 'komik';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKomik()
    {
        $this->db->query("SELECT komik.*, kategori.nama_kategori FROM " . $this->table . " JOIN kategori ON kategori.id = komik.kategori_id");
        return $this->db->resultSet();
    }

    public function getKomikByld($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function tambahKomik($data)
    {
        $query = "INSERT INTO komik (nama, volume, pengarang, tahun, kategori_id, harga) VALUES(:nama, :volume, :pengarang, :tahun, :kategori_id, :harga)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('volume', $data['volume']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('kategori_id', $data['kategori_id']);
        $this->db->bind('harga', $data['harga']);
        $this->db->execute();
        
        return $this->db->rowCount();
    }

    public function updateDataKomik($data){
        $query = "UPDATE komik SET nama=:nama, volume=:volume, pengarang=:pengarang, pengarang=:pengarang, tahun=:tahun, kategori_id=:kategori_id, harga=:harga WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id',$data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('volume', $data['volume']);
        $this->db->bind('pengarang',$data['pengarang']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('kategori_id', $data['kategori_id']);
        $this->db->bind('harga', $data['harga']);
        $this->db->execute();
        
        return $this->db->rowCount();
    }

    public function deleteKomik ($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind ('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariKomik()
    {
        $key = $_POST['key'];
        $this->db->query("SELECT komik.*, kategori.nama_kategori FROM " . $this->table . " JOIN kategori ON kategori.id = komik.kategori_id WHERE nama LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}