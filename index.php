<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambah Data Mahasiswa</title>
</head>
<body>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jurusan</th>
            </tr>
        </thead>
        <?php
            include 'koneksi.php';

                $query = mysqli_query($koneksi, "SELECT * FROM Mahasiswa");
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) {
        ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $data['nim'];?></td>
                <td><?php echo $data['nama'];?></td>
                <td><?php echo $data['alamat'];?></td>
                <td><?php echo $data['jurusan'];?></td>
                <td>
                    <i class="fas fa-edit bg-success p-2 text-white rounded"></i>
                    <a href="ubah_mhs.php?nim=<?php echo $data['nim'];?>">Edit</a>
                    <i class="fas fa-trashalt bg-danger p-2 text-white rounded"></i>
                    <a href="hapus_mhs.php?nim=<?php echo $data['nim'];?>">Delete</a>
            </tr>
            <!-- Update Modal -->

            <!-- Modal Delete -->
                <?php
                }
            ?>
    </table>
</body>
</html>