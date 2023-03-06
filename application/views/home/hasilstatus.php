<link href="<?php echo base_url('assets2/'); ?>css/bayar.css" rel="stylesheet">

<body>
	<div class=" bg-white p-0">
		<!-- <div class=" py-1 bg-dark headhead mb-5">
            <div class="text-center my-5 pt-5 pb-4">
                <h1 class="display-4 text-white mb-3 animated slideInDown">Cek Status Pengajuan</h1>
            </div>
        </div> -->
		<div class=" bg-white p-0">
			<div class="headerBayar">
				<div class="container-fluid">
					<div class='row'>
						<div class="col" style="padding-top:100px; padding-left:80px;">
							<center>
								<h5>&nbsp;&nbsp;&nbsp;Cek Status Pengajuan</h5>
							</center>
						</div>
						<div class='col' style="padding-left: 10px;">
							<img src="<?= base_url('assets2/images/icon/hstatus.png'); ?> "
								style="width:450px; height:300px" />
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="card-body">
            <!-- <div class="container"> -->
			<div class="row">
				<div class="col-xs-4 col-xs-offset-4 text-center">
					<!-- <h3>Hasil</h3> -->
					<?php if (!empty($token)) { ?>
					<p style="color:orange"><b>Menampilkan data dengan kata kunci : "<?= htmlentities($token); ?>"</b>
					</p>
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
                            foreach ($ajuan as $row) { ?>
							<tr>
								<th scope="row"><?= $no++ ?></th>
								<td><?= $row->nama ?></td>
								<td><?= $row->informasi ?></td>
								<td><?= $row->unsur ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
                            <!-- </div> -->


					<div class="container">
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div id="tracking-pre"></div>
								<div id="tracking">
									<div class="text-center tracking-status-intransit">
										<p class="tracking-status text-tight">Recording Status Pengajuan</p>
									</div>
									<div class="tracking-list">
										<?php
                                        $no = 1;
                                        foreach ($search_result as $row) { ?>
										<div class="tracking-item">
											<div class="tracking-icon status-intransit">
												<svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
													<path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"> </path>
												</svg>
												<!-- <i class="fas fa-circle"></i> -->
											</div>
											<div class="tracking-date"><?= $row->create_at ?></span></div>
											<div class="tracking-content"><?= $row->status ?> </span></div>
											<?php if (empty($row->pesan) && !empty($row->link)) { ?>
											<div class="tracking-content"><a href="<?= $row->link ?>" target="_blank"><?= $row->link ?></span></div>
											<?php
                                            } else if (!empty($row->pesan) && !empty($rown->link)) { ?>
											<div class="tracking-content"><a href="<?= $row->link ?>" target="_blank"><?= $row->link ?></span></div>
											<div class="tracking-content"><?= $row->pesan ?> </span></div>
											<?php
                                            } else { ?>
											<div class="tracking-content"><?= $row->pesan ?></span></div> <?php  } ?>
										</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
