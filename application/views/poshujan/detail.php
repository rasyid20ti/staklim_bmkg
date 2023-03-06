<link href="<?php echo base_url('assets2/'); ?>css/alat.css" rel="stylesheet">

<style>
    #alat {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #alat td,
    #alat th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #alat tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #alat tr:hover {
        background-color: #ddd;
    }

    #alat th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }

    #title {
        width: 50%;
        font-style: bold;
    }
</style>

<body>
    <div class="headerAlat">
        <div class="container">
            <h3>Ketersediaan Alat Observasi</h3>
        </div>
    </div>
    <div style="margin-top:30px;"></div>
    <!-- Navbar End -->
    <main class="py-2 container-fluids">
        <div class="container mt-8">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3><strong><?= $alat['nama_pos']; ?></strong></h3>
                        </div>
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-detail-tab" data-toggle="tab" href="#nav-detail" role="tab" aria-controls="nav-detail" aria-selected="true">Metadata Alat</a>
                                <a class="nav-item nav-link" id="nav-grafik-tab" data-toggle="tab" href="#nav-grafik" role="tab" aria-controls="nav-grafik" aria-selected="false">Normal Curah Hujan</a>
                            </div>
                        </nav>
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-detail" role="tabpanel" aria-labelledby="nav-detail">
                                <div class="card-body">
                                    <table id="alat" class="table table-sm">
                                        <tbody>
                                            <tr>
                                                <td id="title"><strong>Nama Pos</strong></td>
                                                <td><?= $alat['nama_pos']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Jenis Alat</strong></td>
                                                <td><?= $alat['jenis_alat']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Kode Alat</strong></td>
                                                <td><?= $alat['kode_pos']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>ID Pos</strong></td>
                                                <td><?= $alat['nomor_pos']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Latitude</strong></td>
                                                <td><?= $alat['lintang']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Longitude</strong></td>
                                                <td><?= $alat['bujur']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Elevasi (dpl)</strong></td>
                                                <td><?= $alat['elevasi']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Desa/Kelurahan</strong></td>
                                                <td><?= $alat['desa']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Kecamatan</strong></td>
                                                <td><?= $alat['kecamatan']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Kabupaten/Kota</strong></td>
                                                <td><?= $alat['kabupaten']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Provinsi</strong></td>
                                                <td><?= $alat['provinsi']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Kondisi Alat</strong></td>
                                                <td><?= $alat['kondisi_alat']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Kepemilikan Alat</strong></td>
                                                <td><?= $alat['kepemilikan_alat']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Nama Pengamat</strong></td>
                                                <td><?= $alat['nama_penanggungjawab']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Jabatan</strong></td>
                                                <td><?= $alat['jabatan']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Status Pengiriman Data</strong></td>
                                                <td><?= $alat['pengiriman_data']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Ketersediaan Data</strong></td>
                                                <td><?= $alat['ketersediaan_data']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Keterangan Alat</strong></td>
                                                <td><?= $alat['keterangan_alat']; ?></td>
                                            </tr>
                                            <br>
                                            <!-- <tr>
                                                    <td><strong>Gambar Alat</strong></td>
                                                    <td><img src="<?= $alat['foto']; ?>" width="128" height="128"></td>
                                                </tr> -->

                                        </tbody>
                                    </table>
                                    <div class="card-footer">
                                        <center>
                                            <strong>Gambar Alat</strong><br>
                                            <img src="<?= $alat['foto']; ?>" width="200" height="200">
                                        </center>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-grafik" role="tabpanel" aria-labelledby="nav-grafik">
                                <iframe src='https://staklim-riau.bmkg.go.id/visual/chart_ch?namapos=<?= $alat['nama_pos']; ?>' style='border:none;width:100%;height:650px'></iframe>
                                <br>
                                <h4>Keterangan</h4>
                                <!-- <i class="icon" style="background-image: url(<?php echo base_url('assets2/'); ?>./img/merah.png);background-repeat: no-repeat;"></i><span> Garis Batas Curah Hujan</span><br> -->
                                <img src="<?= base_url('assets2/img/merah.png'); ?>" style="width:15px; height:5px;">&nbsp;<span>Garis Batas Curah Hujan</span><br>
                                <span>Garis Batas > 150 mm, Periode Musim Hujan.</span><br>
                                <span>Garis Batas < 150 mm, Periode Musim Kemarau.</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="<?= base_url('Service/service'); ?>" class="btn btn-link">Kembali</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Lokasi</div>
                        <div class="card-body" id="mapid"></div>
                    </div>
                </div> -->

                <!-- <div class="col-md-6 mt-2">
                        <div class="card">
                            <div class="card-header">Gambar</div>
                            <img src="" style="height: 399px">
                        </div>
                    </div> -->

            </div>
        </div>
    </main>
    </div>
    </div>
</body>