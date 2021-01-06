<!-- cara lama  -->
<?php
// koneklsi ke database 
$con = mysqli_connect(
    "localhost",
    "root",
    "",
    "db_phpdasar"
);

// ambil data dari data table mahasiswa/ query datamahsiswa
$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($con, $query);

// ambil (fetch)data mahasiswa dari object result
// mysqli_fetch_row() => Mengembalikan array numerik
// mysqli_fetch_assoc() => Mengembalikan array asosiativ -> yg di recomended
// mysqli_fetch_array() => Boleh pake angka dan string fleksibel -> kelemahan double array jk data banyak psti berat
// mysqli_fetch_object() => untuk menampilkan object " -> "
// $mhs = mysqli_fetch_object($result);
// var_dump($mhs->nama);

// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }


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
        while ($row = mysqli_fetch_assoc($result)) : ?>
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
        endwhile; ?>
    </table>



</body>

</html>