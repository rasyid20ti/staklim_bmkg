<!-- Begin Page Content -->
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8 ">
			<div class="card">
				<div class="card-header">
					Form Editing AGM1A
				</div>
				<form action="<?= base_url() ?>admin/agm1a_submit_edit/<?= $agm1a['id'] ?>" method="POST" enctype="multipart/form-data">
						<h4>Tabel Pertama</h4>
						<br>
						<input type="hidden" name="id" value="<?= $agm1a['id']; ?>">
						<div class="form-group">
							<label for="bk1">Temperature (BK I)</label>
							<input value="<?= $agm1a ['bk1']; ?>" name="bk1" type="text" class="form-control" id="bk1" placeholder="Temperature (BK I)">
						</div>
						<div class="form-group">
							<label for="bb1">Temperature (BB I)</label>
							<input value="<?= $agm1a ['bb1']; ?>" name="bb1" type="text" class="form-control" id="bb1" placeholder="Temperature (BB I)">
						</div>
						<div class="form-group">
							<label for="bk2">Temperature (BK II)</label>
							<input value="<?= $agm1a ['bk2']; ?>" name="bk2" type="text" class="form-control" id="bk2" placeholder="Temperature (BK II)">
						</div>
						<div class="form-group">
							<label for="bb2">Temperature (BB II)</label>
							<input value="<?= $agm1a ['bb2']; ?>" name="bb2" type="text" class="form-control" id="bb2" placeholder="Temperature (BB II)">
						</div>
						<div class="form-group">
							<label for="bk3">Temperature (BK III)</label>
							<input value="<?= $agm1a ['bk3']; ?>" name="bk3" type="text" class="form-control" id="bk3" placeholder="Temperature (BK III)">
						</div>
						<div class="form-group">
							<label for="bb3">Temperature (BK III)</label>
							<input value="<?= $agm1a['bb3']; ?>" name="bb3" type="text" class="form-control" id="bb3" placeholder="Temperature (BB III)">
						</div>
						<div class="form-group">
							<label for="minrumput">Temperature (Min Rumput)</label>
							<input value="<?= $agm1a['minrumput']; ?>" name="minrumput" type="text" class="form-control" id="minrumput" placeholder="Temperature (Min Rumput)">
						</div>
						<div class="form-group">
							<label for="min2">Temperature (Min)</label>
							<input value="<?= $agm1a['min2']; ?>" name="min2" type="text" class="form-control" id="min2" placeholder="Temperature (Min)">
						</div>
						<div class="form-group">
							<label for="max3">Temperature (Max)</label>
							<input value="<?= $agm1a['max3']; ?>" name="max3" type="text" class="form-control" id="max3" placeholder="Temperature (Max)">
						</div>
						<div class="form-group">
							<label for="lembabnisb1">Lembah NSIB (%) I</label>
							<input value="<?= $agm1a['lembabnisb1']; ?>" name="lembabnisb1" type="text" class="form-control" id="lembabnisb1" placeholder="Lembah NSIB (%) I">
						</div>
						<div class="form-group">
							<label for="lembabnisb2">Lembah NSIB (%) II</label>
							<input value="<?= $agm1a['lembabnisb2']; ?>" name="lembabnisb2" type="text" class="form-control" id="lembabnisb2" placeholder="Lembah NSIB (%) II">
						</div>
						<div class="form-group">
							<label for="lembabnisb3">Lembah NSIB (%) III</label>
							<input value="<?= $agm1a['lembabnisb3']; ?>" name="lembabnisb3" type="text" class="form-control" id="lembabnisb3" placeholder="Lembah NSIB (%) III">
						</div>
						<div class="form-group">
							<label for="kcpwaktu1">Kecepatan Rata - Rata Antara Waktu Peramatan I</label>
							<input value="<?= $agm1a['kcpwaktu1']; ?>" name="kcpwaktu1" type="text" class="form-control" id="kcpwaktu1" placeholder="Kecepatan Rata - Rata Antara Waktu Peramatan I">
						</div>
						<div class="form-group">
							<label for="kcpwaktu2">Kecepatan Rata - Rata Antara Waktu Peramatan II</label>
							<input value="<?= $agm1a['kcpwaktu2']; ?>" name="kcpwaktu2" type="text" class="form-control" id="kcpwaktu2" placeholder="Kecepatan Rata - Rata Antara Waktu Peramatan II">
						</div>
						<div class="form-group">
							<label for="kcpwaktu3">Kecepatan Rata - Rata Antara Waktu Peramatan III</label>
							<input value="<?= $agm1a['kcpwaktu3']; ?>" name="kcpwaktu3" type="text" class="form-control" id="kcpwaktu3" placeholder="Kecepatan Rata - Rata Antara Waktu Peramatan III">
						</div>
						<div class="form-group">
							<label for="arahwaktu1">Arah Pada Waktu Peramatan (Derajat) I</label>
							<input value="<?= $agm1a['arahwaktu1']; ?>" name="arahwaktu1" type="text" class="form-control" id="arahwaktu1" placeholder="Arah Pada Waktu Peramatan (Derajat) I">
						</div>
						<div class="form-group">
							<label for="arahwaktu2">Arah Pada Waktu Peramatan (Derajat) II</label>
							<input value="<?= $agm1a['arahwaktu2']; ?>" name="arahwaktu2" type="text" class="form-control" id="arahwaktu2" placeholder="Arah Pada Waktu Peramatan (Derajat) II">
						</div>
						<div class="form-group">
							<label for="arahwaktu3">Arah Pada Waktu Peramatan (Derajat) III</label>
							<input value="<?= $agm1a['arahwaktu3']; ?>" name="arahwaktu3" type="text" class="form-control" id="arahwaktu3" placeholder="Arah Pada Waktu Peramatan (Derajat) III">
						</div>
						<div class="form-group">
							<label for="kcpperamatan1">Kecepatan Pada Waktu Peramatan I</label>
							<input value="<?= $agm1a['kcpperamatan1']; ?>" name="kcpperamatan1" type="text" class="form-control" id="kcpperamatan1" placeholder="Kecepatan Pada Waktu Peramatan I">
						</div>
						<div class="form-group">
							<label for="kcpperamatan2">Kecepatan Pada Waktu Peramatan II</label>
							<input value="<?= $agm1a['kcpperamatan2']; ?>" name="kcpperamatan2" type="text" class="form-control" id="kcpperamatan2" placeholder="Kecepatan Pada Waktu Peramatan II">
						</div>
						<div class="form-group">
							<label for="kcpperamatan3">Kecepatan Pada Waktu Peramatan III</label>
							<input value="<?= $agm1a['kcpperamatan3']; ?>" name="kcpperamatan3" type="text" class="form-control" id="kcpperamatan3" placeholder="Kecepatan Pada Waktu Peramatan III">
						</div>
						<div class="form-group">
							<label for="sinarmht">Sinar Matahari</label>
							<input value="<?= $agm1a['sinarmht']; ?>" name="sinarmht" type="text" class="form-control" id="sinarmht" placeholder="Sinar Matahari">
						</div>
						<div class="form-group">
							<label for="hujan">Hujan</label>
							<input value="<?= $agm1a['hujan']; ?>" name="hujan" type="text" class="form-control" id="hujan" placeholder="Hujan">
						</div>
						<div class="form-group">
							<label for="ujibk2">Uji Peramatan (BK II)</label>
							<input value="<?= $agm1a['ujibk2']; ?>" name="ujibk2" type="text" class="form-control" id="ujibk2" placeholder="Uji Peramatan (BK II)">
						</div>
						<div class="form-group">
							<label for="ukimin2">Uji Peramatan (Min II)</label>
							<input value="<?= $agm1a['ukimin2']; ?>" name="ukimin2" type="text" class="form-control" id="ukimin2" placeholder="Uji Peramatan (Min II)">
						</div>
						<div class="form-group">
							<label for="ujibk3">Uji Peramatan (BK III)</label>
							<input value="<?= $agm1a['ujibk3']; ?>" name="ujibk3" type="text" class="form-control" id="ujibk3" placeholder="Uji Peramatan (BK III)">
						</div>
						<div class="form-group">
							<label for="ukimax3">Uji Peramatan (Max III)</label>
							<input value="<?= $agm1a['ukimax3']; ?>" name="ukimax3" type="text" class="form-control" id="ukimax3" placeholder="Uji Peramatan (Max III)">
						</div>
						<br>
						<h4>Tabel Kedua</h4>
						<br>
						<div class="form-group">
							<label for="jam7">Jam 07.00</label>
							<input value="<?= $agm1a['jam7']; ?>" name="jam7" type="text" class="form-control" id="jam7" placeholder="Jam 07.00">
						</div>
						<div class="form-group">
							<label for="jam2">Jam 14.00</label>
							<input value="<?= $agm1a['jam2']; ?>" name="jam2" type="text" class="form-control" id="jam2" placeholder="Jam 14.00">
						</div>
						<!-- <div class="form-group">
							<label for="phujan">Hujan</label>
							<input value="<?= $agm1a['phujan']; ?>" name="phujan" type="text" class="form-control" id="phujan" placeholder="Hujan">
						</div>
						<div class="form-group">
							<label for="salju">Salju</label>
							<input value="<?= $agm1a['salju']; ?>" name="salju" type="text" class="form-control" id="salju" placeholder="Salju">
						</div>
						<div class="form-group">
							<label for="pembekuan">Pembekuan (Embun Aspal)</label>
							<input value="<?= $agm1a['pembekuan']; ?>" name="pembekuan" type="text" class="form-control" id="pembekuan" placeholder="Pembekuan (Embun Aspal)">
						</div>
						<div class="form-group">
							<label for="embun">Embun</label>
							<input value="<?= $agm1a['embun']; ?>" name="embun" type="text" class="form-control" id="embun" placeholder="Embun">
						</div>
						<div class="form-group">
							<label for="kabut">Kabut</label>
							<input value="<?= $agm1a['kabut']; ?>" name="kabut" type="text" class="form-control" id="kabut" placeholder="Kabut">
						</div>
						<div class="form-group">
							<label for="udarab">Udara Buruk Tanpa Rambun</label>
							<input value="<?= $agm1a['udarab']; ?>" name="udarab" type="text" class="form-control" id="udarab" placeholder="Udara Buruk Tanpa Rambun">
						</div>
						<div class="form-group">
							<label for="rambun">Rambun Tiba - TIba Sebut Diameter Batu Rambun</label>
							<input value="<?= $agm1a['rambun']; ?>" name="rambun" type="text" class="form-control" id="rambun" placeholder="Rambun Tiba - TIba Sebut Diameter Batu Rambun">
						</div>
						<div class="form-group">
							<label for="kabutdebu">Kabut Debu (haze)</label>
							<input value="<?= $agm1a['kabutdebu']; ?>" name="kabutdebu" type="text" class="form-control" id="kabutdebu" placeholder="Kabut Debu (haze)">
						</div>
						<div class="form-group">
							<label for="badaidebu">Badai Debu</label>
							<input value="<?= $agm1a['badaidebu']; ?>" name="badaidebu" type="text" class="form-control" id="badaidebu" placeholder="Badai Debu">
						</div>
						<div class="form-group">
							<label for="anginribut">Angin Ribut (Kencang)</label>
							<input value="<?= $agm1a['anginribut']; ?>" name="anginribut" type="text" class="form-control" id="anginribut" placeholder="Angin Ribut (Kencang)">
						</div> -->
						<a href="<?= base_url('Admin/vw_agm1a') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Ubah AGM1A</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
