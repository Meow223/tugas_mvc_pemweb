<?php

include_once("m_buku.php");

class c_buku {

    public $model;

    public function __construct() {
        $this->model = new m_buku();
    }

    public function invoke() {
        $proker = $this->model->getSemuaBuku();
        include 'v_buku.php';
    }

    function insert() {
        $this->model->setBuku($_POST['id'], $_POST['judul'], $_POST['genre'], $_POST['hal'], $_POST['penulis']);
        header('Location: index.php');
    }

    function viewInsert() {
        include "v_createBuku.php";
    }

    function update() {
        $this->model->editBuku($_POST['id'], $_POST['judul'], $_POST['genre'], $_POST['hal'], $_POST['penulis']);
        header('Location:index.php');
    }

    function viewUpdate($id) {
        $proker = $this->model->getBuku($id);
        include "v_updateBuku.php";
    }

    function delete($id) {
        $this->model->hapusBuku($id);
        header('Location: index.php');
    }

}
