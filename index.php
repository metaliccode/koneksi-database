<!-- cara lama  -->
<?php
// koneklsi ke database 
require 'functions.php';

// ambil data dari data table mahasiswa/ query datamahsiswa
$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Nip</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1;
        foreach ($mahasiswa as $row) :
        ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img src="img/<?= $row["gambar"]; ?>" width="30"></td>
                <td><?= $row["nip"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>

                <td>
                    <a href="">Ubah</a>
                    <a href="">Hapus</a>
                </td>
            </tr>
        <?php $i++;
        endforeach; ?>
    </table>



</body>

</html>