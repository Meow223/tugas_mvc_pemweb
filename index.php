<?php
    include_once("c_buku.php");

    $controller = new c_buku();
    if (isset($_GET["hapus"])) {
        $controller->delete($_GET["hapus"]);
    } else if (isset($_GET['edit'])) {
        $controller->viewUpdate($_GET['edit']);
    } else if (isset($_GET['insert'])) {
        $controller->viewInsert();
    } else {
        $controller->invoke();
    }

