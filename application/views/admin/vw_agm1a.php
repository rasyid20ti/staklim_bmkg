<!-- Begin Page Content -->
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
				background-color: #6C665E;
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
		<form method="POST" action="<?= base_url('Admin/agm1a_edit'); ?>" style="overflow: auto;">
			<table border="2" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr class="x-grid3-hd-row" role="presentation">
						<th scope="col" rowspan="3">Tanggal Di Input</th>
						<th scope="col" colspan="9">Temperature</th>
						<th scope="col" colspan="3">Lembab nisbi (%)</th>
						<th scope="col" colspan="9">Angin</th>
						<th scope="col" colspan="1">Sinar Matahari</th>
						<th scope="col" colspan="1">Hujan</th>
						<th scope="col" colspan="4">Uji peramatan</th>
						<th scope="col" colspan="2">Keadaan cuaca pada waktu peramatan</th>
						<th scope="col" colspan="10">Keadaan cuaca selama 24 jam yang terakhir pada jam 07.00 waktu setempat</th>
						<th scope="col" rowspan="3">Catatan mengenai jam terjadinya dan
							lamanya kejadian-kejadian serta pengaruhnya (kalau ada) atas tanaman-tanaman</th>
						<th scope="col" rowspan="3">Aksi</th>
					</tr>
					<tr class="x-grid3-hd-row" role="presentation">
						<th scope="col">BK</th>
						<th scope="col">BB</th>
						<th scope="col">BK</th>
						<th scope="col">BB</th>
						<th scope="col">BK</th>
						<th scope="col">BB</th>
						<th scope="col">Min Rumput</th>
						<th scope="col">Min</th>
						<th scope="col">Max</th>
						<th scope="col" rowspan="2">I</th>
						<th scope="col" rowspan="2">II</th>
						<th scope="col" rowspan="2">III</th>
						<th scope="col" colspan="3">Kecepatan rata - rata antara waktu peramatan</th>
						<th scope="col" colspan="3">Arah pada waktu peramatan (derajat)</th>
						<th scope="col" colspan="3">Kecepatan pada waktu peramatan</th>
						<th scope="col" rowspan="2" >I</th>
						<th scope="col" rowspan="2" >I</th>
						<th scope="col">BK</th>
						<th scope="col">Min</th>
						<th scope="col">BK</th>
						<th scope="col">Max</th>
						<th scope="col" rowspan="2">Jam 07.00</th>
						<th scope="col" rowspan="2">Jam 14.00</th>
						<th scope="col" rowspan="2">Hujan</th>
						<th scope="col" rowspan="2">Salju</th>
						<th scope="col" rowspan="2">Pembekuan (Embun Upas)</th>
						<th scope="col" rowspan="2">Embun</th>
						<th scope="col" rowspan="2">Kabut</th>
						<th scope="col" rowspan="2">Udara buruk tanpa rambun</th>
						<th scope="col" rowspan="2">Rambun tiba-tiba sebut diameter batu rambun</th>
						<th scope="col" rowspan="2">Kabut debu (haze)</th>
						<th scope="col" rowspan="2">Badai debu</th>
						<th scope="col" rowspan="2">Angin ribut (kencang)</th>
					</tr>
					<tr class="x-grid3-hd-row" role="presentation">
						<th scope="col">I</th>
						<th scope="col">I</th>
						<th scope="col">II</th>
						<th scope="col">II</th>
						<th scope="col">III</th>
						<th scope="col">III</th>
						<th scope="col">I</th>
						<th scope="col">II</th>
						<th scope="col">III</th>
						<th scope="col">III-I</th>
						<th scope="col">I-II</th>
						<th scope="col">II-III</th>
						<th scope="col">I</th>
						<th scope="col">II</th>
						<th scope="col">III</th>
						<th scope="col">I</th>
						<th scope="col">II</th>
						<th scope="col">III</th>
						<th scope="col">II</th>
						<th scope="col">II</th>
						<th scope="col">III</th>
						<th scope="col">III</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($agm1a as $us) : ?>
						<tr class="x-grid3-hd-row" role="presentation">
							<td><?= $us['date']; ?></td>
							<td><?= $us['bk1']; ?></td>
							<td><?= $us['bb1']; ?></td>
							<td><?= $us['bk2']; ?></td>
							<td><?= $us['bb2']; ?></td>
							<td><?= $us['bk3']; ?></td>
							<td><?= $us['bb3']; ?></td>
							<td><?= $us['minrumput']; ?></td>
							<td><?= $us['min2']; ?></td>
							<td><?= $us['max3']; ?></td>
							<td><?= $us['lembabnisb1']; ?></td>
							<td><?= $us['lembabnisb2']; ?></td>
							<td><?= $us['lembabnisb3']; ?></td>
							<td><?= $us['kcpwaktu1']; ?></td>
							<td><?= $us['kcpwaktu2']; ?></td>
							<td><?= $us['kcpwaktu3']; ?></td>
							<td><?= $us['arahwaktu1']; ?></td>
							<td><?= $us['arahwaktu2']; ?></td>
							<td><?= $us['arahwaktu3']; ?></td>
							<td><?= $us['kcpperamatan1']; ?></td>
							<td><?= $us['kcpperamatan2']; ?></td>
							<td><?= $us['kcpperamatan3']; ?></td>
							<td><?= $us['sinarmht']; ?></td>
							<td><?= $us['hujan']; ?></td>
							<td><?= $us['ujibk2']; ?></td>
							<td><?= $us['min2']; ?></td>
							<td><?= $us['ujibk3']; ?></td>
							<td><?= $us['max3']; ?></td>
							<td><?= $us['jam7']; ?></td>
							<td><?= $us["jam2"]; ?></td>
							<td><?= $us["phujan"]; ?></td>
							<td><?= $us["salju"]; ?></td>
							<td><?= $us["pembekuan"]; ?></td>
							<td><?= $us["embun"]; ?></td>
							<td><?= $us["kabut"]; ?></td>
							<td><?= $us["udarab"]; ?></td>
							<td><?= $us["rambun"]; ?></td>
							<td><?= $us["kabutdebu"]; ?></td>
							<td><?= $us["badaidebu"]; ?></td>
							<td><?= $us["anginribut"]; ?></td>
							<td><?= $us["catatan"]; ?></td>
							<td>
								<a href="<?= base_url('Admin/agm1a_edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
								<a href="<?= base_url('Admin/agm1a_hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
							</td>
						</tr>
						<?php $i++; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
		</form>
	</div>
	<br>
	<div class="contrains">
		<a href="/staklimkampar/admin/form_iklim" class="btn btn-danger">Kembali</a>
	</div>
</div>
