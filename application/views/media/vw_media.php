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
					<img src="<?= base_url('assets2/images/icon/media.png'); ?>">
				</div>
				<div class='col' style="padding-top:30px;color:#73777B;">
					<h5>Media</h5>
					<p>Media adalah sarana informasi yang digunakan untuk menyampaikan pesan kepada khalayak ramai.</p>
					<br><br>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="container-fluid isiInfografis">
		<div class="row g-4" style="padding-bottom:30px;">
				<div class="col-lg-3 col-sm-6">
					<a href="<?= base_url('media/artikel'); ?>">
						<div class="kotakInfografis">
							<img src="<?= base_url('assets2/images/icon/artikel.png'); ?>" class="mx-auto img-fluid" style="width:auto">
							<h5>Artikel</h5><br>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="<?= base_url('media/berita'); ?>">
						<div class="kotakInfografis">
							<img src="<?= base_url('assets2/images/icon/berita-1.png'); ?>" class="mx-auto img-fluid" style="width:auto">
							<h5>Berita</h5><br>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="<?= base_url('media/buletin'); ?>">
						<div class="kotakInfografis">
							<img src="<?= base_url('assets2/images/icon/buletin-1.png'); ?>" class="mx-auto img-fluid" style="width:auto">
							<h5>Buletin</h5><br>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="<?= base_url('media/video'); ?>">
						<div class="kotakInfografis">
							<img src="<?= base_url('assets2/images/icon/video.png'); ?>" class="mx-auto img-fluid" style="width:auto">
							<h5>Video</h5><br>
						</div>
					</a>
				</div>
				
			<div class="col-lg-3 col-sm-6"></div>
		</div>
	</div>
</body>