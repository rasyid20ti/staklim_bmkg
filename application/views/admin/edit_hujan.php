<!-- Begin Page Content -->
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8 ">
			<div class="card">
				<div class="card-header">
					Form Editing Pos Hujan
				</div>
				<form action="<?= base_url() ?>admin/hujan_submit_edit/<?= $hujan['id'] ?>" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?= $hujan['id']; ?>">
						<div class="form-group">
							<label for="alat">Alat</label>
							<input value="<?= $hujan['alat']; ?>" name="alat" type="text" class="form-control" id="alat">
						</div>
						<div class="form-group">
							<label for="kabupaten">Kabupaten</label>
							<input value="<?= $hujan['kabupaten']; ?>" name="kabupaten" type="text" class="form-control" id="kabupaten">
						</div>
						<div class="form-group">
							<label for="tgl_01">Tanggal 01</label>
							<input value="<?= $hujan['tgl_01']; ?>" name="tgl_01" type="number" class="form-control" id="tgl_01">
						</div>
						<div class="form-group">
							<label for="tgl_02">Tanggal 02</label>
							<input value="<?= $hujan['tgl_02']; ?>" name="tgl_02" type="number" class="form-control" id="tgl_02">
						</div>
						<div class="form-group">
							<label for="tgl_03">Tanggal 03</label>
							<input value="<?= $hujan['tgl_03']; ?>" name="tgl_03" type="number" class="form-control" id="tgl_03">
						</div>
						<div class="form-group">
							<label for="tgl_04">Tanggal 04</label>
							<input value="<?= $hujan['tgl_04']; ?>" name="tgl_04" type="number" class="form-control" id="tgl_04">
						</div>
						<div class="form-group">
							<label for="tgl_05">Tanggal 05</label>
							<input value="<?= $hujan['tgl_05']; ?>" name="tgl_05" type="number" class="form-control" id="tgl_05">
						</div>
						<div class="form-group">
							<label for="tgl_06">Tanggal 06</label>
							<input value="<?= $hujan['tgl_06']; ?>" name="tgl_06" type="number" class="form-control" id="tgl_06">
						</div>
						<div class="form-group">
							<label for="tgl_07">Tanggal 07</label>
							<input value="<?= $hujan['tgl_07']; ?>" name="tgl_07" type="number" class="form-control" id="tgl_07">
						</div>
						<div class="form-group">
							<label for="tgl_08">Tanggal 08</label>
							<input value="<?= $hujan['tgl_08']; ?>" name="tgl_08" type="number" class="form-control" id="tgl_08">
						</div>
						<div class="form-group">
							<label for="tgl_09">Tanggal 09</label>
							<input value="<?= $hujan['tgl_09']; ?>" name="tgl_09" type="number" class="form-control" id="tgl_09">
						</div>
						<div class="form-group">
							<label for="tgl_10">Tanggal 10</label>
							<input value="<?= $hujan['tgl_10']; ?>" name="tgl_10" type="number" class="form-control" id="tgl_10">
						</div>
						<div class="form-group">
							<label for="tgl_11">Tanggal 11</label>
							<input value="<?= $hujan['tgl_11']; ?>" name="tgl_11" type="number" class="form-control" id="tgl_11">
						</div>
						<div class="form-group">
							<label for="tgl_12">Tanggal 12</label>
							<input value="<?= $hujan['tgl_12']; ?>" name="tgl_12" type="number" class="form-control" id="tgl_12">
						</div>
						<div class="form-group">
							<label for="tgl_13">Tanggal 13</label>
							<input value="<?= $hujan['tgl_13']; ?>" name="tgl_13" type="number" class="form-control" id="tgl_13">
						</div>
						<div class="form-group">
							<label for="tgl_14">Tanggal 14</label>
							<input value="<?= $hujan['tgl_14']; ?>" name="tgl_14" type="number" class="form-control" id="tgl_14">
						</div>
						<div class="form-group">
							<label for="tgl_15">Tanggal 15</label>
							<input value="<?= $hujan['tgl_15']; ?>" name="tgl_15" type="number" class="form-control" id="tgl_15">
						</div>
						<div class="form-group">
							<label for="tgl_16">Tanggal 16</label>
							<input value="<?= $hujan['tgl_16']; ?>" name="tgl_16" type="number" class="form-control" id="tgl_16">
						</div>
						<div class="form-group">
							<label for="tgl_17">Tanggal 17</label>
							<input value="<?= $hujan['tgl_17']; ?>" name="tgl_17" type="number" class="form-control" id="tgl_17">
						</div>
						<div class="form-group">
							<label for="tgl_18">Tanggal 18</label>
							<input value="<?= $hujan['tgl_18']; ?>" name="tgl_18" type="number" class="form-control" id="tgl_18">
						</div>
						<div class="form-group">
							<label for="tgl_19">Tanggal 19</label>
							<input value="<?= $hujan['tgl_19']; ?>" name="tgl_19" type="number" class="form-control" id="tgl_19">
						</div>
						<div class="form-group">
							<label for="tgl_20">Tanggal 20</label>
							<input value="<?= $hujan['tgl_20']; ?>" name="tgl_20" type="number" class="form-control" id="tgl_20">
						</div>
						<div class="form-group">
							<label for="tgl_21">Tanggal 21</label>
							<input value="<?= $hujan['tgl_21']; ?>" name="tgl_21" type="number" class="form-control" id="tgl_21">
						</div>
						<div class="form-group">
							<label for="tgl_22">Tanggal 22</label>
							<input value="<?= $hujan['tgl_22']; ?>" name="tgl_22" type="number" class="form-control" id="tgl_22">
						</div>
						<div class="form-group">
							<label for="tgl_23">Tanggal 23</label>
							<input value="<?= $hujan['tgl_23']; ?>" name="tgl_23" type="number" class="form-control" id="tgl_23">
						</div>
						<div class="form-group">
							<label for="tgl_24">Tanggal 24</label>
							<input value="<?= $hujan['tgl_24']; ?>" name="tgl_24" type="number" class="form-control" id="tgl_24">
						</div>
						<div class="form-group">
							<label for="tgl_25">Tanggal 25</label>
							<input value="<?= $hujan['tgl_25']; ?>" name="tgl_25" type="number" class="form-control" id="tgl_25">
						</div>
						<div class="form-group">
							<label for="tgl_26">Tanggal 26</label>
							<input value="<?= $hujan['tgl_26']; ?>" name="tgl_26" type="number" class="form-control" id="tgl_26">
						</div>
						<div class="form-group">
							<label for="tgl_27">Tanggal 27</label>
							<input value="<?= $hujan['tgl_27']; ?>" name="tgl_27" type="number" class="form-control" id="tgl_27">
						</div>
						<div class="form-group">
							<label for="tgl_28">Tanggal 28</label>
							<input value="<?= $hujan['tgl_28']; ?>" name="tgl_28" type="number" class="form-control" id="tgl_28">
						</div>
						<div class="form-group">
							<label for="tgl_29">Tanggal 29</label>
							<input value="<?= $hujan['tgl_29']; ?>" name="tgl_29" type="number" class="form-control" id="tgl_29">
						</div>
						<div class="form-group">
							<label for="tgl_30">Tanggal 30</label>
							<input value="<?= $hujan['tgl_30']; ?>" name="tgl_30" type="number" class="form-control" id="tgl_30">
						</div>
						<div class="form-group">
							<label for="tgl_31">Tanggal 31</label>
							<input value="<?= $hujan['tgl_31']; ?>" name="tgl_31" type="number" class="form-control" id="tgl_31">
						</div>
						<a href="<?= base_url('Admin/vw_hujan') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Pos Hujan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
