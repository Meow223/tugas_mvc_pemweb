<?php

require "koneksi.php";

class m_buku {

    private $id;
    private $judul;
    private $genre;
    private $hal;
    private $penulis;
    public $hasil = array();
    private $mysqli;

    public function __construct() {
        require "koneksi.php";
    }

    // Create Buku
    public function setBuku($id, $judul, $genre, $hal, $penulis) {
        require "koneksi.php";
        $rs = $mysqli->query("INSERT INTO buku VALUES('$id','$judul','$genre','$hal','$penulis')");
    }
    // Delete Buku
    public function hapusBuku($id) {
        require "koneksi.php";
        $rs = $mysqli->query("DELETE from buku WHERE id = $id");
    }
    // Update Buku  
    public function editBuku($id, $judul, $genre, $hal, $penulis) {
        require "koneksi.php";
        $rs = $mysqli->query("UPDATE buku SET judul = '$judul', genre ='$genre', hal ='$hal', penulis ='$penulis' WHERE id = $id");
    }

    public function getBuku($id) {
        require "koneksi.php";
        $rs = $mysqli->query("SELECT * FROM buku WHERE id = $id");
        $this->hasil = $rs->fetch_array();
        return $this->hasil;
    }

    public function getSemuaBuku() {
        require "koneksi.php";
        $rs = $mysqli->query("SELECT * FROM buku");
        $rows = array();
        while ($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }
        $this->hasil = $rows;
        return $this->hasil;
    }

}
