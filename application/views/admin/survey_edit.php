<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">
                    Form Editing Surat Masuk
                </div>
                <div class="card-body">
                    <form action="<?= base_url() ?>admin/submitsurvey_edit/<?= $survey['id'] ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $survey['id']; ?>">
                        <div class="form-group">
                            <label for="no_surat">Link</label>
                            <input value="<?= $survey['link']; ?>" name="link" type="text" class="form-control" id="link" placeholder="Masukkan Survey Link Baru">

                        </div>

                        <a href="<?= base_url('Admin/survei') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</div>