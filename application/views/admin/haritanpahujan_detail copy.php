<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
   integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
   crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
   integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
   crossorigin=""></script>

<div class="container-fluid">
  <div class="clearfix">
    <div class="float-left">
      <h1 class="h3 mb-4 text-gray 800"><?php echo $title; ?> </h1>
    </div>
    <div class="float-left">
    </div>
  </div>
  <div class="card shadow mb-4">
    <div class="card-body">
      <!-- Periode :  -->
      <center>
        <div id="map" style="width: 1200px;"></div>
      </center>
    </div>
  </div>
</div>

<script>
  var map = L.map('map').fitWorld();

var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

map.setView([0.293347, 101.706825], 7.4);
fetch("../assets2/js/kab.geojson")
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
      div.innerHTML += '<a>1 - 5</a><i class="icon" style="background-image: url(<?php echo base_url('assets2/'); ?>./img/satu.png);background-repeat: no-repeat;"></i></span><span>Sangat Pendek</span><br>';
      div.innerHTML += '<a>6 - 10</a><i class="icon" style="background-image: url(<?php echo base_url('assets2/'); ?>./img/dua.png);background-repeat: no-repeat;"></i></span><span>Pendek</span><br>';
      div.innerHTML += '<a>11 - 20</a><i class="icon" style="background-image: url(<?php echo base_url('assets2/'); ?>./img/tiga.png);background-repeat: no-repeat;"></i><span>Menengah</span><br>';
      div.innerHTML += '<a>21 - 30</a><i class="icon" style="background-image: url(<?php echo base_url('assets2/'); ?>./img/empat.png);background-repeat: no-repeat;"></i><span>Panjang</span><br>';
      div.innerHTML += '<a>31 - 60</a><i class="icon" style="background-image: url(<?php echo base_url('assets2/'); ?>./img/lima.png);background-repeat: no-repeat;"></i><span>Sangat Panjang</span><br>';
      div.innerHTML += '<a> > 60</a><i class="icon" style="background-image: url(<?php echo base_url('assets2/'); ?>./img/enam.png);background-repeat: no-repeat;"></i><span>Kekeringan Esktrim</span><br>';
      div.innerHTML += '<a></a><i class="icon" style="background-image: url(<?php echo base_url('assets2/'); ?>./img/tujuh.png);background-repeat: no-repeat;"></i><span>Masih ada hujan s/d updating</span><br>';

      return div;
    };

    legend.addTo(map);

    // var batasRiau = L.geoJSON(riaudata);
    // batasRiau.addTo(map);
    
    <?php foreach ($lokasi as $key => $value) { ?>
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
        .bindPopup("<h5>Nama Pos : <?= $value['nama_pos'] ?></h5> <p> <h5>HTH : <?= $value['hth'] ?></h5> <br> <h5>Ket : <?= $value['ket'] ?></h5> ")
        .addTo(map);
      // .push(marker);
    <?php } ?>

</script>
