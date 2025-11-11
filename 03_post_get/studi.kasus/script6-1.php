<!DOCTYPE html>
<html>
<head>
    <title>Baca input dari form</title>
</head>
<body>
    <h1>Baca input dari form</h1>

    <form action="script6-1proses.php" method="post">
        <table>
            <tr>
                <td>Nama Anda</td>
                <td>:</td>
                <td><input type="text" name="nama" size="30"></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" rows="5" cols="30"></textarea></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="sex" value="L"> Laki-laki
                    <input type="radio" name="sex" value="P"> Perempuan
                </td>
            </tr>

            <tr>
                <td>Pilih Pekerjaan</td>
                <td>:</td>
                <td>
                    <select name="job">
                        <option value="Petani">Petani</option>
                        <option value="Guru">Guru</option>
                        <option value="Dokter">Dokter</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Status Menikah</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="status" value="Menikah"> Ya
                </td>
            </tr>

            <tr>
                <td colspan="3" align="center">
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" name="reset" value="Hapus">
                </td>
            </tr>
        </table>
    </form>

</body>
</html>
