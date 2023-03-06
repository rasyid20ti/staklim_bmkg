<link href="<?php echo base_url('assets2/'); ?>css/form-pengajuan.css" rel="stylesheet">


<body>
<div class="judul">
        <div class="container">
            <h5>Form Layanan</h5>
            <br>
             <div class="formLayanan">
               <div class="container">
                <div class="row g-4 justify-content-center">
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a href="https://staklim-riau.bmkg.go.id/pengajuan/umum">
                            <div class="p-4" style="text-align:center;border: 1px solid #B0B0B0;border-radius: 10px;background: #FFFFFF;">
                                <img src="<?= base_url('assets2/images/pengajuan/umum.png'); ?>" style="width: 140.8px;height: 110.75px;">
                                <p style="color: #A6A6A6;font-size: 20px;font-weight: 300;">Umum</p>
                            </div>
                        </a>
					</div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="https://staklim-riau.bmkg.go.id/pengajuan/instansi">
                        <div class="p-4" style="text-align:center;border: 4px solid #B0B0B0;border-radius: 10px;background: #FFFFFF;">
							<img src="<?= base_url('assets2/images/pengajuan/instansi.png'); ?>" style="width: 150.8px;height: 120.70px;">
							<p style="color: #A6A6A6;font-size: 20px;font-weight: 700;">Instansi Kerja Sama</p>
						</div>
                    </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="https://staklim-riau.bmkg.go.id/pengajuan/mahasiswa">
                        <div class="p-4" style="text-align:center;border: 1px solid #B0B0B0;border-radius: 10px;background: #FFFFFF;">
							<img src="<?= base_url('assets2/images/pengajuan/mahasiswa.png'); ?>" style="width: 140.8px;height: 120.70px;">
							<p style="color: #A6A6A6;font-size: 20px;font-weight: 300;">Mahasiswa</p>
						</div>
                    </a>
					</div>
                </div>
            <div class="row jenisLayanan">
                <!-- <div class="col kotakLayanan">
                    <img src="<?= base_url('assets2/images/pengajuan/umum.png'); ?>">
                    <p>Umum</p>
                </div> -->
            </div>
        </div>
    </div>
		<?= $this->session->flashdata('message'); ?>
		<!-- Contact Start -->
		<div class="container-xxl py-5">
			<div class="container">
				<h4 align="justify"> <strong>Berdasarkan Peraturan Badan Metereologi, Klimatologi, dan Geofisika No. 12
						Tahun 2019 Tentang Tarif Rp. 0,00
						dan Peraturan Kepala Badan Metereologi, Klimatologi, dan Geofisika
						No. 20 Tahun 2014.
						Kegiatan pengenaan tarif sebesar Rp. 0,00 (nol rupiah) terdapat
						beberapa
						persyaratan sebagai berikut : </strong></h4>
				<ol>
					<li>
						<div align="justify">Melampirkan identitas diri pemohon.</div>
					</li>
					<li>
						<div align="justify">Melampirkan surat pengantar dari Instansi ditujukan kepada Stasiun Klimatologi Riau.</div>
					</li>
					<li>
						<div align="justify">Melampirkan proposal kegiatan.</div>
					</li>
					<li>
						<div align="justify">Cakupan lokasi dan waktu informasi maksimal 2 titik lokasi selama 2 tahun</div>
					</li>
				</ol>

				<div class="card-body">
					<form action="<?= base_url('Instansi/tambah_instansi') ?>" method="POST"
						enctype="multipart/form-data">
						<div class="form-group">
							<label for="survey">Isi <a href="https://bit.ly/survei_sem1">survey kepuasan masyarakat</a> sebelum mengisi
								<b>Form</b> dibawah ini, lalu unggah bukti <i>screenshoot</i> jika sudah selesai mengisi survey.
							</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="survey" name="survey" required>
								<label class="custom-file-label" for="validatedCustomFile">Unggah bukti pengisian survey (PNG, JPG, JPEG, PDF)</label>
								<div class="invalid-feedback">Example invalid custom file feedback</div>
							</div>

						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="nama">Nama Lengkap Sesuai KTP</label>
								<input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control form-control-user" id="nama" placeholder="Nama">
							</div>
							<div class="form-group col-md-6">
								<label for="universitas">Nama Instansi</label>
								<input type="text" name="instansi" value="<?= set_value('instansi'); ?>" class="form-control form-control-user" id="instansi" placeholder="Instansi">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="email">Email Pemohon</label>
								<input type="email" name="email" value="<?= set_value('email'); ?>" class="form-control form-control-user" id="email" placeholder="Email">
							</div>
							<div class="form-group col-md-6">
								<label for="hp">Nomor HP/WA</label>
								<input type="text" name="hp" value="<?= set_value('hp'); ?>" class="form-control form-control-user" id="hp" placeholder="HP/WA">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="email">Alamat</label>
								<input type="text" name="alamat" value="<?= set_value('alamat'); ?>"
									class="form-control form-control-user" id="alamat" placeholder="Alamat">

							</div>
							<div class="form-group col-md-6">
								<label for="hp">Peruntukan Data</label>
								<input type="text" name="peruntukan_data" value="<?= set_value('peruntukan_data'); ?>" class="form-control form-control-user" id="peruntukan_data" placeholder="Cth. untuk laporan kinerja">
							</div>


						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="email">Pilih Cara Perolehan Data</label>
								<select name="perolehan_data" value="<?= set_value('perolehan_data'); ?>"
									id="perolehan_data" class="form-control">
									<option value="">Pilih Cara Perolehan Data</option>
									<option value="Langsung">Langsung</option>
									<option value="Pos">Pos</option>
									<option value="Fax">Fax</option>
									<option value="E-Mail">E-mail</option>
								</select>
							</div>


							<div class="form-group col-md-6">
								<label for="hp">Pilih Bentuk Informasi</label>
								<select name="bentuk" value="<?= set_value('bentuk'); ?>" id="bentuk"
									class="form-control">
									<option value="">Pilih Bentuk Informasi</option>
									<option value="Tercetak">Tercetak</option>
									<option value="Terekam">Terekam</option>
									<option value="Soft File">Soft File</option>
								</select>


							</div>
						</div>

						<!-- <div class="form-group">
                            <label for="inputAddress2">Link Drive Upload Dokumen</label>
                            <a type="submit" class="btn btn-primary float-right" href="https://forms.gle/WgfEGYvtTqM5QDC5A"> Upload Bukti Bayar </a>
                        </div> -->
						<div class="form-group">
							<label for="proposal">Proposal Kegiatan</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="proposal" name="proposal">
								<label class="custom-file-label" for="validatedCustomFile">Unggah file (PDF)</label>
								<div class="invalid-feedback">Example invalid custom file feedback</div>
							</div>
						</div>
						<div class="form-group">
							<label for="surat_permohonan">Surat Permohonan Ditandatangani Oleh Kepala Instansi/Pejabat Instansi
							</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="surat_permohonan" name="surat_permohonan">
								<label class="custom-file-label" for="validatedCustomFile">Unggah file (PNG, JPG, JPEG, PDF)</label>
								<div class="invalid-feedback">Example invalid custom file feedback</div>
							</div>
						</div>
						<div class="form-group">
							<label for="ktp">KTP</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="ktp" name="ktp">
								<label class="custom-file-label" for="validatedCustomFile">Unggah file (PNG, JPG, JPEG, PDF)</label>
								<div class="invalid-feedback">Example invalid custom file feedback</div>
							</div>

						</div>

						<div class="form-group row">
							<div class="form-group col-md-6">
								<label for="informasi">Pilih Unsur</label>
								<div class="form-check col-md-6">
									<input class="form-check-input" type="checkbox" value="Suhu" id="unsur"
										name="unsur[]" />
									<label class="fSorm-check-label" for="flexCheckDefault">Suhu</label>
								</div>
								<div class="form-check col-md-6">
									<input class="form-check-input" type="checkbox" value="Tekanan" id="unsur"
										name="unsur[]" />
									<label class="form-check-label" for="flexCheckDefault">Tekanan</label>
								</div>
								<div class="form-check col-md-6">
									<input class="form-check-input" type="checkbox" value="Angin" id="unsur"
										name="unsur[]" />
									<label class="form-check-label" for="flexCheckDefault">Angin</label>
								</div>
								<div class="form-check col-md-6">
									<input class="form-check-input" type="checkbox" value="Kelembaban" id="unsur"
										name="unsur[]" />
									<label class="form-check-label" for="flexCheckDefault">Kelembaban</label>
								</div>
								<div class="form-check col-md-6">
									<input class="form-check-input" type="checkbox" value="Matahari" id="unsur"
										name="unsur[]" />
									<label class="form-check-label" for="flexCheckDefault">Matahari</label>
								</div>
								<div class="form-check col-md-6">
									<input class="form-check-input" type="checkbox" value="Penguapan" id="unsur"
										name="unsur[]" />
									<label class="form-check-label" for="flexCheckDefault">Penguapan</label>
								</div>
								<div class="form-check col-md-6">
									<input class="form-check-input" type="checkbox" value="Curah Hujan" id="unsur"
										name="unsur[]" />
									<label class="form-check-label" for="flexCheckDefault">Curah Hujan</label>
								</div>
								<div class="form-check col-md-6">
									<input class="form-check-input" type="checkbox" value="Kualitas Udara" id="unsur"
										name="unsur[]" />
									<label class="form-check-label" for="flexCheckDefault">Kualitas Udara</label>
								</div>
								<div class="form-check col-md-6">
									<input class="form-check-input" type="checkbox" onchange="checkAll(this)"
										name="chk[]">
									<label class="form-check-label" for="flexCheckDefault">Pilih Semua</label>
								</div>
							</div>


							<div class="form-group col-md-6">
								<label for="informasi">Jenis Informasi</label>
								<div class="form-check col-md-6">
									<input class="form-check-input" type="checkbox" value="Analisis" id="informasi"
										name="informasi[]" />
									<label class="form-check-label" for="flexCheckDefault">Analisis</label>
								</div>
								<div class="form-check col-md-6">
									<input class="form-check-input" type="checkbox" value="Prakiraan" id="informasi"
										name="informasi[]" />
									<label class="form-check-label" for="flexCheckDefault">Prakiraan</label>
								</div>
								<div class="form-check col-md-6">
									<input class="form-check-input" type="checkbox" onchange="checkIn(this)"
										name="chk5[]">
									<label class="form-check-label" for="flexCheckDefault">Pilih Semua</label>
								</div>
							</div>


						</div>
						<div class="form-group">
							<label for="nama-barang">Keterangan/Spesifikasi</label>
							<textarea name="keterangan" value="<?= set_value('keterangan'); ?>" class="form-control"
								rows="15" id="keterangan" placeholder="Keterangan atau spesifikasi…"></textarea>
						</div>
						<div class="form-group ">
							<label for="lokasi">Lokasi (Maksimal 2 titik)</label>
							<input type="text" name="lokasi" value="<?= set_value('lokasi'); ?>"
								class="form-control form-control-user" id="lokasi" placeholder="Lokasi">
						</div>


						<div class="form-group">
							<label for="waktu">Periode Waktu</label>
							<select name="periode" value="<?= set_value('periode'); ?>" id="periode"
								class="form-control">
								<option value="">Pilih Periode Waktu</option>
								<option value="Tahunan">Tahunan</option>
								<option value="Bulan">Bulan</option>
								<option value="Minggu">Minggu</option>
								<option value="Harian">Harian</option>
							</select>
						</div>


						<div class="form-group">
							<label for="panjang_data">Panjang Data (cth. 1 Agustus 2020 - 30 September 2020) Maksimal 2
								Tahun</label>
							<input type="text" name="panjang" value="<?= set_value('panjang'); ?>"
								class="form-control form-control-user" id="panjang"
								placeholder="Panjang Data (cth. 1 Agustus 2020 - 30 September 2020) Maksimal 2 Tahun">
						</div>


				</div>
				<button type="submit" class="btn btn-primary float-right">Submit</button>
			</div>
		</div>

		</form>
		<!-- <div class="row g-4"><div class="col-md-6 wow fadeIn"
                    data-wow-delay="0.1s"><iframe class="position-relative rounded w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d637.4752883839107!2d101.45792723313977!3d0.46998557692730253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5af183e1d2f75%3A0x1178dd3f78b3635b!2sFF95%2BX67%2C%20Jl.%20Unggas%2C%20Simpang%20Tiga%2C%20Kec.%20Bukit%20Raya%2C%20Kota%20Pekanbaru%2C%20Riau%2028288!5e0!3m2!1sen!2sid!4v1652319160515!5m2!1sen!2sid"
                    frameborder="0" style="min-height: 350px; border:0;" allowfullscreen=""
                    aria-hidden="false" tabindex="0"></iframe></div><div class="col-md-6"><div
                    class="wow fadeInUp" data-wow-delay="0.2s"><form><div class="row g-3"><div
                    class="col-md-6"><div class="form-floating"><input type="text"
                    class="form-control" id="name" placeholder="Your Name"><label for="name">Your
                    Name</label></div></div><div class="col-md-6"><div class="form-floating"><input
                    type="email" class="form-control" id="email" placeholder="Your Email"><label
                    for="email">Your Email</label></div></div><div class="col-12"><div
                    class="form-floating"><input type="text" class="form-control" id="subject"
                    placeholder="Subject"><label for="subject">Subject</label></div></div><div
                    class="col-12"><div class="form-floating"><textarea class="form-control"
                    placeholder="Leave a message here" id="message" style="height:
                    150px"></textarea><label for="message">Message</label></div></div><div
                    class="col-12"><button class="btn btn-primary w-100 py-3" type="submit">Send
                    Message</button></div></div></form></div></div></div>-->
	</div>
	</div>
	<!-- Contact End -->
	<!--<script type="text/javascript"> $(document).ready(function(){ var
            dropDownValue = $('#asal').val(); $('#submit_button').click(function () {
            if($('#asal').val() == "pelajar"){ window.location="Service/pelajar_vw.php"; }
            if($('#asal').val() == "instansi"){ window.location="Service/instansi_vw.php"; }
            }); }); </script>
