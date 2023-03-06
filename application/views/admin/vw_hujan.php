<div class="container-fluid">
	<div class="clearfix">
		<style type="text/css">
			.f {
				float: right;
			}

			.clr {
				clear: both;
			}

			table {
				border-collapse: collapse;
				border-spacing: 0;
				width: 50%;
			}

			th,
			td {
				padding: 1rem 1.5rem;
				text-align: center;
			}

			th {
				background-color: #726454;
				/* header background color */
				color: #fff;
				/* header text color */
				font-weight: 600;
			}

			tr {
				text-align: center;
				padding: 0;
				font-weight: 600;
			}

			td {
				text-align: center;
				vertical-align: top;
				font-weight: 600;
			}

			tr:nth-child(even) td {
				background-color: rgba(0, 0, 0, .075);
				/* striped background color */
			}
		</style>
		<form method="POST" action="<?= base_url('Admin/input_edit'); ?>" style="overflow: auto;">
			<!-- Tabel 1 -->
			<div class="table">
				<table border="2" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th scope="col">Tanggal Penakaran</th>
							<th scope="col">Kota/Kabupaten</th>
							<th scope="col">Alat</th>
							<th scope="col" colspan="32">Hujan Dalam (mm)</td>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($hujan as $ch) : ?>
							<tr>
								<td><?= $ch['date']; ?></td>
								<td><?= $ch['kabupaten']; ?></td>
								<td><?= $ch['alat']; ?></td>
								<td><?= $ch['tgl_01']; ?></td>
								<td><?= $ch['tgl_02']; ?></td>
								<td><?= $ch['tgl_03']; ?></td>
								<td><?= $ch['tgl_04']; ?></td>
								<td><?= $ch['tgl_05']; ?></td>
								<td><?= $ch['tgl_06']; ?></td>
								<td><?= $ch['tgl_07']; ?></td>
								<td><?= $ch['tgl_08']; ?></td>
								<td><?= $ch['tgl_09']; ?></td>
								<td><?= $ch['tgl_10']; ?></td>
								<td><?= $ch['tgl_11']; ?></td>
								<td><?= $ch['tgl_12']; ?></td>
								<td><?= $ch['tgl_13']; ?></td>
								<td><?= $ch['tgl_14']; ?></td>
								<td><?= $ch['tgl_15']; ?></td>
								<td><?= $ch['tgl_16']; ?></td>
								<td><?= $ch['tgl_17']; ?></td>
								<td><?= $ch['tgl_18']; ?></td>
								<td><?= $ch['tgl_19']; ?></td>
								<td><?= $ch['tgl_20']; ?></td>
								<td><?= $ch['tgl_21']; ?></td>
								<td><?= $ch['tgl_22']; ?></td>
								<td><?= $ch['tgl_23']; ?></td>
								<td><?= $ch['tgl_23']; ?></td>
								<td><?= $ch['tgl_24']; ?></td>
								<td><?= $ch['tgl_25']; ?></td>
								<td><?= $ch['tgl_26']; ?></td>
								<td><?= $ch['tgl_27']; ?></td>
								<td><?= $ch['tgl_28']; ?></td>
								<td><?= $ch['tgl_29']; ?></td>
								<td><?= $ch['tgl_30']; ?></td>
								<td><?= $ch['tgl_31']; ?></td>
								<td>
									<a href="<?= base_url('Admin/hujan_edit/') . $ch['id']; ?>" class="badge badge-primary">Edit</a>
									<a href="<?= base_url('Admin/hujan_hapus/') . $ch['id']; ?>" class="badge badge-danger">Hapus</a>
								</td>
							</tr>
							<?php $i++; ?>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</form>
	</div>
	<br>
	<div class="contrains">
		<a href="/staklimkampar/admin/hujan" class="btn btn-danger">Tutup</a>
	</div>
</div>
