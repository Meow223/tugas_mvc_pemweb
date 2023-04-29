<html>
    <head>
        <title> Buku</title>
    </head>
    <body>
        <h2>Daftar Buku</h2>
        <table border="1" cellpadding="9" cellspacing="1">
            <tbody>
                <tr>
                    <td>ID</td>
                    <td>Judul Buku</td>
                    <td>Genre Buku</td>
                    <td>Halaman Buku</td>
                    <td>Penulis Buku</td>
                    <td colspan = "1"> Edit </td>
                    <td colspan = "1"> Delete </td>
                </tr>
            </tbody> <?php foreach ($proker as $item) { ?>
            <tr>
                <td><?php echo $item['id'] ?></td>
                <td><?php echo $item['judul'] ?></td>
                <td><?php echo $item['genre'] ?></td>
                <td><?php echo $item['hal'] ?></td>
                <td><?php echo $item['penulis'] ?></td>
                <td><a href="?edit= <?= $item['id']; ?>">Edit </a></td>
                <td><a href="?hapus= <?= $item['id']; ?>" onclick="return confirm('Apakah data buku akan dihapus?');">Delete</a></td>
            </tr>
            <?php } ?>          
        </table>
        <button type='submit' placeholder='Login'><a href = '?insert=add'>Tambah Buku</a></button>
    </body>
</html>