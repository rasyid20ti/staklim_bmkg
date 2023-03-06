<?php
function tgl_indoBrita($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>
<style>
	.videomodal .modal-dialog {
      max-width: 800px;
      margin: 30px auto;
  }    
.videomodal .modal-body {
  position:relative;
  padding:0px;
}
.videomodal .close {
  position:absolute;
  right:-30px;
  top:0;
  z-index:999;
  font-size:2rem;
  font-weight: normal;
  color:#fff;
  opacity:1;
}
.cursor-pointer{
    cursor: pointer;
}
</style>
<link href="<?= base_url('assets2/'); ?>css/sponsor.css" rel="stylesheet">
<!-- Footer Start -->
<!-- <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s"> -->
<div class="container-fluid text-light footer pt-5 wow fadeIn" style="background-color: #313030;margin-top:10px;"data-wow-delay="0.1s">
	<div class=" py-5">
		<div class="row g-5">
			<div class="col-lg-3 col-md-6">
				<div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto"
					style="width: 150px; height: 150px;">
					<img src="https://cdn.bmkg.go.id/Web/Logo-BMKG-new.png" height="70" alt="" loading="lazy" />
				</div>
				<p class="text-center">Stasiun Klimatologi Riau</p>
			</div>
			<div class="col-lg-3 col-md-6">
				<h4 class=" text-start text-primary fw-normal mb-4">Kontak</h4>
				<p class="mb-2"><i class="fas fa-map-marker-alt me-3"></i>Jl. Unggas, Kelurahan Simpang Tiga,
					Kecamatan Bukit Raya, Pekanbaru, Provinsi Riau (28284)</p>
				<p class="mb-2"><i class="fas fa-phone-alt me-3"></i>+62 (761) 8411831</p>
				<p class="mb-2"><i class="fas fa-envelope me-3"></i>staklim.riau@bmkg.go.id</p>
				<div class="d-flex pt-2">
					<a class="btn btn-outline-light btn-social" href="https://www.instagram.com/iklimriau/" target="_blank"><i class="fab fa-instagram" style='color: pink'></i></a>
					<a class="btn btn-outline-light btn-social" href="https://www.youtube.com/channel/UC9YlX4gXmtyHmLt6CFmh0xQ" target="_blank"><i class="fab fa-youtube" style='color: red'></i></a>
					<a class="btn btn-outline-light btn-social" href="https://api.whatsapp.com/send?phone=+628117532480&text=Hai%20Admin%20Stasiun%20Klimatologi%20Riau%0AMohon%20Bantuannya%20untuk%20(Isi%20Keperluan)" target="_blank"><i class="fab fa-whatsapp" style='color: green'></i></a>
					<a class="btn btn-outline-light btn-social" href="https://telegram.me/+6282385172220" target="_blank"><i class="fab fa-telegram" style='color: blue'></i></a>
					<!-- <a class="btn btn-outline-light btn-social" href="mailto: staklim.riau@bmkg.go.id" target="_blank"><i class="fas fa-envelope" style='color: blue'></i></a> -->
				</div>
			</div>
			<div class="col-lg-3 col-md-6 ">
				<?php foreach($media as $m): ?>
				<h4 class=" text-start text-primary fw-normal mb-4">Media</h4>
					<img src="https://img.youtube.com/vi/<?= $m['embed']; ?>/mqdefault.jpg" class="video-btn img-fluid cursor-pointer" data-toggle="modal" data-src="<?= $m['linkMedia']; ?>" data-target="#myModal" style='height:146px;width:263px'>
					<!-- Modal -->
					<div class="modal videomodal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>        
									<!-- 16:9 aspect ratio -->
									<div class="embed-responsive embed-responsive-16by9">
										<iframe class="embed-responsive-item" width="300" height="200" src="<?= $m['linkMedia']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="col-lg-3 col-md-6">
				<h4 class=" text-start text-primary fw-normal mb-4">Berita</h4>
					<?php foreach($berita as $b): ?>
						<div class="row">
							<div class="col-4">
								<img src="<?= $b['foto'] ?>" style="width:120px;height:72px;">
							</div>
							<div class="col-8 beritaBawah">
								<a href='https://staklim-riau.bmkg.go.id/media/berita_detail/<?= encrypt_url($b['id']); ?>'><h3><?= $b['title']; ?></h3></a>
								<p><?=tgl_indoBrita($b['date_created']); ?></p>
							</div>
							<div style="margin-bottom:15px;"></div>
						</div>
					<?php endforeach; ?>	 
				</div>
			</div>
		</div>
	<!-- <div class="container" style="background-color: #272626;"> -->
		<footer>
		<div class="copyright" style="background-color: #272626;">
			<!-- <a class="border-bottom" href="<?= base_url('auth/'); ?>"> -->
			<?php echo date('Y'); ?> © Stasiun Klimatologi Riau. Kerjasama dengan Politeknik Caltex Riau.
		<!-- </a> -->
		</div>
</footer>
	<!-- </div> -->
</div>


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
<!-- JavaScript Libraries -->
<script src="https://kit.fontawesome.com/5d923249f9.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('assets2/'); ?>./lib/wow/wow.min.js"></script>
<script src="<?php echo base_url('assets2/'); ?>./lib/easing/easing.min.js"></script>
<script src="<?php echo base_url('assets2/'); ?>./lib/waypoints/waypoints.min.js"></script>
<script src="<?php echo base_url('assets2/'); ?>./lib/counterup/counterup.min.js"></script>
<script src="<?php echo base_url('assets2/'); ?>./lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url('assets2/'); ?>./lib/tempusdominus/js/moment.min.js"></script>
<script src="<?php echo base_url('assets2/'); ?>./lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="<?php echo base_url('assets2/'); ?>./lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="<?php echo base_url('assets2/'); ?>./js/main.js"></script>
<script src="<?php echo base_url('assets2/'); ?>./js/jquery-3.4.1.slim.js"></script>
<script src="<?php echo base_url('assets2/'); ?>./js/bootstrap.js"></script>
<script src="<?php echo base_url('assets2/'); ?>./js/popper.js"></script>
<script src="<?php echo base_url('assets2/'); ?>./js/fancy.js"></script>

<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- SMTP EMAIL
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="<?php echo base_url('assets2'); ?>/js/email.js"></script> -->
<!-- <script src="<?php echo base_url('assets2'); ?>/js/bootstrap.esm.js"></script> -->
<!-- <script src="<?php echo base_url('assets2'); ?>/js/bootstrap.esm.min.js"></script> -->

<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Jam -->
<script type="text/javascript">
	window.onload = function () {
		jam();
	}

	function jam() {
		var e = document.getElementById('jam'),
			d = new Date(),
			h, m, s;
		h = d.getHours();
		m = set(d.getMinutes());
		s = set(d.getSeconds());

		e.innerHTML = h + ':' + m + ':' + s + ' WIB';

		setTimeout('jam()', 1000);
	}

	function set(e) {
		e = e < 10 ? '0' + e : e;
		return e;
	}

</script>

<!-- Script Untuk Editor !-->
<script src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.1/tinymce.min.js"></script>

<!-- editor textarea-->
<script type="text/javascript">
	tinymce.init({
		selector: 'textarea',
		height: 300,
		theme: 'modern',
		plugins: [
			'advlist autolink lists link image charmap print preview hr anchor pagebreak',
			'searchreplace wordcount visualblocks visualchars code fullscreen',
			'insertdatetime media nonbreaking save table contextmenu directionality',
			'emoticons template paste textcolor colorpicker textpattern imagetools'
		],
		toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		toolbar2: 'print preview media | forecolor backcolor emoticons',
		image_advtab: true
	});

</script>

<!-- <script type="text/javascript">
    //for youtube video modal
	$(document).ready(function() {
      var $videoSrc;  
      $('.video-btn').click(function() {
          $videoSrc = $(this).data("src");
      });
      console.log($videoSrc);
      $('#myModal').on('shown.bs.modal', function (e) {
      $("#video").attr('src',$videoSrc + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1" ); 
      })
      $('#myModal').on('hide.bs.modal', function (e) {
          $("#video").attr('src',$videoSrc); 
      })
});
</script> -->

<!-- <script>
	// Get the modal
	var modal = document.getElementById("myModal");

	// Get the image and insert it inside the modal - use its "alt" text as a caption
	var img = document.getElementById("myImg");
	var modalImg = document.getElementById("img01");
	var captionText = document.getElementById("caption");
	img.onclick = function () {
		modal.style.display = "block";
		modalImg.src = this.src;
		captionText.innerHTML = this.alt;
	}

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function () {
		modal.style.display = "none";
	}

</script> -->
<!-- Check Informasi -->
<script type="text/javascript">
	function checkIn(el) {
		var checkboxes3 = document.getElementsByName('informasi[]');
		if (el.checked) {
			for (var i = 0; i < checkboxes3.length; i++) {
				if (checkboxes3[i].type == 'checkbox') {
					checkboxes3[i].checked = true;
				}
			}
		} else {
			for (var i = 0; i < checkboxes3.length; i++) {
				if (checkboxes3[i].type == 'checkbox') {
					checkboxes3[i].checked = false;
				}
			}
		}
	}

</script>
</body>

</html>
