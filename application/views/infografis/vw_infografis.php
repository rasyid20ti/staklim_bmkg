<script>
	var baseurl = "<?php echo base_url("infografis/"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
</script>
<script src="<?php echo base_url("assets2/js/jquery.min.js"); ?>"></script> <!-- Load library jquery -->
<script src="<?php echo base_url("assets2/js/config.js"); ?>"></script> <!-- Load file process.js -->
<link href="<?php echo base_url('assets2/'); ?>css/infografis.css" rel="stylesheet">

<body>
	<div class="headerInfografis">
		<div class="container">
			<div class='row'>
				<div class='col'>
					<img src="<?= base_url('assets2/images/icon/infografis.png'); ?>">
				</div>
				<div class='col' style="padding-top:30px;color:#73777B;padding-bottom:50px;">
					<h5>Infografis</h5>
					<p>Infografis adalah informasi yang disajikan dalam bentuk grafik dan mudah dipahami</p>
					<br><br>
					<?php echo form_open('infografis/search') ?>
					<div class="input-group">
						<input type="text" class="form-control" name="keyword" placeholder="Cari Infografis">
						<div class="input-group-append">
							<select class="custom-select" name="topik" id="inputGroupSelect01">
								<option value="" selected>Pilih Topik</option>
								<?php foreach($menuLayanan as $m): ?>
								<option value="<?= $m['namaMenu']; ?>"><?= $m['namaMenu']; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<button type="submit" class="btn btn-success" style="text-transform:inherit">Cari</button>
					</div>
					<!-- <div class="input-group mb-3">
						<i class="fa fa-search" aria-hidden="true"></i>
						<input class='form-control ' name='keyword' placeholder="Cari Infografis">
						<button type="submit" class="btn btn-success" style="text-transform: inherit;">Cari</button>
					</div> -->
					<!-- <input class='form-control ' name='keyword' placeholder="&#xF002; Cari Infografis">
						<button type="submit" class="btn btn-success">Cari</button> -->
					<?php echo form_close() ?>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="container-fluid isiInfografis">
		<div class="row g-4">
			<?php foreach ($infografis as $us) : ?>
				<div class="col-lg-3 col-sm-6">
					<a href="<?= base_url('infografis/detail/' . encrypt_url($us['idInfo'])); ?>">
						<div class="kotakInfografis">
							<img src="<?= $us['gambar1'] ?>" class="mx-auto img-fluid">
							<h5><?= $us['judul']; ?></h5><br>
						</a>
							<div class="createdInfografis">
								<i class="fas fa-book icon-topic" style="padding-left: 10px; padding-right: 10px;padding-bottom: 10px;"></i> <?= $us['namaMenu']; ?><br>
								<i class="fa-solid fa-user" style="padding-left: 10px; padding-right: 10px;"></i> <?= $us['penulis']; ?>
							</div>
						</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>

</body>