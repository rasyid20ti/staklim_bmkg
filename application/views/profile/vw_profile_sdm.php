<link href="<?php echo base_url('assets2/'); ?>css/p_sdm.css" rel="stylesheet">

<body>
	<div class=" bg-white p-0">
		<div class="headerSdm">
			<div class="container-fluid">
				<div class='row'>
					<div class='col' style="padding-top:100px;">
						<center>
							<h5>SUMBER DAYA MANUSIA </h5>
							<h6>Struktur Organisasi</h6>
						</center>
					</div>
					<div class='col' style="padding-left: 150px;">
						<img src="<?= base_url('assets2/images/icon/SDM.png'); ?>" style="float:right;width: 400px;height: 255px;" />
					</div>
				</div>
			</div>
		</div>

		<!-- Menu Start -->
		<div class="container-xxl py-5">
			<div class="container">
				<div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
					<ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
						<li class="nav-item">
							<a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
								<div class="ps-3">
									<small class="text-body">Kepala Stasiun</small>
								</div>
							</a>
						</li>
						<li class="nav-item">
							<a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
								<div class="ps-3">
									<small class="text-body">Kelompok Jabatan Fungsional</small>
								</div>
							</a>
						</li>
						<li class="nav-item">
							<a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-3">
								<div class="ps-3">
									<small class="text-body">PPNPN</small>
								</div>
							</a>
						</li>
						<li class="nav-item">
							<a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-4">
								<div class="ps-3">
									<small class="text-body">Alumni Pegawai</small>
								</div>
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<div id="tab-1" class="tab-pane fade show p-0 active">
							<div class="row g-4">
								<section id="us">
									<div class="container">
										<div class="row justify-content-center">
											<?php foreach ($pimpinan as $pim) : ?>
												<div class="col-lg-3 col-md-6">
												<!-- <div class="col-sm"> -->
													<div class="member">
														<div class="member-img">
															<img src="<?= $pim['foto']; ?>" class="img-fluid" alt="" style="witdh:229px; height:343px">
														</div>
														<div class="member-info">
															<h4><?= $pim['nama']; ?></h4>
															<span><?= $pim['jabatan']; ?></span>
															<div class="social-links">
																<a href="<?= base_url('profile/profile_detail/') . encrypt_url($pim['id']); ?>"><i class="fas fa-circle-info"></i></a>
															</div>
														</div>
													<?php endforeach; ?>
													</div>
												</div>
										</div>
									</div>
								</section>
							</div>
						</div>
						<div id="tab-2" class="tab-pane fade show p-0">
							<div class="row g-4">
								<section id="us">
									<div class="container">
										<div class="row justify-content-center">
											<?php foreach ($pegawai as $peg) : ?>
												<div class="col-lg-3 col-md-6">
													<div class="member">
														<div class="member-img">
															<img src="<?= $peg['foto']; ?>" class="img-fluid" alt="" style="witdh:229px; height:343px">
														</div>
														<div class="member-info">
															<h4><?= $peg['nama']; ?></h4>
															<span><?= $peg['jabatan']; ?></span>
															<div class="social-links">
																<a href="<?= base_url('profile/profile_detail/') . encrypt_url($peg['id']); ?>"><i class="fas fa-circle-info"></i></a>
															</div>
														</div>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									</div>
								</section>
							</div>
						</div>

						<div id="tab-3" class="tab-pane fade show p-0">
							<div class="row g-4">
								<section id="us">
									<div class="container">
										<div class="row justify-content-center">
											<?php foreach ($ppnpn as $ppn) : ?>
												<div class="col-lg-3 col-md-6">
													<div class="member">
														<div class="member-img">
															<img src="<?= $ppn['foto']; ?>" class="img-fluid" alt="" style="witdh:229px; height:343px">
														</div>
														<div class="member-info">
															<h4><?= $ppn['nama']; ?></h4>
															<span><?= $ppn['jabatan']; ?></span>
															<div class="social-links">
																<a href="<?= base_url('profile/profile_detail/') . encrypt_url($ppn['id']); ?>"><i class="fas fa-circle-info"></i></a>
															</div>
														</div>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									</div>
								</section>
							</div>
						</div>
						<div id="tab-4" class="tab-pane fade show p-0">
							<div class="row g-4">
								<section id="us">
									<div class="container">
										<div class="row justify-content-center">
											<?php foreach ($alumni as $alum) : ?>
												<div class="col-lg-3 col-md-6">
													<div class="member">
														<div class="member-img">
															<img src="<?= $alum['foto']; ?>" class="img-fluid" alt="" style="witdh:229px; height:343px">
														</div>
														<div class="member-info">
															<h4><?= $alum['nama']; ?></h4>
															<span><?= $alum['jabatan']; ?></span>
															<div class="social-links">
																<a href="<?= base_url('profile/profile_detail/') . encrypt_url($alum['id']); ?>"><i class="fas fa-circle-info"></i></a>
															</div>
														</div>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Menu End -->


		<!-- Credits: https://www.markuptag.com/bootstrap-4-meet-the-team-section-example/ -->