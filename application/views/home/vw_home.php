<?php

?>
<link href="<?php echo base_url('assets2/'); ?>css/sponsor.css" rel="stylesheet">
<link href="<?php echo base_url('assets2/'); ?>css/cuaca.css" rel="stylesheet">
<style>
	.prakicu-kota .bg-cuaca {
		background-repeat: no-repeat;
		background-position: center center;
		background-size: cover;
		height: 100%;
		width: 100%;
		position: relative;
	}

	.prakicu-kota .service-block {
		max-height: 275px;
	}

	.cerah-berawan-siang {
		background: url(<?= base_url('assets2/images/icon-cuaca/cerah-berawan-siang.jpg') ?>);
		color: white;
	}

	.cerah-berawan-malam {
		background: url('https://bmkg.go.id/asset/img/bg-cuaca/cerah-berawan-malam.jpg');
		color: white;
	}
</style>

<body>
	<div class="bg-white p-0">
		<div>
			<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
				<!-- carousel -->
				<div class="carousel-indicators">
					<?php
					$sliderCount = $this->Slider_model->getAll();
					$count = count($sliderCount);
					$angka = 0;
					$i = 1;
					foreach ($slider as $sl) :
						if ($angka == 0) {
							echo '<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="' . $angka . '" class="active" aria-current="true" aria-label="Slide ' . $i . '"></button>' . "\n";
						} else {
							echo '<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="' . $angka . '" aria-label="Slide ' . $i . '"></button>' . "\n";
						}
						$angka++;
						$i++;
					endforeach; ?>
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
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div> <!-- ./carousel -->
		</div>
		<!-- Perkiraan Cuaca -->
		<div style="background: #f7f7f7;padding-top:10px;padding-bottom:10px;">
			<div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
				<div class="container">
					<div class="row">
						<div class="col-md-8 md-margin-bottom-20">
							<?php
							$tz = 'Asia/Jakarta';
							$dt = new DateTime("now", new DateTimeZone($tz));
							$timestamp = $dt->format('G');

							if ($timestamp > '07') {
								$jamCuaca = '12:00';
							}
							if ($timestamp > '17') {
								$jamCuaca = '18:00';
							}
							
							$getCuaca = file_get_contents('https://staklim-riau.bmkg.go.id/API/cuaca');
							$json = json_decode($getCuaca, TRUE);
							?>
							<div style="margin: 0 0 13px 0;">
								<p style="font-size: 16px;font-family: 'Roboto Slab', sans-serif;margin: 0 0 -2px;padding-bottom: 5px;display: inline-block;border-bottom: 2px solid #72c02c"> Prakiraan Cuaca, <?= $json[0]['dataUpdate']; ?> </p>
							</div>
							<div class="brand-carousel owl-carousel no-space-carousel-block" style="background: #fff; padding: 10px; box-shadow: #ddd -1px 2px 1px;">
								<?php
								for ($i = 0; $i <= 11; $i++) {
								?>
									<div class="carousel-block-table prakicu-kota" style="opacity: 1;display: block;">
										<div class="service-block bg-cuaca <?= $json[0]['background'] ?>">
											<h2 class="kota"><?= $json[0]['kecamatan'][$i] ?></h2>
											<p><?= $json[0]['jamCuaca'] ?></p>
											<center><img src="<?php echo base_url('assets2/images/icon-cuaca/' . $json[0]['kodeCuaca'][$i] . '.png'); ?>" style="width:64px;"></center>
											<p><?= $json[0]['cuaca'][$i] ?></p>
											<h2 class="heading-md"><?= $json[0]['temperatur'][$i] ?>&deg;C</h2>
											<p><?= $json[0]['humidity'][$i] ?>%RH</p>
										</div>
									</div>
								<?php } ?>
							</div>
							<div class="peringatan-dini-home row" style="margin: 10px 0 13px 0;height:auto;">
								<div class="peringatan-dini-home-head col-md-2 no-padding">
									<h4><span></span>Peringatan Dini</h4>
								</div>
								<div class="col-md-10 peringatan-dini-home-bg">
									<strong> <?php $date = date('Y-m-d');
												echo format_hari_tanggal($date); ?> </strong>
									<?php
									// $getPengDin = file_get_contents('https://perawang.net/api/peringatanDini.json');
									$getPengDin = file_get_contents('https://staklim-riau.bmkg.go.id/API/peringatandini');
									$pengDin = json_decode($getPengDin, TRUE);
									echo $pengDin[0]['pdini'];
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 gempabumi-detail">
						<div style="margin: 0 0 13px 0;">
							<p style="font-size: 16px; margin: 0 0 -2px;padding-bottom: 5px;display: inline-block;border-bottom: 2px solid #72c02c"> Gempabumi Terkini</p>
						</div>
						<div class="row" style="background: #fff; padding: 10px; box-shadow: #ddd -1px 2px 1px;margin: 0 0 13px 0;padding-bottom: 20px;">
							<?php require_once(APPPATH . 'views/api/gempa.php'); ?>
							<div class="col-md-6 col-xs-6">
								<!-- <a id="myModal" href="#" class="fancybox img-hover-v1" rel="gallery1" title="Gempabumi Terkini"> -->
								<img class="img-responsive" src="<?php echo $gambar; ?>" style="max-width: 100%; height: auto;" alt="">
							</div>
							<div class="col-md-6 col-xs-6 gempa-detail">
								<ul class="list-unstyled" style="border-radius: 0;">
									<li><span class="waktu"><?php echo $waktu; ?></li>
									<li><span class="ic magnitude"></span><?php echo $magnitudo; ?></li>
									<li><span class="ic kedalaman"></span><?php echo $kedalaman; ?></li>
									<li><span class="ic koordinat"></span><?php echo $lokasi; ?></li>
								</ul>
							</div>
							<ul class="list-unstyled gempabumi-detail no-bot">
								<li><span class="ic lokasi"></span><?php echo $wilayah; ?></li>
								<?php if ($potensi == 'Gempa ini dirasakan untuk diteruskan pada masyarakat') {
								} else { ?>
									<li><span class="ic tsunami"></span><?php echo $potensi; ?></li>
								<?php } ?>
								<li><span class="ic dirasakan"></span>Dirasakan (Skala MMI): <?php echo $dirasakan; ?></li>
								<li><a class="more" href="https://bmkg.go.id/gempabumi-dirasakan.html" target="_blank" style="display: inline-block;padding: 5px 14px; background-color: #fff; border: 1px solid #ddd; border-radius: 15px; font-size: 13px; text-decoration: none;">Selengkapnya →</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end of prakiraan cuaca -->
	</div>

	<div class="container-fluid posisi-dasarian">
		<div class="container" style="margin-bottom: 30px;margin-top:10px;">
			<font style="font-size: 18px;font-family: 'Roboto Slab', sans-serif;margin: 0 0 -2px;padding-bottom: 5px;display: inline-block;border-bottom: 2px solid #72c02c"> Informasi Iklim </font>
		</div>
		<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
			<div class="container">
				<div class="row g-4 justify-content-center">
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="service-item rounded pt-3">
							<a href="<?= base_url('dasarian/dasarian'); ?>">
								<div class="p-4">
								<img src="<?= base_url('assets2/images/hth/hujan.png'); ?>"style="width:150px">
									<h5>Informasi Iklim Dasarian</h5><br>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="service-item rounded pt-3">
							<a href="<?= base_url('dasarian/bulanan'); ?>">
								<div class="p-4">
								<img src="<?= base_url('assets2/images/hth/panas.png'); ?>"style="width:150px">
									<h5>Informasi Iklim Bulanan</h5><br>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="service-item rounded pt-3">
							<a href="<?= base_url('dasarian/musim'); ?>">
								<div class="p-4">
								<img src="<?= base_url('assets2/images/hth/gugur.png'); ?>"style="width:150px">
									<h5>Informasi Prakiraan Musim2 
										<!-- <br><p style="color: white;">Prakiraan </p>   -->
									</h5><br>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
	<div style="background: #f7f7f7;padding-top:10px;padding-bottom:10px;margin-top:15px;">
		<div class="container">
		<font style="font-size: 17px;font-family: 'Roboto Slab', sans-serif;margin: 0 0 -2px;padding-bottom: 5px;display: inline-block;border-bottom: 2px solid #72c02c"> Informasi Kualitas Udara, <?php $date1=date('d-m-Y'); echo tgl_indo1($date1); ?> </font>

			<div style="text-align:center;">
			</div>
			<br>
			<iframe src="https://staklim-riau.bmkg.go.id/visual/pm25" style="width:100%;height:500px"></iframe>
		</div>
	</div>
<script>
	$('.brand-carousel').owlCarousel({
		items: [4],
		itemsDesktop: [1200, 4],
		itemsDesktopSmall: [992, 3],
		itemsTablet: [600, 2],
		itemsMobile: [479, 1],
		stagePadding: 0,
		margin: 3,
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
</body>