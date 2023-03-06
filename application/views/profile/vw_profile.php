<link href="<?php echo base_url('assets2/'); ?>css/administrasi.css" rel="stylesheet">

<body>
  <div class="headerAdministrasi">
		<div class="container-fluid">
			<div class='row'>
        <div class='col' style="padding-top:150px;">
          <h5>Kantor Pelayanan Administrasi</h5>
          <p>Kantor Pelayanan Administrasi memberikan layanan berupa informasi bidang Klimatologi.</p>
          <p>Jenis-Jenis Layanan </p>
          <br><br>
        </div>
				<div class='col' style="padding-left: 50px;">
					<img src="<?= base_url('assets2/img/unggas.jpg'); ?>"style="width:600px; height:340px; border-radius:20px">
				</div>
			</div>
		</div>
	</div>

  <div class="container-fluid contentAdministrasi" style="margin-bottom:40px;">
    <div class="row g-4">
      <div class="col-lg-3 col-sm-6"> <!-- Analisis -->
        <img src="<?= base_url('assets2/images/icon/administrasi/analisis.png'); ?>">
        <div class="text-block">
          <div class="kotak">
            <h4>Analisis</h4>
            <ul class="check-list">
              <li>Analisis Curah Hujan (Dasarian dan Bulanan)</li>
              <li>Analisis Sifat Hujan (Dasarian dan Bulanan)</li>
              <li>Analisis Dinamika Atmosfer (Dasarian dan Bulanan)</li>
              <li>Monitoring Hari Tanpa Hujan</li>
              <li>Standardized Precipitation Index</li>
            </ul>
          </div>
        </div>
      </div> <!-- end of analisis -->
      <div class="col-lg-3 col-sm-6"> <!-- Prakiraan -->
        <img src="<?= base_url('assets2/images/icon/administrasi/prakiraan.png'); ?>">
        <div class="text-block">
          <div class="kotak">
            <h4>Prakiraan</h4>
            <ul class="check-list">
              <li>Prakiraan Curah Hujan (Dasarian dan Bulanan)</li>
              <li>Prakiraan Sifat Hujan (Dasarian dan Bulanan)</li>
              <li>Prakiraan Dinamika Atmosfer (Dasarian dan Bulanan)</li>
              <li>Prakiraan Daerah Potensi Banjir (Dasarian dan Bulanan)</li>
              <li>Prakiraan Musim</li>
            </ul>
          </div>
        </div>
      </div> <!-- end of Prakiraan -->
      <div class="col-lg-3 col-sm-6"> <!-- Informasi Kualitas Udara -->
        <img src="<?= base_url('assets2/images/icon/administrasi/iku.png'); ?>">
        <div class="text-block">
          <div class="kotak">
            <h4>Informasi Kualitas Udara</h4>
            <ul class="check-list">
              <li>PM10</li>
              <li>PM2.5</li>
              <li>TSP</li>
              <li>Kimia Air Hujan</li>
              <li>Daya Hantar Listrik</li>
            </ul>
          </div>
        </div>
      </div> <!-- end of Informasi Kualitas Udara -->
      <div class="col-lg-3 col-sm-6"> <!-- Pelayanan Data Lainnya -->
        <img src="<?= base_url('assets2/images/icon/administrasi/lainnya.png'); ?>">
        <div class="text-block">
          <div class="kotak">
            <h4>Pelayanan Data Lainnya</h4>
            <ul class="check-list">
              <li>Mahasiswa</li>
              <li>Instansi Kerja Sama</li>
              <li>Umum</li>
            </ul>
          </div>
        </div>
      </div> <!-- end of Pelayanan Data Lainnya -->
    </div> <!-- end of row -->
  </div>
</body>