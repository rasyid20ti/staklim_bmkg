<script>
	var baseurl = "<?php echo base_url("buletin/"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
</script>
<script src="<?php echo base_url("assets2/js/jquery.min.js"); ?>"></script> <!-- Load library jquery -->
<script src="<?php echo base_url("assets2/js/config.js"); ?>"></script> <!-- Load file process.js -->
<link href="<?php echo base_url('assets2/'); ?>css/buletin.css" rel="stylesheet">

<body>
	<div class="headerBuletin">
		<div class="container">
			<div class='row'>
				<div class='col' style="padding-top:30px; color:#73777B;">
					<h5>Buletin</h5>
					<p> Buletin adalah publikasi yang mengangkat perkembangan suatu topik atau aspek tertentu dan diterbitkan atau dipublikasikan secara teratur</p>
					<?php echo form_open('media/search') ?>
					<div class="input-group mb-3">
						<div class="custom-file">
							<input class='form-control' name='keyword' placeholder="Cari Buletin">
							<button type="submit" class="btn btn-success">Cari</button>
						</div>
					</div>
					<!-- <input class='form-control ' name='keyword' placeholder="&#xF002; Cari Infografis">
						<button type="submit" class="btn btn-success">Cari</button> -->
					<?php echo form_close() ?>
				</div>
				<div class='col'>
					<img src="<?= base_url('assets2/images/icon/infografis.png'); ?>">
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="container-fluid isiBuletin">
		<div class="row g-4">
			<?php foreach ($buletin as $us) : ?>
				<div class="col-md-6 col-lg-3 mb-3">
					<div class="kotakBuletin">
						<img src="<?= $us['image'] ?>" class="mx-auto img-fluid">
						<!-- <img src="<?= base_url('assets2/images/contoh/buletin.png'); ?>"> -->
						<h5 class="mb-0"><a href="<?= $us['link']; ?>" target="_blank"><?= $us['title']; ?></a></h5>
						</a><br>
						<div class="createdBuletin">
							
							<i class="fa-solid fa-user" style="padding-left: 10px; padding-right: 10px; padding-bottom: 10px;"></i><?= $us['author']; ?><br>
							<i class="fa-solid fa-calendar" style="padding-left: 10px; padding-right: 10px;"></i><?= date('d M Y', strtotime($us['date_published'])); ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</body>