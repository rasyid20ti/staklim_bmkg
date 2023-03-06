<body>
	<div class=" bg-white p-0">
		<div class=" py-1 bg-dark headhead mb-5">
			<div class="text-center my-5 pt-5 pb-4">
				<h1 class="display-3 text-white mb-3 animated slideInDown">Potensi Energi Surya</h1>
			</div>
		</div>

		<section id="tabs">
			<div>
				<div class="row">
					<div class="col-xs-12 ">
						<nav>
							<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
								<a class="nav-item nav-link active" id="nav-imon-australia-tab" data-toggle="tab" href="#nav-imon-australia" role="tab" aria-controls="nav-imon-australia" aria-selected="true">Potensi Energi Surya</a>
								<a class="nav-item nav-link" id="nav-imon-west-tab" data-toggle="tab" href="#nav-imon-west" role="tab" aria-controls="nav-imon-west" aria-selected="false">Energi Surya (Spasial)</a>
								<a class="nav-item nav-link" id="nav-cold-tab" data-toggle="tab" href="#nav-cold" role="tab" aria-controls="nav-cold" aria-selected="false">Prakiraan Energi Matahari</a>

							</div>
							<div class="container">
									<div class="col-12" style="box-shadow: 0 0 45px rgba(0, 0, 0, .08);">
										<div class="p-1">
											<div class="div_keterangan hidden" id="div_ket_dbd">
												<p style="text-align: center;"><br /></p>
												<p style="text-align:center" class="text-dark"><strong>Info Penggunaan Grafik</strong></p>
												<p style="text-align:justify" class="text-dark"> * Untuk Melihat Grafik, Tekan Titik yang ada pada peta untuk mencari daerah</p>
												<p style="text-align:justify" class="text-dark">Proyeksi Perubahan Suhu Rata-rata Tahunan Periode 2020-2049 Terhadap 1976-2005 Skenario RCP8.5. Berdasarkan Skenario RCP8.5 secara umum mengalami kenaikan 1.0 - 1.03 °C. Wilayah yang mengalami kenaikan suhu paling tinggi terjadi diwilayah INDRAGIRI HILIR dengan proyeksi kenaikan suhu 1.03161 °C.</p>
												<ul class="text-dark">
												</ul>
											</div>
										</div>
									</div>
								</div>
						</nav>
						<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-imon-australia" role="tabpanel" aria-labelledby="nav-imon-australia">
								<center>
									<div class='tableauPlaceholder hidden' id='div_surya' style='position: relative'>
										<object class='tableauViz' style='display:none;'>
											<param name='host_url' value='https%3A%2F%2Fvisklim.bmkg.go.id%2F' />
											<param name='embed_code_version' value='3' />
											<param name='site_root' value='' />
											<param name='name' value='InformasiPotensiEnergiSuryaIndonesia/Dashboard' />
											<param name='tabs' value='no' />
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
								</center>
							</div>
							<div class="tab-pane fade" id="nav-imon-west" role="tabpanel" aria-labelledby="nav-imon-west">
								<center>
									<div class='tableauPlaceholder hidden' id='div_suryagrid' style='position: relative'>
										<object class='tableauViz' style='display:none;'>
											<param name='host_url' value='https%3A%2F%2Fvisklim.bmkg.go.id%2F' />
											<param name='embed_code_version' value='3' />
											<param name='site_root' value='' />
											<param name='name' value='InformasiPotensiEnergiSuryaSpasial/Dashboard1' />
											<param name='tabs' value='no' />
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

								</center>
							</div>
							<div class="tab-pane fade" id="nav-cold" role="tabpanel" aria-labelledby="nav-cold">
								<center>
									<div class='tableauPlaceholder hidden' id='div_praksurya' style='position: relative'>
										<object class='tableauViz' style='display:none;'>
											<param name='host_url' value='https%3A%2F%2Fvisklim.bmkg.go.id%2F' />
											<param name='embed_code_version' value='3' />
											<param name='site_root' value='' />
											<param name='name' value='PrakiraanPotensiEnergiMatahari/Dashboardwebklim' />
											<param name='tabs' value='no' />
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
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- Script Potensi Energi !-->
		<script type='text/javascript'>
			var divElement = document.getElementById('div_surya');
			var vizElement = divElement.getElementsByTagName('object')[0];
			if (divElement.offsetWidth > 800) {
				vizElement.style.width = '1000px';
				vizElement.style.height = '1750px';
			} else if (divElement.offsetWidth > 500) {
				vizElement.style.width = '1000px';
				vizElement.style.height = '1750px';
			} else {
				vizElement.style.width = '100%';
				vizElement.style.height = '1800px';
			}
			var scriptElement = document.createElement('script');
			scriptElement.src = 'https://visklim.bmkg.go.id/javascripts/api/viz_v1.js';
			vizElement.parentNode.insertBefore(scriptElement, vizElement);
		</script>
		

		<!--= Embed Menu = "Informasi Potensi Energi Surya Spasial" ; Akun = Marjuki ; Kode = div_suryagrid ==-->


		<script type='text/javascript'>
			var divElement = document.getElementById('div_suryagrid');
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

		<!--= Embed Menu = "Prakiraan Potensi Energi Surya" ; Akun = Marjuki ; Kode = div_praksurya ==-->


		<script type='text/javascript'>
			var divElement = document.getElementById('div_praksurya');
			var vizElement = divElement.getElementsByTagName('object')[0];
			if (divElement.offsetWidth > 800) {
				vizElement.style.width = '1000px';
				vizElement.style.height = '1350px';
			} else if (divElement.offsetWidth > 500) {
				vizElement.style.width = '1000px';
				vizElement.style.height = '1350px';
			} else {
				vizElement.style.width = '100%';
				vizElement.style.height = '1400px';
			}
			var scriptElement = document.createElement('script');
			scriptElement.src = 'https://visklim.bmkg.go.id/javascripts/api/viz_v1.js';
			vizElement.parentNode.insertBefore(scriptElement, vizElement);
		</script>