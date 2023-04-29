<!DOCTYPE html>
<html>
    <head>
        <title> Edit Buku </title>
    </head>
    <body>
        <h2> Edit Buku </h2>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php echo $proker['id'] ?>">
            <label>Judul Buku</label><br>
            <input type="text" name="judul" value="<?php echo $proker['judul'] ?>"><br>
            <label>Genre Buku</label><br>
            <input type="text" name="genre" value="<?php echo $proker['genre'] ?>"><br>
            <label>Halaman Buku</label><br>
            <input type="text" name="hal" value="<?php echo $proker['hal'] ?>"><br>
            <label>Penulis Buku</label><br>
            <input type="text" name="penulis" value="<?php echo $proker['penulis'] ?>"><br>
            <input type="submit" name="edit" value="Simpan">
        </form>       
    </body>
</html>
<?php
if (isset($_POST['edit'])) {
    $control = new c_buku();
    $control->update();
}

