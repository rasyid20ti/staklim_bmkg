<body>
	<div class=" bg-white p-0">
		<div class=" py-1 bg-dark headlayanan mb-3">
			<div class="text-left my-5 pt-4 pb-4">
				<h1 class="display-4 text-white mb-5 animated slideInDown">&nbsp;&nbsp;&nbsp;&nbsp;Permintaan Data</h1>
				<h4 class="text-white mb-5 animated slideInDown">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alur Pelayanan Mengenai Mekanisme Pelayanan PNBP Stasiun 
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Klimatologi Riau dan Jenis Form Pengajuan.</h4>
			</div>
		</div>
		<section id="tabs">
			<div>
				<div class="row">
					<div class="col-xs-12 ">
						<nav>
							<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
								<a class="nav-item nav-link active" id="nav-hotspot-tab" data-toggle="tab" href="#nav-hotspot" role="tab" aria-controls="nav-hotspot" aria-selected="true">Alur Pelayanan</a>
								<a class="nav-item nav-link" id="nav-asap-tab" data-toggle="tab" href="#nav-asap" role="tab" aria-controls="nav-asap" aria-selected="false">Layanan Rp 0,-</a>
							</div>
						</nav>
						<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-hotspot" role="tabpanel" aria-labelledby="nav-hotspot">
								<center>
									<img src="<?= base_url('assets2/img/AlurPengajuan.png'); ?>" class="img-responsive" alt="Responsive image" width="80%" height="50%" />
								</center>
							</div>
							<div class="tab-pane fade" id="nav-asap" role="tabpanel" aria-labelledby="nav-asap">
								<center>
									<img src="<?= base_url('assets2/img/gratis_layanan.png'); ?>" class="img-responsive" alt="Responsive image" width="80%" height="50%" />
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- About END -->

		<!-- ======= Features Section ======= -->
		<div class="py-5">
			<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
				<h5 class=" text-center text-tambahan fw-normal fs-3">Jenis Pengajuan</h5>
			</div>
			<br>
			<div class="container">
				<div class="row g-4">
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="service-item rounded pt-3">
							<div class="p-4">

								<i class="fa-3x fas fa-building text-tambahan mb-4"></i>
								<a href="<?= base_url('home/umum'); ?>">
									<h5>Form Layanan Umum</h5>
								</a>
								<p>Merupakan Layanan Jasa MKKUG yang Berbayar</p><br><br><br>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="service-item rounded pt-3">
							<div class="p-4">

								<i class="fa-3x fas fa-building text-tambahan-2 mb-4"></i>
								<a href="<?= base_url('pengajuan/instansi'); ?>">
									<h5>Form Layanan Instansi Kerjasama</h5>
								</a>
								<p>Merupakan Layanan Jasa MKKuG Dengan Tarif 0 Rupiah untuk instansi kerjasama BMKG</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
						<div class="service-item rounded pt-3">
							<div class="p-4">
								<i class=" fa-3x fas fa-school text-tambahan-3 mb-4"></i>
								<a href="<?= base_url('home/mahasiswa'); ?>">
									<h5>Form Layanan Mahasiswa</h5>
								</a>
								<p>Merupakan Layanan Jasa MKKuG Dengan Tarif 0 Rupiah untuk Pendidikan dan Penelitian
									Non-Komersil</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
						<div class="service-item rounded pt-3">
							<div class="p-4">
								<i class=" fa-3x fas fa-dolly-flatbed text-tambahan-4 mb-4"></i>
								<a href="<?= base_url('home/cekStatus'); ?>">
									<h5>Cek Status Layanan </h5>
								</a>
								<p>Mengecek status Layanan MKKuG menggunakan token yang telah diberikan </p><br><br>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
						<div class="service-item rounded pt-3">
							<div class="p-4">
								<i class=" fa-3x fas fa-coins text-tambahan-6 mb-4"></i>
								<a href="<?= base_url('home/tarif'); ?>">
									<h5>Tarif PNBP</h5>
								</a>
								<p>Daftar Tarif PNBP Sesuai PP Nomor 47 Tahun 2018</p><br><br><br>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
						<div class="service-item rounded pt-3">
							<div class="p-4">
								<i class=" fa-3x fas fa-credit-card text-tambahan-5 mb-4"></i>
								<a href="<?= base_url('home/bayar'); ?>">
									<h5>Pembayaran</h5>
								</a>
								<p>Melakukan Pembayaran untuk Layanan Jasa MKKuG Berbayar</p><br><br>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
						<div class="service-item rounded pt-3">
							<div class="p-4">
								<i class=" fa-3x fas fa-file-pen text-tambahan-8 mb-4"></i>
								<?php foreach ($survei as $us) : ?>
									<a href="<?= $us['link']; ?>" target="_blank">
										<h5>Survey</h5>
									<?php endforeach; ?>
									</a>
									<p>Pengisian Survey bedasarkan kualitas pelayanan STAKLIM Riau</p><br><br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Service End -->