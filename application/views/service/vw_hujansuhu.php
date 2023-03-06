<body>
	<div class=" bg-white p-0">
		<div class=" py-1 bg-dark headhead mb-5">
			<div class="text-center my-5 pt-5 pb-4">
				<h1 class="display-3 text-white mb-3 animated slideInDown">Proyeksi Iklim</h1>
			</div>
		</div>
		<center>
			<div class='tableauPlaceholder hidden' id='div_proyeksisuhu' style='position: relative'>
				<object class='tableauViz' style='display:none;'>
					<param name='host_url' value='https%3A%2F%2Fvisklim.bmkg.go.id%2F' />
					<param name='embed_code_version' value='3' />
					<param name='site_root' value='' />
					<param name='name' value='ProyeksiSuhu/Dashboard2' />
					<param name='tabs' value='no' />
					<param name='filter' value='Nama Prov=RIAU'/>
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
			<br>
			<div class="container">
									<div class="col-12" style="box-shadow: 0 0 45px rgba(0, 0, 0, .08);">
										<div class="p-1">
											<div class="div_keterangan hidden" id="div_ket_dbd">
												<p style="text-align: center;"><br /></p>
												<p style="text-align:center" class="text-dark"><strong>Proyeksi Perubahan Suhu Rata-rata Tahunan Periode 2020-2049 Terhadap 1976-2005 Skenario RCP8.5</strong></p>
												<p style="text-align:justify" class="text-dark">Proyeksi iklim adalah simulasi iklim bumi dalam beberapa dekade mendatang (biasanya hingga tahun 2100) berdasarkan asumsi 'skenario' untuk konsentrasi gas rumah kaca, aerosol, dan konstituen atmosfer lainnya yang memengaruhi keseimbangan radiasi di bumi⁴.</p>
												<p style="text-align:justify" class="text-dark">Proyeksi Perubahan Suhu Rata-rata Tahunan Periode 2020-2049 Terhadap 1976-2005 Skenario RCP8.5. Berdasarkan Skenario RCP8.5 secara umum mengalami kenaikan 1.0 - 1.03 °C. Wilayah yang mengalami kenaikan suhu paling tinggi terjadi diwilayah INDRAGIRI HILIR dengan proyeksi kenaikan suhu 1.03161 °C.</p>
												<ul class="text-dark">
												</ul>
											</div>
										</div>
									</div>
								</div>
								</br>
							</div>
			</br>
		</center>

		<!-- Script Proyeksi Suhu !-->
		<script type='text/javascript'>
			var divElement = document.getElementById('div_proyeksisuhu');
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