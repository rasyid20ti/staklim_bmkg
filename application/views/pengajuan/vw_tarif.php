<link href="<?php echo base_url('assets2/'); ?>css/bayar.css" rel="stylesheet">

<body>
	<div class="headerBayar">
		<div class="container-fluid">
			<div class='row'>
				<div class='col' style="padding-top:20px; margin-left:150px">
					<center>
						<h5>Tarif Pelayanan dan Jasa MKKuG dan Standar Pelayanan Minimum</h5>
					</center>
				</div>
				<div class='col' style="padding-left: 250px;">
					<img src="<?= base_url('assets2/images/icon/tarif.png'); ?>" style="height:250px;"/>
				</div>
			</div>
		</div>
	</div>

	<div class="container" style="margin-top:3rem!important">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Tarif</th>
						<th>Satuan</th>
						<th>Tarif</th>
						<th>Waktu</th>
						<!-- <th>Aksi</th> -->
					</tr>
				</thead>
				<thead style="background:#019900; color:white; font-weight: bold;">
					<tr>
						<td colspan="5"><strong>Informasi Meteorologi, Klimatologi dan Geofisika</strong></td>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($menuTarif as $us) : ?>
					<?php if($us['jenis'] == 'Informasi Meteorologi, Klimatologi dan Geofisika') { ?>
					<tr>
						<td> <?= $i; ?></td>
						<td><?= $us['namaTarif']; ?></td>
						<td><?= $us['satuan']; ?></td>
						<td><?= $us['tarif']; ?></td>
						<td><?= $us['waktu']; ?></td>
					</tr>
					<?php } ?>
					<?php $i++; ?>
					<?php endforeach; ?>
				</tbody>
				<thead style="background:#0032cb; color:white; font-weight: bold;">
					<tr>
						<td colspan="5"><strong>Informasi Khusus Meteorologi, Klimatologi dan Geofisika Sesuai
								Permintaan</strong></td>
					</tr>
				</thead>
				<?php $i2 = 1; ?>
				<?php foreach ($menuTarif as $us) : ?>
				<?php if($us['jenis'] == 'Informasi Khusus Meteorologi, Klimatologi dan Geofisika Sesuai Permintaan') { ?>
				<tr>
					<td> <?= $i2; ?></td>
					<td><?= $us['namaTarif']; ?></td>
					<td><?= $us['satuan']; ?></td>
					<td><?= $us['tarif']; ?></td>
					<td><?= $us['waktu']; ?></td>
				</tr>
				<?php } ?>
				<?php $i2++; ?>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
