<?php
include('Model.php');

class BukuModel
{
    private $db;
    private $table = 'm_buku';

    public function __construct()
    {
        include_once('../lib/Connection.php'); 
        $this->db = $db; 
        $this->db->set_charset('utf8');
    }

    // Insert Data
    public function insertData($data)
    {
        $query = $this->db->prepare("INSERT INTO {$this->table} (buku_kategori, buku_kode, buku_nama, buku_jumlah, deskripsi, gambar) 
            VALUES (?, ?, ?, ?, ?, ?)");
        $query->bind_param('ssssss', $data['buku_kategori'], $data['buku_kode'], $data['buku_nama'], $data['buku_jumlah'], $data['deskripsi'], $data['gambar']);
        $query->execute();
    }

    // Get All Data
    public function getData()
    {
        return $this->db->query("SELECT * FROM {$this->table}");
    }

    // Get Data by ID
    public function getDataById($id)
    {
        $query = $this->db->prepare("SELECT * FROM {$this->table} WHERE buku_id = ?");
        $query->bind_param('i', $id);
        $query->execute();
        return $query->get_result()->fetch_assoc();
    }

    // Update Data
    public function updateData($id, $data)
    {
        $query = $this->db->prepare("UPDATE {$this->table} SET buku_kategori = ?, buku_kode = ?, buku_nama = ?, buku_jumlah = ?, deskripsi = ?, gambar = ? WHERE buku_id = ?");
        $query->bind_param('ssssssi', $data['buku_kategori'], $data['buku_kode'], $data['buku_nama'], $data['buku_jumlah'], $data['deskripsi'], $data['gambar'], $id);
        $query->execute();
    }

    // Delete Data
    public function deleteData($id)
    {
        $query = $this->db->prepare("DELETE FROM {$this->table} WHERE buku_id = ?");
        $query->bind_param('i', $id);
        $query->execute();
    }
}
