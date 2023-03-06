<link href="<?php echo base_url('assets2/'); ?>css/pengajuan.css" rel="stylesheet">

<body>
	<div class="headerPengajuan">
		<div class="container">
			<div class='row'>
				<div class='col' style="padding-top:70px;">
					<h5>Permintaan Data</h5>
					<p>Alur Pelayanan Mengenai Mekanisme Pelayanan PNBP Stasiun Klimatologi Riau dan Jenis Form Pengajuan.</p>
				</div>
				<div class='col' style="padding-left: 150px;">
					<img src="<?= base_url('assets2/images/icon/pengajuan.png'); ?>">
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="container-fluid contentPengajuan">
		<div class="alurPelayanan">
			<h4>Alur Pelayanan</h4>
			<div class="row" style="margin-left: 10px; margin-right: 10px;">
				<div class="col-sm kotakAlur">
					<img src="<?= base_url('assets2/images/icon/1.png'); ?>" style="float:right;"><br>
					<br>
					<strong> Akses Web <a href="https://staklim-riau.bmkg.go.id/">Stasiun Klimatologi Riau</a></strong> <br>
					<p>
						Cek Ketersedian Data <a href="https://staklim-riau.bmkg.go.id/service/service">di sini</a><br>
						Isi Form & Unggah Dokumen (Surat Pengantar & Identitas Diri) <br>
						Submit <br>
					</p>
					<!-- <br>
                        &nbsp;&nbsp;&nbsp;Akses Web https://iklim.bmkg.go.id/id/ <br>
                        &nbsp;&nbsp;&nbsp;Isi Form & Upload Dokumen (Surat Pengantar & Identitas &nbsp;&nbsp;&nbsp;Diri) <br>
                        &nbsp;&nbsp;&nbsp;Submit <br> -->
				</div>
				<div class="col-sm kotakAlur">
					<img src="<?= base_url('assets2/images/icon/2.png'); ?>" style="float:right; text-align:justify"><br>
					<br>
					<strong> Pembayaran PNBP ke Rekening Negara </strong> <br>
					Unggah Bukti Bayar
					(jika <strong>instansi kerja sama</strong> dan <strong> mahasiswa </strong> dapat
					langsung melakukan<br> langkah pada tahapan nomor 3)
				</div>
				<div class="col-sm kotakAlur">
					<img src="<?= base_url('assets2/images/icon/3.png'); ?>" style="float:right;"><br>
					<br>
					<strong> Info ke Pemohon </strong> <br>
					Pemohon Wajib Mengisi Survey Kepuasan Masyarakat <br>
					Pemohon Menerima Hasil Permohonan <br>
				</div>
			</div>
		</div>
		<br>
		<div class="jenisPengajuan">
			<h4>Jenis Pengajuan</h4>
			<div class="container">
				<div class="row g-4">
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="service-item rounded pt-3">
							<div class="p-4">
								<i class="fa-3x fas fa-building text-tambahan mb-4"></i>
								<a href="<?= base_url('pengajuan/umum'); ?>">
									<h5>Form Layanan</h5>
								</a>
								<p>Merupakan Layanan Jasa MKKuG</p><br><br><br>
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
								<a href="<?= base_url('pengajuan/tarif'); ?>">
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
										<h5>Survey Kepuasan Masyarakat</h5>
									<?php endforeach; ?>
									</a>
									<p>Pengisian Survey bedasarkan kualitas pelayanan Stasiun Klimatologi Riau</p><br><br>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
						<div class="service-item rounded pt-3">
							<div class="p-4">
								<i class=" fa-3x fas fa-envelope text-tambahan-8 mb-4"></i>
								<?php foreach ($nolrupiah as $us) : ?>
									<a href="<?= $us['link']; ?>" target="_blank">
										<h5>Surat 0 Rupiah</h5>
									<?php endforeach; ?>
									</a>
									<p>Pengisian Surat 0 Rupiah hanya berlaku untuk pengajuan Mahasiswa.</p><br><br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="container-fluid isiVisualisasi">
        <div class="row g-4">
            <?php foreach ($visualisasi as $us) : ?>
            <div class="col-lg-3 col-sm-6">
                <a href="<?= base_url('visual/detail/' . encrypt_url($us['idVisual'])); ?>">
                <div class="kotakVisualisasi">
                    <img src="<?= base_url('assets2/images/contoh/1.png'); ?>">
                    <h3><?= $us['judul']; ?></h3>
                </a>
                    <div class="createdVisualisasi">
                        <i class="fa-solid fa-list" style="padding-left: 10px; padding-right: 10px;padding-bottom: 10px;"></i><?= $us['namaMenu']; ?><br>
                        <i class="fa-solid fa-user" style="padding-left: 10px; padding-right: 10px;"></i>Edi Rahmanto
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <div class="col-lg-3 col-sm-6"></div>
        </div>
    </div> -->
</body>