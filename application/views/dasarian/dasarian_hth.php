<!-- <link href="https://fonts.googleapis.com/css? family=Heebo:400,500,700,800|Fira+Sans:600&text=ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz?.1234567890[]';.()/\!@#$%^&*-=+_{}:|\.ABCDEFGHIJKLMNOPQRSTUVWXYZ*~\>" rel="stylesheet"> -->
<link href="<?php echo base_url('assets2/'); ?>css/view-dasarian.css" rel="stylesheet">

<body>
	<div class=" bg-white p-0">
		<div class="container-fluid">
			<div class="teks-besar p">
			</div>
			<h3>Monitoring Hari Tanpa Hujan</h3>
            <main class="py-2 container-fluid" style="width:100%;">
                <div class="container" style="width:100%;"></div>
                    <div class="card">
                    <center>
                        <div class="card-body" id="mapid" style="width:100%;"></div>
                    </center>
                    <br><br>
                    <div class="container">
                        <?php foreach($dasarian as $d): ?>
                            <?= $d['penjelasan'] ?>
                            <?php endforeach; ?>
                    </div>
                </div>
            </main>
		</div><!-- /.row -->
	</div>
</body>
<style>
	/*Legend specific*/
	.legend {
		size: 1000%;
		padding: 6px 8px;
		font: 14px Arial, Helvetica, sans-serif;
		background: white;
		background: rgba(255, 255, 255, 0.8);
		box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
		border-radius: 5px;
		line-height: 24px;
		color: #555;
	}

	.legend h4 {
		text-align: center;
		font-size: 16px;
		margin: 2px 12px 8px;
		color: #777;
	}

	.legend span {
		float: left;
		position: relative;
		bottom: 3px;
	}

	.legend a {
		float: left;
		position: relative;
		bottom: 3px;
	}

	.legend i {
		width: 18px;
		height: 18px;
		float: left;
		margin: 0 10px 0 20px;
		opacity: 0.7;
	}

	.legend i.icon {
		background-size: 18px;
		background-color: rgba(255, 255, 255, 1);
	}

	/* Dropdown Button */
	.dropbtn {
		background-color: #04AA6D;
		color: white;
		padding: 16px;
		font-size: 16px;
		border: none;
	}

	/* The container <div> - needed to position the dropdown content */
	.dropdown {
		position: relative;
		display: inline-block;
	}

	/* Dropdown Content (Hidden by Default) */
	.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f1f1f1;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
		z-index: 1;
	}

	/* Links inside the dropdown */
	.dropdown-content a {
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
	}

	/* Change color of dropdown links on hover */
	.dropdown-content a:hover {
		background-color: #ddd;
	}

	/* Show the dropdown menu on hover */
	.dropdown:hover .dropdown-content {
		display: block;
	}

	/* Change the background color of the dropdown button when the dropdown content is shown */
	.dropdown:hover .dropbtn {
		background-color: #3e8e41;
	}

</style>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>


<script>
    var map = L.map('mapid').fitWorld();

    var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 16,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    map.setView([0.293347, 101.706825], 7.4);
    setInterval(function() {
     map.invalidateSize();
    }, 1000);
    fetch("../../../assets2/js/kab.geojson")
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            L.geoJSON(data).addTo(map);
        });

        var legend = L.control({
        position: "bottomleft"
        });

        legend.onAdd = function(map) {
        var div = L.DomUtil.create("div", "legend");
        div.innerHTML += "<h4>KLASIFIKASI (Jumlah Hari)</h4>";
        div.innerHTML += '<i class="icon" style="background-image: url(<?php echo base_url('assets2/'); ?>./img/tujuh.png);background-repeat: no-repeat;"></i><span>Masih ada hujan s/d updating</span><br>';
        div.innerHTML += '<i class="icon" style="background-image: url(<?php echo base_url('assets2/'); ?>./img/satu.png);background-repeat: no-repeat;"></i></span><span>1 - 5 Sangat Pendek</span><br>';
        div.innerHTML += '<i class="icon" style="background-image: url(<?php echo base_url('assets2/'); ?>./img/dua.png);background-repeat: no-repeat;"></i></span><span>6 - 10 Pendek</span><br>';
        div.innerHTML += '<i class="icon" style="background-image: url(<?php echo base_url('assets2/'); ?>./img/tiga.png);background-repeat: no-repeat;"></i><span>11 - 20 Menengah</span><br>';
        div.innerHTML += '<i class="icon" style="background-image: url(<?php echo base_url('assets2/'); ?>./img/empat.png);background-repeat: no-repeat;"></i><span>21 - 30 Panjang</span><br>';
        div.innerHTML += '<i class="icon" style="background-image: url(<?php echo base_url('assets2/'); ?>./img/lima.png);background-repeat: no-repeat;"></i><span>31 - 60 Sangat Panjang</span><br>';
        div.innerHTML += '<i class="icon" style="background-image: url(<?php echo base_url('assets2/'); ?>./img/enam.png);background-repeat: no-repeat;"></i><span> >60 Kekeringan Esktrim</span><br>';
        return div;
        };

        legend.addTo(map);

        // var batasRiau = L.geoJSON(riaudata);
        // batasRiau.addTo(map);
        
        <?php foreach ($lokasiX as $key => $value) { ?>
        var markerIcon;
        var kriteria = <?= $value['kriteria'] ?>;
        if (kriteria == 1) {
            markerIcon = new L.Icon({
            iconUrl: '<?php echo base_url('assets2/'); ?>./img/satu.png',
            iconSize: [10, 10]
            });
        } else if (kriteria == 2) {
            markerIcon = new L.Icon({
            iconUrl: '<?php echo base_url('assets2/'); ?>./img/dua.png',
            iconSize: [10, 10]
            });
        } else if (kriteria == 3) {
            markerIcon = new L.Icon({
            iconUrl: '<?php echo base_url('assets2/'); ?>./img/tiga.png',
            iconSize: [10, 10]
            });
        } else if (kriteria == 4) {
            markerIcon = new L.Icon({
            iconUrl: '<?php echo base_url('assets2/'); ?>./img/empat.png',
            iconSize: [10, 10]
            });
        } else if (kriteria == 5) {
            markerIcon = new L.Icon({
            iconUrl: '<?php echo base_url('assets2/'); ?>./img/lima.png',
            iconSize: [10, 10]
            });
        } else if (kriteria == 6) {
            markerIcon = new L.Icon({
            iconUrl: '<?php echo base_url('assets2/'); ?>./img/enam.png',
            iconSize: [10, 10]
            });
        } else {
            markerIcon = new L.Icon({
            iconUrl: '<?php echo base_url('assets2/'); ?>./img/tujuh.png',
            iconSize: [10, 10]
            });
        }
        marker = new L.marker([<?= $value['lintang'] ?>, <?= $value['bujur'] ?>], {
            icon: markerIcon
            })
            .bindPopup("<h5>Nama Pos : <?= $value['nama_pos'] ?></h5> <p> <h6>Kabupaten : <?= $value['kabupaten'] ?></h6> <br> <h6>Kecamatan : <?= $value['kecamatan'] ?></h6> <br> <h6>HTH : <?= $value['hth'] ?></h6> <br> <h6>Ket : <?= $value['ket'] ?></h6> ")
            .addTo(map);
        // .push(marker);
        <?php } ?>
    </script>