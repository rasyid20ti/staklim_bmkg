<!-- <link href="https://fonts.googleapis.com/css? family=Heebo:400,500,700,800|Fira+Sans:600&text=ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz?.1234567890[]';.()/\!@#$%^&*-=+_{}:|\.ABCDEFGHIJKLMNOPQRSTUVWXYZ*~\>" rel="stylesheet"> -->
<link href="<?php echo base_url('assets2/'); ?>css/view-dasarian.css" rel="stylesheet">
<style>
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,.2);
  border-radius: 6px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
<body>
	<div class=" bg-white p-0">
	<div class="container">
	<div class="teks-besar p">
			</div>
			<?php foreach ($dasarian as $d) : ?>
				<h3><?= $d['judul']; ?></h3>
				<div style="color: #616161;margin-bottom: 10px;"><i class="fas fa-calendar mr-1"></i>
          <!-- <?= date('d M Y', strtotime($d['datetime'])); ?>  -->
          <?php
          if (preg_match('/\blh3.googleusercontent.com\b/', $d['gambar_dalam'])) {
            echo date('d M Y');
          } else {
            date('d M Y', strtotime($d['datetime']));
          } ?>
          &nbsp; <i class="fa fa-list-alt"></i>  <?=$d['kategori'];?></div>
			<div class="row g-4">
					<div class="col-md-6">
						<div class='colSamping'>
							<img id="myImg" src="<?= $d['gambar_dalam']; ?>" style="width:100%">
						</div>
					</div>
					<div class="col-md-6" style="text-align:justify">
							<?= $d['penjelasan']; ?>
              
              <div class="information" style="margin-top: 40px;"> <!-- Information -->
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-6">
                        <label>Topik</label>  
                        <p><i class="fas fa-book"></i>  <?= $d['kategori']; ?></p>
                      </div>
                      <div class="col-lg-6">
                        <label>Sumber Data</label>
                        <p><i class="fas fa-chart-area"></i>  BMKG</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- end of Information -->

						</div>
					</div><!-- /.blog-main -->
					<?php endforeach; ?>
				</div><!-- /.row -->
				
			</div>
			<!-- The Modal -->
			<div id="myModal" class="modal">
        <img class="modal-content" id="img01">
        <span class="close">&times;</span>
			<div id="caption"></div>
			</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>