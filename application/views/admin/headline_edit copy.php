<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <center><?= $title; ?></center>
    </h1>
    <div class="row">
        <div class="col-lg-8">
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $headline['id']; ?>">
                <div class="form-group row">
                    <label for="isi" class="col-sm-2 col-form-label">Link Foto</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="linkfoto" name="linkfoto" value="<?= $headline['linkfoto']; ?>"></input>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" name="edit" class="btn btn-primary">Update Headline</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('isi');
</script>
<!-- End of Main Content -->