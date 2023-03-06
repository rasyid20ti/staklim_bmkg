<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-8">
            <form action="<?= base_url('admin/changestatustamu/') . $bukutamu['id']; ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $bukutamu['id']; ?>">
                <div class="form-group row">
                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo date('Y-m-d'); ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Tamu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $bukutamu['nama']; ?>" readonly>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="asal" class="col-sm-2 col-form-label">Asal Tamu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="asal" name="asal" value="<?= $bukutamu['asal']; ?>" readonly></input>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="asal" class="col-sm-2 col-form-label">Keperluan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="keperluan" name="keperluan" value="<?= $bukutamu['keperluan']; ?>" readonly></input>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="asal" class="col-sm-2 col-form-label">Handphone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="hp" name="hp" value="<?= $bukutamu['hp']; ?>" readonly></input>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="asal" class="col-sm-2 col-form-label">Status Tamu</label>
                    <div class="col-sm-10">
                        <select name="status" id="status" class="form-control">
                            <option value="">Pilih Status Tamu</option>
                            <option value="Masuk" id="Masuk" name="Masuk">Masuk</option>
                            <option value="Keluar" id="Keluar" name="Keluar">Keluar</option>
                        </select>

                    </div>
                </div>
                <!-- <div class="form-group row">
                    <div class="col-sm-2">Foto</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto" name="foto">
                                    <label class="custom-file-label" for="foto">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- End of Main Content -->