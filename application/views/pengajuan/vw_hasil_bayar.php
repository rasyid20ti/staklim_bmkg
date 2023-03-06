<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="<?php echo base_url('assets2/'); ?>css/bayar.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<body>
    <div class=" bg-white p-0">
        <div class="headerBayar">
            <div class="container-fluid">
                <div class='row'>
                    <div class="col" style="padding-top:100px; padding-left:80px;">
                        <center>
                            <h5>&nbsp;&nbsp;&nbsp;Cek Pengajuan Pembayaran</h5>
                        </center>
                    </div>
                    <div class='col' style="padding-left: 10px;">
                        <img src="<?= base_url('assets2/images/icon/hasilbayar.png'); ?> " style="width:450px; height:300px" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card-body">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4 text-center">
                    <!-- <h3>Hasil</h3> -->
                    <?php if (!empty($token)) { ?>
                        <p style="color:orange"><b>Menampilkan data dengan kata kunci : "<?= htmlentities($token); ?>"</b></p>
                    <?php } ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama </th>
                                <th scope="col">Informasi</th>
                                <th scope="col">Unsur</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($umum as $row) { ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $row->nama ?></td>
                                    <td><?= $row->informasi ?></td>
                                    <td><?= $row->unsur ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card-body">
            <!-- <h2>INPUT DATA</h2> -->
            <form action="<?= base_url('Bayar/upload'); ?>" method="POST" enctype="multipart/form-data">
                <!-- <input type="hidden" name="token" value="" class="form-control form-control-user" id="token" placeholder="Masukkan kembali token Anda"> -->
                <div class="form-group">
                    <label for="inputAddress2">Token Anda</label>
                    <input type="text" name="token" value="<?= htmlspecialchars($_POST['token']); ?>" class="form-control form-control-user" id="token" placeholder="Masukkan kembali token Anda">
                </div>
                <div class="form-group">
                    <label for="surat0">Upload Bukti Pembayaran</label>
                    <div class="custom-file">
                        <input type="file" name="bayar" class="custom-file-input" id="bayar">
                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="survey">Isi Survey <a href="https://bit.ly/survei_sem1">berikut</a> sebelum mengisi
                        Form Pengajuan Data dan Informasi. <i>Screenshoot</i> hasil Survey, masukkan ke drive, dan input link drive ke form berikut ini.
                    </label>
                    <div class="custom-file">
                        <input type="file" name="survey" class="custom-file-input" id="survey">
                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                    <!-- <div class="form-group">
                    <label for="inputAddress2">Link Drive Upload Bukti Bayar</label>
                    <a type="submit" class="btn btn-primary float-right" href="https://forms.gle/Rioh6oQPzNom3VEr9"> Upload Bukti Bayar </a>
                </div> -->
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>