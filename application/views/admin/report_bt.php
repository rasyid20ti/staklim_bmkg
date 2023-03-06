<html>

<head>

</head>

<body>
    <h3 style="text-align: center;font-size:2.0em !important;">Rekap Surat Keluar</h3>
    <table width="100%" cellspacing="1" cellpadding="4" align="center" border="1">
        <thead>

            <tr>
                <?php $i = 1; ?>
                <td>No</td>
                <td>Tanggal</td>
                <td>Nama</td>
                <td>Asal</td>
                <td>Keperluan</td>
                <td>HP</td>
                <td>Status</td>

            </tr>
        </thead>
        <?php
        $total = 0;
        foreach ($result as $us) {
            echo "
                <tr>
                <td>" . $i . "</td>
                    <td>" . $us['tanggal'] . "</td>
                    <td>" . $us['nama'] . "</td>
                    <td>" . $us['asal'] . "</td>
                    <td>" . $us['keperluan'] . "</td>
                    <td>" . $us['hp'] . "</td>
                    <td>" . $us['status'] . "</td>
                </tr>";
        }
        ?>
    </table>
</body>

</html>