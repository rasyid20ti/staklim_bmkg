<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link href="<?= base_url('sb-admin') ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <style type="text/css">
    .f {
        float: right;
    }

    .clr {
        clear: both;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
    }

    th {
        text-align: center;
        font-size: 10;
    }

    tr {
        text-align: center;
        font-weight: 400;
    }

    td {
        text-align: center;
        vertical-align: top;
        font-weight: 400;
    }
    a {
        text-align: center;
        vertical-align: top;
        font-style: bold;
        font-size: 16;
    }
</style>

</head>

<body>
    <div class="row">
        <div class="col text-center">
        <img src="<?php echo $_SERVER["DOCUMENT_ROOT"].'logo.png';?>"/>
            <center>
                <a>BADAN METEOROLOGI KLIMATOLOGI DAN GEOFISIKA</a>
                <a>STASIUN KLIMATOLOGI RIAU</a><br>
                <a>Jl. Unggas, Kelurahan Simpang Tiga, Kecamatan Bukit Raya, Pekanbaru, Provinsi Riau (28284)</a><br>
                <a>Telp./Fax : +(0761) 8411831, E-mail : staklim.riau@bmkg.go.id </a>
            </center>
        </div>
    </div>
    <hr>
    <div class="row">
        <table border="1" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col" rowspan="3">Tanggal Inputan</th>
                    <th scope="col" colspan="11">Temperatur pada tanah gundul dalam derajat C</th>
                    <th scope="col" colspan="11">Temperatur pada tanah rumput dalam derajat C</th>
                    <th scope="col" colspan="2">Keterangan Tentang</th>
                    <th scope="col" colspan="7">Jam 07.30 WS(I)</th>
                    <th scope="col" colspan="7">Jam 13.30 WS(II)</th>
                    <th scope="col" colspan="7">Jam 18.30 WS(III)</th>
                    <th scope="col" colspan="2">Jumlah</th>
                </tr>
                <tr>
                    <th scope="col" colspan="3">I</th>
                    <th scope="col" colspan="3">II</th>
                    <th scope="col" colspan="5">III</th>
                    <th scope="col" colspan="3">I</th>
                    <th scope="col" colspan="3">II</th>
                    <th scope="col" colspan="5">III</th>
                    <th scope="col" rowspan="2">Keadaan Tanah</th>
                    <th scope="col" rowspan="2">Jatuhnya Hujan</th>
                    <th scope="col"></th>
                    <th scope="col" colspan="2">Kec Angin</th>
                    <th scope="col" colspan="4"></th>
                    <th scope="col"></th>
                    <th scope="col" colspan="2">Kec Angin</th>
                    <th scope="col" colspan="4"></th>
                    <th scope="col"></th>
                    <th scope="col" colspan="2">Kec Angin</th>
                    <th scope="col" colspan="4"></th>
                    <th scope="col" rowspan="2">CH</th>
                    <th scope="col" rowspan="2">Eva</th>
                </tr>
                <tr>
                    <th scope="col">5 cm</th>
                    <th scope="col">10 cm</th>
                    <th scope="col">20 cm</th>
                    <th scope="col">5 cm</th>
                    <th scope="col">10 cm</th>
                    <th scope="col">20 cm</th>
                    <th scope="col">5 cm</th>
                    <th scope="col">10 cm</th>
                    <th scope="col">20 cm</th>
                    <th scope="col">50 cm</th>
                    <th scope="col">100 cm</th>
                    <th scope="col">5 cm</th>
                    <th scope="col">10 cm</td>
                    <th scope="col">20 cm</td>
                    <th scope="col">5 cm</td>
                    <th scope="col">10 cm</td>
                    <th scope="col">20 cm</td>
                    <th scope="col">5 cm</td>
                    <th scope="col">10 cm</td>
                    <th scope="col">20 cm</th>
                    <th scope="col">50 cm</th>
                    <th scope="col">100 cm</td>
                    <th scope="col">CH</td>
                    <th scope="col">0.5 m</td>
                    <th scope="col">10 m</td>
                    <th scope="col">Suhu Udara</td>
                    <th scope="col">RH</td>
                    <th scope="col">Suhu Air</td>
                    <th scope="col">Eva</td>
                    <th scope="col">CH</td>
                    <th scope="col">0.5 m</td>
                    <th scope="col">10 m</td>
                    <th scope="col">Suhu Udara</td>
                    <th scope="col">RH</td>
                    <th scope="col">Suhu Air</td>
                    <th scope="col">Eva</td>
                    <th scope="col">CH</th>
                    <th scope="col">0.5 m</th>
                    <th scope="col">10 m</th>
                    <th scope="col">Suhu Udara</th>
                    <th scope="col">RH</th>
                    <th scope="col">Suhu Air</th>
                    <th scope="col">Eva</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($all_agm1b as $us) : ?>
                    <tr>
                        <td><?= $us['date']; ?></td>
                        <td><?= $us['temg15']; ?></td>
                        <td><?= $us['temg110']; ?></td>
                        <td><?= $us['temg120']; ?></td>
                        <td><?= $us['temg25']; ?></td>
                        <td><?= $us['temg210']; ?></td>
                        <td><?= $us['temg220']; ?></td>
                        <td><?= $us['temg35']; ?></td>
                        <td><?= $us['temg310']; ?></td>
                        <td><?= $us['temg320']; ?></td>
                        <td><?= $us['temg350']; ?></td>
                        <td><?= $us['temg3100']; ?></td>
                        <td><?= $us['tempt15']; ?></td>
                        <td><?= $us['tempt110']; ?></td>
                        <td><?= $us['tempt120']; ?></td>
                        <td><?= $us['tempt25']; ?></td>
                        <td><?= $us['tempt210']; ?></td>
                        <td><?= $us['tempt220']; ?></td>
                        <td><?= $us['tempt35']; ?></td>
                        <td><?= $us['tempt310']; ?></td>
                        <td><?= $us['tempt320']; ?></td>
                        <td><?= $us['tempt350']; ?></td>
                        <td><?= $us['tempt3100']; ?></td>
                        <td><?= $us['keTanah']; ?></td>
                        <td><?= $us['JaHujan']; ?></td>
                        <td><?= $us['Ch1']; ?></td>
                        <td><?= $us['ke1Angin0']; ?></td>
                        <td><?= $us['ke1Angin10']; ?></td>
                        <td><?= $us['suhuUdara1']; ?></td>
                        <td><?= $us['Rh1']; ?></td>
                        <td><?= $us['suhuAir1']; ?></td>
                        <td><?= $us['Eva1']; ?></td>
                        <td><?= $us['Ch2']; ?></td>
                        <td><?= $us['ke2Angin0']; ?></td>
                        <td><?= $us['ke2Angin10']; ?></td>
                        <td><?= $us['suhuUdara2']; ?></td>
                        <td><?= $us['Rh2']; ?></td>
                        <td><?= $us['suhuAir2']; ?></td>
                        <td><?= $us['Eva2']; ?></td>
                        <td><?= $us['Ch3']; ?></td>
                        <td><?= $us['ke3Angin0']; ?></td>
                        <td><?= $us['ke3Angin10']; ?></td>
                        <td><?= $us['suhuUdara3']; ?></td>
                        <td><?= $us['Rh3']; ?></td>
                        <td><?= $us['suhuAir3']; ?></td>
                        <td><?= $us['Eva3']; ?></td>
                        <td><?= $us['Ch4']; ?></td>
                        <td><?= $us['Eva4']; ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>