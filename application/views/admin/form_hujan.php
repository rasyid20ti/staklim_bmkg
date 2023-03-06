<div class="container-fluid">
	<div class="clearfix">
		<div class="float-left">
			<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
		</div>
	</div>
	<form method="POST" action="<?= base_url('Admin/hujan_input_tambah'); ?>" style="overflow: auto;">
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
				background-color: #AF3A1D;
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
		<div id="buttons">
			<input type="submit" class="btn btn-info mb-2" name="text" value="Submit">
			<input type="submit" class="btn btn-info mb-2" name="prev" value="Cancel">
			<div class="clr"></div>
		</div>
		<input type="hidden" class="form-control" value="<?= $_GET['date'] ?>" name="date"/>
		<input type="hidden" class="form-control" value="<?= $_GET['alat'] ?>" name="alat"/>
		<input type="hidden" class="form-control" value="<?= $_GET['kabupaten'] ?>" name="kabupaten"/>
		<div class="table">
			<table border="2">
				<thead>
					<tr>
						<th scope="col">Tanggal Penakaran</th>
						<th scope="col">Hujan Dalam (mm)</td>
						<th scope="col">Tanggal Penakaran</td>
						<th scope="col">Hujan Dalam (mm)</td>
						<th scope="col">Tanggal Penakaran</td>
						<th scope="col">Hujan Dalam (mm)</td>
						<th scope="col">Tanggal Penakaran</td>
						<th scope="col">Hujan Dalam (mm)</td>
						<th scope="col">Tanggal Penakaran</td>
						<th scope="col">Hujan Dalam (mm)</td>
						<th scope="col">Tanggal Penakaran</td>
						<th scope="col">Hujan Dalam (mm)</td>
						<th scope="col">Tanggal Penakaran</td>
						<th scope="col">Hujan Dalam (mm)</td>
						<th scope="col">Tanggal Penakaran</td>
						<th scope="col">Hujan Dalam (mm)</th>
						<th scope="col">Tanggal Penakaran</th>
						<th scope="col">Hujan Dalam (mm)</th>
						<th scope="col">Tanggal Penakaran</th>
						<th scope="col">Hujan Dalam (mm)</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td><input type="name" class="form-control" id="tgl_01" name="tgl_01"></td>
						<td>2</td>
						<td><input type="name" class="form-control" id="tgl_02" name="tgl_02"></td>
						<td>3</td>
						<td><input type="name" class="form-control" id="tgl_03" name="tgl_03"></td>
						<td>4</td>
						<td><input type="name" class="form-control" id="tgl_04" name="tgl_04"></td>
						<td>5</td>
						<td><input type="name" class="form-control" id="tgl_05" name="tgl_05"></td>
						<td>6</td>
						<td><input type="name" class="form-control" id="tgl_06" name="tgl_06"></td>
						<td>7</td>
						<td><input type="name" class="form-control" id="tgl_07" name="tgl_07"></td>
						<td>8</td>
						<td><input type="name" class="form-control" id="tgl_08" name="tgl_08"></td>
						<td>9</td>
						<td><input type="name" class="form-control" id="tgl_09" name="tgl_09"></td>
						<td>10</td>
						<td><input type="name" class="form-control" id="tgl_10" name="tgl_10"></td>
					</tr>
					<tr>
						<td>11</td>
						<td><input type="name" class="form-control" id="tgl_11" name="tgl_11"></td>
						<td>12</td>
						<td><input type="name" class="form-control" id="tgl_12" name="tgl_12"></td>
						<td>13</td>
						<td><input type="name" class="form-control" id="tgl_13" name="tgl_13"></td>
						<td>14</td>
						<td><input type="name" class="form-control" id="tgl_14" name="tgl_14"></td>
						<td>15</td>
						<td><input type="name" class="form-control" id="tgl_15" name="tgl_15"></td>
						<td>16</td>
						<td><input type="name" class="form-control" id="tgl_16" name="tgl_16"></td>
						<td>17</td>
						<td><input type="name" class="form-control" id="tgl_17" name="tgl_17"></td>
						<td>18</td>
						<td><input type="name" class="form-control" id="tgl_18" name="tgl_18"></td>
						<td>19</td>
						<td><input type="name" class="form-control" id="tgl_19" name="tgl_19"></td>
						<td>20</td>
						<td><input type="name" class="form-control" id="tgl_20" name="tgl_20"></td>
					</tr>
					<tr>
						<td>21</td>
						<td><input type="name" class="form-control" id="tgl_21" name="tgl_21"></td>
						<td>22</td>
						<td><input type="name" class="form-control" id="tgl_22" name="tgl_22"></td>
						<td>23</td>
						<td><input type="name" class="form-control" id="tgl_23" name="tgl_23"></td>
						<td>24</td>
						<td><input type="name" class="form-control" id="tgl_24" name="tgl_24"></td>
						<td>25</td>
						<td><input type="name" class="form-control" id="tgl_25" name="tgl_25"></td>
						<td>26</td>
						<td><input type="name" class="form-control" id="tgl_26" name="tgl_26"></td>
						<td>27</td>
						<td><input type="name" class="form-control" id="tgl_27" name="tgl_27"></td>
						<td>28</td>
						<td><input type="name" class="form-control" id="tgl_28" name="tgl_28"></td>
						<td>29</td>
						<td><input type="name" class="form-control" id="tgl_29" name="tgl_29"></td>
						<td>30</td>
						<td><input type="name" class="form-control" id="tgl_30" name="tgl_30"></td>
					</tr>
					<tr>
						<td>31</td>
						<td><input type="name" class="form-control" id="tgl_31" name="tgl_31"></td>
					</tr>
				</tbody>
			</table>
		</div>
		<hr /><br />
	</form>
</div>
