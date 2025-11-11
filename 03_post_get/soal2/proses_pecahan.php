<?php
$jumlah = $_POST['jumlah'];
$pecahan = [100000, 50000, 20000, 5000, 100, 50];

echo "<h2>Hasil Pecahan Uang</h2>";
echo "Jumlah Uang: Rp " . number_format($jumlah, 0, ',', '.') . "<br><br>";

foreach ($pecahan as $nilai) {
    $lembar = floor($jumlah / $nilai);
    $jumlah = $jumlah % $nilai;
    echo "Rp " . number_format($nilai, 0, ',', '.') . " : $lembar lembar<br>";
}
?>
