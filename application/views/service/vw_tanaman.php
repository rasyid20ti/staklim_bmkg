<body>
	<div class=" bg-white p-0">
		<div class=" py-1 bg-dark headhead mb-5">
			<div class="text-center my-5 pt-5 pb-4">
				<h1 class="display-3 text-white mb-3 animated slideInDown">Agroklimat</h1>
			</div>
		</div>
		<section id="tabs">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 ">
						<nav>
							<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
								<a class="nav-item nav-link active" id="nav-prakiraan-tab" data-toggle="tab" href="#nav-prakiraan" role="tab" aria-controls="nav-prakiraan" aria-selected="true">Prakiraan Ketersediaan Air Bagi Tanaman</a>
								<a class="nav-item nav-link" id="nav-analisis-tab" data-toggle="tab" href="#nav-analisis" role="tab" aria-controls="nav-analisis" aria-selected="false">Analisis Ketersediaan Air Bagi Tanaman</a>
							</div>
						</nav>
						<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
							<div class="tab-pane fade" id="nav-prakiraan" role="tabpanel" aria-labelledby="nav-prakiraan-tab">
								<!-- Historical Trend Of Seasonal Cumulative Precipitation -->
								<div class='tableauPlaceholder hidden' id='div_praati' style='position: relative'><object class='tableauViz' style='display:none;'>
										<param name='host_url' value='https%3A%2F%2Fvisklim.bmkg.go.id%2F' />
										<param name='embed_code_version' value='3' />
										<param name='site_root' value='' />
										<param name='name' value='PrakiraanKetersediaanAirBagiTanaman/DashboardPraATi' />
										<param name='tabs' value='no' />
										<param name='toolbar' value='yes' />
										<param name='animate_transition' value='yes' />
										<param name='display_static_image' value='yes' />
										<param name='display_spinner' value='yes' />
										<param name='display_overlay' value='yes' />
										<param name='display_count' value='yes' />
										<param name='device' value='desktop' />
										<param name='language' value='en-US' />
										<param name='filter' value='Provinsi=RIAU'/>
									</object>
								</div>
							</div>
							<div class="tab-pane fade" id="nav-analisis" role="tabpanel" aria-labelledby="nav-analisis-tab">
								<!-- Historical Trend Of Annual Average Temperature -->
								<div class='tableauPlaceholder hidden' id='div_ati' style='position: relative'><object class='tableauViz' style='display:none;'>
										<param name='host_url' value='https%3A%2F%2Fvisklim.bmkg.go.id%2F' />
										<param name='embed_code_version' value='3' />
										<param name='site_root' value='' />
										<param name='name' value='AnalisisKetersediaanAirBagiTanaman/DashboardATi' />
										<param name='tabs' value='no' />
										<param name='toolbar' value='yes' />
										<param name='animate_transition' value='yes' />
										<param name='display_static_image' value='yes' />
										<param name='display_spinner' value='yes' />
										<param name='display_overlay' value='yes' />
										<param name='display_count' value='yes' />
										<param name='device' value='desktop' />
										<param name='language' value='en-US' />
										<param name='filter' value='Provinsi=RIAU'/>
									</object>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Main Menu -->
		<div class="container">
			<div class="div_keterangan hidden " id="div_ket_praati">
				<p style="text-align: center;"><br /></p>
				<p><strong>Tingkat Ketersediaan Air Tanah bagi Tanaman (ATi)</strong> menggunakan perhitungan neraca air dengan <strong>metode Thornthwaite and Mather</strong>.</p>
				<p>ATi dihitung dengan persamaan sebagai berikut:<strong>((KAT - TLP)/(KL - TLP)) x 100%</strong>.</p>
				<p>Dengan kriteria:</p>
				<ul>
					<li>Kurang : jika ketersediaan air tanah < 40%</li>
					<li>Sedang : jika ketersediaan air tanah 40% - 60%</li>
					<li>Cukup : jika ketersediaan air tanah > 60%</li>
				</ul>
			</div>
		</div>


		<!-- Script Prakiraan Tanaman !-->
		<script type='text/javascript'>
			var divElement = document.getElementById('div_praati');
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

		<!-- Script Analisis Ketersediaan Air Bagi Tanaman -->


		<script type='text/javascript'>
			var divElement = document.getElementById('div_ati');
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