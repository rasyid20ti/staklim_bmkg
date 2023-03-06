<body>
    <div class="container">
        <div class="container-fluid">
            <h1 class="h3 mb-8 text-gray-800"><?= $title; ?></h1>
            <div class="row">
                <div class="col-lg-12">
                    <form enctype="multipart/form-data" method="post" role="form">
                        <div class="card">
                            <center>
                                <!-- <h2 class="text-center mt-4 mb-4">Halaman Import Data Hujan</h2> -->
                                <div class="card-header"><b>Masukkan File CSV</b></div>
                                <div class="card-body">
                                    <input type="file" name="file" id="file" />
                                </div>
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Upload</button>
                                </div>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>