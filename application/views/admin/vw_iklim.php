<div class="container-fluid">
		<div class="clearfix">
			<form method="POST" action="<?= base_url('Admin/iklim_input_tambah'); ?>" style="overflow: auto;">
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
				<div id="buttons">
					<input type="submit" class="btn btn-info mb-2" name="text" value="Sumbit">
					<input type="submit" class="btn btn-info mb-2" name="prev" value="Cancel">
					<div class="clr"></div>
				</div>
				<!-- Tabel 1 -->
				<div class="table">
					<table border="2">
						<input type="hidden" value="<?= $_GET['date'] ?>" name="date" class="form-control" />
						<h4>
							<center>PSYCHROMETER SANGKAR METEOROLOGI</center>
						</h4>
						<thead>
							<tr>
								<th scope="col" rowspan="3">Atribut Psychrometer</th>
								<th scope="col" colspan="4">07.15</th>
								<th scope="col" colspan="4">07.45</th>
								<th scope="col" colspan="4">13.15</th>
								<th scope="col" colspan="4">13.45</th>
								<th scope="col" colspan="4">14.15</th>
								<th scope="col" colspan="4">17.45</th>
								<th scope="col" colspan="4">18.15</th>
							</tr>
							<tr>
								<th>12cm</th>
								<th>4cm</th>
								<th>7cm</th>
								<th>10cm</th>
								<th>12cm</th>
								<th>4cm</th>
								<th>7cm</th>
								<th>10cm</th>
								<th>12cm</th>
								<th>4cm</th>
								<th>7cm</th>
								<th>10cm</th>
								<th>12cm</th>
								<th>4cm</th>
								<th>7cm</th>
								<th>10cm</th>
								<th>12cm</th>
								<th>4cm</th>
								<th>7cm</th>
								<th>10cm</th>
								<th>12cm</th>
								<th>4cm</th>
								<th>7cm</th>
								<th>10cm</th>
								<th>12cm</th>
								<th>4cm</th>
								<th>7cm</th>
								<th>10cm</th>
							</tr>
							<tr>
								<th>1</th>
								<th>2</th>
								<th>3</th>
								<th>4</th>
								<th>5</th>
								<th>6</th>
								<th>7</th>
								<th>8</th>
								<th>9</th>
								<th>10</th>
								<th>11</th>
								<th>12</th>
								<th>13</th>
								<th>14</th>
								<th>15</th>
								<th>16</th>
								<th>17</th>
								<th>18</th>
								<th>19</th>
								<th>20</th>
								<th>21</th>
								<th>22</th>
								<th>23</th>
								<th>24</th>
								<th>25</th>
								<th>26</th>
								<th>27</th>
								<th>28</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Tbk</td>
								<td><input type="name" class="form-control" id="bk1_suhuUdara1" name="bk1_suhuUdara1" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="suhuUdara2" name="suhuUdara2" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="bk2" name="bk2" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="suhuUdara3" name="suhuUdara3" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="bk3_Rh3" name="bk3_Rh3" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
							</tr>
							<tr>
								<td>Tbb</td>
								<td><input type="name" class="form-control" id="bb1" name="bb1" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="bb2" name="bb2"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="bb3" name="bb3"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
							</tr>
							<tr>
								<td>RH</td>
								<td><input type="name" class="form-control" id="lembabnisb1_Rh1" name="lembabnisb1_Rh1"></td>
								<td><input type="name" class="form-control" id="#" name="#"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="Rh2" name="Rh2" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="lembabnisb2" name="lembabnisb2"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="lembabnisb3" name="lembabnisb3"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- Tabel 2 -->
				<hr /><br />
				<div class="table">
					<table border="2">
						<h4>
							<center>LAMA PENYINARAN</center>
						</h4>
						<thead>
							<tr>
								<th scope="col" rowspan="2"></th>
								<th scope="col">Jam</th>
								<th scope="col">%</th>
							</tr>
							<tr>
								<th scope="col">29</th>
								<th scope="col">30</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>12 Jam</td>
								<td><input type="name" class="form-control" id="lama12jam" name="lama12jam"></td>
								<td><input type="name" class="form-control" id="lama12persen" name="lama12persen"></td>
							</tr>
							<tr>
								<td>8 Jam</td>
								<td><input type="name" class="form-control" id="sinarmht" name="sinarmht"></td>
								<td><input type="name" class="form-control" id="lama8persen" name="lama8persen"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- Tabel 3 -->
				<hr /><br />
				<div class="table">
					<table border="2">
						<h4>
							<center>TERMOMETER MAKSIMUM dan MINIMUM</center>
						</h4>
						<thead>
							<tr>
								<th scope="col" rowspan="3">Ketinggian</th>
								<th scope="col" colspan="2">18.15</th>
								<th scope="col" colspan="2">14.15</th>
							</tr>
							<tr>
								<th scope="col">Max</th>
								<th scope="col">Reset</th>
								<th scope="col">Max</th>
								<th scope="col">Reset</th>
							</tr>
							<tr>
								<th scope="col">31</th>
								<th scope="col">32</th>
								<th scope="col">33</th>
								<th scope="col">34</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1.2 M</td>
								<td><input type="name" class="form-control" id="ukimax3" name="max3"></td>
								<td><input type="name" class="form-control" id="ujibk3" name="ujibk3"></td>
								<td><input type="name" class="form-control" id="ukimin2" name="min2"></td>
								<td><input type="name" class="form-control" id="ujibk2" name="ujibk2"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- Tabel 4 -->
				<hr /><br />
				<div class="table">
					<table border="2">
						<h4>
							<center>PICHE EVAPORIMETER</center>
						</h4>
						<thead>
							<tr>
								<th scope="col" rowspan="2">Waktu</th>
								<th scope="col">Ketinggian Air di Piche 1.2 m</th>
							</tr>
							<tr>
								<th scope="col">35</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>07.45</td>
								<td><input type="name" class="form-control" id="pieche0745" name="pieche0745"></td>
							</tr>
							<tr>
								<td>13.45</td>
								<td><input type="name" class="form-control" id="pieche1345" name="pieche1345"></td>
							</tr>
							<tr>
								<td>17.45</td>
								<td><input type="name" class="form-control" id="pieche1745" name="pieche1745"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- Tabel 5 -->
				<hr /><br />
				<div class="table">
					<table border="2">
						<h4>
							<center>RADIASI</center>
						</h4>
						<thead>
							<tr>
								<th scope="col" rowspan="2">Waktu</th>
								<th scope="col">I</th>
							</tr>
							<tr>
								<th scope="col">36</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>07.15</td>
								<td><input type="name" class="form-control" id="radiasi" name="radiasi"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- Tabel 6 -->
				<hr /><br />
				<div class="table">
					<table border="2">
						<h4>
							<center>0</center>
						</h4>
						<thead>
							<tr>
								<th scope="col" rowspan="2">Waktu</th>
								<th scope="col">Pembacaan</th>
								<th scope="col">Reseting</th>
							</tr>
							<tr>
								<th scope="col">37</th>
								<th scope="col">38</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>07.15</td>
								<td><input type="name" class="form-control" id="minrumput" name="minrumput"></td>
								<td><input type="name" class="form-control" id="wkReseting" name="wkReseting"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- Tabel 7 -->
				<hr /><br />
				<div class="table">
					<table border="2">
						<h4>
							<center>OPEN PAN</center>
						</h4>
						<thead>
							<tr>
								<th rowspan="3" scope="col">Waktu</th>
								<th rowspan="2" scope="col">Ketinggian Air di Panci</th>
								<th colspan="2" scope="col">Suhu Air</th>
								<th rowspan="2" scope="col">Hujan</th>
							</tr>
							<tr>
								<th scope="col">Min</th>
								<th scope="col">Max</th>
							</tr>
							<tr>
								<th scope="col">39</th>
								<th scope="col">40</th>
								<th scope="col">41</th>
								<th scope="col">42</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>07.15</td>
								<td><input type="name" class="form-control" id="#" name="#"></td>
								<td><input type="name" class="form-control" id="#" name="#"></td>
								<td><input type="name" class="form-control" id="#" name="#"></td>
								<td><input type="name" class="form-control" id="hujan" name="hujan"></td>
							</tr>
							<tr>
								<td>07.45</td>
								<td><input type="name" class="form-control" id="#" name="#"></td>
								<td><input type="name" class="form-control" id="#" name="#"></td>
								<td><input type="name" class="form-control" id="#" name="#"></td>
								<td><input type="name" class="form-control" id="phujan_Ch1" name="phujan_Ch1"></td>
							</tr>
							<tr>
								<td>13.45</td>
								<td><input type="name" class="form-control" id="#" name="#"></td>
								<td><input type="name" class="form-control" id="#" name="#"></td>
								<td><input type="name" class="form-control" id="#" name="#"></td>
								<td><input type="name" class="form-control" id="Ch2" name="Ch2"></td>
							</tr>
							<tr>
								<td>17.45</td>
								<td><input type="name" class="form-control" id="#" name="#"></td>
								<td><input type="name" class="form-control" id="#" name="#"></td>
								<td><input type="name" class="form-control" id="#" name="#"></td>
								<td><input type="name" class="form-control" id="Ch3" name="Ch3"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- Tabel 8 -->
				<hr /><br />
				<div class="table">
					<table border="2">
						<h4>
							<center>BAROMETER</center>
						</h4>
						<thead>
							<tr>
								<th rowspan="2" scope="col"></th>
								<th scope="col">00.00 UTC</th>
							</tr>
							<tr>
								<th scope="col">43</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Suhu</td>
								<td><input type="name" class="form-control" id="barSuhu" name="barSuhu"></td>
							</tr>
							<tr>
								<td>BAROMETER</td>
								<td><input type="name" class="form-control" id="barBaro" name="barBaro"></td>
							</tr>
							<tr>
								<td>QFF</td>
								<td><input type="name" class="form-control" id="barQff" name="barQff"></td>
							</tr>
							<tr>
								<td>QFE</td>
								<td><input type="name" class="form-control" id="barQfe" name="barQfe"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- Tabel 9 -->
				<hr /><br />
				<div class="table">
					<table border="2">
						<h4>
							<center>KONDISI CUACA DAN TANAH</center>
						</h4>
						<thead>
							<tr>
								<th rowspan="2" scope="col">Waktu</th>
								<th scope="col">Kode Tanah</th>
								<th scope="col">Reseting</th>
							</tr>
							<tr>
								<th scope="col">44</th>
								<th scope="col">45</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>07.15</td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="jam7" name="jam7"></td>
							</tr>
							<tr>
								<td>14.15</td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="jam2" name="jam2"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- Tabel 10 -->
				<hr /><br />
				<div class="table">
					<table border="2">
						<h4>
							<center>ANGIN</center>
						</h4>
						<thead>
							<tr>
								<th rowspan="3" scope="col">Waktu</th>
								<th scope="col" colspan="8">Ketinggian Anemometer</th>
							</tr>
							<tr>
								<th scope="col">0.5 m</th>
								<th scope="col">2 m</th>
								<th colspan="2" scope="col">4 m</th>
								<th colspan="2" scope="col">7 m</th>
								<th colspan="2" scope="col">10 m</th>
							</tr>
							<tr>
								<th>Cup Counter</th>
								<th>Cup Counter</th>
								<th>Arah</th>
								<th>Kecepatan</th>
								<th>Arah</th>
								<th>Kecepatan</th>
								<th>Arah</th>
								<th>Kecepatan</th>
							</tr>
							<tr>
								<th></th>
								<th>1</th>
								<th>2</th>
								<th>3</th>
								<th>4</th>
								<th>5</th>
								<th>6</th>
								<th>7</th>
								<th>8</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>07.15</td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="arahwaktu1" name="arahwaktu1" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="kcpperamatan1_kcpwaktu1" name="kcpperamatan1_kcpwaktu1" style="width: 65px ;"></td>
							</tr>
							<tr>
								<td>07.45</td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="ke1Angin0" name="ke1Angin0" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="ke1Angin10" name="ke1Angin10" style="width: 65px ;"></td>
							</tr>
							<tr>
								<td>13.45</td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="ke2Angin10" name="ke2Angin10" style="width: 65px ;"></td>
							</tr>
							<tr>
								<td>14.15</td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="arahwaktu2" name="arahwaktu2" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="kcpperamatan2" name="kcpperamatan2" style="width: 65px ;"></td>
							</tr>
							<tr>
								<td>17.45</td>
								<td><input type="name" class="form-control" id="angin051" name="angin051" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="ke3Angin10" name="ke3Angin10" style="width: 65px ;"></td>
							</tr>
							<tr>
								<td>18.15</td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="arahwaktu3" name="arahwaktu3" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="kcpperamatan3" name="kcpperamatan3" style="width: 65px ;"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- Tabel 11 -->
				<hr /><br />
				<div class="table">
					<table border="2">
						<h4>
							<center>SUHU TANAH</center>
						</h4>
						<thead>
							<tr>
								<th scope="col" rowspan="3">Kedalaman</th>
								<th scope="col" colspan="2">07.45</th>
								<th scope="col" colspan="2">13.45</th>
								<th scope="col" colspan="2">14.15</th>
								<th scope="col" colspan="2">17.45</th>
							</tr>
							<tr>
								<th scope="col">Berumput</th>
								<th scope="col">Gundul</th>
								<th scope="col">Berumput</th>
								<th scope="col">Gundul</th>
								<th scope="col">Berumput</th>
								<th scope="col">Gundul</th>
								<th scope="col">Berumput</th>
								<th scope="col">Gundul</th>
							</tr>
							<tr>
								<th scope="col">9</th>
								<th scope="col">10</th>
								<th scope="col">11</th>
								<th scope="col">12</th>
								<th scope="col">13</th>
								<th scope="col">14</th>
								<th scope="col">15</th>
								<th scope="col">16</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>0 cm</td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
							</tr>
							<tr>
								<td>2 cm</td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
							</tr>
							<tr>
								<td>5 cm</td>
								<td><input type="name" class="form-control" id="tempt15" name="tempt15" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="temg15" name="temg15" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="tempt25" name="tempt25" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="temg25" name="temg25" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="tempt35" name="tempt35" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="temg35" name="temg35" style="width: 65px ;"></td>
							</tr>
							<tr>
								<td>10 cm</td>
								<td><input type="name" class="form-control" id="tempt110" name="tempt110" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="temg110" name="temg110" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="tempt210" name="tempt210" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="temg210" name="temg210" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="tempt310" name="tempt310" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="temg310" name="#temg310" style="width: 65px ;"></td>
							</tr>
							<tr>
								<td>20 cm</td>
								<td><input type="name" class="form-control" id="tempt120" name="tempt120" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="temg120" name="temg120" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="tempt210" name="tempt210" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="temg220" name="temg220" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="tempt320" name="tempt320" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="temg320" name="temg320" style="width: 65px ;"></td>
							</tr>
							<tr>
								<td>50 cm</td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="tempt350" name="tempt350" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="temg350" name="temg350" style="width: 65px ;"></td>
							</tr>
							<tr>
								<td>100 cm</td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="tempt3100" name="tempt3100" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="temg3100" name="temg3100" style="width: 65px ;"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- Tabel 12 -->
				<hr /><br />
				<div class="table">
					<table border="2">
						<h4>
							<center>LYSIMETER</center>
						</h4>
						<thead>
							<tr>
								<th scope="col" colspan="2">Tanah Gundul</th>
								<th scope="col" colspan="2">Tanaman Komoditi</th>
								<th scope="col" colspan="2">Tanah Berumput</th>
							</tr>
							<tr>
								<th scope="col">Siram</th>
								<th scope="col">Keluar</th>
								<th scope="col">Siram</th>
								<th scope="col">Keluar</th>
								<th scope="col">Siram</th>
								<th scope="col">Keluar</th>
							</tr>
							<tr>
								<th scope="col">17</th>
								<th scope="col">18</th>
								<th scope="col">19</th>
								<th scope="col">20</th>
								<th scope="col">21</th>
								<th scope="col">22</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
								<td><input type="name" class="form-control" id="#" name="#" style="width: 65px ;"></td>
							</tr>
							<tr>
								<td colspan="6">Jumlah Curah Hujan per Jam 17.15 : <input type="name" class="form-control" id="#" name="#"></td>
							</tr>
							<tr>
								<td colspan="6">Nama Tanaman Komoditi : <input type="name" class="form-control" id="#" name="#"></td>
							</tr>
							<tr>
								<td colspan="6">Keterangan Fase : <input type="name" class="form-control" id="#" name="#"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</form>
		</div>
	</div>
