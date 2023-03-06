<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="<?= base_url() ?>admin/menutarif_edit/<?= $menuTarif['idTarif'] ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="idTarif" value="<?= $menuTarif['idTarif']; ?>">
                <div class="form-group">
                    <label for="nama_tarif">Nama Tarif</label>
                    <input name="nama_tarif" type="text" class="form-control" id="nama_tarif" value="<?= $menuTarif['namaTarif']; ?>"></input>
                </div>
                <div class="form-group">
                    <label for="jenis_tarif">Jenis Tarif</label><br>
                    <select class="form-control" name="jenis_tarif">
                        <option value="Informasi Meteorologi, Klimatologi dan Geofisika">Informasi Meteorologi, Klimatologi dan Geofisika</option>
                        <option value="Informasi Khusus Meteorologi, Klimatologi dan Geofisika Sesuai Permintaan">Informasi Khusus Meteorologi, Klimatologi dan Geofisika Sesuai Permintaan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="satuan">Jumlah Satuan</label>
                    <input name="satuan" type="text" class="form-control" id="satuan" placeholder="Contoh: per buku" value="<?= $menuTarif['satuan']; ?>"></input>
                </div>
                <div class="form-group">
                    <label for="tarif">Jumlah Tarif</label>
                    <input name="tarif" type="text" class="form-control" id="tarif" placeholder="Jumlah" value="<?= $menuTarif['tarif']; ?>"></input>

                </div>
                <div class="form-group">
                    <label for="waktu">Waktu</label>
                    <input name="waktu" type="text" class="form-control" id="waktu" placeholder="Waktu" value="<?= $menuTarif['waktu']; ?>"></input>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" name="edit" class="btn btn-primary">Update Menu Tarif</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>