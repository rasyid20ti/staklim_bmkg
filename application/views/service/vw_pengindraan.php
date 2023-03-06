<body>
	<div class=" bg-white p-0">
		<div class=" py-1 bg-dark headhead mb-5">
			<div class="text-center my-5 pt-5 pb-4">
				<h1 class="display-3 text-white mb-3 animated slideInDown">Pengindraan Jauh</h1>
			</div>
		</div>
		<section id="tabs">
			<div>
				<div class="row">
					<div class="col-xs-12 ">
						<nav>
							<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
								<a class="nav-item nav-link active" id="nav-hotspot-tab" data-toggle="tab" href="#nav-hotspot" role="tab" aria-controls="nav-hotspot" aria-selected="true">Hotspot</a>
								<a class="nav-item nav-link" id="nav-asap-tab" data-toggle="tab" href="#nav-asap" role="tab" aria-controls="nav-asap" aria-selected="false">Sebaran Asap</a>
								<a class="nav-item nav-link" id="nav-himawari-tab" data-toggle="tab" href="#nav-himawari" role="tab" aria-controls="nav-himawari" aria-selected="false">Himawari 8 EH</a>
								<a class="nav-item nav-link" id="nav-hujan-tab" data-toggle="tab" href="#nav-hujan" role="tab" aria-controls="nav-hujan" aria-selected="false">Potensi Hujan Wilayah Riau</a>
								<a class="nav-item nav-link" id="nav-dampak-tab" data-toggle="tab" href="#nav-dampak" role="tab" aria-controls="nav-dampak" aria-selected="false">Prakiraan Cuaca Berbasis Dampak</a>
								<a class="nav-item nav-link" id="nav-radar-tab" data-toggle="tab" href="#nav-radar" role="tab" aria-controls="nav-radar" aria-selected="false">Radar</a>
							</div>
						</nav>
						<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-hotspot" role="tabpanel" aria-labelledby="nav-hotspot">
								<center>
									<img src="https://inderaja.bmkg.go.id/IMAGE/HOTSPOT/Hotspot_Riau.png" class="img-responsive" alt="Responsive image" width="60%" height="60%" />
								</center>
								<div class="container">
									<div class="col-12" style="box-shadow: 0 0 45px rgba(0, 0, 0, .08);">
										<div class="p-1">
											<div class="div_keterangan hidden " id="div_ket_hotspot">
												<p style="text-align: justify;" class="text-dark"><br>
													<strong>Hotspot</strong> adalah titik panas yang diindikasikan sebagai lokasi kebakaran hutan dan lahan.
													Parameter ini sudah digunakan secara meluas di berbagai negara untuk memantau kebakaran hutan dan
													lahan dari satelit. Cara diteksi terjadinya kebakaran hutan dan lahan adalah
													dengan pengamatan titik panas hotspot. Titik panas hotspot dapat diditeksi dengan satelit
													NOAA National Oceanic and Atmospheric Administration yang dilengkapi sensor AVHRR Advenced Very
													Hight Resulation Radiometer.<br><br>
													<strong> Deteksi Hotspot (titik api) </strong> menggunakan sensor VIIRS dan MODIS pada satelit polar (NOAA20, S-NPP, TERRA dan AQUA) memberikan gambaran lokasi wilayah
													yang mengalami kebakaran hutan. Satelit akan mendeteksi anomali suhu panas dibandingkan dengan sekitarnya. Observasi ini dilakukan pada siang dan
													malam hari untuk masing-masing satelit. Pada daerah yang tertutup awan atau blank zone, hotspot di wilayah tersebut tidak dapat terdeteksi.
													Titik panas hotspot dapat dideteksi dengan satelit NOAA yang dilengkapi sensor AVHRR yang bekerja berdasarkan
													pancaran energi thermal dari objek yang diamati dari suatu areal yang bersuhu 42 o C.
													Satelit ini sering digunakan untuk penditeksian wilayah tersebut karena salah satu
													sensornya yang dapat membedakan suhu permukaan di darat atau laut.

												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="nav-asap" role="tabpanel" aria-labelledby="nav-asap">
								<center>
									<img src="https://inderaja.bmkg.go.id/Trajektori/Asap.PNG" class="img-responsive" alt="Responsive image" width="60%" height="60%" />
								</center>
								<div class="container">
									<div class="col-12" style="box-shadow:0 0 45px rgba(0,0,0, .08);">
										<div class="p-1">
											<div class="div_keterangan hidden " id="div_ket_asap">
												<p style="text-align: justify;" class="text-dark"><br>
													<strong>Citra sebaran asap</strong> merupakan hasil analisis sebaran asap berdasarkan metode RGB (Red Green Blue) yang di overlay dengan arah dan
													kecepatan angin lapisan 1000 mb, dan titik panas berdasarkan Geohotspot. Pada produk ini, wilayah sebaran asap di tandai dengan
													poligon berwarna merah. Oleh karena penggunaan kanal visibel pada kombinasi RGB, produk ini hanya tersedia pada siang hingga sore hari.
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="nav-himawari" role="tabpanel" aria-labelledby="nav-himawari">
								<center>
									<img src="http://satelit.bmkg.go.id/IMAGE/HIMA/H08_EH_Riau.png" class="img-responsive" alt="Responsive image" width="60%" height="60%" />
								</center>
								<div class="container">
									<div class="col-12" style="box-shadow:0 0 45px rgba(0,0,0, .08);">
										<div class="p-1">
											<div class="div_keterangan hidden " id="div_ket_himawari">
												<p style="text-align: justify;" class="text-dark"><br>
													<strong>Himawari 8 EH</strong> merupakan citra satelit yang memperlihatkan kelembaban
													atmosfer di lapisan menengah ke atas yang dihasilkan dari radiasi infra merah di panjang gelombang 6,2 mikrometer.
													selain mengetahui kelembaban udara, Himawari 8 enhanced juga menampilkan pergerakan massa udara kering yang berhembus
													dari benua Australia.<br><br>
													Pada produk <strong>Himawari-8 EH</strong> menunjukkan suhu puncak awan yang didapat dari pengamatan radiasi pada panjang gelombang 10.4 mikrometer
													yang kemudian diklasifikasi dengan pewarnaan tertentu, dimana warna hitam atau biru menunjukkan tidak terdapat pembentukan awan yang banyak (cerah),
													sedangkan semakin dingin suhu puncak awan, dimana warna mendekati jingga hingga merah, menunjukan pertumbuhan awan yang signifikan dan berpotensi terbentuknya awan Cumulonimbus.
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="nav-hujan" role="tabpanel" aria-labelledby="nav-hujan">
								<center>
									<img src="http://satelit.bmkg.go.id/IMAGE/HIMA/H08_RP_Riau.png" class="img-responsive" alt="Responsive image" width="60%" height="60%" />
								</center>
								<div class="container">
									<div class="col-12" style="box-shadow: 0 0 45px rgba(0, 0, 0, .08);">
										<div class="p-1">
											<div class="div_keterangan hidden " id="div_ket_hujan">
												<p style="text-align: justify;" class="text-dark"><br>
													Produk turunan <strong>Himawari-8 Potential Rainfall</strong> adalah produk yang dapat digunakan untuk mengestimasi potensi curah hujan, yang disajikan berdasarkan kategori ringan, sedang, lebat, hingga sangat lebat, dengan menggunakan hubungan antara suhu puncak awan dengan curah hujan yang berpotensi dihasilkan.
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="nav-dampak" role="tabpanel" aria-labelledby="nav-dampak">
								<center>
									<img src="https://cdn.bmkg.go.id/DataMKG/MEWS/ibf/04_riau_00.png" class="img-responsive" alt="Responsive image" width="60%" height="60%" />
								</center>
								<div class="container">
									<div class="col-12" style="box-shadow: 0 0 45px rgba(0, 0, 0, .08);">
										<div class="p-1">
											<div class="div_keterangan hidden " id="div_ket_dampak">
												<p style="text-align: justify;" class="text-dark"><br>
													<strong>Cuaca berbasis dampak atau Impact-Based Forecast (IBF)</strong> merupakan informasi prakiraan cuaca yang sudah memperhitungkan potensi dampak yang akan terjadi akibat dari cuaca. Dalam sistem IBF juga disajikan rekomendasi respon atau langkah yang harus dilakukan oleh stakeholder/user atau masyarakat terkait dampak dari dinamika cuaca tersebut.
											</div>
										</div>
									</div>
									<center>
										<img src="https://cdn.bmkg.go.id/Web/risk-hazard-vulnerability-exposure.png" class="img-responsive" alt="Responsive image" />
									</center>
									<div class="col-12" style="box-shadow: 0 0 45px rgba(0, 0, 0, .08);">
										<div class="p-1">
											<div class="div_keterangan hidden " id="div_ket_dampak">
												<p style="text-align: justify;" class="text-dark"><br>
													Komponen penting dalam sistem IBF adalah <strong>risk (risiko)</strong>, yang merupakan irisan antara <strong>hazard (bahaya), exposure (keterpaparan), dan vulnerability (kerentanan)</strong> Besarnya risiko sangat bergantung pada besarnya hubungan ketiga komponen tersebut: semakin erat hubungan hazard, exposure, dan vulnerability, risk akan semakin besar, dan sebaliknya. Dalam sistem IBF, risiko dibuat dalam bentuk matriks (risk matrix) untuk menentukan <strong>warning level</strong>. Berdasarkan matriks ini, warning level dibuat dengan mempertimbangkan besar kemungkinan (<strong>likelihood</strong>) dan dampak (<strong>impact</strong>).
											</div>
										</div>
									</div>
									<center>
										<img src="https://cdn.bmkg.go.id/Web/warning-level-Impact-based-forecast.png" class="img-responsive" alt="Responsive image" />
									</center>
									<div class="col-12" style="box-shadow: 0 0 45px rgba(0, 0, 0, .08);">
										<div class="p-1">
											<div class="div_keterangan hidden " id="div_ket_dampak">
												<p style="text-align: justify;" class="text-dark"><br>
													Tingkatannya (warning level) terdiri dari sangat rendah (very low/minimal), rendah (low/minor), medium (significant), dan tinggi (high/severe). Matriks tersebut diberi warna berdasarkan tingkat urgensi risiko, yaitu hijau, kuning, oranye, dan merah. Peringatan yang dikeluarkan berisi dampak yang mungkin akan ditimbulkan berdasarkan warning level dan disesuaikan dengan warna pada matriks.
													<br><br>
													Prakiraan cuaca berbasis dampak ini sangat bermanfaat untuk mengurangi dampak risiko bencana hidrometeorologi dalam
													perencanaan suatu kegiatan di semua sektor. Sistem IBF ini merupakan wujud BMKG dalam mengimplementasikan amanah WMO
													(WMO Guidelines on Multi-hazard Impact-based Forecast and Warning Services, 2015), UN Hyogo Framework for Action 2005-2015,
													dan UN Sendai Framework for Disaster Risk Reduction 2015-2030. <br><br>
													Selengkapnya dapat membuka halaman ini <a href="https://signature.bmkg.go.id" target="_blank">https://signature.bmkg.go.id</a>

													
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="nav-radar" role="tabpanel" aria-labelledby="nav-radar">
								<center>
									<img src="https://inderaja.bmkg.go.id/Radar/PEKA_SingleLayerCRefQC.png?id=82446vmfn2qmtjkd032same" class="img-responsive" alt="Responsive image" width="60%" height="60%" />
								</center>
								<div class="container">
									<div class="col-12" style="box-shadow: 0 0 45px rgba(0, 0, 0, .08);">
										<div class="p-1">
											<div class="div_keterangan hidden" id="div_ket_radar">
												<p style="text-align: justify;" class="text-dark"><br>
													<strong> Citra radar cuaca </strong> potensi intensitas curah hujan yang dideteksi oleh radar cuaca. Pengukuran intensitas curah hujan (presipitasi) oleh radar cuaca berdasarkan seberapa besar pancaran energi radar yang dipantulkan kembali oleh butiran-butiran air di dalam awan dan digambarkan dengan produk Reflectivity yang memiliki besaran satuan dBZ (decibel). Makin besar energi pantul yang diterima radar maka makin besar juga nilai dBZ, dan semakin besar nilai dBZ reflectivity menunjukkan intensitas hujan yang terjadi semakin besar.<br><br>
													Jangkauan terjauh/maksimum produk Reflectivity dari radar BMKG adalah sekitar 240 km dari lokasi radar.<br><br>
													Skala dBZ pada legenda berkisar 5 - 75 yang dinyatakan dengan gradasi warna biru langit hingga ungu muda. Jika gradasi warna semakin ke arah ungu maka semakin tinggi intensitas hujannya. Kisaran intensitas hujan berdasarkan skala warna dBZ dan mm/jam disajikan seperti dalam tabel berikut: Skala dBZ pada legenda berkisar 5 - 75 yang dinyatakan dengan gradasi warna biru langit hingga ungu muda. Jika gradasi warna semakin ke arah ungu maka semakin tinggi intensitas hujannya. Kisaran intensitas hujan berdasarkan skala warna dBZ dan mm/jam.
													disajikan seperti dalam tabel berikut:
												</p>
												<table class="table table-hover table-bordered">
													<thead>
														<tr>
															<th>Kategori Intensitas Hujan</th>
															<th>Nilai dBZ</th>
															<th>mm/jam</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Hujan ringan (<em>light rain</em>)</td>
															<td>25 s/d 35</td>
															<td>1 s/d 5</td>
														</tr>
														<tr>
															<td>Hujan sedang (<em>moderate rain</em>)</td>
															<td>35 s/d 45</td>
															<td>5 s/d 10</td>
														</tr>
														<tr>
															<td>Hujan lebat (<em>heavy rain</em>)</td>
															<td>45 s/d 55</td>
															<td>10 s/d 20</td>
														</tr>
														<tr>
															<td>Hujan sangat lebat (<em>very heavy rain</em>)</td>
															<td>>55</td>
															<td>>20</td>
														</tr>
													</tbody>
												</table>
												<p style="text-align: justify;" class="text-dark">
													Waktu Pengamatan dalam UTC / GMT ( WIB = UTC+7 )
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Main Menu -->