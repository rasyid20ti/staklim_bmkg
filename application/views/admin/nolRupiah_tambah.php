<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">
                    <strong>Hapus link sebelumnya dan tambahkan link baru agar link dapat terpanggil di laman User</strong>
                </div>

                <div class="card-body">
                    <form action="<?= base_url('admin/nolRupiah_submit') ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="no_surat">Link Surat Nol Rupiah Terbaru</label>
                            <input name="link" type="text" value="<?= set_value('link'); ?>" class="form-control" id="link" placeholder="Masukkan Link Terbaru ">
                        </div>

                        <a href="<?= base_url('Admin/survei') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Simpan Surat Nol Rupiah</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</div>