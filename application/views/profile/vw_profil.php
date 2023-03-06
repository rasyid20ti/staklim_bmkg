<link href="<?php echo base_url('assets2/'); ?>css/profil.css" rel="stylesheet">
<style>
	.extra { 
    	display: none;
	}

	p:hover .extra {
    	display: inline-block;
	}
</style>
<body>
	<div class="container-fluid">
		<center>
			<a href="profile_kantor" class="btn btn-info" style="margin-right: 40px;">Kantor Administrasi</a>
			<a href="profile_tambang" class="btn btn-info" style="margin-right: 40px;">Kantor Operasional</a>
			<a href="profile_sdm" class="btn btn-info" style="margin-right: 40px;">Sumber Daya Manusia</a>
		</center>
		<hr>
		<div class="row">
			<div class="col-6 col-md-4" style="padding-left:10px;">
				<img src="<?= base_url('assets2/images/icon/sejarah.png') ?>" class="img-responsive">
			</div>
			<div class="col-12 col-md-8">
        		<h5>Sejarah</h5> 
				<!-- start -->
				<div class='progressProfil'>
					<div class='progress_inner'>
						<div class='progress_inner__step'>
							<label for='step-1'>2012</label>
						</div>
						<div class='progress_inner__step'>
							<label for='step-2'>2013</label>
						</div>
						<div class='progress_inner__step'>
							<label for='step-3'>2014</label>
						</div>
						<div class='progress_inner__step'>
							<label for='step-4'>2017</label>
						</div>
						<div class='progress_inner__step'>
							<label for='step-5'>2019</label>
						</div>
						<div class='progress_inner__step'>
							<label for='step-6'>2020</label>
						</div>
						<div class='progress_inner__step'>
							<label for='step-7'>2021</label>
						</div>
						<input checked='checked' id='step-1' name='step' type='radio'>
						<input id='step-2' name='step' type='radio'>
						<input id='step-3' name='step' type='radio'>
						<input id='step-4' name='step' type='radio'>
						<input id='step-5' name='step' type='radio'>
						<!-- <input id='step-6' name='step' type='radio'> -->
						<div class='progress_inner__bar'></div>
						<div class='progress_inner__bar--set'></div>
						<div class='progress_inner__tabs'>
							<div class='tab tab-0'>
								<h4>Penjajakan dan pembuatan unit organisasi Klimatologi di Provinsi Riau </h4>
							</div>
							<div class='tab tab-1'>
								<h4>Pembuatan fisik Stasiun Meteorologi Pertanian Khusus Plus (SMPK Plus) Sungai Pinang 
									beralamat di Desa Kuapan, Kec.Tambang, Kab.Kampar
								</h4>
							</div>
							<div class='tab tab-2'>
								<h4>Awal mula operasional oleh Stasiun Meteorologi Sultan Syarif Kasim II</h4>
							</div>
							<div class='tab tab-3'>
								<h4>Susunan Organisasi Tata Kerja (SOTK) Khusus Klimatologi di Provisi Riau 
								resmi berdiri pada bulan April 2017 dengan nama Stasiun Klimatologi Tambang
								</h4>
							</div>
							<div class='tab tab-4'>
								<h4>Stasiun Klimatologi Tambang berubah nama menjadi Stasiun Klimatologi Kampar.
								Penjajakan dan awal mulanya pembuatan kantor pelayanan administrasi di Kota Pekanbaru
								</h4>
							</div>
							<div class='tab tab-5'>
								<h4>Kantor pelayanan administrasi selesai dibangun berlamat di jl.Unggas, Kel.simpang tiga, kec.Bukit
									Raya kota pekanbaru
								</h4>
							</div>
							<div class='tab tab-6'>
								<h4>Mulai oprasional kantor pelayanan administrasi</h4>
							</div>
						</div>
							<!-- <div class="container">
								<div class="row">
									<div class="col-md-12">
										<h2 class="h2">Visi</h2>
										<p>Mewujudkan BMKG yang handal, tanggap dan mampu dalam rangka mendukung keselamatan
										masyarakat serta keberhasilan pembangunan nasional, dan berperan aktif di tingkat Internasional
										</p>
										<h2 class="h2">Misi </h2>
										<p>Dalam rangka mewujudkan Visi BMKG, maka diperlukan visi yang jelas yaitu
										berupa langkah-langkah BMKG untuk mewujudkan Misi yang telah ditetapkan yaitu :
										</p>
										<h2 class="h2">Tugas </h2>
										<p>Berdasarkan tugas yang tertulis di Instansi Badan Meteorologi, Klimatologi, dan Geofisika (BMKG)
										dalam Stasiun Klimatologi di Riau yaitu melakukan pengamatan cuaca dan iklim, serta menjadi
										koordinator pengumpulan data curah hujan di Provinsi Riau, serta mempublikasikan informasi
										cuaca, iklim, dan kualitas udara di seluruh Provinsi Riau. Dari tugas tersebut Stasiun Klimatologi
										Riau mempunyai beberapa fungsi di antaranya :	
									</p>
								</div>
							</div>
						</div> -->
					</div>
				</div>
				<!-- end -->
			</div>
		</div>
  </div>
  <div class="container"style="margin-top:40px;margin-bottom:40px;">
	<div class="row">
		<div class="col-4"></div>
		<div class="col-8">
			<div class="row">
				<div class="col-md-6">
					<img src="<?= base_url('assets2/images/icon/visi.png') ?>"> 
					<h4 style="margin-left: 10px;">Visi</h4>
					<details>
						<summary>Mewujudkan BMKG yang handal, tanggap dan mampu dalam rangka mendukung keselamatan masyarakat serta keberhasilan pembangunan nasional, dan berperan aktif di tingkat Internasional.</summary>
						<ul>
							<li>Pelayanan informasi meteorologi, klimatologi, kualitas udara, dan geofisika yang handal ialah pelayanan BMKG terhadap penyajian data, informasi pelayanan jasa meteorologi, klimatologi, kualitas udara, dan geofisika yang akurat, tepat sasaran, tepat guna, cepat, lengkap, dan dapat dipertanggungjawabkan.</li>
							<li>Tanggap dan mampu dimaksudkan BMKG dapat menangkap dan merumuskan kebutuhan stakeholder akan data, informasi, dan jasa meteorologi, klimatologi, kualitas udara, dan geofisika serta mampu memberikan pelayanan sesuai dengan kebutuhan pengguna jasa.</li>
						</ul>
					</details>
				</div>
				<div class="col-md-6">
					<img src="<?= base_url('assets2/images/icon/misi.png') ?>"> 
					<h4 style="">Misi</h4>
					<details>
						<summary>Dalam rangka mewujudkan Visi BMKG, maka diperlukan visi yang jelas yaitu berupa langkah-langkah BMKG untuk mewujudkan Misi yang telah ditetapkan yaitu :</summary>
						<ul>
							<li>Mengamati dan memahami fenomena meteorologi, klimatologi, kualitas udara dan geofisika.</li>
							<li>Menyediakan data, informasi dan jasa meteorologi, klimatologi, kualitas udara dan geofisika yang handal dan terpercaya.</li>
							<li>Mengkoordinasikan dan memfasilitasi kegiatan di bidang meteorologi, klimatologi, kualitas udara dan geofisika.</li>
							<li>Berpartisipasi aktif dalam kegiatan internasional, yaitu di bidang meteorologi, klimatologi, kualitas udara dan geofisika.</li>
						</ul>
					</details>
				</div>
				<div class="col-md-12" style="margin-top:50px;">
				<img src="<?= base_url('assets2/images/icon/misi.png') ?>"> 
					<h4 style="">Tugas</h4>
					<details>
						<summary>Berdasarkan tugas yang tertulis di Instansi Badan Meteorologi, Klimatologi, dan Geofisika (BMKG) dalam Stasiun Klimatologi di Riau yaitu melakukan pengamatan cuaca dan iklim, serta menjadi koordinator pengumpulan data curah hujan di Provinsi Riau, serta mempublikasikan informasi cuaca, iklim, dan kualitas udara di seluruh Provinsi Riau. Dari tugas tersebut Stasiun Klimatologi Riau mempunyai beberapa fungsi di antaranya :</summary>
						<ol>
							<li>Melaksanakan pengamatan, pengumpulan dan penyebaran data, pengolahan, analisa dan prakiraan di wilayah Provinsi Riau, serta pelayanan jasa klimatologi dan kualitas udara, dan juga pengamatan meteorologi pertanian dan hidrometeorologi.</li>
							<li>Sebagai koordinator pos kerjasama yang meliputi Pos Hujan Kerjasama (PHK), pos hujan otomatis (Automatic Rain Gauge), stasiun pemantau cuaca otomatis (Automatic Weather Stasion), stasiun meteorologi pertanian otomatis (Agroclimate Automatic Weather Station), dan Stasiun Meteorologi Pertanian Khusus (SMPK) di wilayah Provinsi Riau.</li>
							<li>Membuat catatan tentang kejadian penting dari gejala dan atau unsur cuaca/iklim serta dampak dan kerugiannya.</li>
							<li>Melaksanakan tugas administrasi yang meliputi ketatausahaan, kepegawaian, keuangan, rumah tangga dan laporan operasional stasiun.</li>
						</ol>
					</details>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
