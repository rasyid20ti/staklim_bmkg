<!-- Begin Page Content -->
<div class="container-fluid">
    <center>
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    </center>
    <div class="row">
        <div class="col-lg-8">
            <form action="<?= base_url('admin/submitnarasi/') . $analisa['idnarasi']; ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="idnarasi" value="<?= $analisa['idnarasi']; ?>">
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Judul Analisa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="juduldesk" name="juduldesk" value="<?= $analisa['juduldesk']; ?>">

                    </div>
                </div>
                <hr>

                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" rows="10" data-form-field="Message" id="deskripsi" name="deskripsi" value="<?= $analisa['deskripsi']; ?>" placeholder="<?= $analisa['deskripsi']; ?>"></textarea>
                    </div>
                </div>
                <hr>

                <!-- TOMBOL SUBMIT -->

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ubah Narasi Peta</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


<!-- End of Main Content -->