<html>

<head>

</head>

<body>
    <h3 style="text-align: center;font-size:2.0em !important;">Laporan Data Pendidikan dan Penelitian Non-Komersil</h3>
    <table width="100%" cellspacing="1" cellpadding="4" align="center" border="1">
        <thead>

            <tr>
                <?php $i = 1; ?>
                <td>No</td>
                <td>Nama</td>
                <td>Email</td>
                <td>HP/WA</td>
                <td>Asal Universitas</td>
                <td>Alamat</td>
                <td>Peruntukan Data</td>
                <td>Perolehan Data</td>
                <td>Bentuk</td>
                <td>Informasi</td>
                <td>Unsur</td>
                <td>Waktu</td>
                <td>Panjang Data</td>
                <td>Keterangan</td>

            </tr>
        </thead>
        <?php
        $total = 0;
        foreach ($result as $us) {
            echo "
                <tr>
                <td>" . $i . "</td>
                    <td>" . $us['nama'] . "</td>
                    <td>" . $us['email'] . "</td>
                    <td>" . $us['hp'] . "</td>
                    <td>" . $us['universitas'] . "</td>
                    <td>" . $us['alamat'] . "</td>
                    <td>" . $us['peruntukan_data'] . "</td>
                    <td>" . $us['perolehan_data'] . "</td>
                    <td>" . $us['bentuk'] . "</td>
                    <td>" . $us['informasi'] . "</td>
                    <td>" . $us['unsur'] . "</td>
                    <td>" . $us['waktu'] . "</td>
                    <td>" . $us['panjang_data'] . "</td>
                    <td>" . $us['keterangan'] . "</td>
                </tr>";
        }
        ?>
    </table>
</body>

</html>