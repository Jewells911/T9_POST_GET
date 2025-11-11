<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$sex = $_POST['sex'];
$job = $_POST['job'];

// cek apakah checkbox diisi
if (isset($_POST['status'])) {
    $status = $_POST['status'];
} else {
    $status = "Belum Menikah";
}

echo "<h2>Data yang Anda Input:</h2>";
echo "Nama Anda : $nama<br>";
echo "Alamat : $alamat<br>";
echo "Jenis Kelamin : ";
echo ($sex == "L") ? "Laki-laki" : "Perempuan";
echo "<br>";
echo "Pekerjaan : $job<br>";
echo "Status Menikah : $status<br>";
?>
