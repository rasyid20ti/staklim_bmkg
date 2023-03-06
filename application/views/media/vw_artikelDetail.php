<!-- <link href="https://fonts.googleapis.com/css? family=Heebo:400,500,700,800|Fira+Sans:600&text=ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz?.1234567890[]';.()/\!@#$%^&*-=+_{}:|\.ABCDEFGHIJKLMNOPQRSTUVWXYZ*~\>" rel="stylesheet"> -->
<link href="<?php echo base_url('assets2/'); ?>css/view-berita.css" rel="stylesheet">
<?php
// function deskripsiBerita($kalimat)
// {
// 	$tampil_sebagian = substr($kalimat, 0, 100);
// 	return $tampil_sebagian;
// }
?>

<body>
	<div class=" bg-white p-0">
		<div class="container">
			<div class="teks-besar p">
			</div>
			<?php foreach ($artikel as $b) : ?>
				<h3><?= $b['judul']; ?></h3>
				<div style="color: #616161;margin-bottom: 10px;"><i class="fas fa-calendar mr-1"></i> <?= date('d M Y', strtotime($b['date_created'])); ?>&nbsp;&nbsp; <i class="fa fa-list-alt"></i> <?=$b['sub'];?></div>
				<div class="row g-4">
					<div class="col-md-6">
						<div class='colSamping'>
							<img id="myImg" src="<?= $b['foto']; ?>" style="width:100%">
						</div>
					</div>
					<div class="col-md-6" style="text-align:justify">
						<?= $b['isi']; ?>
						<div class="information" style="margin-top: 40px;">
							<!--Information -->
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-lg-6">
											<label>Topik</label>
											<p><i class="fas fa-book icon-topic"></i> <?= $b['sub']; ?></p>
										</div>
										<div class="col-lg-6">
											<label>Sumber Data</label>
											<p><i class="fas fa-chart-area"></i> BMKG</p>
										</div>
									</div>
								</div>
							</div>
						</div><!-- end of Information-->

					</div>
				</div><!-- /.blog-main -->
			<?php endforeach; ?>
		</div><!-- /.row -->
	</div>