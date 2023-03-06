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
                <td>No Surat</td>
                <td>Klasifikasi</td>
                <td>Tanggal Surat</td>
                <td>Perihal</td>
                <td>Tujuan</td>
                <td>Sifat Surat</td>

            </tr>
        </thead>
        <?php
        $total = 0;
        foreach ($result as $us) {
            echo "
                <tr>
                <td>" . $i . "</td>
                    <td>" . $us['no_surat'] . "</td>
                    <td>" . $us['klasifikasi'] . "</td>
                    <td>" . $us['tanggal_surat'] . "</td>
                    <td>" . $us['perihal'] . "</td>
                    <td>" . $us['tujuan'] . "</td>
                    <td>" . $us['sifat'] . "</td>
                </tr>";
        }
        ?>
    </table>
</body>

</html>