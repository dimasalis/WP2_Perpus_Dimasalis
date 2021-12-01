<html>
<head>
    <title>Toko Sepatu</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampilkan Data Transaksi Penjualan Toko Sepatu 
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Pembeli</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>No HP</td>
                <td>:</td>
                <td>
                    <?= $telp; ?>
                </td>
            </tr>
            <tr>
                <td>Merk Sepatu</td>
                <td>:</td>
                <td>
                    <?= $merk; ?>
                </td>
            </tr>
            <tr>
                <td>Harga Sepatu</td>
                <td>:</td>
                <td>
                    <?= $harga; ?>
                </td>
            </tr>
            <tr>
                <td>Ukuran Sepatu</td>
                <td>:</td>
                <td>
                    <?= $uk; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('matakuliah'); 
                    ?>">Kembali</a>
                </td>
            </tr>
    </table>
 
</body>
</html>