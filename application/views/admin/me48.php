  
  <body class=" ext-webkit ext-chrome ext-windows">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
    </div>
	
    
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <form action="<?= base_url('admin/single48'); ?>" method="GET">
                <div class="form-group">
                    <label for="stasiun">Stasiun</label>
                    <output type="name" class="form-control" id="stasiun" name="stasiun">Stasiun Klimatologi Kampar</output>
                </div>    
                <div class="form-group">
                    <label for="wmo_id">WMO ID</label>
                    <output type="name" class="form-control" id="wmo_id" name="wmo_id">96107</output>
                </div>
                <div class="form-group">
                    <label for="observation_date">Observation Date (UTC)</label>
                    <input type="date" class="form-control" id="observation_date" name="observation_date" max="<?= date('Y-m-d'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="observation_hour">Observation Hour (UTC)</label>
                    <input type="number" class="form-control" id="observation_hour" name="observation_hour" min="0" max="12" required>
                </div>
                <div class="form-group">
                    <label for="observation_min">Observation Min (UTC)</label>
                    <output type="name" class="form-control" id="observation_min" name="observation_min">0</output>
                </div>
                <div class="form-group">
                    <label for="meter_interval">METAR interval</label>
                    <output type="name" class="form-control" id="meter_interval" name="meter_interval">n/a</output>
                </div>
				<div class="form-group">
                    <button type="submit" class="btn btn-primary">Input </button>
                    <a href="<?= base_url('admin/vwsingle48') ?>" class="btn btn-primary">Fetch All</a>

                </div>

            </form>
        

    </div>
    
</div>
</div>
</div>    
</div>
</body>
