<body>
  <div class=" bg-white p-0">
    <div class=" position-relative p-0">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="http://iklimriau.bmkg.go.id/" class="navbar-brand p-0">
        <img src="<?= base_url('assets2/img/Terbaru_logo.png'); ?>" alt="Logo">
        </a>
        <div class="navbar-brand p-0">
          <img src="<?= base_url('assets2/img/logo_akhlak.png'); ?>" alt="Logo">
          <img src="<?= base_url('assets2/img/logo_bangga.png'); ?>" alt="Logo">
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="<?php echo site_url('home/'); ?>" class="nav-item nav-link">Beranda</a>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
              <div class="dropdown-menu m-0">
                <a href="<?= site_url('profile/profile_kantor'); ?>" class="dropdown-item">Kantor Administrasi</a>
                <a href="<?= site_url('profile/profile_tambang'); ?>" class="dropdown-item">Kantor Operasional</a>
                <a href="<?= site_url('profile/profile_visimisi'); ?>" class="dropdown-item">Visi Misi</a>
                <a href="<?= base_url('profile/profile_sdm'); ?>" class="dropdown-item">Sumber Daya Manusia</a>
                <a href="<?php echo site_url('profile/profile_organisasi'); ?>" class="dropdown-item">Struktur Organisasi</a>
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Layanan</a>
              <div class="dropdown-menu m-0">
                <a href="<?= base_url('pengajuan/'); ?>" class="dropdown-item">Permintaan Data</a>
                <a href="<?php echo site_url('service/service'); ?>" class="dropdown-item">Ketersediaan Data</a>
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Media</a>
              <div class="dropdown-menu m-0">
                <a href="<?= base_url('media/berita'); ?>" class="dropdown-item">Berita</a>
                <a href="<?php echo site_url('media/buletin'); ?>" class="dropdown-item">Buletin</a>
              </div>
            </div>
            <a href="<?php echo site_url('contact/'); ?>" class="nav-item nav-link">Kontak Kami</a>
          </div>
        </div>
      </nav>
    </div>
   <!-- Navbar End -->
   <center>
      <div id="indonesia_map"></div>
    </center>
    <!-- Script Layanan Penerbangan -->
    <script src="<?php echo base_url('assets2/'); ?>js/OpenLayers.js"></script>
    <script language="javascript" type="text/javascript">
      map = new OpenLayers.Map("indonesia_map");
      map.addLayer(new OpenLayers.Layer.OSM());
      epsg4326 = new OpenLayers.Projection("EPSG:4326");
      projectTo = map.getProjectionObject();
      var lonLat = new OpenLayers.LonLat(117.665, -2.5).transform(epsg4326, projectTo);
      var zoom = 5;
      map.setCenter(lonLat, zoom);
      var vectorLayer = new OpenLayers.Layer.Vector("Overlay");
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(95.34, 5.8766666666667).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Maimun Saleh - Sabang (WITN, 96001)</span><br><br><a href="metar_speci.php?icao=WITN&sa=yes&sp=yes">METAR WITN 200700Z 29005KT 8000 SCT020 32/23 Q1008<br>NOSIG=</a><br><br><a href="taf.php?icao=WITN&ft=yes&fc=yes">TAF WITN 200500Z 2006/2018 12007KT 8000 SCT018=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(95.420833333333, 5.52).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Sultan Iskandar Muda - Banda Aceh (WITT, 96011)</span><br><br><a href="metar_speci.php?icao=WITT&sa=yes&sp=yes">METAR WITT 200730Z 31010KT 9999 SCT018 32/24 Q1006<br>NOSIG=</a><br><br><a href="taf.php?icao=WITT&ft=yes&fc=yes">TAF WITT 200500Z 2006/2106 15006KT 9999 SCT018<br>BECMG 2010/2012 33005KT<br>BECMG 2021/2023 13006KT=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(96.249444444444, 4.045).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Cut Nyak Dien Nagan Raya - Meulaboh, NAD (WITC, 96015)</span><br><br><a href="metar_speci.php?icao=WITC&sa=yes&sp=yes">METAR WITC 200600Z 23007KT 9999 SCT017 31/27 Q1008<br>NOSIG=</a><br><br><a href="taf.php?icao=WITC&ft=yes&fc=yes">TAF WITC 200500Z 2006/2018 23007KT 8000 SCT018<br>TEMPO 2009/2013 26010KT 4000 TSRA FEW015CB BKN017=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(96.948611111111, 5.2258333333333).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Malikus Saleh - Lhokseumawe (WIMA, 96009)</span><br><br><a href="metar_speci.php?icao=WIMA&sa=yes&sp=yes">METAR WIMA 200700Z 01007KT 9000 FEW016 30/24 Q1007=</a><br><br><a href="taf.php?icao=WIMA&ft=yes&fc=yes">TAF WIMA 200500Z 2006/2018 22007KT 8000 SCT018=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(97.704444444444, 1.1663888888889).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Binaka - Gunung Sitoli (WIMB, 96075)</span><br><br><a href="metar_speci.php?icao=WIMB&sa=yes&sp=yes">METAR WIMB 200730Z 25004KT 8000 TS FEW015CB SCT016 29/26 Q1006<br>NOSIG<br>RMK CB OVER THE FIELD=</a><br><br><a href="taf.php?icao=WIMB&ft=yes&fc=yes">TAF WIMB 200500Z 2006/2018 VRB05KT 6000 FEW015CB SCT016<br>TEMPO 2006/2010 4000 -TSRA=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(98.878611111111, 3.6402777777778).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Kualanamu International Airport - Deli Serdang (WIMM, 96035)</span><br><br><a href="metar_speci.php?icao=WIMM&sa=yes&sp=yes">METAR WIMM 200730Z 15005KT 9999 SCT017 29/22 Q1006<br>NOSIG=</a><br><br><a href="taf.php?icao=WIMM&ft=yes&fc=yes">TAF WIMM 200500Z 2006/2106 VRB04KT 9999 SCT018<br>BECMG 2007/2009 03010KT<br>TEMPO 2012/2016 24010KT 4000 -TSRA FEW016CB<br>BECMG 2016/2018 VRB05KT 3000 HZ=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(98.890555555556, 1.5541666666667).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Dr. Ferdinand Lumban Tobing - Pinangsori (Sibolga) (WIMS, 96073)</span><br><br><a href="metar_speci.php?icao=WIMS&sa=yes&sp=yes">METAR WIMS 200630Z 33006KT 9999 SCT020 30/24 Q1006=</a><br><br><a href="taf.php?icao=WIMS&ft=yes&fc=yes">TAF WIMS 200500Z 2006/2018 26004KT 8000 SCT020<br>TEMPO 2011/2013 4800 TSRA SCT015CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(98.993611111111, 2.2586111111111).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Silangit - Tapanuli Utara (WIMN, )</span><br><br><a href="metar_speci.php?icao=WIMN&sa=yes&sp=yes">METAR WIMN 200730Z 34002KT 7000 BKN012 23/17 Q1015<br>NOSIG=</a><br><br><a href="taf.php?icao=WIMN&ft=yes&fc=yes">TAF WIMN 200500Z 2006/2018 03008KT 8000 OVC010<br>TEMPO 2006/2009 3000 -RA<br>BECMG 2010/2011 5000 HZ<br>TEMPO 2013/2015 3000 -RA<br>BECMG 2016/2017 5000 HZ=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(99.430833333333, 1.3994444444444).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Aek Godang - Padang Sidempuan (WIME, 96071)</span><br><br><a href="metar_speci.php?icao=WIME&sa=yes&sp=yes">METAR WIME 200730Z 08003KT 9999 SCT018 28/23 Q1007<br>NOSIG=</a><br><br><a href="taf.php?icao=WIME&ft=yes&fc=yes">TAF WIME 200500Z 2006/2018 06003KT 9999 SCT018<br>BECMG 2010/2012 28005KT 4000 HZ<br>TEMPO 2013/2017 -TSRA FEW016CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(100.28083333333, -0.78833333333333).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Minangkabau International Airport - Padang (WIEE, 96163)</span><br><br><a href="metar_speci.php?icao=WIEE&sa=yes&sp=yes">METAR WIEE 200730Z 22004KT 180V270 9999 FEW020 SCT120 30/23 Q1006<br>NOSIG=</a><br><br><a href="taf.php?icao=WIEE&ft=yes&fc=yes">TAF WIEE 200500Z 2006/2106 21006KT 9999 FEW020<br>TEMPO 2010/2013 4000 -TSRA FEW018CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(100.346242, -0.87353).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">LANUD Sutan Sjahrir (WIET, )</span><br><br><a href="taf.php?icao=WIET&ft=yes&fc=yes">TAF WIET 192300Z 2000/2024 04007KT 7000 SCT020<br>BECMG 2004/2006 27008KT 9000=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(101.09, -2.5422222222222).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Mukomuko (WIGM, )</span><br><br><a href="taf.php?icao=WIGM&ft=yes&fc=yes">TAF WIGM 200500Z 2006/2018 24008KT 9000 SCT020<br>TEMPO 2007/2010 4000 TSRA FEW012CB BKN015=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(101.44388888889, 0.46).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Sultan Syarif Kasim II - Pekanbaru (WIBB, 96109)</span><br><br><a href="metar_speci.php?icao=WIBB&sa=yes&sp=yes">METAR WIBB 200730Z 00000KT 8000 SCT010 28/24 Q1006=</a><br><br><a href="taf.php?icao=WIBB&ft=yes&fc=yes">TAF WIBB 200500Z 2006/2106 26007KT 8000 BKN010<br>PROB30 2010/2014 5000 RA=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(101.46972222222, -2.0938888888889).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Depati Parbo - Kerinci (WIJI, 96207)</span><br><br><a href="metar_speci.php?icao=WIJI&sa=yes&sp=yes">METAR WIJI 200700Z 14004KT 6000 FEW013CB SCT014 28/22 Q1011<br>RMK CB TO NW=</a><br><br><a href="taf.php?icao=WIJI&ft=yes&fc=yes">TAF WIJI 200500Z 2006/2018 18005KT 9999 BKN014<br>TEMPO 2007/2010 4000 -TSRA FEW012CB BKN013=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(102.33388888889, -0.35194444444444).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Japura - Rengat (WIBJ, 96171)</span><br><br><a href="metar_speci.php?icao=WIBJ&sa=yes&sp=yes">METAR WIBJ 200700Z 00000KT 8000 BKN015 30/24 Q1006<br>NOSIG=</a><br><br><a href="taf.php?icao=WIBJ&ft=yes&fc=yes">TAF WIBJ 192300Z 2000/2024 12005KT 8000 SCT015<br>TEMPO 2012/2015 5000 RA BKN014=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(102.34, -3.8641666666667).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Fatmawati Sukarno - Bengkulu (WIGG, 96253)</span><br><br><a href="metar_speci.php?icao=WIGG&sa=yes&sp=yes">METAR WIGG 200730Z 17011KT 9999 FEW015CB FEW020 31/24 Q1004<br>NOSIG=</a><br><br><a href="taf.php?icao=WIGG&ft=yes&fc=yes">TAF WIGG 200500Z 2006/2018 25008KT 9000 SCT020<br>TEMPO 2008/2011 4000 TSRA FEW012CB BKN015=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(103.39194444444, 1.0525).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Raja Haji Abdullah - Tanjung Balai Karimun (WIDT, 96295)</span><br><br><a href="metar_speci.php?icao=WIDT&sa=yes&sp=yes">METAR WIDT 200700Z 22002KT 8000 SCT016 28/25 Q1007<br>NOSIG=</a><br><br><a href="taf.php?icao=WIDT&ft=yes&fc=yes">TAF WIDT 200500Z 2006/2018 25004KT 8000 SCT015=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(103.64194444444, -1.6361111111111).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Sultan Thaha - Jambi (WIJJ, 96195)</span><br><br><a href="metar_speci.php?icao=WIJJ&sa=yes&sp=yes">METAR WIJJ 200730Z 14003KT 100V200 9999 FEW015CB SCT016 33/24 Q1006<br>NOSIG<br>RMK CB TO NE AND SE=</a><br><br><a href="taf.php?icao=WIJJ&ft=yes&fc=yes">TAF WIJJ 200500Z 2006/2106 15004KT 9999 SCT016<br>TEMPO 2009/2012 4000 -TSRA FEW014CB SCT015=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(104.11472222222, 1.1233333333333).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Hang Nadim - Batam (WIDD, 96087)</span><br><br><a href="metar_speci.php?icao=WIDD&sa=yes&sp=yes">METAR WIDD 200730Z 22005KT 9999 FEW014 26/25 Q1008 RERA<br>NOSIG=</a><br><br><a href="taf.php?icao=WIDD&ft=yes&fc=yes">TAF WIDD 200500Z 2006/2106 24006KT 9000 SCT014=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(104.53083333333, 0.92111111111111).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Raja Haji Fisabilillah - Tanjung Pinang (WIDN, 96091)</span><br><br><a href="metar_speci.php?icao=WIDN&sa=yes&sp=yes">METAR WIDN 200730Z 17002KT 8000 -RA SCT015 OVC070 26/25 Q1007<br>NOSIG=</a><br><br><a href="taf.php?icao=WIDN&ft=yes&fc=yes">TAF WIDN 200500Z 2006/2106 VRB03KT 4000 RA BKN015<br>TEMPO 2006/2010 5000 -TSRA BKN015CB<br>BECMG 2011/2013 19005KT 9000 NSW=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(104.57888888889, -0.47833333333333).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Dabo - Singkep (WIDS, 96179)</span><br><br><a href="metar_speci.php?icao=WIDS&sa=yes&sp=yes">METAR WIDS 200600Z 25002KT 7000 -RA SCT017 26/25 Q1008=</a><br><br><a href="taf.php?icao=WIDS&ft=yes&fc=yes">TAF WIDS 200500Z 2006/2018 25005KT 8000 SCT017<br>BECMG 2006/2009 5000 -TSRA FEW013CB SCT015=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(104.70083333333, -2.8977777777778).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Sultan Mahmud Badaruddin II - Palembang (WIPP, 96221)</span><br><br><a href="metar_speci.php?icao=WIPP&sa=yes&sp=yes">METAR WIPP 200600Z 17006KT 9999 SCT010 32/23 Q1007<br>NOSIG=</a><br><br><a href="taf.php?icao=WIPP&ft=yes&fc=yes">TAF WIPP 192300Z 2000/2024 16006KT 9999 SCT010<br>TEMPO 2012/2015 5000 -RA FEW010CB BKN011<br>TEMPO 2021/2024 3000 HZ=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(105.17583333333, -5.2425).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Radin Inten II - Lampung (WILL, 96295)</span><br><br><a href="metar_speci.php?icao=WILL&sa=yes&sp=yes">METAR WILL 200630Z 06011KT 9999 SCT015 32/24 Q1007<br>NOSIG=</a><br><br><a href="taf.php?icao=WILL&ft=yes&fc=yes">TAF WILL 200500Z 2006/2106 12008KT 9999 SCT015<br>PROB40 TEMPO 2008/2012 4000 -TSRA FEW010CB BKN012=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(105.25, -4.6).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Astra Ksetra - Lampung (WILM, 96273)</span><br><br><a href="metar_speci.php?icao=WILM&sa=yes&sp=yes">METAR WILM 200500Z 10002KT 9999 SCT020 31/24 Q1006=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(106.13888888889, -2.1630555555556).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Depati Amir - Pangkal Pinang (WIKK, 96237)</span><br><br><a href="metar_speci.php?icao=WIKK&sa=yes&sp=yes">METAR WIKK 200730Z 06005KT 9999 FEW015CB SCT016 32/21 Q1006<br>NOSIG<br>RMK CB TO SE, S-W=</a><br><br><a href="taf.php?icao=WIKK&ft=yes&fc=yes">TAF WIKK 200500Z 2006/2106 10008KT 9999 SCT016<br>TEMPO 2006/2010 1000 TSRA FEW015CB<br>BECMG 2011/2012 17003KT 7000<br>BECMG 2023/2024 15008KT 9999=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(106.257938, 3.345001).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">MATAK (WIDM, )</span></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(106.56583333333, -6.2908333333333).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Budiarto - Curug (WIRR, 96739)</span><br><br><a href="metar_speci.php?icao=WIRR&sa=yes&sp=yes">METAR WIRR 200700Z 33011KT 4100 HZ FEW018CB BKN018 31/24 Q1007=</a><br><br><a href="taf.php?icao=WIRR&ft=yes&fc=yes">TAF WIRR 200500Z 2006/2018 06006KT 6000 SCT020<br>TEMPO 2009/2011 3000 BR FEW020=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(106.65388888889, -6.1263888888889).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Soekarno Hatta - Jakarta (WIII, 96749)</span><br><br><a href="metar_speci.php?icao=WIII&sa=yes&sp=yes">METAR WIII 200730Z 01008KT 350V050 5000 HZ FEW015CB SCT020 31/24 Q1006<br>NOSIG<br>RMK CB TO S=</a><br><br><a href="taf.php?icao=WIII&ft=yes&fc=yes">TAF WIII 200500Z 2006/2112 05006KT 5000 HZ SCT020<br>BECMG 2014/2016 VRB04KT 3000 BR FEW020CB<br>BECMG 2023/2101 20003KT 7000 NSW=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(106.75305555556, -6.5441666666667).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Atang Sendjaja - Bogor (WIHJ, 96755)</span><br><br><a href="metar_speci.php?icao=WIHJ&sa=yes&sp=yes">METAR WIHJ 200700Z 36009KT 5000 HZ SCT018 33/22 Q1005=</a><br><br><a href="taf.php?icao=WIHJ&ft=yes&fc=yes">TAF WIHJ 200500Z 2006/2106 02007KT 8000 FEW020<br>TEMPO 2009/2012 33015KT 4000 -TSRA FEW017CB BKN018<br>BECMG 2013/2015 00000KT 4000 BR SCT018=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(106.88638888889, -6.2675).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Halim Perdana Kusuma - Jakarta (WIHH, 96747)</span><br><br><a href="metar_speci.php?icao=WIHH&sa=yes&sp=yes">METAR WIHH 200730Z 01005KT 6000 SCT018 32/23 Q1005<br>RMK RA TO W=</a><br><br><a href="taf.php?icao=WIHH&ft=yes&fc=yes">TAF WIHH 192300Z 2000/2024 22005KT 4000 BR FEW022<br>BECMG 2002/2004 32008KT 6000 SCT020<br>TEMPO 2007/2010 15010KT 4000 -RA FEW018CB<br>BECMG 2012/2014 20004KT 5000 HZ=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(107.57611111111, -6.9019444444444).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Husein Sastranegara - Bandung (WICC, 96781)</span><br><br><a href="metar_speci.php?icao=WICC&sa=yes&sp=yes">METAR WICC 200730Z 33007KT 6000 FEW016CB SCT018 27/21 Q1010<br>RMK CB TO OTF=</a><br><br><a href="taf.php?icao=WICC&ft=yes&fc=yes">TAF WICC 200500Z 2006/2106 23010KT 7000 SCT018<br>TEMPO 2008/2010 15010KT 3000 -TSRA FEW017CB SCT018<br>BECMG 2011/2012 03005KT 4000 HZ SCT018=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(107.65888888889, -6.5313888888889).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Suryadarma - Kalijati, Subang (WICS, 96773)</span><br><br><a href="metar_speci.php?icao=WICS&sa=yes&sp=yes">METAR WICS 200700Z 04008KT 7000 FEW018 31/25 Q1007<br>NOSIG=</a><br><br><a href="taf.php?icao=WICS&ft=yes&fc=yes">TAF WICS 200500Z 2006/2018 08006KT 8000 SCT020<br>TEMPO 2011/2013 15005KT 4000 -RA FEW018CB SCT018=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(107.75277777778, -2.7538888888889).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">H.A.S. Hanandjoeddin - Tanjung Pandan (WIKT, 96249)</span><br><br><a href="metar_speci.php?icao=WIKT&sa=yes&sp=yes">METAR WIKT 200730Z 14005KT 7000 -RA FEW017CB BKN020 25/25 Q1006=</a><br><br><a href="taf.php?icao=WIKT&ft=yes&fc=yes">TAF WIKT 200500Z 2006/2018 14003KT 9999 SCT020<br>TEMPO 2006/2010 1000 TSRA FEW015CB<br>BECMG 2011/2012 10003KT 7000=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(108.1575, -6.6519444444444).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Kertajati (WICA, )</span><br><br><a href="metar_speci.php?icao=WICA&sa=yes&sp=yes">METAR WICA 200730Z 34006KT 9999 FEW016CB SCT020 31/24 Q1006<br>NOSIG<br>RMK CB TO SW=</a><br><br><a href="taf.php?icao=WICA&ft=yes&fc=yes">TAF WICA 200500Z 2006/2018 05008KT 9999 SCT020<br>TEMPO 2008/2011 4000 -TSRA FEW016CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(108.25, -7.3333333333333).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Wiriadinata - Cibeureum, Tasikmalaya (WICM, 96801)</span><br><br><a href="metar_speci.php?icao=WICM&sa=yes&sp=yes">METAR WICM 200700Z 19004KT 5000 HZ SCT018 29/23 Q1009=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(108.39305555556, 3.9119444444444).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Ranai - Natuna (WIDO, 96147)</span><br><br><a href="metar_speci.php?icao=WIDO&sa=yes&sp=yes">METAR WIDO 200730Z AUTO 34004KT 310V030 9999 NCD 28/M35 Q1006=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(108.53888888889, -6.7566666666667).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Cakrabhuwana / Penggung - Cirebon (WICD, 96793)</span><br><br><a href="taf.php?icao=WICD&ft=yes&fc=yes">TAF COR WICD 192300Z 2000/2012 18004KT 4000 BR SCT020<br>BECMG 2002/2004 06008KT 9999 NSW<br>TEMPO 2007/2011 4000 -TSRA FEW017CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(109.03688333333, -7.64765).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Tunggul Wulung - Cilacap (WAHL, 96805)</span><br><br><a href="metar_speci.php?icao=WAHL&sa=yes&sp=yes">METAR WAHL 200730Z 11009KT 9999 SCT013 30/25 Q1006<br>NOSIG=</a><br><br><a href="taf.php?icao=WAHL&ft=yes&fc=yes">TAF WAHL 200500Z 2006/2018 11008KT 8000 SCT013<br>TEMPO 2010/2014 4000 TSRA FEW012CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(109.32111380556, 1.7362556944444).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Paloh - Sambas (WIOH, 96535)</span><br><br><a href="metar_speci.php?icao=WIOH&sa=yes&sp=yes">METAR WIOH 200700Z 12003KT 9999 SCT014 30/25 Q1007<br>NOSIG=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(109.40277777778, -0.14888888888889).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Supadio - Pontianak (WIOO, 96581)</span><br><br><a href="metar_speci.php?icao=WIOO&sa=yes&sp=yes">METAR WIOO 200730Z 22010KT 9999 FEW012CB SCT013 31/24 Q1005<br>NOSIG=</a><br><br><a href="taf.php?icao=WIOO&ft=yes&fc=yes">TAF WIOO 200500Z 2006/2106 20005KT 6000 BKN012<br>TEMPO 2006/2009 3000 RA FEW010CB BKN011=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(109.96277777778, -1.8158333333333).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Rahadi Oesman - Ketapang (WIOK, 96615)</span><br><br><a href="metar_speci.php?icao=WIOK&sa=yes&sp=yes">METAR WIOK 200730Z 29007KT 9000 SCT012CB 30/27 Q1005 RETSRA<br>NOSIG=</a><br><br><a href="taf.php?icao=WIOK&ft=yes&fc=yes">TAF WIOK 200500Z 2006/2018 25007KT 7000 SCT012<br>TEMPO 2008/2010 4000 TSRA FEW011CB BKN012=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(110.05549069444, -7.9002795).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Yogyakarta International Airport - Kulonprogo (WAHI, )</span><br><br><a href="metar_speci.php?icao=WAHI&sa=yes&sp=yes">METAR WAHI 200730Z 13014KT 9999 FEW020 30/25 Q1006<br>NOSIG=</a><br><br><a href="taf.php?icao=WAHI&ft=yes&fc=yes">TAF WAHI 192300Z 2000/2024 05005KT 9999 FEW020<br>BECMG 2002/2004 15013KT<br>TEMPO 2011/2014 4000 -TSRA FEW015CB BKN017=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(110.37388888889, -6.9708333333333).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Ahmad Yani - Semarang (WAHS, 96839)</span><br><br><a href="metar_speci.php?icao=WAHS&sa=yes&sp=yes">METAR WAHS 200730Z 07009KT 9000 FEW014 33/21 Q1005<br>NOSIG=</a><br><br><a href="taf.php?icao=WAHS&ft=yes&fc=yes">TAF WAHS 200500Z 2006/2106 12010KT 7000 SCT014<br>PROB40 TEMPO 2008/2012 5000 -TSRA FEW013CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(110.43166666667, -7.7880555555556).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Adi Sutjipto - Yogyakarta (WAHH, 96853)</span><br><br><a href="taf.php?icao=WAHH&ft=yes&fc=yes">TAF WAHH 200500Z 2006/2106 15010KT 8000 SCT015<br>TEMPO 2008/2011 3000 -TSRA FEW016CB BKN017<br>BECMG 2012/2014 00000KT 5000=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(110.75055555556, -7.5136111111111).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Adi Soemarmo - Surakarta (WAHQ, 96845)</span><br><br><a href="metar_speci.php?icao=WAHQ&sa=yes&sp=yes">METAR WAHQ 200730Z 24005KT 6000 -TSRA SCT014 FEW015CB 25/22 Q1006<br>RMK CB TO W=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(111.43333333333, -7.6333333333333).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Iswahjudi - Madiun (WARI, 96881)</span><br><br><a href="metar_speci.php?icao=WARI&sa=yes&sp=yes">METAR WARI 200600Z 19008KT 8000 NIL SCT018 31/25 Q1008<br>NOSIG=</a><br><br><a href="taf.php?icao=WARI&ft=yes&fc=yes">TAF WARI 191100Z 1912/2012 20006KT 7000 SCT020<br>TEMPO 1912/1915 VRB06G18KT 3000 -TSRA FEW017CB BKN018<br>BECMG 1917/1919 00000KT 2000 BR FEW012<br>BECMG 2000/2001 18006KT 7000 NSW SCT020=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(111.47277777778, 0.063611111111111).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Tebelian - Sintang (WIOS, 96559)</span><br><br><a href="metar_speci.php?icao=WIOS&sa=yes&sp=yes">METAR WIOS 200730Z 23004KT 9999 SCT012 33/23 Q1004<br>NOSIG=</a><br><br><a href="taf.php?icao=WIOS&ft=yes&fc=yes">TAF WIOS 200500Z 2006/2018 21005KT 6000 SCT013<br>TEMPO 2008/2010 3000 TSRA FEW011CB BKN012=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(111.66888888889, -2.7041666666667).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Iskandar - Pangkalan Bun (WAGI, 96645)</span><br><br><a href="metar_speci.php?icao=WAGI&sa=yes&sp=yes">METAR WAGI 200730Z 21005KT 9000 TS BKN011CB 27/24 Q1005<br>RMK CB TO SE & S=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(111.74777777778, -0.34861111111111).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Nanga Pinoh (WIOG, 96557)</span><br><br><a href="metar_speci.php?icao=WIOG&sa=yes&sp=yes">METAR WIOG 200700Z 22004KT 9999 FEW010CB SCT011 33/24 Q1005<br>NOSIG=</a><br><br><a href="taf.php?icao=WIOG&ft=yes&fc=yes">TAF WIOG 200500Z 2006/2018 35004KT 8000 SCT011<br>TEMPO 2009/2012 4000 TSRA FEW010CB SCT011<br>BECMG 2012/2013 24003KT 4000 HZ=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(112.66666666667, -5.7166666666667).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Bawean - Harun Thohir  (WARW, 96925)</span><br><br><a href="metar_speci.php?icao=WARW&sa=yes&sp=yes">METAR WARW 200500Z 10005KT 9999 FEW018 30/27 Q1011<br>NOSIG=</a><br><br><a href="taf.php?icao=WARW&ft=yes&fc=yes">TAF WARW 192300Z 2000/2012 12008KT 9999 SCT018=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(112.71194444444, -7.9294444444444).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Abdulrachman Saleh - Malang (WARA, 96947)</span><br><br><a href="metar_speci.php?icao=WARA&sa=yes&sp=yes">METAR WARA 200700Z 05005KT 5000 -RA SCT014 22/22 Q1010=</a><br><br><a href="taf.php?icao=WARA&ft=yes&fc=yes">TAF WARA 200500Z 2006/2106 36007G18KT 7000 SCT015<br>TEMPO 2007/2010 3000 TSRA FEW014CB BKN015<br>BECMG 2014/2016 4000 BR=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(112.79388888889, -7.3772222222222).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Juanda - Surabaya (WARR, 96935)</span><br><br><a href="metar_speci.php?icao=WARR&sa=yes&sp=yes">METAR WARR 200730Z 07009KT 9999 FEW020 31/25 Q1006<br>NOSIG=</a><br><br><a href="taf.php?icao=WARR&ft=yes&fc=yes">TAF WARR 200500Z 2006/2106 09007KT 8000 SCT020<br>PROB30 TEMPO 2010/2014 4000 RA SCT018<br>BECMG 2018/2020 23005KT 4000 HZ=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(112.93583333333, 0.83555555555556).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Pangsuma - Putussibau (WIOP, 96565)</span><br><br><a href="metar_speci.php?icao=WIOP&sa=yes&sp=yes">METAR WIOP 200600Z 06006KT 9999 SCT015 32/25 Q1007<br>NOSIG=</a><br><br><a href="taf.php?icao=WIOP&ft=yes&fc=yes">TAF WIOP 200500Z 2006/2018 27003KT 9999 SCT015<br>TEMPO 2015/2018 4000 RA BKN012=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(112.97694444444, -2.5011111111111).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Haji Asan - Sampit (WAGS, 96651)</span><br><br><a href="metar_speci.php?icao=WAGS&sa=yes&sp=yes">METAR WAGS 200730Z 34005KT 7000 -TSRA FEW008CB SCT009 28/25 Q1004<br>NOSIG=</a><br><br><a href="taf.php?icao=WAGS&ft=yes&fc=yes">TAF WAGS 200500Z 2006/2018 12004KT 9000 FEW008TCU BKN009<br>TEMPO 2006/2009 5000 -RA=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(113.69361111111, -8.24).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Noto Hadinegoro - Jember (WARE, )</span><br><br><a href="metar_speci.php?icao=WARE&sa=yes&sp=yes">METAR WARE 200630Z 15008KT 9999 BKN018 33/24 Q1008<br>NOSIG=</a><br><br><a href="taf.php?icao=WARE&ft=yes&fc=yes">TAF WARE 192300Z 2000/2012 24007KT 9999 FEW019<br>PROB40 TEMPO 2006/2009 3000 TSRA SCT018CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(113.89, -7.0241666666667).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Trunojoyo - Sumenep (WART, )</span><br><br><a href="taf.php?icao=WART&ft=yes&fc=yes">TAF WART 192300Z 2000/2012 11010KT 9999 SCT020<br>PROB30 TEMPO 2005/2008 4000 TSRA FEW018CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(113.94388888889, -2.2266666666667).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Tjilik Riwut - Palangkaraya (WAGG, 96655)</span><br><br><a href="metar_speci.php?icao=WAGG&sa=yes&sp=yes">METAR WAGG 200730Z 04002KT 6000 -RA FEW010CB BKN011 24/23 Q1005 RETS=</a><br><br><a href="taf.php?icao=WAGG&ft=yes&fc=yes">TAF WAGG 200500Z 2006/2106 07003KT 9999 BKN011<br>TEMPO 2006/2010 13013KT 4000 -RA FEW010CB<br>TEMPO 2011/2014 17015KT 3000 TSRA FEW010CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(114.34055555556, -8.31).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Banyuwangi (WADY, )</span><br><br><a href="metar_speci.php?icao=WADY&sa=yes&sp=yes">METAR WADY 200730Z 16007KT 8000 SCT018 29/25 Q1007<br>NOSIG=</a><br><br><a href="taf.php?icao=WADY&ft=yes&fc=yes">TAF WADY 200500Z 2006/2106 16010KT 9000 SCT018<br>BECMG 2012/2014 29005KT<br>TEMPO 2015/2018 -RA BKN018<br>BECMG 2101/2103 15010KT=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(114.89472222222, -0.94333333333333).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Beringin - Muara Teweh (WAGK, 96595)</span><br><br><a href="metar_speci.php?icao=WAGK&sa=yes&sp=yes">METAR WAGK 200730Z 00000KT 9999 FEW013CB BKN014 29/26 Q1005=</a><br><br><a href="taf.php?icao=WAGK&ft=yes&fc=yes">TAF WAGK 200500Z 2006/2018 04004KT 9999 SCT014<br>BECMG 2010/2012 FEW013CB<br>BECMG 2015/2017 5000=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(114.89888888889, -1.6694444444444).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Sanggu - Buntok (WAGM, 96653)</span><br><br><a href="metar_speci.php?icao=WAGM&sa=yes&sp=yes">METAR WAGM 200700Z 35005KT 5000 VCSH FEW014CB SCT015 33/24 Q1006=</a><br><br><a href="taf.php?icao=WAGM&ft=yes&fc=yes">TAF WAGM 200500Z 2006/2018 32003KT 9999 SCT015<br>BECMG 2010/2012 12003KT 3500 -TSRA FEW015CB SCT016=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(121.415, 1.1044444444444).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Pogogul - Buol (WAFY, )</span></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(121.66055555556, -8.8491666666667).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">H. Hasan Aroeboesman - Ende (WATE, )</span><br><br><a href="metar_speci.php?icao=WATE&sa=yes&sp=yes">METAR WATE 200730Z 13012KT 8000 SCT014 29/25 Q1008<br>NOSIG=</a><br><br><a href="taf.php?icao=WATE&ft=yes&fc=yes">TAF WATE 192300Z 2000/2012 13010KT 7000 BKN015<br>BECMG 2000/2002 13015KT=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(114.75388888889, -3.4394444444444).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Syamsudin Noor - Banjarmasin (WAOO, 96685)</span><br><br><a href="metar_speci.php?icao=WAOO&sa=yes&sp=yes">METAR WAOO 200730Z 18005KT 9999 SCT018 32/24 Q1004<br>NOSIG=</a><br><br><a href="taf.php?icao=WAOO&ft=yes&fc=yes">TAF WAOO 200500Z 2006/2106 07007KT 9999 SCT018<br>TEMPO 2009/2012 5000 TSRA FEW016CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(114.97027777778, 1.7044444444444).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Long Apung (WAQL, )</span></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(115.16583333333, -8.7461111111111).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">I Gusti Ngurah Rai - Denpasar (WADD, 97230)</span><br><br><a href="metar_speci.php?icao=WADD&sa=yes&sp=yes">METAR WADD 200730Z 12017KT 9999 SCT016 29/25 Q1007<br>NOSIG=</a><br><br><a href="taf.php?icao=WADD&ft=yes&fc=yes">TAF WADD 192300Z 2000/2024 11009KT 9999 SCT016<br>TEMPO 2005/2009 5000 TSRA FEW015CB BKN015=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(115.7, 3.8830555555556).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Yuvai Semaring - Long Bawang (WAQJ, 96505)</span><br><br><a href="metar_speci.php?icao=WAQJ&sa=yes&sp=yes">METAR WAQJ 200700Z 00000KT 8000 BKN017 26/19 Q1012=</a><br><br><a href="taf.php?icao=WAQJ&ft=yes&fc=yes">TAF WAQJ 200500Z 2006/2018 20005KT 3000 RA BKN012<br>BECMG 2007/2010 8000 NSW SCT012=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(116.16388888889, -3.2958333333333).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Gusti Sjamsir Alam - Kota Baru (WAOK, 96695)</span><br><br><a href="metar_speci.php?icao=WAOK&sa=yes&sp=yes">METAR WAOK 200730Z 11005KT 8000 SCT014 32/20 Q1004<br>NOSIG=</a><br><br><a href="taf.php?icao=WAOK&ft=yes&fc=yes">TAF WAOK 200500Z 2006/2018 36004KT 8000 SCT014=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(116.27638888889, -8.7580555555556).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Bandara Internasional Lombok - Praya (WADL, 97240)</span><br><br><a href="metar_speci.php?icao=WADL&sa=yes&sp=yes">METAR WADL 200730Z 14017KT 8000 SCT016 29/22 Q1008<br>NOSIG=</a><br><br><a href="taf.php?icao=WADL&ft=yes&fc=yes">TAF WADL 200500Z 2006/2106 13012KT 8000 BKN016<br>PROB30 TEMPO 2007/2009 4000 -TSRA FEW015CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(116.6197, 3.575278).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Bandar Udara Robert Atty Bessing (WAQM, )</span><br><br><a href="metar_speci.php?icao=WAQM&sa=yes&sp=yes">METAR WAQM 200730Z 12007KT 8000 FEW013CB SCT014 33/26 Q1007<br>RMK CB TO SE=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(116.89388888889, -1.2669444444444).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Sultan Aji Muhammad Sulaiman - Sepinggan (WALL, 96633)</span><br><br><a href="metar_speci.php?icao=WALL&sa=yes&sp=yes">METAR WALL 200730Z 07002KT 9999 VCTS FEW020CB FEW020 28/25 Q1005<br>RMK CB TO NW=</a><br><br><a href="taf.php?icao=WALL&ft=yes&fc=yes">TAF WALL 200500Z 2006/2112 25004KT 9999 SCT020<br>TEMPO 2012/2015 FEW018CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(117.15694444444, -0.48444444444444).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Aji Pangeran Tumenggung Pranoto - Samarinda (WALS, 96607)</span><br><br><a href="metar_speci.php?icao=WALS&sa=yes&sp=yes">METAR WALS 200730Z 22002KT 9999 SCT018 32/23 Q1005<br>NOSIG=</a><br><br><a href="taf.php?icao=WALS&ft=yes&fc=yes">TAF WALS 200500Z 2006/2018 20003KT 9999 SCT017=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(117.37388888889, 2.8372222222222).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Tanjung Harapan - Tanjung Selor (WAQD, 96525)</span><br><br><a href="metar_speci.php?icao=WAQD&sa=yes&sp=yes">METAR WAQD 200730Z 01005KT 9999 SCT015 32/23 Q1005=</a><br><br><a href="taf.php?icao=WAQD&ft=yes&fc=yes">TAF WAQD 200500Z 2006/2018 09004KT 8000 SCT012=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(117.41194444444, -8.4883333333333).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Sultan Muhammad Kaharuddin - Sumbawa Besar (WADS, 97260)</span><br><br><a href="metar_speci.php?icao=WADS&sa=yes&sp=yes">METAR WADS 200730Z 14010KT 9999 SCT020 33/20 Q1006<br>NOSIG=</a><br><br><a href="taf.php?icao=WADS&ft=yes&fc=yes">TAF WADS 192300Z 2000/2012 13008KT 9999 SCT020=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(117.43277777778, 2.155).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Kalimarau - Tanjung Redeb (WAQT, 96529)</span><br><br><a href="metar_speci.php?icao=WAQT&sa=yes&sp=yes">SPECI WAQT 200740Z 10005KT 070V130 7000 RA FEW011TCU BKN014 33/23 Q1005<br>TEMPO 5000<br>RMK TCU TO N=</a><br><br><a href="taf.php?icao=WAQT&ft=yes&fc=yes">TAF WAQT 200500Z 2006/2018 01005KT 8000 SCT015=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(117.56972222222, 3.3266666666667).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Juwata - Tarakan (WAQQ, 96509)</span><br><br><a href="metar_speci.php?icao=WAQQ&sa=yes&sp=yes">METAR WAQQ 200730Z 20004KT 9999 SCT015 30/24 Q1005<br>NOSIG=</a><br><br><a href="taf.php?icao=WAQQ&ft=yes&fc=yes">TAF WAQQ 200500Z 2006/2018 33005KT 9999 SCT015=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(117.665, 4.1366666666667).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Nunukan (WAQA, 96503)</span><br><br><a href="metar_speci.php?icao=WAQA&sa=yes&sp=yes">METAR WAQA 200700Z 13007KT 8000 FEW012 30/25 Q1005<br>NOSIG=</a><br><br><a href="taf.php?icao=WAQA&ft=yes&fc=yes">TAF WAQA 200500Z 2006/2018 00000KT 8000 SCT012=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(118.69194444444, -8.5416666666667).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Sultan Muhammad Salahuddin - Bima (WADB, 97270)</span><br><br><a href="metar_speci.php?icao=WADB&sa=yes&sp=yes">METAR WADB 200730Z 19012KT 9999 FEW015 31/21 Q1007<br>NOSIG=</a><br><br><a href="taf.php?icao=WADB&ft=yes&fc=yes">TAF WADB 192300Z 2000/2012 18010KT 8000 SCT015=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(119.02833333333, -2.5877777777778).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Tampa Padang - Mamuju (WAFJ, )</span><br><br><a href="metar_speci.php?icao=WAFJ&sa=yes&sp=yes">METAR WAFJ 200730Z 34006KT 9999 FEW017 30/24 Q1005<br>NOSIG=</a><br><br><a href="taf.php?icao=WAFJ&ft=yes&fc=yes">TAF COR WAFJ 192300Z 2000/2012 14005KT 9999 SCT018<br>BECMG 2001/2003 31010KT<br>TEMPO 2008/2012 5000 TSRA FEW017CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(119.24444444444, -9.4094444444444).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Tambolaka - Sumba Barat (WATK, )</span><br><br><a href="metar_speci.php?icao=WATK&sa=yes&sp=yes">METAR WATK 200700Z 31010KT 5000 RA SCT020 27/24 Q1006=</a><br><br><a href="taf.php?icao=WATK&ft=yes&fc=yes">TAF WATK 192300Z 2000/2012 13009KT 9999 SCT020<br>BECMG 2010/2012 5000=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(119.55490277778, -5.0582527777778).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Sultan Hasanuddin - Makassar (WAAA, 97180)</span><br><br><a href="metar_speci.php?icao=WAAA&sa=yes&sp=yes">METAR WAAA 200730Z 26009KT 9999 FEW018CB FEW019 31/24 Q1005<br>NOSIG<br>RMK CB IN CLIMB-OUT=</a><br><br><a href="taf.php?icao=WAAA&ft=yes&fc=yes">TAF WAAA 200500Z 2006/2112 30010KT 9999 FEW019<br>BECMG 2012/2013 11004KT=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(119.81972222222, -3.0425).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Pongtiku - Tana Toraja (WAFT, 97124)</span><br><br><a href="metar_speci.php?icao=WAFT&sa=yes&sp=yes">METAR WAFT 200700Z 08009KT 9999 SCT017 28/22 Q1006<br>NOSIG=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(119.88888888889, -8.4880555555556).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Komodo - Labuan Bajo (WATO, 97282)</span><br><br><a href="metar_speci.php?icao=WATO&sa=yes&sp=yes">METAR WATO 200730Z 04005KT 9999 SCT020 30/24 Q1008<br>NOSIG=</a><br><br><a href="taf.php?icao=WATO&ft=yes&fc=yes">TAF WATO 192300Z 2000/2012 29013KT 9999 SCT020<br>BECMG 2011/2012 18004KT=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(119.90694444444, -0.9175).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Mutiara SIS Al-Jufri - Palu (WAFF, 97072)</span><br><br><a href="metar_speci.php?icao=WAFF&sa=yes&sp=yes">METAR WAFF 200730Z 35008KT 7000 VCSH FEW017CB SCT019 32/24 Q1005<br>NOSIG=</a><br><br><a href="taf.php?icao=WAFF&ft=yes&fc=yes">TAF WAFF 200500Z 2006/2106 35015KT 9999 FEW020<br>PROB40 TEMPO 2007/2009 5000 -RA SCT017<br>BECMG 2010/2011 00000KT=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(120.29888888889, -9.6688888888889).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Umbu Mehang Kunda - Waingapu (WATU, 97340)</span><br><br><a href="metar_speci.php?icao=WATU&sa=yes&sp=yes">METAR WATU 200700Z 10014KT 9999 FEW020 31/20 Q1007<br>NOSIG=</a><br><br><a href="taf.php?icao=WATU&ft=yes&fc=yes">TAF WATU 192300Z 2000/2012 14010KT 9999 SCT020<br>BECMG 2010/2012 5000=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(120.32388888889, -2.5580555555556).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Andi Jemma - Masamba (WAFM, 97126)</span><br><br><a href="metar_speci.php?icao=WAFM&sa=yes&sp=yes">METAR WAFM 200700Z 19000KT 9999 FEW017 32/23 Q1006=</a><br><br><a href="taf.php?icao=WAFM&ft=yes&fc=yes">TAF WAFM 200500Z 2006/2018 15003KT 9000 SCT017<br>BECMG 2010/2012 09002KT 8000 BKN090=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(120.47777777778, -8.5961111111111).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Frans Sales Lega - Ruteng (WATG, 97284)</span><br><br><a href="metar_speci.php?icao=WATG&sa=yes&sp=yes">METAR WATG 200730Z 04004KT 9999 BKN014 23/17 Q1013<br>NOSIG=</a><br><br><a href="taf.php?icao=WATG&ft=yes&fc=yes">TAF WATG 192300Z 2000/2012 36005KT 9999 SCT016<br>TEMPO 2006/2009 5000 BKN013=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(120.65777777778, -1.4188888888889).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Kasiguncu - Poso (WAFP, 97096)</span><br><br><a href="metar_speci.php?icao=WAFP&sa=yes&sp=yes">METAR WAFP 200700Z 01006KT 9000 FEW016 31/24 Q1005<br>NOSIG=</a><br><br><a href="taf.php?icao=WAFP&ft=yes&fc=yes">TAF WAFP 200500Z 2006/2018 04008KT 9000 SCT016<br>TEMPO 2013/2015 5000 -RA=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(120.79277777778, 1.1233333333333).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Sultan Bantilan - Toli Toli (WAFL, 97028)</span><br><br><a href="metar_speci.php?icao=WAFL&sa=yes&sp=yes">METAR WAFL 200700Z 06005KT 7000 -RA SCT018 27/26 Q1005<br>NOSIG=</a><br><br><a href="taf.php?icao=WAFL&ft=yes&fc=yes">TAF WAFL 200500Z 2006/2018 11006KT 9000 SCT020=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(121.057542, -8.707519).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">SOA - Bajawa (WATB, )</span><br><br><a href="metar_speci.php?icao=WATB&sa=yes&sp=yes">METAR WATB 200600Z 15008KT 9999 SCT018 28/18 Q1012<br>NOSIG=</a><br><br><a href="taf.php?icao=WATB&ft=yes&fc=yes">TAF WATB 192300Z 2000/2012 11006KT 8000 SCT018=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(121.61472222222, -4.1808333333333).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Sangia Nibandera - Kolaka (WAWP, )</span><br><br><a href="metar_speci.php?icao=WAWP&sa=yes&sp=yes">METAR WAWP 200700Z 33004KT 9999 FEW020 33/23 Q1006<br>NOSIG=</a><br><br><a href="taf.php?icao=WAWP&ft=yes&fc=yes">TAF WAWP 200500Z 2006/2018 12005KT 9000 SCT019<br>TEMPO 2007/2010 6000 -RA FEW018CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(121.84972222222, -10.492777777778).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Tardamu - Sabu (WATS, 97380)</span><br><br><a href="metar_speci.php?icao=WATS&sa=yes&sp=yes">METAR WATS 200730Z 26011KT 9999 FEW014 31/20 Q1008<br>NOSIG=</a><br><br><a href="taf.php?icao=WATS&ft=yes&fc=yes">TAF WATS 192300Z 2000/2012 14004KT 8000 SCT014=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(122.23888888889, -8.6388888888889).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Fransiskus Xaverius Seda - Maumere (WATC, 97300)</span><br><br><a href="metar_speci.php?icao=WATC&sa=yes&sp=yes">METAR WATC 200730Z 20011KT 9999 SCT016 30/23 Q1008<br>NOSIG=</a><br><br><a href="taf.php?icao=WATC&ft=yes&fc=yes">TAF WATC 192300Z 2000/2012 18007KT 9999 FEW016=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(122.41694444444, -4.0819444444444).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Haluoleo - Kendari (WAWW, 97146)</span><br><br><a href="taf.php?icao=WAWW&ft=yes&fc=yes">TAF WAWW 200500Z 2006/2018 09008KT 8000 SCT015<br>TEMPO 2007/2010 6000 -TSRA FEW013CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(122.56888888889, -5.4869444444444).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Beto Ambari - Bau Bau (WAWB, 97192)</span><br><br><a href="metar_speci.php?icao=WAWB&sa=yes&sp=yes">SPECI WAWB 200736Z 12004KT 8000 FEW018CB SCT019 26/24 Q1009 RERA<br>NOSIG=</a><br><br><a href="taf.php?icao=WAWB&ft=yes&fc=yes">TAF WAWB 200500Z 2006/2018 09006KT 9000 SCT019<br>TEMPO 2007/2010 6000 -TSRA FEW018CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(122.77083333333, -1.0405555555556).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Syukuran Aminuddin Amir - Luwuk (WAFW, 97086)</span><br><br><a href="metar_speci.php?icao=WAFW&sa=yes&sp=yes">METAR WAFW 200600Z 20008KT 9999 SCT020 31/23 Q1006<br>NOSIG=</a><br><br><a href="taf.php?icao=WAFW&ft=yes&fc=yes">TAF WAFW 200500Z 2006/2018 20007KT 9999 SCT020<br>BECMG 2010/2013 27008KT=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(122.84888888889, 0.63694444444444).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Djalaluddin - Gorontalo (WAMG, 97048)</span><br><br><a href="metar_speci.php?icao=WAMG&sa=yes&sp=yes">METAR WAMG 200730Z 17006KT 9999 SCT018 32/24 Q1004<br>NOSIG=</a><br><br><a href="taf.php?icao=WAMG&ft=yes&fc=yes">TAF WAMG 200500Z 2006/2106 18010KT 9000 SCT015<br>TEMPO 2006/2008 5000 -RA FEW012CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(123, -8.2741666666667).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Gewayantana - Larantuka (WATL, 97310)</span><br><br><a href="metar_speci.php?icao=WATL&sa=yes&sp=yes">METAR WATL 200700Z 19009KT 9999 FEW020 30/22 Q1007=</a><br><br><a href="taf.php?icao=WATL&ft=yes&fc=yes">TAF WATL 192300Z 2000/2012 18006KT 8000 FEW020<br>BECMG 2009/2011 00000KT=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(123.075, -10.766944444444).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">David Constantijn Saudale - Rote (WATR, 97378)</span><br><br><a href="metar_speci.php?icao=WATR&sa=yes&sp=yes">METAR WATR 200600Z 13010KT 9999 FEW020 29/19 Q1014<br>NOSIG=</a><br><br><a href="taf.php?icao=WATR&ft=yes&fc=yes">TAF WATR 192300Z 2000/2012 12010KT 8000 SCT018=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(123.438184, -8.362461).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Wunopito - Lembata (WATW, )</span><br><br><a href="taf.php?icao=WATW&ft=yes&fc=yes">TAF WATW 192300Z 2000/2012 14006KT 8000 SCT017=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(123.67194444444, -10.171388888889).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">El Tari - Kupang (WATT, 97372)</span><br><br><a href="metar_speci.php?icao=WATT&sa=yes&sp=yes">METAR WATT 200730Z 13013KT 9999 FEW018 30/18 Q1009<br>NOSIG=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(124.59388888889, -8.1363888888889).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Mali - Alor (WATM, 97320)</span><br><br><a href="metar_speci.php?icao=WATM&sa=yes&sp=yes">METAR WATM 200730Z 07003KT 9999 FEW019 31/25 Q1008<br>NOSIG=</a><br><br><a href="taf.php?icao=WATM&ft=yes&fc=yes">TAF WATM 192300Z 2000/2012 27006KT 9999 FEW019=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(124.90444444444, -9.0744444444444).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">A.A. Bere Talo / Atambua (WATA, )</span><br><br><a href="metar_speci.php?icao=WATA&sa=yes&sp=yes">METAR WATA 200500Z 17005KT 130V220 9999 SCT018 30/19 Q1009<br>NOSIG=</a><br><br><a href="taf.php?icao=WATA&ft=yes&fc=yes">TAF WATA 192300Z 2000/2012 15006KT 8000 SCT018=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(124.92194444444, 1.5433333333333).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Sam Ratulangi - Manado (WAMM, 97014)</span><br><br><a href="metar_speci.php?icao=WAMM&sa=yes&sp=yes">METAR WAMM 200730Z 18004KT 130V220 9999 SCT020 29/23 Q1006<br>NOSIG=</a><br><br><a href="taf.php?icao=WAMM&ft=yes&fc=yes">TAF WAMM 192300Z 2000/2106 11007KT 9999 SCT020<br>TEMPO 2004/2006 4000 TSRA FEW017CB SCT018<br>BECMG 2010/2012 VRB02KT=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(125.52777777778, 3.6827777777778).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Naha - Tahuna (WAMH, 97008)</span><br><br><a href="metar_speci.php?icao=WAMH&sa=yes&sp=yes">METAR WAMH 200700Z 10003KT 8000 SCT019 30/23 Q1006=</a><br><br><a href="taf.php?icao=WAMH&ft=yes&fc=yes">TAF WAMH 200500Z 2006/2018 20009KT 9000 SCT018=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(125.96583333333, -2.0980555555556).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Emalamo - Sanana (WAES, 97600)</span><br><br><a href="metar_speci.php?icao=WAES&sa=yes&sp=yes">METAR WAES 200700Z 17006KT 8000 FEW017CB SCT018 29/25 Q1006<br>NOSIG=</a><br><br><a href="taf.php?icao=WAES&ft=yes&fc=yes">TAF WAES 200500Z 2006/2018 25002KT 9999 SCT019<br>TEMPO 2006/2009 FEW016CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(127.09972222222, -3.2358333333333).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Namniwel - Namlea (WAPR, 97700)</span><br><br><a href="metar_speci.php?icao=WAPR&sa=yes&sp=yes">METAR WAPR 200600Z 12009KT 9999 FEW018 30/23 Q1006=</a><br><br><a href="taf.php?icao=WAPR&ft=yes&fc=yes">TAF WAPR 200500Z 2006/2018 11008KT 9999 FEW018=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(127.37972222222, 0.83277777777778).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Sultan Babullah - Ternate (WAEE, 97430)</span><br><br><a href="metar_speci.php?icao=WAEE&sa=yes&sp=yes">METAR WAEE 200700Z 01006KT 350V060 9999 SCT018 30/25 Q1006=</a><br><br><a href="taf.php?icao=WAEE&ft=yes&fc=yes">TAF WAEE 192300Z 2000/2024 05005KT 9999 SCT018<br>TEMPO 2006/2009 4000 TSRA FEW015CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(127.49777777778, -0.64472222222222).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Oesman Sadik - Labuha (WAEL, 97460)</span><br><br><a href="metar_speci.php?icao=WAEL&sa=yes&sp=yes">METAR WAEL 200700Z 22002KT 9000 FEW017CB SCT018 27/24 Q1006=</a><br><br><a href="taf.php?icao=WAEL&ft=yes&fc=yes">TAF WAEL 200500Z 2006/2018 05004KT 9000 SCT018<br>TEMPO 2006/2009 4000 RA FEW016CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(127.78694444444, 1.8383333333333).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Gamar Malamo - Galela (WAEG, 97406)</span><br><br><a href="metar_speci.php?icao=WAEG&sa=yes&sp=yes">METAR WAEG 200700Z 00000KT 7000 FEW017CB BKN018 26/25 Q1006 RETS=</a><br><br><a href="taf.php?icao=WAEG&ft=yes&fc=yes">TAF WAEG 200500Z 2006/2018 13008KT 8000 BKN017<br>TEMPO 2011/2014 4000 RA FEW015CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(127.89599444444, 1.1852194444444).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Kuabang Kao (WAEK, )</span><br><br><a href="taf.php?icao=WAEK&ft=yes&fc=yes">TAF WAEK 200500Z 2006/2018 11004KT 9999 SCT018<br>TEMPO 2006/2009 FEW016CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(128.08888888889, -3.7066666666667).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Pattimura - Ambon (WAPP, 97724)</span><br><br><a href="metar_speci.php?icao=WAPP&sa=yes&sp=yes">METAR WAPP 200730Z 24004KT 9999 FEW015CB 30/24 Q1006<br>NOSIG<br>RMK CB TO NE=</a><br><br><a href="taf.php?icao=WAPP&ft=yes&fc=yes">TAF WAPP 200500Z 2006/2106 20010KT 9999 FEW015CB SCT016<br>TEMPO 2006/2009 5000 RA=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(128.31666666667, 2.05).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Pitu - Morotai (WAEW, 97404)</span><br><br><a href="taf.php?icao=WAEW&ft=yes&fc=yes">TAF WAEW 200500Z 2006/2106 15007KT 9999 SCT018<br>TEMPO 2006/2008 6000 TS FEW015CB<br>BECMG 2009/2011 02003KT 9000=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(128.92583333333, -3.3469444444444).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Amahai (WAPA, 97722)</span><br><br><a href="metar_speci.php?icao=WAPA&sa=yes&sp=yes">METAR WAPA 200700Z 00000KT 9000 SCT018 28/25 Q1007=</a><br><br><a href="taf.php?icao=WAPA&ft=yes&fc=yes">TAF WAPA 200500Z 2006/2018 18003KT 9999 SCT020<br>TEMPO 2009/2012 9000 RA FEW016CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(129.90388888889, -4.5216666666667).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Bandaneira - Banda (WAPC, 97790)</span><br><br><a href="metar_speci.php?icao=WAPC&sa=yes&sp=yes">METAR WAPC 200700Z 23002KT 9999 SCT020 OVC080 27/24 Q1007 RERA=</a><br><br><a href="taf.php?icao=WAPC&ft=yes&fc=yes">TAF WAPC 200500Z 2006/2018 14009KT 8000 SCT019<br>TEMPO 2006/2010 5000 RA FEW018CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(131.28583333333, -0.89388888888889).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Domine Eduard Osok - Sorong (WASS, 97502)</span><br><br><a href="metar_speci.php?icao=WASS&sa=yes&sp=yes">METAR WASS 200730Z 23006KT 190V260 9000 SCT012 29/23 Q1006<br>NOSIG=</a><br><br><a href="taf.php?icao=WASS&ft=yes&fc=yes">TAF WASS 200500Z 2006/2106 22006KT 8000 SCT012<br>TEMPO 2007/2010 4000 -RA FEW010CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(131.30388888889, -7.9883333333333).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Olilit - Saumlaki (WAPI, 97900)</span></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(131.30444444444, -7.9883333333333).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Mathilda Batlayeri - Saumlaki (WAPS, 97900)</span><br><br><a href="metar_speci.php?icao=WAPS&sa=yes&sp=yes">METAR WAPS 200700Z 07010KT 7000 -RA FEW016CB SCT017 25/23 Q1009=</a><br><br><a href="taf.php?icao=WAPS&ft=yes&fc=yes">TAF WAPS 200500Z 2006/2018 14009KT 9000 SCT018<br>TEMPO 2006/2010 5000 TSRA FEW017CB=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(132.26694444444, -2.9202777777778).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Torea - Fak Fak (WASF, 97630)</span><br><br><a href="metar_speci.php?icao=WASF&sa=yes&sp=yes">METAR WASF 200700Z 07004KT 9999 FEW011 27/24 Q1008=</a><br><br><a href="taf.php?icao=WASF&ft=yes&fc=yes">TAF WASF 200500Z 2006/2018 18004KT 7000 SCT011=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(132.73138888889, -5.6613888888889).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Dumatubun - Langgur (WAPL, 97810)</span></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(132.75944444444, -5.7602777777778).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Karel Sadsuitubun - Tual (WAPF, )</span><br><br><a href="metar_speci.php?icao=WAPF&sa=yes&sp=yes">METAR WAPF 200700Z 12004KT 6000 -RA BKN019 26/24 Q1007=</a><br><br><a href="taf.php?icao=WAPF&ft=yes&fc=yes">TAF WAPF 200500Z 2006/2018 30006KT 9000 SCT019=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(133.69583333333, -3.6436111111111).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Utarom - Kaimana (WASK, 97760)</span><br><br><a href="metar_speci.php?icao=WASK&sa=yes&sp=yes">METAR WASK 200600Z 06003KT 9000 -RA SCT016 28/26 Q1006=</a><br><br><a href="taf.php?icao=WASK&ft=yes&fc=yes">TAF WASK 200500Z 2006/2018 36006KT 9000 SCT015=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(134.05, -0.89305555555556).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Rendani - Manokwari (WAUU, 97530)</span><br><br><a href="metar_speci.php?icao=WAUU&sa=yes&sp=yes">METAR WAUU 200600Z 12006KT 9999 SCT014 31/24 Q1005<br>NOSIG=</a><br><br><a href="taf.php?icao=WAUU&ft=yes&fc=yes">TAF WAUU 200500Z 2006/2018 18007KT 8000 SCT014<br>TEMPO 2012/2015 4000 -RA FEW013CB SCT014=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(135.49628888889, -3.3678583333333).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Douw Aturure - Nabire (WABI, 97682)</span><br><br><a href="metar_speci.php?icao=WABI&sa=yes&sp=yes">METAR WABI 200730Z 29005KT 8000 SCT015 30/25 Q1006=</a><br><br><a href="taf.php?icao=WABI&ft=yes&fc=yes">TAF WABI 200500Z 2006/2106 30005KT 9999 SCT016<br>TEMPO 2008/2012 RA BKN015<br>BECMG 2013/2015 00000KT=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(136.06666666667, -1.8299444444444).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Stevanus Rumbewas - Serui (WABO, 97570)</span><br><br><a href="taf.php?icao=WABO&ft=yes&fc=yes">TAF WABO 200500Z 2006/2106 09006KT 9999 SCT013<br>BECMG 2010/2012 00000KT=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(136.10583333333, -1.1891666666667).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Frans Kaisiepo - Biak (WABB, 97560)</span><br><br><a href="metar_speci.php?icao=WABB&sa=yes&sp=yes">METAR WABB 200730Z 33003KT 150V330 9999 SCT018 26/24 Q1006<br>NOSIG=</a><br><br><a href="taf.php?icao=WABB&ft=yes&fc=yes">TAF WABB 200500Z 2006/2112 14008KT 9999 SCT018<br>PROB40 TEMPO 2006/2008 6000 RA<br>BECMG 2012/2014 00000KT=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(136.37777777778, -3.9255555555556).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Enarotali (WAYE, 97780)</span><br><br><a href="metar_speci.php?icao=WAYE&sa=yes&sp=yes">METAR WAYE 200700Z 30006KT 8000 SCT009 BKN100 22/17 Q1005<br>NOSIG=</a><br><br><a href="taf.php?icao=WAYE&ft=yes&fc=yes">TAF WAYE 200500Z 2006/2106 05005KT 9999 SCT010<br>TEMPO 2006/2010 4000 RA BKN008<br>BECMG 2011/2013 00000KT=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(136.88972222222, -4.5275).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Mozes Kilangin - Timika (WAYY, 97796)</span><br><br><a href="metar_speci.php?icao=WAYY&sa=yes&sp=yes">METAR WAYY 200700Z 33003KT 8000 SCT013 27/24 Q1008<br>NOSIG=</a><br><br><a href="taf.php?icao=WAYY&ft=yes&fc=yes">TAF WAYY 200500Z 2006/2106 20005KT 9999 BKN013<br>TEMPO 2010/2013 5000 RA<br>BECMG 2014/2016 00000KT SCT015=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(138.75, -1.8497222222222).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Mararena / Orai - Sarmi (WAJI, 97580)</span><br><br><a href="taf.php?icao=WAJI&ft=yes&fc=yes">TAF WAJI 200500Z 2006/2018 12005KT 9999 SCT015=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(138.95083333333, -4.0952777777778).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Wamena (WAVV, 97686)</span><br><br><a href="metar_speci.php?icao=WAVV&sa=yes&sp=yes">METAR WAVV 200700Z 17009KT 9999 SCT018 22/15 Q1015<br>NOSIG=</a><br><br><a href="taf.php?icao=WAVV&ft=yes&fc=yes">TAF WAVV 200500Z 2006/2018 05005KT 9999 BKN015<br>BECMG 2012/2015 5000 BR BKN010=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(140.30388888889, -6.0966666666667).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Tanah Merah (WAKT, 97876)</span><br><br><a href="taf.php?icao=WAKT&ft=yes&fc=yes">TAF WAKT 200500Z 2006/2018 13006KT 8000 BKN010=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(140.41694444444, -8.5175).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Mopah - Merauke (WAKK, 97980)</span><br><br><a href="metar_speci.php?icao=WAKK&sa=yes&sp=yes">METAR WAKK 200730Z 15007KT 4000 -RA OVC014 24/23 Q1007<br>NOSIG=</a><br><br><a href="taf.php?icao=WAKK&ft=yes&fc=yes">TAF WAKK 200500Z 2006/2018 10010KT 5000 TSRA FEW011CB<br>BECMG 2007/2009 9000 NSW=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      var feature = new OpenLayers.Feature.Vector(
        new OpenLayers.Geometry.Point(140.51277777778, -2.5705555555556).transform(epsg4326, projectTo), {
          description: '<span class="indonesia_map_info_station_name">Sentani - Jayapura (WAJJ, 97690)</span><br><br><a href="metar_speci.php?icao=WAJJ&sa=yes&sp=yes">METAR WAJJ 200730Z 29010KT 9999 FEW012CB FEW015 31/23 Q1005<br>NOSIG=</a><br><br><a href="taf.php?icao=WAJJ&ft=yes&fc=yes">TAF WAJJ 200500Z 2006/2106 12006KT 9999 VCSH FEW012CB FEW014<br>BECMG 2008/2010 NSW FEW013=</a></span>'
        }, {
          externalGraphic: '/images/station.png',
          graphicHeight: 24,
          graphicWidth: 24,
          graphicXOffset: -12,
          graphicYOffset: -12
        }
      );
      vectorLayer.addFeatures(feature);
      map.addLayer(vectorLayer);
      var controls = {
        selector: new OpenLayers.Control.SelectFeature(vectorLayer, {
          onSelect: createPopup,
          onUnselect: destroyPopup
        })
      };

      function createPopup(feature) {
        feature.popup = new OpenLayers.Popup.FramedCloud("pop",
          feature.geometry.getBounds().getCenterLonLat(),
          null,
          '<div class="markerContent">' + feature.attributes.description + '</div>',
          null,
          true,
          function() {
            controls['selector'].unselectAll();
          }
        );
        map.addPopup(feature.popup);
      }

      function destroyPopup(feature) {
        feature.popup.destroy();
        feature.popup = null;
      }
      map.addControl(controls['selector']);
      controls['selector'].activate();
    </script>