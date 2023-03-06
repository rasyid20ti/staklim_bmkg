<link href="<?php echo base_url('assets/'); ?>css/normalIklim.css" rel="stylesheet">

<body>
    <div class=" bg-white p-0">
        <!-- Navbar End -->
        <div class=" py-1 bg-dark headhead mb-5">
            <div class="text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Normal Iklim Riau</h1>
            </div>
        </div>
        <link rel='stylesheet' id='ultimate_blocks-cgb-style-css-css' href='https://iklim.sumsel.bmkg.go.id/wp-content/uploads/ultimate-blocks/blocks.style.build.css?ver=2.4.11' type='text/css' media='all' />



        <div id="main" class="clearfix">
            <div class="inner-wrap clearfix">

                <div id="primary">
                    <div id="content" class="clearfix">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-curah-tab" data-toggle="tab" href="#nav-curahHujan" role="tab" aria-controls="nav-curahHujan" aria-selected="true">Normal Curah Hujan</a>
                                <a class="nav-item nav-link" id="nav-angin-tab" data-toggle="tab" href="#nav-angin" role="tab" aria-controls="nav-angin" aria-selected="false">Arah Angin</a>
                                <a class="nav-item nav-link" id="nav-temperatur-tab" data-toggle="tab" href="#nav-temperatur" role="tab" aria-controls="nav-temperatur" aria-selected="false">Temperatur</a>
                                <a class="nav-item nav-link" id="nav-kelembapan-tab" data-toggle="tab" href="#nav-kelembapan" role="tab" aria-controls="nav-kelembapan" aria-selected="false">Kelembapan</a>
                            </div>
                        </nav>
                        <!-- <article id="post-4637" class="post-4637 page type-page status-publish has-post-thumbnail hentry">
                            <header class="entry-header">
                                <h3 class="entry-title">
                                  <button class="btn1">Normal Curah Hujan</button>  </h3>
                                  <a href="#" class button="btn1">Normal Curah Hujan </a>
                                <h3 class="entry-title"> Angin</h3>
                            </header> -->
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-curahHujan" role="tabpanel" aria-labelledby="nav-curahHujan">
                                <div class="card shadow mb-4">
                                <div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead class="table-dark">
										    <tr>
											    <td><center>No</td>
												<td><center>ID Pos</td>
												<td><center>Nama Pos</td>
												<td><center>Kabupaten</td>
												<td><center>Kecamatan</td>
												<td><center>Aksi</td>
											</tr>
										</thead>
										<tbody>
										    <?php $i = 1; foreach ($curahHujan as $us) : ?>
                                            <tr>
											    <td><center><?= $i; ?>.</td>
												<td><center><?= $us['id_pos']; ?></td>
												<td><?= $us['nama_pos']; ?></td>
												<td><?= $us['kabupaten']; ?></td>
												<td><?= $us['kecamatan']; ?></td>
												<td><center><a href="<?= base_url('service/curahhujan_chart/') . $us['id_pos']; ?>"class="badge badge-info">Lihat Grafik</a></td>
                                            </tr>
											<?php $i++; endforeach; ?>
										</tbody>
									</table>
								</div>
                                </div>
                            </div>
                    <!-- End of Curah Hujan -->
                    <!-- Start of Arah Angin -->
                        <div class="tab-pane fade show" id="nav-angin" role="tabpanel" aria-labelledby="nav-angin">
                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                <div class="tab-pane fade show" id="nav-angin" role="tabpanel" aria-labelledby="nav-angin">
                                    <div class="card shadow mb-4">
                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- End of Arah Angin -->
                    <!-- Start of Temperatur -->
                        <div class="tab-pane fade show active" id="nav-temperatur" role="tabpanel" aria-labelledby="nav-temperatur">

                        </div>
                    <!-- End of Temperatur -->
                    <!-- Start of Kelembapan -->
                    <div class="tab-pane fade show active" id="nav-kelembapan" role="tabpanel" aria-labelledby="nav-kelembapan">

                    </div>
                    <!-- End of Kelembapan -->
                </div><!-- #content -->
            </div><!-- #primary -->
        </div>
        <script type='text/javascript' src='https://iklim.sumsel.bmkg.go.id/wp-content/plugins/ultimate-blocks/src/blocks/content-toggle/front.build.js?ver=2.4.11' id='ultimate_blocks-content-toggle-front-script-js'></script>

        