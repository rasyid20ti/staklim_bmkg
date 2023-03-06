<?php
function format_hari_tanggal($waktu)
{
    $hari_array = array(
        'Minggu',
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu'
    );
    $hr = date('w', strtotime($waktu));
    $hari = $hari_array[$hr];
    $tanggal = date('j', strtotime($waktu));
    $bulan_array = array(
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember',
    );
    $bl = date('n', strtotime($waktu));
    $bulan = $bulan_array[$bl];
    $tahun = date('Y', strtotime($waktu));
    $jam = date( 'H:i:s', strtotime($waktu));
    
    //untuk menampilkan hari, tanggal bulan tahun jam
    //return "$hari, $tanggal $bulan $tahun $jam";

    //untuk menampilkan hari, tanggal bulan tahun
    return "$hari, $tanggal $bulan $tahun";
}
date_default_timezone_set("Asia/jakarta");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>BMKG | Stasiun Klimatologi Riau</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Logo BMKG -->
	<link href="<?= base_url('assets2/img/logo.png'); ?>" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<linkq href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

		<!-- Icon Font Stylesheet -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Libraries Stylesheet -->
		<link href="<?php echo base_url('assets2/'); ?>css/header.css" rel="stylesheet">
		<link href="<?php echo base_url('assets2/'); ?>./lib/animate/animate.min.css" rel="stylesheet">
		<link href="<?php echo base_url('assets2/'); ?>./lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
		<link href="<?php echo base_url('assets2/'); ?>./lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
		<link href="<?php echo base_url('assets2/'); ?>./lib/haritanggal.css" rel="stylesheet" />
		<link href="<?php echo base_url('assets2/'); ?>./lib/gempabumi.css" rel="stylesheet" />
		<link href="<?php echo base_url('assets2/'); ?>./lib/thrustfault.css" rel="stylesheet" />

		<!-- Customized Bootstrap Stylesheet -->
		<link href="<?php echo base_url('assets2/'); ?>css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url('assets2/'); ?>css/an.css" rel="stylesheet">
		<link href="<?php echo base_url('assets2/'); ?>css/iklim.css" rel="stylesheet">
		<!-- Template Stylesheet -->
		<link href="<?php echo base_url('assets2/'); ?>./css/style.css" rel="stylesheet">
		<link href="<?php echo base_url('assets2/'); ?>./css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url('assets2/'); ?>./css/font-awesome.css" rel="stylesheet">

		<!-- Untuk Snipping Tracking Cek Status Tiket -->
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-capable" content="yes">


		<!-- Kerjasama -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	
		<!-- Fonts -->
		<link rel="dns-prefetch" href="//fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

		<!-- Styles -->
		<link href="<?php echo base_url('assets2/'); ?>./css/app.css" rel="stylesheet">
		<link href="<?php echo base_url('assets2/'); ?>./css/fontstyle.css" rel="stylesheet">

		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style>
			#mapid {
				height: 65vh;
				width: 100vw;
			}


			#maphth {
				height: 65vh;
				width: 65vw;
				/* width: 400px;
        height:400px;
        min-height: 100%;
        min-width: 100%;
        display: block; */
			}

			.bg-light {
				background-color: #FFFFFF !important
			}

		</style>

</head>
<header>
	<div class="navbar bg-dark">
		<div class="topbar-time hari-digit">
			<?php $date=date('Y-m-d'); echo format_hari_tanggal($date); ?>
		</div>
		<div class="topbar-time pull-right hari-digit">
			STANDAR WAKTU INDONESIA <span id="jam" class="FontDigit"></span>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-light px-4 px-lg-5 py-3 py-lg-0">
	</nav>
	<div class="position-relative p-0">
		<nav class="navbar navbar-dark navbar-expand-lg bg-light px-4 px-lg-5 py-3 py-lg-0">
			<a href="http://staklim-riau.bmkg.go.id/" class="navbar-brand p-0">
				<img src="<?= base_url('assets2/img/logo_staklimRiau.png'); ?>" alt="Logo">
			</a>
			
			<div class="navbar-brand p-0">
			<a href="https://staklim-riau.bmkg.go.id/infografis/detail/eW5BQm9ERnlISXM0aEc5MzhXZlh1UT09">
					<img src="<?= base_url('assets2/img/logo_akhlak.png'); ?>" alt="Logo">
				</a>
				<!-- <img src="<?= base_url('assets2/img/logo_akhlak.png'); ?>" alt="Logo"> -->
				<!-- <img src="<?= base_url('assets2/img/logo_bangga.png'); ?>" alt="Logo"> -->
			</div>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
				<span class="fa fa-bars" style="color:grey; font-size:28px;"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<div class="navbar-nav ms-auto py-0 pe-4 font-header">
					<a href="<?php echo site_url('home/'); ?>" class="nav-item nav-link">Beranda</a>
					<a href="<?php echo site_url('profile/profil'); ?>" class="nav-item nav-link">Profil</a>
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
						<div class="dropdown-menu m-0">
							<a href="<?= base_url('pengajuan/'); ?>" class="dropdown-item">Permintaan Data</a>
							<a href="<?php echo site_url('service/service'); ?>" class="dropdown-item">Ketersediaan Data</a>
						</div>
					</div>
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Produk</a>
						<div class="dropdown-menu m-0">
							<a href="<?php echo site_url('visual/'); ?>" class="dropdown-item">Visualisasi</a>
							<a href="<?php echo site_url('infografis/'); ?>" class="dropdown-item">Infografis</a>
							<a href="<?php echo site_url('dasarian/'); ?>" class="dropdown-item">Informasi Iklim</a>
						</div>
					</div>
					<a href="<?php echo site_url('media'); ?>" class="nav-item nav-link">Media</a>
					<a href="<?php echo site_url('contact/'); ?>" class="nav-item nav-link active">Kontak Kami</a>
				</div>
			</div>
		</nav>
	</div>
</header>