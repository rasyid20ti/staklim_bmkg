<body>
    <div class=" bg-white p-0">
        <div class=" py-1 bg-dark headhead mb-5">
            <div class="text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Info Iklim Dasarian Riau</h1>
            </div>
        </div>

        <section id="tabs">
			<div>
				<div class="row">
					<div class="col-xs-12 ">
						<nav>
							<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
								<a class="nav-item nav-link active" id="nav-imon-australia-tab" data-toggle="tab" href="#nav-imon-australia" role="tab" aria-controls="nav-imon-australia" aria-selected="true">Prakiraan Curah Hujan Deterministik</a>
								<a class="nav-item nav-link" id="nav-imon-west-tab" data-toggle="tab" href="#nav-imon-west" role="tab" aria-controls="nav-imon-west" aria-selected="false">Prakiraan Sifat Hujan Deterministik</a>
								<a class="nav-item nav-link" id="nav-cold-tab" data-toggle="tab" href="#nav-cold" role="tab" aria-controls="nav-cold" aria-selected="false">Prakiraan Curah Hujan Probabilistik</a>
								<!-- <a class="nav-item nav-link" id="nav-analisis-tab" data-toggle="tab" href="#nav-analisis" role="tab" aria-controls="nav-analisis" aria-selected="false">Prakiraan Daerah Potensi Banjir</a> -->
								<a class="nav-item nav-link" id="nav-anomali-tab" data-toggle="tab" href="#nav-anomali" role="tab" aria-controls="nav-anomali" aria-selected="false">Analisis Curah Hujan</a>
								<a class="nav-item nav-link" id="nav-angin-tab" data-toggle="tab" href="#nav-angin" role="tab" aria-controls="nav-angin" aria-selected="false">Analisis Sifat Hujan</a>
								<a class="nav-item nav-link" id="nav-arah-tab" data-toggle="tab" href="#nav-arah" role="tab" aria-controls="nav-arah" aria-selected="false">Data Tabel HTH</a>
								<a class="nav-item nav-link" id="nav-lembap-tab" data-toggle="tab" href="#nav-lembap" role="tab" aria-controls="nav-lembap" aria-selected="false">Peta HTH</a>
							</div>
						</nav>
						<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-imon-australia" role="tabpanel" aria-labelledby="nav-imon-australia">
                                    <div class="about-right mb-90">
                                     <center>   <div class="about-img">
                                            <?php foreach ($AnalisisCurahHujanDeterministik as $ashd) : ?>
                                                <img src="<?= $ashd['prakiraan_chd']; ?>" alt="">
                                        </div>
                                        <div class="section-tittle mb-30 pt-30"><br>
                                            <h3>Analisa</h3>
                                        </div>
                                        <div class="about-prea">
                                            <p><?= $ashd['keterangan_chd']; ?></p>
                                        <?php endforeach; ?>
                                        </div> </center>
                                </div>
							</div>
							<div class="tab-pane fade" id="nav-imon-west" role="tabpanel" aria-labelledby="nav-imon-west">
								<center>
                                <div class="about-right mb-90">
                                    <div class="about-img">
                                        <?php foreach ($AnalisisSifatHujanDeterministik as $asihd) : ?>
                                            <img src="<?= $asihd['prakiraan_shd']; ?>" alt="">
                                    </div>
                                    <div class="section-tittle mb-30 pt-30"><br>
                                        <h3>Analisa</h3>
                                    </div>
                                    <div class="about-prea">
                                        <p><?= $asihd['keterangan_shd']; ?></p>
                                    <?php endforeach; ?>
                                    </div>
                                </div>
								</center>
							</div>
							<div class="tab-pane fade" id="nav-cold" role="tabpanel" aria-labelledby="nav-cold">
								<center>
                                <div class="about-right mb-90">
                                    <div class="about-img">
                                        <?php foreach ($AnalisisCurahHujanProbabilistik as $achp) : ?>
                                            <img src="<?= $achp['prakiraan_chp']; ?>" alt="">
                                    </div>
                                    <div class="section-tittle mb-30 pt-30"><br>
                                        <h3>Analisa</h3>
                                    </div>
                                    <div class="about-prea">
                                        <p><?= $achp['keterangan_chp']; ?></p>
                                    <?php endforeach; ?>
                                    </div>
                                </div>
								</center>
							</div>
							<div class="tab-pane fade" id="nav-analisis" role="tabpanel" aria-labelledby="nav-analisis">
								<center>
                                <div class="about-right mb-90">
                                    <div class="about-img">
                                        <?php foreach ($DaerahPotensiBanjir as $dpb) : ?>
                                            <img src="<?= $dpb['prakiraan_dpb']; ?>" alt="">
                                    </div>
                                    <div class="section-tittle mb-30 pt-30"><br>
                                        <h3>Analisa</h3>
                                    </div>
                                    <div class="about-prea">
                                        <p><?= $dpb['keterangan_dpb']; ?></p>
                                    <?php endforeach; ?>
                                    </div>
                                </div>
								</center>
							</div>
							<div class="tab-pane fade" id="nav-anomali" role="tabpanel" aria-labelledby="nav-anomali">
								<center>
                                <div class="about-right mb-90">
                                    <div class="about-img">
                                        <?php foreach ($AnalisisCurahHujan as $ach) : ?>
                                            <img src="<?= $ach['analisisch']; ?>" alt="">
                                    </div>
                                    <div class="section-tittle mb-30 pt-30"><br>
                                        <h3>Analisa</h3>
                                    </div>
                                    <div class="about-prea">
                                        <p><?= $ach['keterangan_ch']; ?></p>
                                    <?php endforeach; ?>
                                    </div>
                                </div>
								</center>
							</div>
							<div class="tab-pane fade" id="nav-angin" role="tabpanel" aria-labelledby="nav-angin">
								<center>
                                <div class="about-right mb-90">
                                    <div class="about-img">
                                        <?php foreach ($AnalisisSifatHujan as $ash) : ?>
                                            <img src="<?= $ash['analisissh']; ?>" alt="">
                                    </div>
                                    <div class="section-tittle mb-30 pt-30"><br>
                                        <h3>Analisa</h3>
                                    </div>
                                    <div class="about-prea">
                                        <p><?= $ash['keterangan_sh']; ?></p>
                                    <?php endforeach; ?>
                                    </div>
                                </div>
								</center>
							</div>
							
							<div class="tab-pane fade" id="nav-arah" role="tabpanel" aria-labelledby="nav-arah">
								<center>
                                <div class="table-responsive">
                                    <canvas id="myChart"></canvas>
                                <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="table-dark">
                                                <tr>
                                                    <td><center>No</td>
                                                    <td><center>ID Stasiun</td>
                                                    <td><center>Nama Pos</td>
                                                    <td><center>Kecamatan</td>
                                                    <td><center>Kabupaten</td>
                                                    <td><center>HTH</td>
                                                    <td><center>Keterangan</td>
                                                </tr>
                                            </thead>
                                            <tbody-->
                                            <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
                                            <script type="text/javascript">
                                                var ctx = document.getElementById('myChart').getContext('2d');
                                                var chart = new Chart(ctx, {
                                                    type: 'bar',
                                                    data: {
                                                        labels: [
                                                            <?php foreach($hth as $hthDay) :?> 
                                                                <?php if($hthDay['hth'] > 1) { ?>
                                                                "<?= $hthDay['kecamatan']; ?>",
                                                            <?php }
                                                         endforeach; ?>
                                                            // "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"
                                                        ],
                                                        datasets: [{
                                                            label: 'Curah Hujan',
                                                            backgroundColor: '#ADD8E6',
                                                            borderColor: '##93C3D2',
                                                            data: [
                                                                <?php foreach ($hth as $data) {
                                                                    echo $data['hth'] . ", ";
                                                                } ?>,
                                                            ]
                                                        }]
                                                    }, 
                                                    //Configurations options go here
                                                    options: {
                                                        lineAt: 1,
                                                        LineAt : 0,
                                                        scales: {
                                                            xAxes:[{
                                                                scaleLabel: {
                                                                    display: true,
                                                                    labelString: 'Bulan'
                                                                },
                                                            }],
                                                            yAxes: [{
                                                                scaleLabel: {
                                                                    display: true,
                                                                    labelString: 'Curah Hujan (mm)'
                                                                },
                                                                ticks: {
                                                                    beginAtZero:true,
                                                                    suggestedMax: 15,
                                                                    stepSize :10
                                                                }
                                                            }]
                                                        }
                                                    }
                                                });
                                                
                                                Chart.pluginService.register({
                                                afterDraw: function(chart) {
                                                    if (typeof chart.config.options.lineAt != 'undefined') {
                                                        var lineAt = chart.config.options.lineAt;
                                                        var ctxPlugin = chart.chart.ctx;
                                                        var xAxe = chart.scales[chart.config.options.scales.xAxes[0].id];
                                                        var yAxe = chart.scales[chart.config.options.scales.yAxes[0].id];
                                                        
                                                        // I'm not good at maths
                                                        // So I couldn't find a way to make it work ...
                                                        // ... without having the `min` property set to 0
                                                        if(yAxe.min != 0) return;
                                                        
                                                        ctxPlugin.strokeStyle = "red";
                                                        ctxPlugin.beginPath();
                                                        lineAt = (lineAt - yAxe.min) * (100 / yAxe.max);
                                                        lineAt = (100 - lineAt) / 100 * (yAxe.height) + yAxe.top;
                                                        ctxPlugin.moveTo(xAxe.left, lineAt);
                                                        ctxPlugin.lineTo(xAxe.right, lineAt);
                                                        ctxPlugin.stroke();
                                                    }
                                                }
                                            });
                                            </script>
                                                <?php $i = 1; ?>
                                                <?php foreach ($hth as $us) : ?>
                                                    
                                                    <!--tr>
                                                        <td><center> <?php // $i; ?>.</td>
                                                        <td><?php // $us['id_stasiun']; ?></td>
                                                        <td><?php // $us['nama_pos']; ?></td>
                                                        <td><?php // $us['kecamatan']; ?></td>
                                                        <td><?php // $us['kabupaten']; ?></td>
                                                        <td><center><?php // $us['hth']; ?></td>
                                                        <td><?php // $us['ket']; ?></td>
                                                    </tr>
                                                    <?php $i++; ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table> -->
                                    </div>
								</center>
							</div>
							<div class="tab-pane fade" id="nav-lembap" role="tabpanel" aria-labelledby="nav-lembap">
								<center>
                                <div class="about-right mb-90">
                                    <main class="py-2 container-fluids">
                                        <div class="container"></div>
                                        <div class="card">
                                            <center>
                                                <div class="card-body" id="mapid"></div>
                                            </center>
                                        </div>
                                    </main>
                                    <div class="section-tittle mb-30 pt-30">
                                        <?php foreach ($narasi as $ach) : ?>
                                    </div>
                                    <div class="section-tittle mb-30 pt-30"><br>
                                        <h3><?= $ach['juduldesk']; ?></h3>
                                    </div>
                                    <div class="about-prea">
                                        <h6><?= $ach['deskripsi']; ?></h6>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
								</center>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>

