<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran Mahasiswa</title>
</head>
<body>
    <h2>Form Pendaftaran Mahasiswa Baru</h2>

    <form method="post" action="">
        Nama Lengkap: <input type="text" name="nama" required><br><br>
        Tempat Lahir: <input type="text" name="tempat" required><br><br>

        Tanggal Lahir:
        <select name="tgl">
            <?php
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>

        <select name="bln">
            <?php
            $bulan = [
                "Januari", "Februari", "Maret", "April",
                "Mei", "Juni", "Juli", "Agustus",
                "September", "Oktober", "November", "Desember"
            ];
            foreach ($bulan as $b) {
                echo "<option value='$b'>$b</option>";
            }
            ?>
        </select>

        <select name="thn">
            <?php
            for ($i = 1980; $i <= 2005; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select><br><br>

        Alamat: <textarea name="alamat" rows="3" cols="30" required></textarea><br><br>

        Jenis Kelamin:
        <input type="radio" name="jk" value="Pria" required> Pria
        <input type="radio" name="jk" value="Wanita"> Wanita<br><br>

        Asal Sekolah: <input type="text" name="sekolah" required><br><br>
        Nilai UAN: <input type="text" name="nilai" required><br><br>

        <input type="submit" name="submit" value="Kirim">
        <input type="reset" value="Reset">
    </form>

    <hr>

    <?php
    // Cek apakah tombol submit diklik
    if (isset($_POST['submit'])) {
        echo "<h3>Data Pendaftaran Mahasiswa</h3>";
        echo "Terimakasih <strong>" . $_POST['nama'] . "</strong> sudah mengisi form pendaftaran.<br><br>";
        echo "Nama Lengkap : " . $_POST['nama'] . "<br>";
        echo "Tempat Lahir : " . $_POST['tempat'] . "<br>";
        echo "Tanggal Lahir : " . $_POST['tgl'] . " " . $_POST['bln'] . " " . $_POST['thn'] . "<br>";
        echo "Alamat Rumah : " . $_POST['alamat'] . "<br>";
        echo "Jenis Kelamin : " . $_POST['jk'] . "<br>";
        echo "Asal Sekolah : " . $_POST['sekolah'] . "<br>";
        echo "Nilai UAN : " . $_POST['nilai'] . "<br>";
    }
    ?>
</body>
</html>
