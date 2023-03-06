<div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>
        </div>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
			<div class="container">
				<canvas id="myChart"></canvas>
			</div>
			</div>
		</div>
	</div>
</div>

<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script type="text/javascript">
    var ctx  = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: [	
				"Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"
			],
			datasets: [{
				label: 'Hujan',
				backgroundColor: '#ADD8E6',
				borderColor: '##93C3D2',
				data: [
					<?php foreach ($graph as $data) { echo $data->jan;} ?> , 
					<?php foreach ($graph as $data) { echo $data->feb;} ?> , 
					<?php foreach ($graph as $data) { echo $data->mar;} ?> , 
					<?php foreach ($graph as $data) { echo $data->apr;} ?> , 
					<?php foreach ($graph as $data) { echo $data->mei;} ?> , 
					<?php foreach ($graph as $data) { echo $data->jun;} ?> , 
					<?php foreach ($graph as $data) { echo $data->jul;} ?> , 
					<?php foreach ($graph as $data) { echo $data->ags;} ?> , 
					<?php foreach ($graph as $data) { echo $data->sept;} ?> , 
					<?php foreach ($graph as $data) { echo $data->okt;} ?> , 
					<?php foreach ($graph as $data) { echo $data->nov;} ?> , 
					<?php foreach ($graph as $data) { echo $data->desem;} ?> , 
				]
			}]
		},		
	}); 

</script> -->

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <script type="text/javascript">
            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"
                    ],
                    datasets: [{
                        label: 'Curah Hujan',
                        backgroundColor: '#ADD8E6',
                        borderColor: '##93C3D2',
                        data: [
                            <?php foreach ($graph as $data) {
                                echo $data->jan;
                            } ?>,
                            <?php foreach ($graph as $data) {
                                echo $data->feb;
                            } ?>,
                            <?php foreach ($graph as $data) {
                                echo $data->mar;
                            } ?>,
                            <?php foreach ($graph as $data) {
                                echo $data->apr;
                            } ?>,
                            <?php foreach ($graph as $data) {
                                echo $data->mei;
                            } ?>,
                            <?php foreach ($graph as $data) {
                                echo $data->jun;
                            } ?>,
                            <?php foreach ($graph as $data) {
                                echo $data->jul;
                            } ?>,
                            <?php foreach ($graph as $data) {
                                echo $data->ags;
                            } ?>,
                            <?php foreach ($graph as $data) {
                                echo $data->sept;
                            } ?>,
                            <?php foreach ($graph as $data) {
                                echo $data->okt;
                            } ?>,
                            <?php foreach ($graph as $data) {
                                echo $data->nov;
                            } ?>,
                            <?php foreach ($graph as $data) {
                                echo $data->desem;
                            } ?>,
                        ]
                    }]
                }, 
                //Configurations options go here
                options: {
                    lineAt: 150,
                    LineAt : 5,
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
                                suggestedMax: 1000,
                                stepSize :50
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
