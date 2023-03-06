<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<script>
  function getval() {
    var sel = document.getElementById('form');

    if (sel.value == "ME48") {
      window.location.href = "laporanme48";
    }
    if (sel.value == "FKLIM") {
      window.location.href = "vwfklim";
    }
    if (sel.value == "Penguapan") {
      window.location.href = "laporanpenguapan";
    }
    if (sel.value == "Penyinaran") {
      window.location.href = "vwpenyinaran";
    }
    if (sel.value == "Harian") {
      window.location.href = "vwharian";
    }
    if (sel.value == "me45") {
      window.location.href = "vwme45";
    }
    if (sel.value == "agm1a") {
      window.location.href = "laporan_iklim1";
    }
    if (sel.value == "agm1b") {
      window.location.href = "laporan_iklim2";
    } else if (sel.value == "Wxref") {
      window.location.href = "vwwref";
    }
  }
</script>
<div class="container-fluid">
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
<div class="col-2">
  <div class="form-group">
    <label for="exampleSelect1" class="bmd-label-floating">Form</label>
    <select id="form" name="form" class="form-control">
      <option value="">-- Pilih Form -- </option>
      <option value="ME48">ME48</option>
      <option value="FKLIM">FKLIM</option>
      <option value="Penguapan">PENGUAPAN</option>
      <option value="Penyinaran">PENYINARAN</option>
      <option value="Wxref">WXREF</option>
      <option value="Harian">DATA HARIAN</option>
      <option value="me45">ME45</option>
      <option value="agm1a">AGM1A</option>
      <option value="agm1b">AGM1B</option>
    </select>
  </div>
  <div class="form-group">
    <label for="ym">Date(Year and Month): </label>
    <input type="month" id="bdaymonth" name="bdaymonth" class="form-control">
  </div>
</div>
<div class="form-group">
  <button type="submit" onclick="getval()" class="btn btn-primary">Search</button>
</div>
</div>
</body>
</html>