<!-- 
        <div class="container">
            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills ml-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                    <button class="dropbtn" >Monitoring Hari Tanpa Hujan</button>
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true" onclick="<?= base_url('service/hth'); ?>" >Data Tabel</button>
                    <button class="nav-link" id="v-pills-peta-tab" data-bs-toggle="pill" data-bs-target="#v-pills-peta" type="button" role="tab" aria-controls="v-pills-peta" aria-selected="false">Peta</button>
                    <button class="dropbtn" >Analisa</button>
                    <button class="nav-link" id="v-pills-analisisch-tab" data-bs-toggle="pill" data-bs-target="#v-pills-analisisch" type="button" role="tab" aria-controls="v-pills-analisisch" aria-selected="false">Analisis Curah Hujan</button>
                    <button class="nav-link" id="v-pills-analisissh-tab" data-bs-toggle="pill" data-bs-target="#v-pills-analisissh" type="button" role="tab" aria-controls="v-pills-analisissh" aria-selected="false">Analisis Sifat Hujan</button>
                    <button class="dropbtn" >Prakiraan Curah Hujan</button>
                    <button class="nav-link" id="v-pills-chdeterministik-tab" data-bs-toggle="pill" data-bs-target="#v-pills-chdeterministik" type="button" role="tab" aria-controls="v-pills-chdeterministik" aria-selected="false">Prakiraan Curah Hujan Deterministik </button>
                    <button class="nav-link" id="v-pills-shdeterministik-tab" data-bs-toggle="pill" data-bs-target="#v-pills-shdeterministik" type="button" role="tab" aria-controls="v-pills-shdeterministik" aria-selected="false">Prakiraan Sifat Hujan Deterministik</button>
                    <button class="nav-link" id="v-pills-chprobabilistik-tab" data-bs-toggle="pill" data-bs-target="#v-pills-chprobabilistik" type="button" role="tab" aria-controls="v-pills-chprobabilistik" aria-selected="false">Prakiraan Curah Hujan Probabilistik </button>
                    <button class="nav-link" id="v-pills-daerahpb-tab" data-bs-toggle="pill" data-bs-target="#v-pills-daerahpb" type="button" role="tab" aria-controls="v-pills-daerahpb" aria-selected="false">Prakiraan Daerah Potensi Banjir</button>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="row">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                                <tr>
                                                    <td><center>No</td>
                                                    <td><center>ID Stasiun</td>
                                                    <td><center>Nama Pos</td>
                                                    <td><center>Kecamatan</td>
                                                    <td><center>Kabupaten</td>
                                                    <td><center>HTH</td>
                                                    <td><center>Keterangan</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($hth as $us) : ?>
                                                    <tr>
                                                        <td><center> <?= $i; ?>.</td>
                                                        <td><?= $us['id_stasiun']; ?></td>
                                                        <td><?= $us['nama_pos']; ?></td>
                                                        <td><?= $us['kecamatan']; ?></td>
                                                        <td><?= $us['kabupaten']; ?></td>
                                                        <td><center><?= $us['hth']; ?></td>
                                                        <td><?= $us['ket']; ?></td>
                                                    </tr>
                                                    <?php $i++; ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-peta" role="tabpanel" aria-labelledby="v-pills-peta-tab">
                        <div class="about-right mb-90">

                                <div id="maphth" style="height:400px; width: 150%;"></div>

                            <div class="section-tittle mb-30 pt-30">
                                <?php foreach ($narasi as $ach) : ?>
                            </div>
                            <div class="section-tittle mb-30 pt-30"><br>
                                <h3><?= $ach['juduldesk']; ?></h3>
                            </div>
                            <div class="about-prea">
                                <h6><?= $ach['deskripsi']; ?></h6>
                            <?php endforeach; ?>
                            </div>
                        
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-analisisch" role="tabpanel" aria-labelledby="v-pills-analisisch-tab">
                        <div class="about-right mb-90">
                            <div class="about-img">
                                <?php foreach ($AnalisisCurahHujan as $ach) : ?>
                                    <img src="<?= $ach['analisisch']; ?>" alt="">
                            </div>
                            <div class="section-tittle mb-30 pt-30"><br>
                                <h3>Analisa</h3>
                            </div>
                            <div class="about-prea">
                                <p><?= $ach['keterangan_ch']; ?></p>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-analisissh" role="tabpanel" aria-labelledby="v-pills-analisissh-tab">
                        <div class="about-right mb-90">
                            <div class="about-img">
                                <?php foreach ($AnalisisSifatHujan as $ash) : ?>
                                    <img src="<?= $ash['analisissh']; ?>" alt="">
                            </div>
                            <div class="section-tittle mb-30 pt-30"><br>
                                <h3>Analisa</h3>
                            </div>
                            <div class="about-prea">
                                <p><?= $ash['keterangan_sh']; ?></p>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-chdeterministik" role="tabpanel" aria-labelledby="v-pills-chdeterministik-tab">
                        <div class="about-right mb-90">
                            <div class="about-img">
                                <?php foreach ($AnalisisCurahHujanDeterministik as $ashd) : ?>
                                    <img src="<?= $ashd['prakiraan_chd']; ?>" alt="">
                            </div>
                            <div class="section-tittle mb-30 pt-30"><br>
                                <h3>Analisa</h3>
                            </div>
                            <div class="about-prea">
                                <p><?= $ashd['keterangan_chd']; ?></p>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-shdeterministik" role="tabpanel" aria-labelledby="v-pills-shdeterministik-tab">
                        <div class="about-right mb-90">
                            <div class="about-img">
                                <?php foreach ($AnalisisSifatHujanDeterministik as $asihd) : ?>
                                    <img src="<?= $asihd['prakiraan_shd']; ?>" alt="">
                            </div>
                            <div class="section-tittle mb-30 pt-30"><br>
                                <h3>Analisa</h3>
                            </div>
                            <div class="about-prea">
                                <p><?= $asihd['keterangan_shd']; ?></p>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-chprobabilistik" role="tabpanel" aria-labelledby="v-pills-chprobabilistik-tab">
                        <div class="about-right mb-90">
                            <div class="about-img">
                                <?php foreach ($AnalisisCurahHujanProbabilistik as $achp) : ?>
                                    <img src="<?= $achp['prakiraan_chp']; ?>" alt="">
                            </div>
                            <div class="section-tittle mb-30 pt-30"><br>
                                <h3>Analisa</h3>
                            </div>
                            <div class="about-prea">
                                <p><?= $achp['keterangan_chp']; ?></p>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-daerahpb" role="tabpanel" aria-labelledby="v-pills-daerahpb-tab">
                        <div class="about-right mb-90">
                            <div class="about-img">
                                <?php foreach ($DaerahPotensiBanjir as $dpb) : ?>
                                    <img src="<?php echo base_url('/assets2/images/NormalDasarian/potensiBanjir.png'); ?>" width='600' height='600'> </br>
                                    <img src="<?= $dpb['prakiraan_dpb']; ?>" alt="">
                                    
                            </div>
                            <div class="section-tittle mb-30 pt-30"><br>
                                <h3>Analisa</h3>
                            </div>
                            <div class="about-prea">
                                <p><?= $dpb['keterangan_dpb']; ?></p>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

		






    <script src="./js/app.js"></script>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>

    <script>
    var map = L.map('maphth').fitWorld();

    var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 16,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    
    map.setView([0.293347, 101.706825], 7.4);
    setInterval(function() {
     map.invalidateSize();
    }, 10000);
 
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
            .bindPopup("<h5>Nama Pos : <?= $value['nama_pos'] ?></h5> <p> <h6>HTH : <?= $value['hth'] ?></h6> <br> <h6>Ket : <?= $value['ket'] ?></h6> ")
            .addTo(map);
        // .push(marker);
        <?php } ?>

        
    </script>

<style>
    h3, h6, p{
        color:black;
    }
</style>
  

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
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
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
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}

</style>



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
            .bindPopup("<h5>Nama Pos : <?= $value['nama_pos'] ?></h5> <p> <h6>Kabupaten : <?= $value['kabupaten'] ?></h6> <br> <h6>Kecamatan : <?= $value['kecamatan'] ?></h6> <br> <h6>HTH : <?= $value['hth'] ?></h6> <br> <h6>Ket : <?= $value['ket'] ?></h6> ")
            .addTo(map);
        // .push(marker);
        <?php } ?>
    </script>