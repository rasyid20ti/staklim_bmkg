<body>
	<div class=" bg-white p-0">
		<div class=" py-1 bg-dark headprofile mb-3">
			<div class="text-center my-5 pt-4 pb-4">
				<h1 class="display-4 text-white mb-5 animated slideInDown"><?= $pegawai['nama']; ?></h1>
			</div>
		</div>
		<section>
			<div class="container py-5">
				<div class="row ">
					<div class="col-lg-4">
						<div class="card mb-4">
							<div class="card-body text-center " style="background-color: #4096E3;">
								<img src="<?= $pegawai['foto']; ?>" class="img-fluid" alt="" width="300"
									height="350"><br>
								<h5 class="my-3"><br><?= $pegawai['nama']; ?></h5>
								<p class=" mb-1"><?= $pegawai['jabatan']; ?> <br></p>
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="card mb-4">
							<div class="card-body">
								<div class="row">
									<div class="col-sm-3">
										<p class="mb-0">Nama Lengkap</p>
									</div>
									<div class="col-sm-9">
										<p class="text-muted mb-0"> <?= $pegawai['nama']; ?></p>
									</div>
								</div>
								<hr>
								<?php 
								// <div class="row">
								// 	<div class="col-sm-3">
								// 		<p class="mb-0">Email</p>
								// 	</div>
								// 	<div class="col-sm-9">
								// 		<p class="text-muted mb-0"><?= $pegawai['email']; </p>
								// 	</div>
								// </div>
								// <hr>
								?>
								<div class="row">
									<div class="col-sm-3">
										<p class="mb-0">NIP</p>
									</div>
									<div class="col-sm-9">
										<p class="text-muted mb-0"><?= $pegawai['nip']; ?></p>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-3">
										<p class="mb-0">Pendidikan Terakhir</p>
									</div>
									<div class="col-sm-9">
										<p class="text-muted mb-0"><?= $pegawai['pendidikan']; ?> </p>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-3">
										<p class="mb-0">Golongan</p>
									</div>
									<div class="col-sm-9">
										<p class="text-muted mb-0"><?= $pegawai['golongan']; ?></p>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-3">
										<p class="mb-0">Kompetensi</p>
									</div>
									<div class="col-sm-9">
										<p class="text-muted mb-0"><?= $pegawai['kompetensi']; ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
