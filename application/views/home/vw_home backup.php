<link href="<?php echo base_url('assets2/'); ?>css/sponsor.css" rel="stylesheet">

<body>
	<div class="bg-white p-0">
		<div>
			<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<?php
					$sliderCount = $this->Slider_model->getAll();
					$count = count($sliderCount);
					$angka = 0;
					$i = 1;
					// echo $count;
					foreach ($slider as $sl) :
						if ($angka == 0) {
							echo '<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="' . $angka . '" class="active" aria-current="true" aria-label="Slide ' . $i . '"></button>' . "\n";
						} else {
							echo '<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="' . $angka . '" aria-label="Slide ' . $i . '"></button>' . "\n";
						}
						$angka++;
						$i++;
					endforeach; ?>
					<!-- 
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
				</div>
				<div class="carousel-inner">
					<?php
					$angka1 = 0;
					foreach ($slider as $sl) :
						if ($angka1 == 0) {
							echo '<div class="carousel-item active" style="background-image: url(' . $sl["fotoSlider"] . ')"></div>' . "\n";
						} else {
							echo '<div class="carousel-item" style="background-image: url(' . $sl["fotoSlider"] . ')"></div>' . "\n";
						}
						$angka1++;
					endforeach; ?>
					<!-- <div class="carousel-item active" style="background-image: url('<?php // $sl['fotoSlider'] 
																							?>')"></div> -->
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
		<!-- Perkiraan Cuaca -->
		<div class="container wow fadeInUp" data-wow-delay="0.1s">
			<div class="container">
				<?php require_once(APPPATH . 'views/api/cuaca.php'); ?>
				<div style="margin: 0 0 13px 0;">
					<p style="font-size: 16px; margin: 0 0 -2px;padding-bottom: 5px;display: inline-block;border-bottom: 2px solid #72c02c">Prakiraan Cuaca, <?= $dataUpdate; ?>
				</div>
				<div class="brand-carousel owl-carousel no-space-carousel-block" style="background: #fff; padding: 10px; box-shadow: #ddd -1px 2px 1px;">
					<?php
					for ($i = 0; $i <= 11; $i++) {
					?>
						<div class="carousel-block-table prakicu-kota" style="opacity: 1;display: block;">
							<div class="service-block">
								<h2 class="kota"><?= $daerah[$i]; ?></h2>
								<p>12:00 WIB</p>
								<center><img src="<?= base_url('assets2/images/icon-cuaca/' . $codeCuaca[$i] . '.png'); ?>" style="width:64px;"></center>
								<p><?= $cuaca[$i]; ?></p>
								<h2 class="heading-md"><?= $temperatur[$i]; ?>&deg;C</h2>
								<p><?= $humidity[$i]; ?>%RH</p>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- End Perkiraan Cuaca -->
		<!-- Service Start -->
		<!-- END INI BRO SANGAT -->
		<div class="container-fluid posisi-berita">
			<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
				<h5 class="text-center text-tambahan fw-normal fs-3">Layanan Kami</h5>
			</div>
			<br>
			<div class="container">
				<div class="row g-4">
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="service-item rounded pt-3">
							<a href="<?= base_url('service/tanaman'); ?>">
								<div class="p-4">
									<i class="fa-3x fas fa-tractor text-tambahan mb-4"></i>
									<h5>Agroklimat</h5><br>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
						<div class="service-item rounded pt-3">
							<a href="<?= base_url('service/iklim'); ?>">
								<div class="p-4">
									<i class=" fa-3x fas fa-cloud-sun-rain text-tambahan mb-4"></i>
									<h5>Perubahan Iklim</h5><br>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
						<div class="service-item rounded pt-3">
							<a href="<?= base_url('service/banjir'); ?>">
								<div class="p-4">
									<i class=" fa-3x fas fa-water text-tambahan mb-4"></i>
									<h5>Informasi Hidrometeorologi</h5>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
						<div class="service-item rounded pt-3">
							<!-- <a href="<?= base_url('service/aviation'); ?> "> -->
								<a href="http://aviation.bmkg.go.id/peta_visibility_animasi/">
								<div class="p-4">
									<i class="fa-3x fas fa-plane-departure text-tambahan mb-4"></i>
									<h5>Layanan Cuaca Penerbangan</h5>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="service-item rounded pt-3">
							<a href="<?= base_url('service/lingkungan'); ?> ">
								<div class="p-4">
									<i class="fa-3x fas fa-seedling text-tambahan mb-4"></i>
									<h5>Informasi Kualitas Udara</h5>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
						<div class="service-item rounded pt-3">
							<a href="<?= base_url('service/maritim'); ?>">
								<div class="p-4">
									<i class="fa-3x fas fa-ship text-tambahan mb-4"></i>
									<h5>Informasi Cuaca Maritim</h5>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
						<div class="service-item rounded pt-3">
							<a href="<?= base_url('service/violet'); ?>">
								<div class="p-4">
									<i class=" fa-3x fas fa-cloud-sun text-tambahan mb-4"></i>
									<h5>Informasi Multisektor</h5><br>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
						<div class="service-item rounded pt-3">
							<a href="<?= base_url('service/hujansuhu'); ?>">
								<div class="p-4">
									<i class="fa-3x fas fa-rainbow text-tambahan mb-4"></i>
									<h5>Proyeksi Iklim</h5><br>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
						<div class="service-item rounded pt-3">
							<a href="<?= base_url('service/energi'); ?>">
								<div class="p-4">
									<i class="fa-3x fas fa-sun text-tambahan mb-4"></i>
									<h5>Potensi Energi Surya</h5><br>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
						<div class="service-item rounded pt-3">
							<a href="<?= base_url('service/iklimriau'); ?>">
								<div class="p-4">
									<i class="fa-3x fas fa-smog text-tambahan mb-4"></i>
									<h5>Normal Iklim Riau</h5><br>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
						<div class="service-item rounded pt-3">
							<a href="<?= base_url('service/dinamika'); ?>">
								<div class="p-4">
									<i class="fa-3x fas fa-globe text-tambahan mb-4"></i>
									<h5>Dinamika Atmosfer dan Laut</h5>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
						<div class="service-item rounded pt-3">
							<a href="<?= base_url('service/pengindraan'); ?>">
								<div class="p-4">
									<i class="fa-3x fas fa-satellite text-tambahan mb-4"></i>
									<h5>Pengindraan Jauh</h5><br>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
						<div class="service-item rounded pt-3">
							<a href="<?= base_url('service/dasarian/'); ?>">
								<div class="p-4">
									<i class="fa-3x fas fa-cloud-showers-water text-tambahan mb-4"></i>
									<h5>Info Iklim Dasarian Riau</h5>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
						<div class="service-item rounded pt-3">
							<a href="<?= base_url('media/sli'); ?>">
								<div class="p-4">
									<i class="fa-3x fas fa-graduation-cap text-tambahan mb-4"></i>
									<h5>Sekolah Lapang Iklim</h5><br>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
						<div class="service-item rounded pt-3">
							<a href="<?= base_url('service/hujan'); ?>">
								<div class="p-4">
									<i class="fa-3x fas fa-cloud-showers-heavy text-tambahan mb-4"></i>
									<h5>Prakiraan Curah Hujan</h5><br>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
						<div class="service-item rounded pt-3">
							<a href="<?= base_url('service/hutan'); ?>">
								<div class="p-4">
									<i class="fa-3x fas fa-fire text-tambahan mb-4"></i>
									<h5>Peringatan Kebakaran Hutan</h5>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Service End -->
		<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
			<div class="container">
				<div class="text-center">
					<h5 class=" text-center text-tambahan fw-normal fs-3">Berita</h5>
				</div>
				<br>
				<div class="owl-carousel testimonial-carousel">
					<?php foreach ($berita as $be) : ?>
						<div class="testimonial-item bg-transparent border rounded p-4">
							<i class="fas fa-bullhorn fa-2x text-tambahan mb-3"></i>
							<p><?= $be['sub']; ?></p>
							<div class="d-flex align-items-center">
								<img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url('assets2/img/no_photo.png'); ?>" style="width: 50px; height: 50px;">
								<div class="ps-3">
									<h5 class="mb-1"><?= $be['title']; ?></h5>
									<small><?= date('d F Y', $be['date_created']); ?></small>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial End -->

	<!-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
			<div class="container">
				<div class="text-center">
					<h5 class=" text-center text-tambahan fw-normal fs-3">Kerjasama</h5>
				</div>
				<div class="brand-carousel section-padding owl-carousel">
					<div class="single-logo">
						<img src="<?= base_url('assets2/img/Logo_bmkg_hitam.png'); ?>" alt="">
					</div>
					<div class="single-logo">
						<img src="<?= base_url('assets2/img/logo_pcr.png'); ?>" alt="">
					</div>
					<div class="single-logo">
						<img src="<?= base_url('assets2/img/Logo_bmkg_hitam.png'); ?>" alt="">
					</div>
					<div class="single-logo">
						<img src="<?= base_url('assets2/img/logo_pcr.png'); ?>" alt="">
					</div>
					<div class="single-logo">
						<img src="<?= base_url('assets2/img/Logo_bmkg_hitam.png'); ?>" alt="">
					</div>
					<div class="single-logo">
						<img src="<?= base_url('assets2/img/logo_pcr.png'); ?>" alt="">
					</div>
				</div>
			</div>
		</div> -->
	<script>
		$('.brand-carousel').owlCarousel({
			items: [5],
			itemsDesktop: [1200, 4],
			itemsDesktopSmall: [992, 3],
			itemsTablet: [600, 2],
			itemsMobile: [479, 1],
			stagePadding: 0,
			margin: 0,
			loop: true,
			autoplay: true,
			width: 'auto',
			dots: false,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 3
				},
				1000: {
					items: 5
				}
			}
		})
	</script>