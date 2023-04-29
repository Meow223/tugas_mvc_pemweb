<html>
    <head>
        <title>Tambah Buku</title>
    </head>
    <body>
        <h2> Tambah Buku </h2>
        <form method="post" action="">
            <label>ID</label><br>
            <input type="number" name="id" placeholder="Masukkan ID Buku" required><br>
            <label>Judul Buku</label><br>
            <input type="text" name="judul" placeholder="Masukkan Judul Buku" required><br>
            <label>Genre Buku</label><br>
            <input type="text" name="genre" placeholder="Masukkan Genre Buku" required><br>
            <label>Halaman Buku</label><br>
            <input type="text" name="hal" placeholder="Masukkan Jumlah Halaman" required><br>
            <label>Penulis Buku</label><br>
            <input type="text" name="penulis" placeholder="Masukkan Penulis" required><br>
            <input type="submit" name="tambah" value="Simpan">
        </form>
    </body>
</html>
<?php
if (isset($_POST['tambah'])) {
    $control = new c_buku();
    $control->insert();
}

