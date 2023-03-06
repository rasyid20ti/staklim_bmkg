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
        <figure class="highcharts-figure">
            <div id="container"></div>
            <p class="highcharts-description">
            </p>
        </figure>
		</div>
	</div>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des'],
        title: {
            text: 'Bulan'
        }
    },
    yAxis: {
        title: {
            text: 'Suhu Rata-Rata (°C)'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        showInLegend: false,
        name: 'Bulan',
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
});
</script>