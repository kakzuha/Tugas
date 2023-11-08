<?php
include 'koneksi.php';
$nim = $_GET['nim'];
$result = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE nim='$nim");
while ($user_data = mysqli_fetch_aray($result))
{
    s
}
