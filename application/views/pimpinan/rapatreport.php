<!DOCTYPE html>
<html lang="en">
<?php foreach ($rapat as $r) :  ?>

    <head>
        <meta charset="UTF-8">
        <title><?= $title; ?></title>
        <link href="<?= base_url('sb-admin') ?>/css/sb-admin-2.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="row">
            <div class="col text-center">
                <h3 class="h3 text-dark"><?= $title; ?></h3>
            </div>
        </div>
        <hr>
        <div class="row">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <td>Tanggal Rapat</td>
                    <td><?= date('d F Y', $rapat['tanggal']); ?></td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td><?= $rapat['rapat']; ?></td>
                <tr>
                    <td>Notulen Rapat</td>
                    <td><?= $rapat['isi']; ?></td>
                </tr>
            </table>
        </div>
    </body>

</html>
<?php endforeach; ?>