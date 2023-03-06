<!-- <link href="https://fonts.googleapis.com/css? family=Heebo:400,500,700,800|Fira+Sans:600&text=ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz?.1234567890[]';.()/\!@#$%^&*-=+_{}:|\.ABCDEFGHIJKLMNOPQRSTUVWXYZ*~\>" rel="stylesheet"> -->
<link href="<?php echo base_url('assets2/'); ?>css/view-berita.css" rel="stylesheet">
<?php
function deskripsiBerita($kalimat)
{
	$tampil_sebagian = substr($kalimat, 0, 50);
	return $tampil_sebagian;
}
?>

<body>
	<div class="headerBerita">
		<div class="container">
			<div class='row'>
				<div class='col'>
					<img src="<?= base_url('assets2/images/icon/News-pana.png'); ?>">
				</div>
				<div class='col' style="padding-top:30px; color:#73777B;">
					<h5>Berita</h5>
					<p>Berita adalah laporan tercepat mengenai fakta atau opini yang menarik minat sejumlah besar penduduk Pekanbaru</p>
					<br><br>
					<?php echo form_open('media/searchBerita') ?>
					<div class="input-group mb-3">
						<div class="custom-file">
							<input class='form-control ' name='keyword' placeholder="Cari Berita">
							<button type="submit" class="btn btn-success">Cari</button>
						</div>
					</div>
					<!-- <input class='form-control ' name='keyword' placeholder="&#xF002; Cari Infografis">
						<button type="submit" class="btn btn-success">Cari</button> -->
					<?php echo form_close() ?>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="container-fluid isiBerita">
		<div class="row g-4">
			<?php foreach ($beritaX as $us) : ?>
				<div class="col-lg-3 col-sm-6">
					<a href="<?= base_url('media/berita_detail/' . encrypt_url($us['id'])); ?>">
						<div class="kotakBerita">
							<img src="<?= $us['foto'] ?>" class="mx-auto img-fluid">
							<h5><?= $us['title']; ?></h5><br>
					</a>
					<div class="createdBerita">
						<i class="fas fa-book icon-topic" style="padding-left: 10px; padding-right: 10px;padding-bottom: 10px;"></i> <?= $us['sub']; ?><br>
						<i class="fa-solid fa-user" style="padding-left: 10px; padding-right: 10px; padding-bottom:10px"></i> <?= $us['penulis']; ?><br>
						<i class="fa-solid fa-calendar" style="padding-left: 10px; padding-right: 10px;"></i> <?= date('d M Y', strtotime($us['date_created'])); ?>
					</div>
				</div>
		</div>
	<?php endforeach; ?>
</body>