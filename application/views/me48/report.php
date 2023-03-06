<div class="container-fluid"> 
<style type="text/css">
table , td, th {
border: 2px solid #595959;
border-collapse: collapse;
}
.table_wrapper{
display: block;
overflow-x: auto;
white-space: nowrap;
}

td, th {
padding: 3px;
width: 2px;
height: 25px;
}
tr{

}
th {
background: #f0e6cc;
}
.even {
background: #fbf8f0;
}
.odd {
background: #fefcf9;
}
input{
-moz-border-radius:10px;
-webkit-border-radius:10px;
border-radius:10px;
border: #solid 30px #000;
background-color: rgba(205, 209, 228);, 1 ;
width: 100px;
height:auto;
margin: 0;
display:block;



}
label{
display:block;
text-align: center;
color: #000000;
}



</style>
			<div class="table_wrapper">

			<div id="buttons">
			<input type="submit" class="btn btn-primary" name="prev" value="Back">
			<div class="clr"></div>
			</div>
			<div id="x-auto-624" class=" x-panel x-component" style="width: 326px;">
			<div role="presentation" class=" x-small-editor x-panel-header x-component x-hide-display" id="x-auto-623">
			<div role="presentation" id="x-auto-622" class=" x-panel-toolbar x-component x-hide-display" style="overflow: visible; float: right;">
			<table role="presentation" cellpadding="0" cellspacing="0">
			<tbody role="presentation">
			<tr role="presentation"></tr>
			</tbody>
			</table>
			</div>
			<span id="x-auto-623-label" role="heading" aria-level="1" class="x-panel-header-text">&nbsp;</span>
			</div>
			<div role="presentation" class="x-panel-bwrap">
			<div role="presentation" class="x-panel-body x-panel-body-noheader" style="width: 324px; height: 527px;">
			<div class="agm-grid x-component" tabindex="0" hidefocus="true" id="x-auto-625" style="position: relative; height: 140px; margin: 0px;">
			<div class="x-grid3" role="presentation" style="width: 1172px; height: 140px;">
			<div class="x-grid3-viewport" role="presentation">
			<div class="x-grid3-header" role="presentation">
			<div class="x-grid3-header-inner" role="presentation" style="width: 1172px;">
			<div class="x-grid3-header-offset" role="presentation">
			<div class="x-grid3-hh" role="row" style="width: 2163px;">
			<div class="table-responsive">
			<colgroup role="presentation">
			<col>
			</colgroup>
			<table class="searchable sortable" >
			<thead>
				

			</thead>
			<tbody style="background-color: 	rgb(132, 140, 207);, 1">
				
				<?php $i = 1; ?>
				<?php foreach ($all_me48 as $us) : ?>
			<tr>
			<td rowspan="4" ><label >Tanggal Observasi</label><center><input type="input" value="<?= $us['observation_date'] ?>" name="observation_date" class="form-control"  tabindex="1"readonly></td>
			<td rowspan="4"><label >Waktu</label><center><input type="input" value="<?= $us['observation_hour'] ?>" name="observation_hour" class="form-control"  tabindex="1"readonly></td>
			<td><label >Pengenal Data Angin (iw)</label><center><input id="pengenal_angin" value="<?= $us['pengenal_angin'] ?>" type="input" name="pengenal_angin" tabindex="2" readonly></td>
			<td rowspan="4"><label >Penglihatan Mendatar (km)</label><center><input id="penglihatan_mendatar " value="<?= $us['penglihatan_mendatar'] ?>"  name="penglihatan_mendatar"  type="input" tabindex="5" readonly></td>
			<td><label >Pengenal Data Cuaca (ix)</label><center><input id="pengenal_cuaca" type="input" name="pengenal_cuaca" value="<?= $us['pengenal_cuaca'] ?>"  tabindex="6" readonly></td>
			<td><label >Derajat Panas (ºC)</label><center><input id="derajat_panas" type="input" name="derajat_panas" value="<?= $us['derajat_panas'] ?>"  tabindex="10" readonly></td>
			<td><label >Koreksi QFF (mb)</label><center><input id="QFF" type="input" tabindex="12" name="QFF" value="<?= $us['QFF'] ?>"  readonly></td>
			<td><label >Koreksi QFE (mb)</label><center><input id="QFE" type="input" tabindex="14" name="QFE" value="<?= $us['QFE'] ?>"  readonly></td>
			<td rowspan="2"><label >Bola Kering (ºC)</label><center><input id="bola_kering" type="input" name="bola_kering" tabindex="18" value="<?= $us['bola_kering'] ?>" readonly></td>
			<td rowspan="2"><label >Titik Embun (ºC)</label><center><input id="titik_embun" type="input" name="titik_embun" tabindex="20" value="<?= $us['titik_embun'] ?>" readonly></td>
			<td rowspan="2"><label >Maksimum (ºC)</label><center><input id="suhu_max" type="input" name="suhu_max" tabindex="22" value="<?= $us['suhu_max'] ?>" readonly></td>
			<td><label >Pengenalan data hujan (iR)</label><center><input id="pengenal_hujan" type="input" name="pengenal_hujan" tabindex="24" value="<?= $us['pengenal_hujan'] ?>" readonly></td>
			<td rowspan="2"><label >Awan rendah (jenis)</label><center><input id="jenis_awan_rendah" type="input" name="jenis_awan_rendah" tabindex="28" value="<?= $us['jenis_awan_rendah'] ?>" readonly></td>
			<td rowspan="2"><label >Arah/sudut Elevasi (derajad)</label><center><input id="elevasi" type="input" name="elevasi" tabindex="31" value="<?= $us['elevasi'] ?>" readonly></td>
			<td rowspan="2"><label >Awan menengah (banyaknya/ jenis)</label><center><input id="awanmenengahB/J" type="input "name="awanmenengahB/J" value="<?= $us['awanmenengahB/J'] ?>"  tabindex="33" readonly></td>
			<td><label >Arah derajad</label><center><input id="ad1" type="input" name="ad1" value="<?= $us['ad1'] ?>"  tabindex="35" readonly></td>
			<td rowspan="4"><label >Bagian langit yang tertutup awan (okta)</label><center><input id="langit_tertutup_awan" type="input" name="langit_tertutup_awan" value="<?= $us['langit_tertutup_awan'] ?>"  tabindex="39" readonly></td>
			<td rowspan="2"><label >Jenis</label><center><input id="jenisawan1" type="input" name="jenisawan1" tabindex="40" value="<?= $us['jenisawan1'] ?>"  readonly></td>
			<td rowspan="2"><label >Tingginya (m)</label><center><input id="tawan1" type="input" name="tawan1" tabindex="42" value="<?= $us['tawan1'] ?>"  readonly></td>
			<td rowspan="2"><label >Banyak nya (okta)</label><center><input id="banyakawan1" type="input" name="banyakawan1" tabindex="44" value="<?= $us['banyakawan1'] ?>"  readonly></td>
			<td rowspan="2"><label >Pengenal data alat penguapan  (iE)</label><center><input id="pengenal_alat_penguapan" name="pengenal_alat_penguapan" value="<?= $us['pengenal_alat_penguapan'] ?>"  type="input" tabindex="46" readonly></td>
			<td rowspan="2"><label >Jumlah penguapan selama 24 jam yang lalu (mm)</label><center><input id="jumlahpenguapan" name="jumlahpenguapan" type="input" value="<?= $us['jumlahpenguapan'] ?>"  tabindex="47" readonly></td>
			<td rowspan="2"><label >Keadaan Tanah</label><center><input id="keadaan_tanah" type="input" tabindex="50" name="keadaan_tanah" value="<?= $us['keadaan_tanah'] ?>" readonly></td>
			<td rowspan="2"><label >Paraf</label><center><input id="parah" type="input" name = "parah" tabindex="52" value="<?= $us['parah'] ?>" readonly></td>
			<td rowspan="4">
		</td>
		</tr>
		<tr>
			<td><label >Arah Angin(derajat)</label><center><input id="arah_angin "name="arah_angin" type="input" tabindex="3" value="<?= $us['arah_angin'] ?>"  readonly></td>
			<td><label >Keadaan Cuaca Waktu Pengamatan</label><center><input id="keadaan_cuaca_waktu_pengamatanww" name="keadaan_cuaca_waktu_pengamatanww" type="input" tabindex="7" value="<?= $us['keadaan_cuaca_waktu_pengamatanww'] ?>"  readonly></td>
			<td><label >Tekanan dibaca (mb)</label><center><input id="tekanan_dibacamb" type="input" name="tekanan_dibacamb" value="<?= $us['tekanan_dibacamb'] ?>"  tabindex="11" readonly></td>
			<td><label >mb QFF inch</label><center><input id="mbqff" type="input" tabindex="13" name="mbqff" value="<?= $us['mbqff'] ?>"  readonly></td>
			<td><label >mb QFE inch</label><center><input id="mbqfe" type="input" tabindex="15 "name="mbqfe" value="<?= $us['mbqfe'] ?>"  readonly></td>
			<td><label >Hujan sejak takaran terakhir (mm)</label><center><input id="hujan_takaran_terakhir" name="hujan_takaran_terakhir" value="<?= $us['hujan_takaran_terakhir'] ?>"  type="input" tabindex="25" readonly></td>
			<td><label >Tingginya (m)</label><center><input id="t1" type="input "name="t1" value="<?= $us['t1'] ?>"  tabindex="36" readonly></td>
		</tr>
		<tr>
			<td rowspan="2"><label >Kecepatan Angin(Knot)</label><center><input id="kecepatan_angin" name="kecepatan_angin" value="<?= $us['kecepatan_angin'] ?>"   type="input" tabindex="4" readonly></td>
			<td><label >Keadaan Cuaca Waktu yang lalu 1</label><center><input id="keadaan_cuaca_lalu1w1" name="keadaan_cuaca_lalu1w1" value="<?= $us['keadaan_cuaca_lalu1w1'] ?>"  type="input" tabindex="8" readonly></td>
			<td colspan="3"><label >Perubahan Tekanan Udara</label><centerreadonly></td>
			<td rowspan="2"><label >Bola Basah (ºC)</label><center><input id="bola_basah" value="<?= $us['bola_basah'] ?>" type="input" name="bola_basah" tabindex="19" readonly></td>
			<td rowspan="2"><label >Lembab Nisbi (%)</label><center><input id="lembab_nisbi" value="<?= $us['lembab_nisbi'] ?>" name="lembab_nisbi" type="input" tabindex="21" readonly></td>
			<td rowspan="2"><label >Minimum (ºC)</label><center><input id="suhu_min" name="suhu_min" value="<?= $us['suhu_min'] ?>" type="input" tabindex="23" readonly></td>
			<td><label >Hujan sejak 6 jam yang lalu (mm)</label><center><input id="hujan_6jam_lalu" value="<?= $us['hujan_6jam_lalu'] ?>" name="hujan_6jam_lalu" type="input" tabindex="26" readonly></td>
			<td><label >Tinggi Dasar (m)</label><center><input id="tinggi_dasar_cl1" type="input" name="tinggi_dasar_cl1" value="<?= $us['tinggi_dasar_cl1'] ?>" tabindex="29" readonly></td>
			<td rowspan="2"><label >Banyaknya (okta)</label><center><input id="banyak_perawanan" name="banyak_perawanan" value="<?= $us['banyak_perawanan'] ?>" type="input" tabindex="32" readonly></td>
			<td rowspan="2"><label >Awan Tinggi (banyaknya/ jenis)</label><center><input id="awantinggiB/J" name="awantinggiB/J" value="<?= $us['awantinggiB/J'] ?>" type="input" tabindex="34" readonly></td>
			<td><label >Arah derajad</label><center><input id="ad2" type="input" tabindex="37" name="ad2" value="<?= $us['ad2'] ?>"readonly></td>
			<td rowspan="2"><label >Jenis</label><center><input id="jenisawan2" type="input" name="jenisawan2" value="<?= $us['jenisawan2'] ?>" tabindex="41" readonly></td>
			<td rowspan="2"><label >Tingginya (m)</label><center><input id="tawan2" type="input" name="tawan2" value="<?= $us['tawan2'] ?>" tabindex="43" readonly></td>
			<td rowspan="2"><label >Banyaknya (okta)</label><center><input id="banyakawan2" type="input" value="<?= $us['banyakawan2'] ?>" name="banyakawan2" tabindex="45" readonly></td>
			<td colspan="2"><label >Radiasi total selama 24 jam yang lalu (joule/cm²)</label><center><input id="radiasi_24_jam" value="<?= $us['radiasi_24_jam'] ?>" name="radiasi_24_jam" type="input" tabindex="48" readonly></td>
			<td rowspan="2"><label >Catatan</label><center><input id="catatan" type="input" name="catatan" tabindex="51" value="<?= $us['catatan'] ?>" readonly></td>
			<td rowspan="2"><label >Nama Terang</label><center><input id="observer" type="input" name="observer" value="<?= $us['observer'] ?>" tabindex="53" readonly></td>
		</tr>
		<tr>
			<td><label >Keadaan Cuaca Waktu yang lalu 2</label><center><input id="keadaan_cuaca_lalu2w2" value="<?= $us['keadaan_cuaca_lalu2w2'] ?>" name="keadaan_cuaca_lalu2w2" type="input" tabindex="9" readonly></td>
			<td><label ></label><centerreadonly></td>
			<td><label >3 jam (mb)</label><center><input id="perubahan_tekanan3jam" name="perubahan_tekanan3jam" value="<?= $us['perubahan_tekanan3jam'] ?>" type="input" tabindex="16" readonly></td>
			<td><label >24 jam (mb)</label><center><input id="perubahan_tekanan24jam" type="input" name="perubahan_tekanan24jam" value="<?= $us['perubahan_tekanan24jam'] ?>" tabindex="17" readonly></td>
			<td><label >Hujan sejak 24 jam yang lalu (mm)</label><center><input id="hujan_24jam_lalu" name="hujan_24jam_lalu" value="<?= $us['hujan_24jam_lalu'] ?>" type="input" tabindex="27" readonly></td>
			<td><label >Tinggi Puncak (m)</label><center><input id="tinggi_puncak_cl1" type="input" name="tinggi_puncak_cl1" value="<?= $us['tinggi_puncak_cl1'] ?>" tabindex="30" readonly></td>
			<td><label >Tingginya (m)</label><center><input id="t2" type="input" tabindex="38" name="t2"  value="<?= $us['t2'] ?>"readonly></td>
			<td colspan="2"><label >Penyinaran Matahari (jam)</label><center><input id="penyinaran_matahari" value="<?= $us['penyinaran_matahari'] ?>" name="penyinaran_matahari" type="input" tabindex="49" readonly></td>
			
		</tr>

					<?php $i++; ?>
				<?php endforeach; ?>
				</tr>
			</tbody>
		</table>
		</table>
		</div>
		</div>
		</div>
		</div>
		<div class="x-clear"></div>
		</div>
		</div>
		<div class="x-grid3-resize-marker">&nbsp;</div>
		<div class="x-grid3-resize-proxy">&nbsp;</div>
		</div>
		<div id="x-auto-704" class=" x-component" style="cursor: col-resize; position: absolute; visibility: hidden; background-color: white; opacity: 0; width: 5px;"></div>
		</div>
		</div>
	</div>				

	</form>
	</div>
	</div>
														
