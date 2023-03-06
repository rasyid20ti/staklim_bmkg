<body>
	<div class=" bg-white p-0">
		<div class=" py-1 bg-dark headhead mb-5">
			<div class="text-center my-5 pt-5 pb-4">
				<h1 class="display-3 text-white mb-3 animated slideInDown">Informasi Hidrometeorologi</h1>
			</div>
		</div>
		<section id="tabs">
			<div>
				<div class="row">
					<div class="col-xs-12 ">
						<nav>
							<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
								<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
									role="tab" aria-controls="nav-home" aria-selected="true">Prakiraan Daerah Potensi
									Banjir Bulanan</a>
								<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
									role="tab" aria-controls="nav-profile" aria-selected="false">Prakiraan Daerah
									Potensi Banjir Dasarian</a>
								<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
									role="tab" aria-controls="nav-contact" aria-selected="false">Indeks Presipitasi
									Terstandarisasi</a>
							</div>
						</nav>
						<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
							<div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
								<div class='tableauPlaceholder hidden' id='div_banjirbul' style='position: relative'>
									<object class='tableauViz' style='display:none;'>
										<param name='host_url' value='https%3A%2F%2Fvisklim.bmkg.go.id%2F' />
										<param name='embed_code_version' value='3' />
										<param name='site_root' value='' />
										<param name='name' value='DashboardBulanan__Dasarian&#47;PrakiraanBulanan' />
										<param name='tabs' value='no' />
										<param name='filter' value='Provinsi=RIAU' />
										<param name='toolbar' value='yes' />
										<param name='animate_transition' value='yes' />
										<param name='display_static_image' value='yes' />
										<param name='display_spinner' value='yes' />
										<param name='display_overlay' value='yes' />
										<param name='display_count' value='yes' />
										<param name='device' value='desktop' />
										<param name='language' value='en-US' />
									</object>
								</div>
								<!-- Keterangan Bulanan -->
								<br>
								<div class="container">
									<div class="col-12" style="box-shadow: 0 0 45px rgba(0, 0, 0, .08);">
										<div class="p-1">
											<div class="div_keterangan hidden" id="div_ket_dbd">
												<p style="text-align:center" class="text-dark"><strong>Prakiraan Daerah Potensi Banjir Bulanan</strong></p>
												<p style="text-align:justify" class="text-dark">Informasi</p>
												<p style="text-align:justify" class="text-dark"></p>
											</div>
										</div>
									</div>
								</div>
								<!-- End of Keterangan -->
							</div>
							</br>
							<div class="tab-pane fade" id="nav-profile" role="tabpanel"
								aria-labelledby="nav-profile-tab">
								<!-- <script type='text/javascript'
									src='https://visklim.bmkg.go.id/javascripts/api/viz_v1.js'></script>
								<div class='tableauPlaceholder' style='width: 1000px; height: 1050px;'><object
										class='tableauViz' width='1000' height='1050' style='display:none;'>
										<param name='host_url' value='https%3A%2F%2Fvisklim.bmkg.go.id%2F' />
										<param name='embed_code_version' value='3' />
										<param name='site_root' value='' />
										<param name='name' value='DashboardBulanan__Dasarian&#47;PrakiraanDasarian' />
										<param name='tabs' value='yes' />
										<param name='toolbar' value='yes' />
										<param name='device' value='desktop' />
										<param name='display_spinner' value='no' />
										<param name='showAppBanner' value='false' />
										<param name='display_count' value='n' />
										<param name='origin' value='viz_share_link' /></object></div> -->
								<div class='tableauPlaceholder hidden' id='div_banjirdas' style='position: relative'>
									<object class='tableauViz' style='display:none;'>
										<param name='host_url' value='https%3A%2F%2Fvisklim.bmkg.go.id%2F' />
										<param name='embed_code_version' value='3' />
										<param name='site_root' value='' />
										<param name='name' value='DashboardBulanan__Dasarian&#47;PrakiraanDasarian' />
										<param name='tabs' value='no' />
										<param name='filter' value='Provinsi=RIAU' />
										<param name='toolbar' value='yes' />
										<param name='animate_transition' value='yes' />
										<param name='display_static_image' value='yes' />
										<param name='display_spinner' value='yes' />
										<param name='display_overlay' value='yes' />
										<param name='display_count' value='yes' />
										<param name='device' value='desktop' />
										<param name='language' value='en-US' />
									</object>
								</div>
								<!-- Keterangan Dasarian -->
								<br>
								<div class="container">
									<div class="col-12" style="box-shadow: 0 0 45px rgba(0, 0, 0, .08);">
										<div class="p-1">
											<div class="div_keterangan hidden" id="div_ket_dbd">
												<p style="text-align:center" class="text-dark"><strong>Prakiraan Daerah Potensi Banjir Dasarian</strong></p>
												<p style="text-align:justify" class="text-dark">Informasi</p>
												<p style="text-align:justify" class="text-dark"></p>
											</div>
										</div>
									</div>
								</div>
								<!-- End of Keterangan -->
							</div>
							</br>
							<div class="tab-pane fade" id="nav-contact" role="tabpanel"
								aria-labelledby="nav-contact-tab">
								<div class='tableauPlaceholder hidden' id='div_spi' style='position: relative'><object
										class='tableauViz' style='display:none;'>
										<param name='host_url' value='https%3A%2F%2Fvisklim.bmkg.go.id%2F' />
										<param name='embed_code_version' value='3' />
										<param name='site_root' value='' />
										<param name='name' value='SPIformatbaru&#47;PrakiraanSPI3Bulanan' />
										<param name='tabs' value='no' />
										<!-- Percobaan penambahan filter -->
										<param name='filter' value='Provinsi=RIAU' />
										<!-- End of penambahan filter -->
										<param name='toolbar' value='yes' />
										<param name='animate_transition' value='yes' />
										<param name='display_static_image' value='yes' />
										<param name='display_spinner' value='yes' />
										<param name='display_overlay' value='yes' />
										<param name='display_count' value='yes' />
										<param name='device' value='desktop' />
										<param name='language' value='en-US' />
									</object>
								</div>
								<!-- Keterangan Indeks -->
								<br>
								<div class="container">
									<div class="col-12" style="box-shadow: 0 0 45px rgba(0, 0, 0, .08);">
										<div class="p-1">
											<div class="div_keterangan hidden" id="div_ket_dbd">
												<p style="text-align:center" class="text-dark"><strong>PRAKIRAAN INDEKS PRESIPITASI TERSTANDARISASI (SPI) 3 BULANAN (OKTOBER-DESEMBER 2022)</strong></p>
												<p style="text-align:justify" class="text-dark">Informasi.</p>
												<p style="text-align:justify" class="text-dark"></p>
											</div>
										</div>
									</div>
								</div>
								<!-- End of Keterangan -->
							</div>
							</br>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- Main Menu -->

		<!-- Script Prakiraan Banjir !-->
		<script type='text/javascript'>
			var divElement = document.getElementById('div_banjirbul');
			var vizElement = divElement.getElementsByTagName('object')[0];
			if (divElement.offsetWidth > 800) {
				vizElement.style.width = '1000px';
				vizElement.style.height = '900px';
			} else if (divElement.offsetWidth > 500) {
				vizElement.style.width = '1000px';
				vizElement.style.height = '900px';
			} else {
				vizElement.style.width = '100%';
				vizElement.style.height = '900px';
			}
			var scriptElement = document.createElement('script');
			scriptElement.src = 'https://visklim.bmkg.go.id/javascripts/api/viz_v1.js';
			vizElement.parentNode.insertBefore(scriptElement, vizElement);

		</script>
		<!--= Embed Menu = "Prakiraan Daerah Potensi Banjir Dasarian" ; Akun = Marjuki ; Kode = div_banjirdas ==-->


		<script type='text/javascript'>
			var divElement = document.getElementById('div_banjirdas');
			var vizElement = divElement.getElementsByTagName('object')[0];
			if (divElement.offsetWidth > 800) {
				vizElement.style.width = '1000px';
				vizElement.style.height = '900px';
			} else if (divElement.offsetWidth > 500) {
				vizElement.style.width = '1000px';
				vizElement.style.height = '900px';
			} else {
				vizElement.style.width = '100%';
				vizElement.style.height = '900px';
			}
			var scriptElement = document.createElement('script');
			scriptElement.src = 'https://visklim.bmkg.go.id/javascripts/api/viz_v1.js';
			vizElement.parentNode.insertBefore(scriptElement, vizElement);

		</script>

		<!--= Embed Menu = "Indeks Presipitasi Terstandarisasi" ; Akun = Hary Tirto Djatmiko ; Kode = div_spi ==-->


		<script type='text/javascript'>
			var divElement = document.getElementById('div_spi');
			var vizElement = divElement.getElementsByTagName('object')[0];
			if (divElement.offsetWidth > 800) {
				vizElement.style.width = '1000px';
				vizElement.style.height = '900px';
			} else if (divElement.offsetWidth > 500) {
				vizElement.style.width = '1000px';
				vizElement.style.height = '900px';
			} else {
				vizElement.style.width = '100%';
				vizElement.style.height = '900px';
			}
			var scriptElement = document.createElement('script');
			scriptElement.src = 'https://visklim.bmkg.go.id/javascripts/api/viz_v1.js';
			vizElement.parentNode.insertBefore(scriptElement, vizElement);

		</script>
