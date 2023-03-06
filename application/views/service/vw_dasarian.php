<body>
    <div class=" bg-white p-0">
        <div class=" py-1 bg-dark headhead mb-5">
            <div class="text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Info Iklim Dasarian Riau</h1>
            </div>
        </div>

        <div class="container">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="table-dark">
                    <tr>
                        <!-- <td>No</td> -->
                        <td>Tanggal Update</td>
                        <td>Judul</td>
                        <td>Detail</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($hth as $us) : ?>
                        <?php foreach ($analisis as $ana) : ?>
   
                        <tr>
                            <!-- <td> <?= $i; ?>.</td> -->
                            <td><?= $us['periode']; ?></td>
                            <!-- <td><b><?= $us['file']; ?></td> -->
                          
                                <td><b><?= $ana['title']; ?></b></td>
                                <?php endforeach; ?>
                            <!--action-->
                            <td>
                                <a href="<?=  base_url('service/hthfile/') . $us['id_periode']; ?>" class="badge badge-info">Lihat</a>
                              <!-- <a href="<?=  base_url('service/hthdetail/') . $us['id_periode']; ?>" class="badge badge-warning">Peta</a> -->
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                    
                </tbody>
                
            </table>
        </div>
        