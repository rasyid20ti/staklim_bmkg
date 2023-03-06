<!DOCTYPE html>
<html>

<head>
	<title>403 Forbidden</title>
	<link href="<?php echo base_url('assets2/'); ?>css/404.css" rel="stylesheet">
	<link href="<?php echo base_url('assets2/'); ?>js/404.js" rel="stylesheet">
</head>
<style>
	body,
	html {
		background: #CA2400;
		position: relative;
		margin: 0;
		width: 100%;
		height: 100%
	}

	#patopat {
		position: relative;
		color: #fff;
		font-family: sans-serif;
		max-width: 340px;
		-webkit-user-select: none;
		-moz-user-select: none;
		-o-user-select: none;
		margin: 0 auto;
		user-select: none;
		top: 25%
	}

	.message {
		text-align: center
	}

	h1 {
		margin: 0;
		padding: 0;
		font-size: 8.5em;
		transform: skewY(-5deg);
		transition: .4s ease-in-out all
	}

	h1 img {
		margin: 0 10px
	}

	h2 {
		font-size: 1.7em;
		text-transform: uppercase;
		letter-spacing: -1px;
		margin: 0 0 50px;
		padding: 0;
		transform: skewY(-5deg)
	}

	h3 {
		color: #fff;
		font-size: 1em;
		font-weight: lighter;
		line-height: 1.6
	}

	@media (max-width: 340px) {
		h1 {
			font-size: 5em
		}

		h1 img {
			width: 45px
		}
	}
</style>

<body>
	<div id="patopat">
		<div class="message">
			<h1>4<img src="https://www.bmkg.go.id/asset/img/logo/logo-bmkg-white.png" alt="">4</h1>
			<h2>Not Found</h2>
			<h3>Halaman situs yang Anda cari belum bisa diakses</h3>
		</div>
	</div>

</body>
<script type="text/javascript">
	setTimeout(
		function() {
			window.location = "http://staklim-riau.bmkg.go.id"
		},
		500); // waktu tunggu atau delay
</script>


</html>