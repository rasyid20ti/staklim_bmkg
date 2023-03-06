

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

select{
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


          
				<form action="<?= base_url() ?>admin/submit_edit/<?= $me48['id'] ?>" method="POST" enctype="multipart/form-data">
						<h4>Edit Me48</h4>
						<br>
						<table >
						<input type="hidden" name="id" value="<?= $me48['id']; ?>">
   
			<tbody style="background-color: 	rgb(132, 140, 207);, 1">
				
				
			<tr>
			<td><label >Pengenal Data Angin (iw)</label><center><input id="pengenal_angin" value="<?= $me48['pengenal_angin'] ?>" type="input" name="pengenal_angin" tabindex="2" required ></td>
			<td rowspan="4"><label >Penglihatan Mendatar (km)</label><center><input id="penglihatan_mendatar " value="<?= $me48['penglihatan_mendatar'] ?>"  name="penglihatan_mendatar"  type="input" tabindex="5" required ></td>
			<td><label >Pengenal Data Cuaca (ix)</label><center>
      <select list="opsidatacuaca" id="pengenal_cuaca" type="input" name="pengenal_cuaca" value="<?= $me48['pengenal_cuaca'] ?>"  tabindex="6" required >
      <datalist id="opsidatacuaca">
			<option value = "1">1</option>
			<option value = "2">2</option>

			</datalist>
			</td>
			<td><label >Derajat Panas (ºC)</label><center><input id="derajat_panas" type="input" name="derajat_panas" value="<?= $me48['derajat_panas'] ?>"  tabindex="10" required ></td>
			<td><label >Koreksi QFF (mb)</label><center><input id="QFF" type="input" tabindex="12" name="QFF" value="<?= $me48['QFF'] ?>"  required ></td>
			<td><label >Koreksi QFE (mb)</label><center><input id="QFE" type="input" tabindex="14" name="QFE" value="<?= $me48['QFE'] ?>"  required ></td>
			<td rowspan="2"><label >Bola Kering (ºC)</label><center><input id="bola_kering" type="input" name="bola_kering" tabindex="18" value="<?= $me48['bola_kering'] ?>" required ></td>
			<td rowspan="2"><label >Titik Embun (ºC)</label><center><input id="titik_embun" type="input" name="titik_embun" tabindex="20" value="<?= $me48['titik_embun'] ?>" required ></td>
			<td rowspan="2"><label >Maksimum (ºC)</label><center><input id="suhu_max" type="input" name="suhu_max" tabindex="22" value="<?= $me48['suhu_max'] ?>" required ></td>
			<td><label >Pengenalan data hujan (iR)</label><center>
      <select list="opsidatahujan" id="pengenal_hujan" type="input" name="pengenal_hujan" tabindex="24" value="<?= $me48['pengenal_hujan'] ?>" required >
      <datalist id="opsidatahujan">
			<option value = "1">1</option>
			<option value = "2">2</option>
			<option value = "3">3</option>
			<option value = "4">4</option>

			</datalist>
			</td>
			<td rowspan="2"><label >Awan rendah (jenis)</label><center>
        <select list="ar" id="jenis_awan_rendah" type="input" name="jenis_awan_rendah" tabindex="28" value="<?= $me48['jenis_awan_rendah'] ?>" required >
        <datalist id="ar">
			<option value ="0 - tidak ada awan C1">0 - tidak ada awan C1</option>
			<option value ="1 - cumulus humilis atau fracto cumulus atao kedua-duanya">1 - cumulus humilis atau fracto cumulus atao kedua-duanya</option>
			<option value ="2 - cumulus mediocris atau congestus, disertai atau tidak disertai fracto cumulus atau humilis atau strato cumulus, dengan tinggi dasar sama">2 - cumulus mediocris atau congestus, disertai atau tidak disertai fracto cumulus atau humilis atau strato cumulus, dengan tinggi dasar sama</option>
			<option value ="3 - cumulunimbus tanpa landasan, disertai atau tidak disertai cumulus, strato cumulus atau stratus">3 - cumulunimbus tanpa landasan, disertai atau tidak disertai cumulus, strato cumulus atau stratus</option>
			<option value ="4 - stratocumulus yang terjadi dari bentangan cumulus">4 - stratocumulus yang terjadi dari bentangan cumulus</option>
			<option value ="5 - stratocumulus yang tidak terjadi dari bentangan cumulus">5 - stratocumulus yang tidak terjadi dari bentangan cumulus</option>
			<option value ="6 - stratus">6 - stratus</option>
			<option value ="7 - fraktostratus atau fraktocumulus yang menyertai cuaca buruk, biasanya dibawah As atau Ns">7 - fraktostratus atau fraktocumulus yang menyertai cuaca buruk, biasanya dibawah As atau Ns</option>
			<option value ="8 - cumulus dan stratocumulus yang tidak terjadi dari bentangan cumulus, dengan tinggi dasar berlainan">8 - cumulus dan stratocumulus yang tidak terjadi dari bentangan cumulus, dengan tinggi dasar berlainan</option>
			<option value ="9 - cumulunimbus, biasanya berlandasan disertai atau tidak disertai cumulus stratocumulus, stratus, cumulunimbus yang tidak berlandasan">9 - cumulunimbus, biasanya berlandasan disertai atau tidak disertai cumulus stratocumulus, stratus, cumulunimbus yang tidak berlandasan</option>
			<option value ="/ - C1 tidak kelihatan disebabkan oleh kabut, badai debu, badai pasir atau lain-lain gejala">/ - C1 tidak kelihatan disebabkan oleh kabut, badai debu, badai pasir atau lain-lain gejala</option>

			</datalist>
			</td>
			<td rowspan="2"><label >Arah/sudut Elevasi (derajad)</label><center>
      <select list="derajad" id="elevasi" type="input" name="elevasi" tabindex="31" value="<?= $me48['elevasi'] ?>" required >
      <datalist id="derajad">
			<option value="0 - Stationary or No Clouds">0 - Stationary or No Clouds</option>
			<option value="1 - NE">1 - NE</option>
			<option value="2 - E">2 - E</option>
			<option value="3 - SE">3 - SE</option>
			<option value="4 - S">4 - S</option>
			<option value="5 - SW">5 - SW</option>
			<option value="6 - W">6 - W</option>
			<option value="7 - NW">7 - NW</option>
			<option value="8 - N">8 - N</option>
			<option value="9 - All Directions or Invisible">9 - All Directions or Invisible</option>


			</datalist>
			</td>

			<td rowspan="2"><label >Awan menengah (banyaknya/ jenis)</label><center>
        <select list="am" id="awanmenengahB/J" type="input "name="awanmenengahB/J" value="<?= $me48['awanmenengahB/J'] ?>"  tabindex="33" required >
        <datalist id="am">

        <option value ="0 - No CM Cloud">0 - No CM Cloud</option>
			<option value ="1 - Altostratus translucidus">1 - Altostratus translucidus</option>
			<option value ="2 - Altostratus opacus or Nimbostratus">2 - Altostratus opacus or Nimbostratus</option>
			<option value ="3 - Altocumulus translucidus at a single level">3 - Altocumulus translucidus at a single level</option>
			<option value ="4 - Patches (often lenticular) of Altocumulus translucidious, continually changing and occurring at one or more levels">4 - Patches (often lenticular) of Altocumulus translucidious, continually changing and occurring at one or more levels</option>
			<option value ="5 - Altocumulus translucidius in bands, or one or more layers of Altocumulus translucidius or opacus, progressively invading the sky; these Altocumulus clouds generally thicken as a whole">5 - Altocumulus translucidius in bands, or one or more layers of Altocumulus translucidius or opacus, progressively invading the sky; these Altocumulus clouds generally thicken as a whole</option>
			<option value ="6 - Altocumulus cumulogenitus (or cumulu-nimbogenitus)">6 - Altocumulus cumulogenitus (or cumulu-nimbogenitus)</option>
			<option value ="7 - Altocumulus translucidius or opacus in two or more layers, or Altocumulus opacus in a single layer, not progressively invading the sky, or Altocumulus with Altostratus or Nimbostratus">7 - Altocumulus translucidius or opacus in two or more layers, or Altocumulus opacus in a single layer, not progressively invading the sky, or Altocumulus with Altostratus or Nimbostratus</option>
			<option value ="8 - Altocumulus castellanus or floccus">8 - Altocumulus castellanus or floccus</option>
			<option value ="9 - Altocumulus of a chaotic sky, generally at several levels">9 - Altocumulus of a chaotic sky, generally at several levels</option>
			<option value ="/ - CM clouds invisible owing to darkness, fog, blowing dust or sand, or other similar phenomena, or because continuous layer of clouds">/ - CM clouds invisible owing to darkness, fog, blowing dust or sand, or other similar phenomena, or because continuous layer of clouds</option>



			</datalist>
			</td>


			<td><label >Arah derajad</label><center>
      <select list="adj1" id="ad1" type="input" name="ad1" value="<?= $me48['ad1'] ?>"  tabindex="35" required >
      <datalist id="adj1">
			<option value="0 - Stationary or No Clouds">0 - Stationary or No Clouds</option>
			<option value="1 - NE">1 - NE</option>
			<option value="2 - E">2 - E</option>
			<option value="3 - SE">3 - SE</option>
			<option value="4 - S">4 - S</option>
			<option value="5 - SW">5 - SW</option>
			<option value="6 - W">6 - W</option>
			<option value="7 - NW">7 - NW</option>
			<option value="8 - N">8 - N</option>
			<option value="9 - All Directions or Invisible">9 - All Directions or Invisible</option>
			</datalist>
			</td>
			<td rowspan="4"><label >Bagian langit yang tertutup awan (okta)</label><center><input id="langit_tertutup_awan" type="input" name="langit_tertutup_awan" value="<?= $me48['langit_tertutup_awan'] ?>"  tabindex="39" required ></td>
			<td rowspan="2"><label >Jenis</label><center>
        <select list="aw1" id="jenisawan1" type="input" name="jenisawan1" tabindex="40" value="<?= $me48['jenisawan1'] ?>"  required >
        <datalist id="aw1">
		
			<option value="0 - cirrus (Ci)">0 - cirrus (Ci)</option>
			<option value="1 - cirrocumulus (Cc)">1 - cirrocumulus (Cc)</option>
			<option value="2 - cirrostratus (Cs)">2 - cirrostratus (Cs)</option>
			<option value="3 - altocumulus (Ac)">3 - altocumulus (Ac)</option>
			<option value="4 - altostratus (As)">4 - altostratus (As)</option>
			<option value="5 - nimbostratus (Ns)">5 - nimbostratus (Ns)</option>
			<option value="6 - stratocumulus (Sc)">6 - stratocumulus (Sc)</option>
			<option value="7 - stratus (St)">7 - stratus (St)</option>
			<option value="8 - cumulus (Cu)">8 - cumulus (Cu)</option>
			<option value="9 - cumulonimbus (Cb)">9 - cumulonimbus (Cb)</option>
			<option value="/ - cloud not visible">/ - cloud not visible</option>

			</datalist>
			</td>
			<td rowspan="2"><label >Tingginya (m)</label><center><input id="tawan1" type="input" name="tawan1" tabindex="42" value="<?= $me48['tawan1'] ?>"  required ></td>
			<td rowspan="2"><label >Banyak nya (okta)</label><center><input id="banyakawan1" type="input" name="banyakawan1" tabindex="44" value="<?= $me48['banyakawan1'] ?>"  required ></td>
			<td rowspan="2"><label >Pengenal data alat penguapan  (iE)</label><center><input id="pengenal_alat_penguapan" name="pengenal_alat_penguapan" value="<?= $me48['pengenal_alat_penguapan'] ?>"  type="input" tabindex="46" required ></td>
			<td rowspan="2"><label >Jumlah penguapan selama 24 jam yang lalu (mm)</label><center><input id="jumlahpenguapan" name="jumlahpenguapan" type="input" value="<?= $me48['jumlahpenguapan'] ?>"  tabindex="47" required ></td>
			<td rowspan="2"><label >Keadaan Tanah</label><center>
      <select list="kt"  id="keadaan_tanah" type="input" tabindex="50" name="keadaan_tanah" value="<?= $me48['keadaan_tanah'] ?>" required >
      <datalist id="kt">
      <option value="0 - kering">0 - kering</div>
			<option value="1 - lembab">1 - lembab</div>
			<option value="2 - basah">2 - basah</div>
			<option value="">3 - tergenang</div>

			</datalist>
			</td>
			<td rowspan="2"><label >Paraf</label><center><input id="parah" type="input" name = "parah" tabindex="52" value="<?= $me48['parah'] ?>" required ></td>
			<td rowspan="4">
			
		</td>
		</tr>
		<tr>
			<td><label >Arah Angin(derajat)</label><center><input id="arah_angin "name="arah_angin" type="input" tabindex="3" value="<?= $me48['arah_angin'] ?>"  required ></td>
			<td><label >Keadaan Cuaca Waktu Pengamatan</label><center>
				<select list="opsi" id="keadaan_cuaca_waktu_pengamatanww" name="keadaan_cuaca_waktu_pengamatanww" type="input" tabindex="7" value="<?= $me48['keadaan_cuaca_waktu_pengamatanww'] ?>"  required >
			<datalist id="opsi">
			<option value="00 - Clear skies">00 - Clear skies</option>
    <option value="01 - Clouds dissolving">01 - Clouds dissolving</option>
    <option value="02 - State of sky unchanged">02 - State of sky unchanged</option>
    <option value="03 - Clouds developing">03 - Clouds developing</option>
    <option value="04 - Visibility reduced by smoke">04 - Visibility reduced by smoke</option>
    <option value="05 - Haze">05 - Haze</option>
    <option value="06 - Widespread dust in suspension not raised by wind">06 - Widespread dust in suspension not raised by wind</option>
    <option value="07 - Dust or sand raised by wind">07 - Dust or sand raised by wind</option>
    <option value="08 - Well developed dust or sand whirl">08 - Well developed dust or sand whirls</option>
    <option value="09 - Dust or sand storm within sight but not at station">09 - Dust or sand storm within sight but not at station</option>
    <option value="10 - Mist">10 - Mist</option>
    <option value="11 - Patches of shallow fog">11 - Patches of shallow fog</option>
    <option value="12 - Continuous shallow fog">12 - Continuous shallow fog</option>
    <option value="13 - Lighthing visible, no thunder heard">13 - Lighthing visible, no thunder heard</option>
    <option value="14 - Precipitation within sight but not hitting ground">14 - Precipitation within sight but not hitting ground</option>
    <option value="15 - Distant precipitation but not failing at station">15 - Distant precipitation but not failing at station</option>
    <option value="16 - Nearby precipitation but failing at station">16 - Nearby precipitation but failing at station</option>
    <option value="17 - Thunderstorm but no precipitation failing at station">17 - Thunderstorm but no precipitation failing at station</option>
    <option value="18">18 - Squalls within sight but no precipitation failing at station</option>
    <option value="18 - Squalls within sight but no precipitation failing at station">19 - Funnel clouds within sight</option>
    <option value="20 - Drizzle">20 - Drizzle</option>
    <option value="21 - Rain">21 - Rain</option>
    <option value="22 - Snow">22 - Snow</option>
    <option value="23 - Rain and snow">23 - Rain and snow</option>
    <option value="24 - Freezing rain">24 - Freezing rain</option>
    <option value="25 - Rain showers">25 - Rain showers</option>
    <option value="26 - Snow showers">26 - Snow showers</option>
    <option value="27 - Hail showers">27 - Hail showers</option>
    <option value="28 - Fog">28 - Fog</option>
    <option value="29 - Thunderstorms">29 - Thunderstorms</option>
    <option value="30 - Slight to moderate duststorm, decreasing in intensity">30 - Slight to moderate duststorm, decreasing in intensity</option>
    <option value="31 - Slight to moderate duststorm, no change">31 - Slight to moderate duststorm, no change</option>
    <option value="32 - Slight to moderate duststorm, increasing in intensity">32 - Slight to moderate duststorm, increasing in intensity</option>
    <option value="33 - Severe duststorm, decreasing in intensity">33 - Severe duststorm, decreasing in intensity</option>
    <option value="34 - Severe duststorm, no change">34 - Severe duststorm, no change</option>
    <option value="35 - Severe duststorm, increasing in intensity">35 - Severe duststorm, increasing in intensity</option>
    <option value="36 - Slight to moderate drifting snow, below eye level">36 - Slight to moderate drifting snow, below eye level</option>
    <option value="37 - Heavy drifting snow, below eye level">37 - Heavy drifting snow, below eye level</option>
    <option value="38 - Slight to moderate drifting snow, above eye level">38 - Slight to moderate drifting snow, above eye level</option>
    <option value="39 - Heavy drifting snow, above eye level">39 - Heavy drifting snow, above eye level</option>
    <option value="40 - Fog at a distance">40 - Fog at a distance</option>
    <option value="41 - Patches of Fog">41 - Patches of Fog</option>
    <option value="42 - Fog, sky visible, thinning">42 - Fog, sky visible, thinning</option>
    <option value="43 - Fog, sky not visible, thinning">43 - Fog, sky not visible, thinning</option>
    <option value="44 - Fog, sky visible, no change">44 - Fog, sky visible, no change</option>
    <option value="45 - Fog, sky not visible, no change">45 - Fog, sky not visible, no change</option>
    <option value="46 - Fog, sky visible, becoming thicker">46 - Fog, sky visible, becoming thicker</option>
    <option value="47 - Fog, sky not visible, becoming thicker">47 - Fog, sky not visible, becoming thicker</option>
    <option value="48 - Fog, depositing rime, sky visible">48 - Fog, depositing rime, sky visible</option>
    <option value="49 - Fog, depositing rime, sky not visible">49 - Fog, depositing rime, sky not visible</option>
    <option value="50 - Intermittent light drizzle">50 - Intermittent light drizzle</option>
    <option value="51 - Continuous light drizzle">51 - Continuous light drizzle</option>
    <option value="52 - Intermittent moderate drizzle">52 - Intermittent moderate drizzle</option>
    <option value="53 - Continuous moderate drizzle">53 - Continuous moderate drizzle</option>
    <option value="54 - Intermittent heavy drizzle">54 - Intermittent heavy drizzle</option>
    <option value="55 - Continuous heavy drizzle">55 - Continuous heavy drizzle</option>
    <option value="56 - Light freezing drizzle">56 - Light freezing drizzle</option>
    <option value="57 - Moderate to heavy freezing drizzle">57 - Moderate to heavy freezing drizzle</option>
    <option value="58 - Light drizzle and rain">58 - Light drizzle and rain</option>
    <option value="59 - Moderate to heavy drizzle and rain">59 - Moderate to heavy drizzle and rain</option>
    <option value="60 - Intermittent light rain">60 - Intermittent light rain</option>
    <option value="61 - Continuous light rain">61 - Continuous light rain</option>
    <option value="62 - Intermittent moderate rain">62 - Intermittent moderate rain</option>
    <option value="63 - Continuous moderate rain">63 - Continuous moderate rain</option>
    <option value="64 - Intermittent heavy rain">64 - Intermittent heavy rain</option>
    <option value="65 - Continuous heavy rain">65 - Continuous heavy rain</option>
    <option value="66 - Light freezing rain">66 - Light freezing rain</option>
    <option value="67 - Moderate to heavy freezing rain">67 - Moderate to heavy freezing rain</option>
    <option value="68 - Light rain and snow">68 - Light rain and snow</option>
    <option value="69 - Moderate to heavy rain and snow">69 - Moderate to heavy rain and snow</option>
    <option value="70 - Intermittent light snow">70 - Intermittent light snow</option>
    <option value="71 - Continuous light snow">71 - Continuous light snow</option>
    <option value="72 - Intermittent moderate snow">72 - Intermittent moderate snow</option>
    <option value="73 - Continuous moderate snow">73 - Continuous moderate snow</option>
    <option value="74 - Intermittent heavy snow">74 - Intermittent heavy snow</option>
    <option value="75 - Continuous heavy snow">75 - Continuous heavy snow</option>
    <option value="76 - Diamond dust">76 - Diamond dust</option>
    <option value="77 - Snow grains">77 - Snow grains</option>
    <option value="78 - Snow crystals">78 - Snow crystals</option>
    <option value="79 - Ice pellets">79 - Ice pellets</option>
    <option value="80 - Light rain showers">80 - Light rain showers</option>
    <option value="81 - Moderate to heavy rain showers">81 - Moderate to heavy rain showers</option>
    <option value="82 - Violent rain showers">82 - Violent rain showers</option>
    <option value="83 - Light rain and snow showers">83 - Light rain and snow showers</option>
    <option value="84 - Moderate to heavy rain and snow showers">84 - Moderate to heavy rain and snow showers</option>
    <option value="85 - Light snow showers">85 - Light snow showers</option>
    <option value="86 - Moderate to heavy snow showers">86 - Moderate to heavy snow showers</option>
    <option value="87 - Light snow/ice pellet showers">87 - Light snow/ice pellet showers</option>
    <option value="88 - Moderate to heavy snow/ice pellet showers">88 - Moderate to heavy snow/ice pellet showers</option>
    <option value="89 - light hail showers">89 - light hail showers</option>
    <option value="90 - Moderate to heavy hail showers">90 - Moderate to heavy hail showers</option>
    <option value="91 - Thunderstorm in past hour, currently only light rain">91 - Thunderstorm in past hour, currently only light rain</option>
    <option value="92 - Thunderstorm in past hour, currently only moderate to heavy rain">92 - Thunderstorm in past hour, currently only moderate to heavy rain</option>
    <option value="93 - Thunderstorm in past hour, currently only light snow or rain/snow mix">93 - Thunderstorm in past hour, currently only light snow or rain/snow mix</option>
    <option value="94 - Thunderstorm in past hour, currently only moderate to heavy snow or rain/snow mix">94 - Thunderstorm in past hour, currently only moderate to heavy snow or rain/snow mix</option>
    <option value="95 - Light to moderate thunderstorm">95 - Light to moderate thunderstorm</option>
    <option value="96 - Light to moderate thunderstorm with hail">96 - Light to moderate thunderstorm with hail</option>
    <option value="97 - Heavy thunderstorm">97 - Heavy thunderstorm</option>
    <option value="98 - Thunderstorm combined with duststorm or sandstorm at time of observation">98 - Thunderstorm combined with duststorm or sandstorm at time of observation</option>
    <option value="99 - Thunderstorm, heavy, with hail at time of observation">99 - Thunderstorm, heavy, with hail at time of observation</option>


  </datalist>
</td>

			<td><label >Tekanan dibaca (mb)</label><center><input id="tekanan_dibacamb" type="input" name="tekanan_dibacamb" value="<?= $me48['tekanan_dibacamb'] ?>"  tabindex="11" required ></td>
			<td><label >mb QFF inch</label><center><input id="mbqff" type="input" tabindex="13" name="mbqff" value="<?= $me48['mbqff'] ?>"  required ></td>
			<td><label >mb QFE inch</label><center><input id="mbqfe" type="input" tabindex="15 "name="mbqfe" value="<?= $me48['mbqfe'] ?>"  required ></td>
			<td><label >Hujan sejak takaran terakhir (mm)</label><center><input id="hujan_takaran_terakhir" name="hujan_takaran_terakhir" value="<?= $me48['hujan_takaran_terakhir'] ?>"  type="input" tabindex="25" required ></td>
			<td><label >Tingginya (m)</label><center><input id="t1" type="input "name="t1" value="<?= $me48['t1'] ?>"  tabindex="36" required ></td>
		</tr>
		<tr>
			<td rowspan="2"><label >Kecepatan Angin(Knot)</label><center><input id="kecepatan_angin" name="kecepatan_angin" value="<?= $me48['kecepatan_angin'] ?>"   type="input" tabindex="4" required ></td>
			<td><label >Keadaan Cuaca Waktu yang lalu 1</label><center>
      <select list="opsilalu1" id="keadaan_cuaca_lalu1w1" name="keadaan_cuaca_lalu1w1" value="<?= $me48['keadaan_cuaca_lalu1w1'] ?>"  type="input" tabindex="8" required >
      <datalist id="opsilalu1">
			
			<option value = "0 - Cloud covering less than half of sky">0 - Cloud covering less than half of sky</option>
			<option value = "1 - Cloud covering more than half of sky during part of period and more than half during part of period">1 - Cloud covering more than half of sky during part of period and more than half during part of period</option>
			<option value = "2 - Cloud covering more than half of sky">2 - Cloud covering more than half of sky</option>
			<option value = "3 - Sandstorm, duststorm or blowing snow">3 - Sandstorm, duststorm or blowing snow</option>
			<option value = "4 - fog, or thick haze">4 - fog, or thick haze</option>
			<option value = "5 - Drizzle">5 - Drizzle</option>
			<option value = "6 - Rain">6 - Rain</option>
			<option value = "7 - Snow or mixed rain and snow">7 - Snow or mixed rain and snow</option>
			<option value = "8 - Showers">8 - Showers</option>
			<option value = "9 - Thunderstorms">9 - Thunderstorms</option>

			</datalist>
			</td>
			<td colspan="3"><label >Perubahan Tekanan Udara</label><centerrequired ></td>
			<td rowspan="2"><label >Bola Basah (ºC)</label><center><input id="bola_basah" value="<?= $me48['bola_basah'] ?>" type="input" name="bola_basah" tabindex="19" required ></td>
			<td rowspan="2"><label >Lembab Nisbi (%)</label><center><input id="lembab_nisbi" value="<?= $me48['lembab_nisbi'] ?>" name="lembab_nisbi" type="input" tabindex="21" required ></td>
			<td rowspan="2"><label >Minimum (ºC)</label><center><input id="suhu_min" name="suhu_min" value="<?= $me48['suhu_min'] ?>" type="input" tabindex="23" required ></td>
			<td><label >Hujan sejak 6 jam yang lalu (mm)</label><center><input id="hujan_6jam_lalu" value="<?= $me48['hujan_6jam_lalu'] ?>" name="hujan_6jam_lalu" type="input" tabindex="26" required ></td>
			<td><label >Tinggi Dasar (m)</label><center><input id="tinggi_dasar_cl1" type="input" name="tinggi_dasar_cl1" value="<?= $me48['tinggi_dasar_cl1'] ?>" tabindex="29" required ></td>
			<td rowspan="2"><label >Banyaknya (okta)</label><center><input id="banyak_perawanan" name="banyak_perawanan" value="<?= $me48['banyak_perawanan'] ?>" type="input" tabindex="32" required ></td>
			<td rowspan="2"><label >Awan Tinggi (banyaknya/ jenis)</label><center><input id="awantinggiB/J" name="awantinggiB/J" value="<?= $me48['awantinggiB/J'] ?>" type="input" tabindex="34" required ></td>
			<td><label >Arah derajad</label><center>
      <select list="adj2" id="ad2" type="input" tabindex="37" name="ad2" value="<?= $me48['ad2'] ?>"required >
      <datalist id="adj2">
			<option value="0 - Stationary or No Clouds">0 - Stationary or No Clouds</option>
			<option value="1 - NE">1 - NE</option>
			<option value="2 - E">2 - E</option>
			<option value="3 - SE">3 - SE</option>
			<option value="4 - S">4 - S</option>
			<option value="5 - SW">5 - SW</option>
			<option value="6 - W">6 - W</option>
			<option value="7 - NW">7 - NW</option>
			<option value="8 - N">8 - N</option>
			<option value="9 - All Directions or Invisible">9 - All Directions or Invisible</option>
			</datalist>
			</td>

			<td rowspan="2"><label >Jenis</label><center>
      <select list="aw2" id="jenisawan2" type="input" name="jenisawan2" value="<?= $me48['jenisawan2'] ?>" tabindex="41" required >

      <datalist id="aw2">
			<option value="0 - cirrus (Ci)">0 - cirrus (Ci)</option>
			<option value="1 - cirrocumulus (Cc)">1 - cirrocumulus (Cc)</option>
			<option value="2 - cirrostratus (Cs)">2 - cirrostratus (Cs)</option>
			<option value="3 - altocumulus (Ac)">3 - altocumulus (Ac)</option>
			<option value="4 - altostratus (As)">4 - altostratus (As)</option>
			<option value="5 - nimbostratus (Ns)">5 - nimbostratus (Ns)</option>
			<option value="6 - stratocumulus (Sc)">6 - stratocumulus (Sc)</option>
			<option value="7 - stratus (St)">7 - stratus (St)</option>
			<option value="8 - cumulus (Cu)">8 - cumulus (Cu)</option>
			<option value="9 - cumulonimbus (Cb)">9 - cumulonimbus (Cb)</option>
			<option value="/ - cloud not visible">/ - cloud not visible</option>

			</datalist>
			</td>

			<td rowspan="2"><label >Tingginya (m)</label><center><input id="tawan2" type="input" name="tawan2" value="<?= $me48['tawan2'] ?>" tabindex="43" required ></td>
			<td rowspan="2"><label >Banyaknya (okta)</label><center><input id="banyakawan2" type="input" value="<?= $me48['banyakawan2'] ?>" name="banyakawan2" tabindex="45" required ></td>
			<td colspan="2"><label >Radiasi total selama 24 jam yang lalu (joule/cm²)</label><center><input id="radiasi_24_jam" value="<?= $me48['radiasi_24_jam'] ?>" name="radiasi_24_jam" type="input" tabindex="48" required ></td>
			<td rowspan="2"><label >Catatan</label><center><input id="catatan" type="input" name="catatan" tabindex="51" value="<?= $me48['catatan'] ?>" required ></td>
			<td rowspan="2"><label >Nama Terang</label><center><input id="observer" type="input" name="observer" value="<?= $me48['observer'] ?>" tabindex="53" required ></td>
		</tr>
		<tr>
			<td><label >Keadaan Cuaca Waktu yang lalu 2</label><center>
      <select list="opsilalu2" id="keadaan_cuaca_lalu2w2" value="<?= $me48['keadaan_cuaca_lalu2w2'] ?>" name="keadaan_cuaca_lalu2w2" type="input" tabindex="9" required >
      <datalist id="opsilalu2">
			<option value = "0 - Cloud covering less than half of sky">0 - Cloud covering less than half of sky</option>
			<option value = "1 - Cloud covering more than half of sky during part of period and more than half during part of period">1 - Cloud covering more than half of sky during part of period and more than half during part of period</option>
			<option value = "2 - Cloud covering more than half of sky">2 - Cloud covering more than half of sky</option>
			<option value = "3 - Sandstorm, duststorm or blowing snow">3 - Sandstorm, duststorm or blowing snow</option>
			<option value = "4 - fog, or thick haze">4 - fog, or thick haze</option>
			<option value = "5 - Drizzle">5 - Drizzle</option>
			<option value = "6 - Rain">6 - Rain</option>
			<option value = "7 - Snow or mixed rain and snow">7 - Snow or mixed rain and snow</option>
			<option value = "8 - Showers">8 - Showers</option>
			<option value = "9 - Thunderstorms">9 - Thunderstorms</option>

			</datalist>
			</td>
			<td><label ></label><center ></td>
			<td><label >3 jam (mb)</label><center><input id="perubahan_tekanan3jam" name="perubahan_tekanan3jam" value="<?= $me48['perubahan_tekanan3jam'] ?>" type="input" tabindex="16" required ></td>
			<td><label >24 jam (mb)</label><center><input id="perubahan_tekanan24jam" type="input" name="perubahan_tekanan24jam" value="<?= $me48['perubahan_tekanan24jam'] ?>" tabindex="17" required ></td>
			<td><label >Hujan sejak 24 jam yang lalu (mm)</label><center><input id="hujan_24jam_lalu" name="hujan_24jam_lalu" value="<?= $me48['hujan_24jam_lalu'] ?>" type="input" tabindex="27" required ></td>
			<td><label >Tinggi Puncak (m)</label><center><input id="tinggi_puncak_cl1" type="input" name="tinggi_puncak_cl1" value="<?= $me48['tinggi_puncak_cl1'] ?>" tabindex="30" required ></td>
			<td><label >Tingginya (m)</label><center><input id="t2" type="input" tabindex="38" name="t2"  value="<?= $me48['t2'] ?>"required ></td>
			<td colspan="2"><label >Penyinaran Matahari (jam)</label><center><input id="penyinaran_matahari" value="<?= $me48['penyinaran_matahari'] ?>" name="penyinaran_matahari" type="input" tabindex="49" required ></td>
			
			</tr>
	</tbody>
            
		</table>
		</div>
		</div>
<br>
<div class="form-group">		
        <a href="<?= base_url('admin/vwsingle48') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary ">Edit Me48</button>
	

					</form>
</div>

