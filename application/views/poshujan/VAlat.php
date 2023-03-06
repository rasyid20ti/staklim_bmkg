<link href="<?php echo base_url('assets2/'); ?>css/alat.css" rel="stylesheet">
<!-- Script -->
<link
      href="https://code.jquery.com/ui/1.12.1/themes/ui-lightness/jquery-ui.css"
      rel="stylesheet"
    />
<body>
<div class="headerAlat">
	<div class="container">
		<div class='row'>
			<div class='col'>
				<img src="<?= base_url('assets2/images/icon/peta.png'); ?>">
				<a href="https://staklim-riau.bmkg.go.id/infografis/detail/YkdsbFNHUlZPbVVvWHBrdmpISU1tdz09" class="btn btn-primary" style="float:right;margin-top:10px;">Instrumen Alat Observasi</a>
			</div>
			<div class='col' style="padding-top:30px;">
				<h5>Peta Persebaran Alat Observasi di Riau</h5>
					<form action="<?= base_url('service/cari'); ?>" method="GET">
						<div class="input-group mb-3"> 
							<div class="custom-file ui-widget">
								<input name='nama_pos' id="auto_check" class='form-control' placeholder="Ketikkan Nama Pos" >
								<button type="submit" class="btn btn-success">Cari</button>
							</div>
						</div>
					</form>
				</div>				
			</div>
		</div>
	</div>
</div>

<!-- ✅ load jQuery ✅ -->
<script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
	<script src="<?= base_url('assets2/js/autocomplete.js'); ?>"></script>

    <!-- ✅ load jQuery UI ✅ -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
      integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>


				<!-- <form action="<?php // base_url('service/cari'); ?>" method="GET" style="flex-direction: row; align-items:center"> -->
						<!-- <div class="form-group"> -->
						<!-- <input required type="text" class="form-control" name="nama_pos" id="nama_pos" placeholder="Masukkan Nama Pos" autocomplete="off" autofocus> -->
						<!-- <input required type="text" class="form-control" name="nama_pos" id="nama_pos" placeholder="Masukkan Nama Pos" autofocus> -->
						<!-- <input type="text" class="form-control" id="title" placeholder="Title" style="width:500px;"> -->
						<!-- <div class="input-group-append">
							<button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
						</div> -->
					<!-- </div>	 -->
						<!-- </div> -->
					<!-- </div> -->
				<!-- </form> -->
	<div class="container-fluid">
		<div class="card">
			<center>
					<div class="card-body" id="mapid" style="width:100%"></div>
			</center>
		</div>
		<div class="card-footer">
			<center>
				<table>
					<thead>
						<tr>
							<h4><strong>JENIS ALAT</strong></h4>
						</tr>
						<tr>
							<th style="padding-left: 15px;"><strong>&nbsp;&nbsp;&nbsp;&nbsp;PHK</strong></th>
							<th style="padding-left: 15px;"><strong>&nbsp;&nbsp;ARG</strong></th>
							<th style="padding-left: 15px;"><strong>&nbsp;&nbsp;AWS</strong></th>
							<th style="padding-left: 15px;"><strong>&nbsp;&nbsp;&nbsp;&nbsp;AAWS</strong></th>
							<th style="padding-left: 15px;"><strong>&nbsp;&nbsp;&nbsp;&nbsp;ASRS</strong></th>
							<th style="padding-left: 15px;"><strong>&nbsp;&nbsp;&nbsp;&nbsp;IKRO</strong></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<br>
							<td><img src="<?php echo base_url('assets2/'); ?>./images/NormalDasarian/ph_1.png" height="75px" width="95px"></td>
							<td><img src="<?php echo base_url('assets2/'); ?>./images/NormalDasarian/arg_1.png" height="85px" width="85px"></td>
							<td><img src="<?php echo base_url('assets2/'); ?>./images/NormalDasarian/aws_1.png" height="78px" width="100px"></td>
							<td><img src="<?php echo base_url('assets2/'); ?>./images/NormalDasarian/aaws_1.png" height="95px" width="120px"></td>
							<td><img src="<?php echo base_url('assets2/'); ?>./images/NormalDasarian/asrs_1.png" height="85px" width="100px"></td>
							<td><img src="<?php echo base_url('assets2/'); ?>./images/NormalDasarian/ikro_1.png" height="85px" width="100px"></td>
						</tr>
					</tbody>
				</table>
			</center>
		</div>
	</div>

    <!-- jQuery UI -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
	<!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
	<!-- <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script> -->
    
	<!-- Scripts -->
	<!-- <script src="./js/app.js"></script> -->
	<!-- Make sure you put this AFTER Leaflet's CSS -->
	<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
		<script>
		var map = L.map('mapid').fitWorld();

		var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			maxZoom: 19,
			attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
		}).addTo(map);

		map.setView([0.67, 101.7], 15);
		fetch("../assets2/js/kab.geojson")
			.then(function (response) {
				return response.json();
			})
			.then(function (data) {
				L.geoJSON(data).addTo(map);
			});
		var locations = <?php echo json_encode($lokasi, JSON_NUMERIC_CHECK); ?> ;
		var array = [];
		for (var i = 0; i < locations.length; i++) {
			var kode_alat = locations[i][4];
			var markerIcon;
			if (kode_alat == 1) {
				markerIcon = new L.Icon({
					iconUrl: '<?php echo base_url('assets2/'); ?>./images/icon2/1_.png',
					iconSize: [30, 25]
					
				});
			} else if (kode_alat == 2) {
				markerIcon = new L.Icon({
					iconUrl: '<?php echo base_url('assets2/'); ?>./images/icon2/2_.png',
					iconSize: [30, 25]
				});
			} else if (kode_alat == 3) {
				markerIcon = new L.Icon({
					iconUrl: '<?php echo base_url('assets2/'); ?>./images/icon2/3_.png',
					iconSize: [30, 25]
				});
			} else if (kode_alat == 4) {
				markerIcon = new L.Icon({
					iconUrl: '<?php echo base_url('assets2/'); ?>./images/icon2/4_.png',
					iconSize: [30, 25]
				});
			} else if (kode_alat == 5) {
				markerIcon = new L.Icon({
					iconUrl: '<?php echo base_url('assets2/'); ?>./images/icon2/5_.png',
					iconSize: [30, 25]
				});
			} else {
				markerIcon = new L.Icon({
					iconUrl: '<?php echo base_url('assets2/'); ?>./images/icon2/6_.png',
					iconSize: [30, 40]
				});
			}
			marker = new L.marker([locations[i][2], locations[i][3]], {
					icon: markerIcon
				})
				.bindPopup('<h4><a href="<?= base_url() ?>service/detail/' + locations[i][1] + '/">' + locations[i][0] +
					'</a></h4><hr><p>ID Pos : ' + locations[i][1] + '</p>' +
					'<p>Koordinat : ' + locations[i][2] + ', ' + locations[i][3] + '</p>');
			array.push(marker);
		}

		var layerGroup = L.featureGroup(array).addTo(map);
		map.fitBounds(layerGroup.getBounds(), {
			padding: [75, 75]
		});
		var baseMap = {
			"<span>OpenStreetMap</span>": osm
		};

		var overlayMaps = {
			"Pos Hujan": layerGroup
		};

		//L.control.layers(baseMap, overlayMaps).addTo(map);

	</script>