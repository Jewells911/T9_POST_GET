<?php
$saldo_awal = $_POST['saldo_awal'];
$bunga = $_POST['bunga'] / 100;
$bulan = $_POST['bulan'];

$saldo_akhir = $saldo_awal + ($saldo_awal * $bunga * $bulan);

echo "<h2>Hasil Perhitungan Saldo Akhir</h2>";
echo "Saldo Awal : Rp " . number_format($saldo_awal, 0, ',', '.') . "<br>";
echo "Bunga per Bulan : " . $_POST['bunga'] . "%<br>";
echo "Lama Menabung : $bulan bulan<br>";
echo "Saldo Akhir : Rp " . number_format($saldo_akhir, 0, ',', '.');
?>
